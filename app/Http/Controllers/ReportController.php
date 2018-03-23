<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $patients=Patient::all();
        return view('report',compact('patients'));
    }
}
