<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Doctor;

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
        if ($searchTerm != "none")
        {
            $patients = Patient::where('firstname', 'like', '%'.$searchTerm.'%')
                ->orwhere('lastname', 'like', '%'.$searchTerm.'%')
                ->orwhere('mobile_number', 'like', '%'.$searchTerm.'%')
                ->orwhere('address', 'like', '%'.$searchTerm.'%')
                ->orwhere('postcode', 'like', '%'.$searchTerm.'%')
                ->orderBy('lastname')
                ->get();
            return response()->json(['patients' => $patients]);
        }
        if($searchTerm = "none")
        {
            $patients = Patient::orderBy('lastname')->limit(10)->get();
            return response()->json(['patients' => $patients]);
        }
    }
    function details($patientId)
    {
        $patient = Patient::find($patientId);
        return view('chc/details-view', ['patient' => $patient]);
    }
    function register()
    {
        $doctors = Doctor::all();
        return view('chc/register-view', ['doctors' => $doctors]);
    }
    function save(Request $request)
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

        $patient = new Patient();
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
        return redirect('patients');
    }
    function deleteList()
    {
        $patients = Patient::all();
        return view('chc/delete-list-view',['patients' => $patients]);
    }
    function delete(Request $request)
    {
        Patient::destroy($request->patients);
        return redirect('index');
    }
}
