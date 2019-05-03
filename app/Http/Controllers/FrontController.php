<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Doctor;
use App\Appointment;
use Auth;
use Carbon\Carbon;

class FrontController extends Controller
{
    function index()
    {
        return redirect('patients');
    }
    function login()
    {
        return view('chc/login-view');
    }
    function checkLogin(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|numeric',
            'password' => 'required'
        ]);

        $user_data = array(
            'id' => $request->get('id'),
            'password' => $request->get('password')
        );

        if(Auth::attempt($user_data))
        {
            if(Auth::user()->role == "Patient")
            {
                return redirect('my-details');
            }
            elseif(Auth::user()->role == "Receptionist")
            {
                return redirect('patients');
            }
        }
        else
        {
            return redirect('login');
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect('login');
    }
    function list()
    {
        $patients = Patient::orderBy('lastname')->paginate(10);
        return view('chc/list-view', ['patients' => $patients]);
    }
    function searchNames($searchTerm)
    {
        $patients = Patient::where('firstname', 'like', '%'.$searchTerm.'%')
            ->orwhere('lastname', 'like', '%'.$searchTerm.'%')
            ->orderBy('lastname', 'desc')
            ->get();
        return response()->json(['patients' => $patients]);
    }
    function getPatientDetails($patientId)
    {
        $patient = Patient::where("patients.id", $patientId)
            ->select('patients.*', 'patients.id as patient_id','doctors.firstname as doctor_firstname', 'doctors.lastname as doctor_lastname')
            ->join('doctors', 'doctors.id', '=', 'patients.doctor_id')
            ->first();
        return $patient;
    }
    function details($patientId)
    {
        $appointments = Appointment::where('patient_id', $patientId)->paginate(10);
        $patient = $this->getPatientDetails($patientId);
        return view('chc/details-view', ['patient' => $patient], ['appointments' => $appointments]);
    }
    function register()
    {
        $doctors = Doctor::all();
        return view('chc/register-view', ['doctors' => $doctors]);
    }
    function update($patientId)
    {
        $doctors = Doctor::all();
        $patient = Patient::where("patients.id", $patientId)
            ->select('patients.*', 'patients.id as patient_id', 'doctors.firstname as doctor_firstname', 'doctors.lastname as doctor_lastname')
            ->join('doctors', 'doctors.id', '=', 'patients.doctor_id')
            ->first();
        return view('chc/update-view', ['patient' => $patient], ['doctors' => $doctors]);
    }
    function save(Request $request, $action, $patientId)
    {
        $this->validate($request, [
            'firstname' => 'required|regex:/^[a-zA-Z ]+$/|max:50',
            'lastname' => 'required|regex:/^[a-zA-Z ]+$/|max:50',
            'address' => 'required|max:300',
            'postcode' => 'required|max:9',
            'mobile' => 'required|numeric|digits:11',
            'gender' => 'required',
            'year' => 'required|numeric|digits:4|min:1900|max:'.(date('Y')),
            'day' => 'required|numeric|min:1|max:31',
            'month' => 'required|numeric|min:1|max:12',
            'doctor' => 'required|min:1',
        ]);

        if($action === "register")
        {
            $patient = new Patient();
        }
        elseif($action === "update" || $action === "patient-update")
        {
            $patient = Patient::find($patientId);
        }
        $patient->firstname = $request->firstname;
        $patient->lastname=$request->lastname;
        $patient->address=$request->address;
        $patient->postcode=$request->postcode;
        $patient->mobile_number=$request->mobile;
        $patient->gender=$request->gender;
        $year=$request->year;
        $month=$request->month;
        $day=$request->day;
        $dob=$year."-".$month."-".$day;
        $patient->dob=$dob;
        $patient->doctor_id=$request->doctor;
        $patient->save();
        if($action === "register")
        {
            return redirect('details'.'/'.$patient->id);
        }
        elseif($action === "update")
        {
            return redirect('details'.'/'.$patientId);
        }
        elseif($action === "patient-update")
        {
            return redirect('my-details');
        }
    }
    function delete($patientId)
    {
        $appointments=Appointment::where('patient_id', $patientId)->get();
        foreach($appointments as $app){
            $app->delete();
        }
        $patient = Patient::find($patientId);
        $patient->delete();
        return redirect('patients');
    }
    function appointments()
    {
        $appointments = Appointment::select('patients.*', 'appointments.*', 'patients.id as patient_id', 'appointments.id as appointment_id')
            ->where('date', Carbon::now()->format('Y-m-d'))
            ->join('patients', 'patients.id', '=', 'appointments.patient_id')
            ->orderBy('start', 'asc')
            ->paginate(10);
        return view('chc/appointments-view', ['appointments' => $appointments]);
    }
    function book()
    {
        $doctors = Doctor::all();
        return view('chc/book-view', ['doctors' => $doctors]);
    }
    function cancel($appointmentId)
    {
        $appointment = Appointment::find($appointmentId);
        $appointment ->delete();
        return redirect()->back();
    }
    function patientBookDetails($patientId)
    {
        $patient = $this->getPatientDetails($patientId);
        return response()->json(['patient' => $patient]);
    }
    function bookAppointment(Request $request)
    {
        $start = $request->start;
        $end = $request->end;

        $this->validate($request, [
            'patient_id' => 'required|numeric|exists:patients,id',
            'doctor_id' => 'required|numeric|exists:doctors,id',
            'date' => 'required|after_or_equal:today',
            'start' => 'required',
            'end' => 'required|different:start'
        ]);

        $appointment = new Appointment();
        $appointment->patient_id = $request->patient_id;
        $appointment->doctor_id = $request->doctor_id;
        $appointment->date= $request->date;
        $appointment->start = $request->start;
        $appointment->end = $request->end;
        $appointment->notes = $request->notes;
        $appointment->status = 1;
        $appointment->save();
        return redirect('appointments');
    }
    function checkAvailability(Request $request)
    {
        $patient_id = $request->patient_id;
        $doctor_id = $request->doctor_id;
        $date = $request->date;
        $start = $request->start.":00";
        $end = $request->end;

        $appointments = Appointment::where("doctor_id", $doctor_id)
            ->where('date', $date)
            ->get();

        $success = true;
        foreach($appointments as $appointment){
            if(($start >= $appointment->start) && ($start <= $appointment->end)){
                $success = false;
            }else if(($end >= $appointment->start) && ($end <= $appointment->end)){
                $success = false;
            }
        }

        return response()->json(['success' => $success]);
    }
    function myDetails()
    {
        $patientId = Auth::user()->id;
        $appointments = Appointment::where('patient_id', $patientId)->paginate(10);
        $patient = $this->getPatientDetails($patientId);
        return view('chc/details-view', ['patient' => $patient], ['appointments' => $appointments]);
    }
    function myDetailsUpdate()
    {
        $patientId = Auth::user()->id;
        $doctors = Doctor::all();
        $patient = Patient::where("patients.id", $patientId)
            ->select('patients.*', 'patients.id as patient_id', 'doctors.firstname as doctor_firstname', 'doctors.lastname as doctor_lastname')
            ->join('doctors', 'doctors.id', '=', 'patients.doctor_id')
            ->first();
        return view('chc/update-view', ['patient' => $patient], ['doctors' => $doctors]);
    }
}
