<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Doctor;
use App\Appointment;

class FrontController extends Controller
{
    function index()
    {
        return redirect('patients');
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
            ->select('patients.*', 'doctors.firstname as doctor_firstname', 'doctors.lastname as doctor_lastname')
            ->join('doctors', 'doctors.id', '=', 'patients.doctor_id')
            ->first();
        return $patient;
    }
    function details($patientId)
    {
        $patient = $this->getPatientDetails($patientId);
        return view('chc/details-view', ['patient' => $patient]);
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
        elseif($action === "update")
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
    }
    function delete($patientId)
    {
        $patient = Patient::find($patientId);
        $patient->delete();
        return redirect('patients');
    }
    function book()
    {
        $doctors = Doctor::all();
        return view('chc/book-view', ['doctors' => $doctors]);
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
        return redirect('patients');
    }
}
