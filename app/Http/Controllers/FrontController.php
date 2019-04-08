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
}
