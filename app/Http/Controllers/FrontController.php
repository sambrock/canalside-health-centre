<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class FrontController extends Controller
{
    function index()
    {
        $patients = Patient::all();
        return view('chc/list-view', ['patients' => $patients]);
    }
    function details($patientId)
    {
        $patient = Patient::find($patientId);
        return view('chc/details-view', ['patient' => $patient]);
    }
    function register()
    {
        return view('chc/register-view');
    }
    function save(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|max:100',
            'lastname' => 'required|max:100',
            'address' => 'required|max:300',
            'postcode' => 'required|max:9',
        ]);
        $patient = new Patient();
        $patient->firstname = $request->firstname;
        $patient->lastname=$request->lastname;
        $patient->address=$request->address;
        $patient->postcode=$request->postcode;
        $patient->mobile_number=$request->mobile;
        $patient->gender=$request->gender;
        $patient->save();
        return redirect('index');
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
