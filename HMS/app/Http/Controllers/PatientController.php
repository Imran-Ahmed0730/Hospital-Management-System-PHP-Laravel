<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(){
        return view('admin.patient.add');
    }
    public function add(Request $request){
        Patient::addOrUpdate($request);
        return redirect('patient/all-patients')->with('message', 'Patient Added Successfully!!');
    }
    public function manage(){
        return view('admin.patient.manage', [
            'patients'=>Patient::all()
        ]);
    }
    public function edit($id){
        return view('admin.patient.edit', [
            'patient'=>Patient::find($id)
        ]);
    }
    public function details($id){
//        return Patient::where('id', $id)->get();
        return view('admin.patient.details', [
            'patient'=>Patient::where('id', $id)->get()->first()
        ]);
    }
    public function update(Request $request){
        Patient::addOrUpdate($request);
        return redirect('patient/all-patients')->with('message', 'Patient Info Updated Successfully!!');
    }
    public function remove(Request $request){
        Patient::remove($request->id);
        return back()->with('message', 'Patient Removed Successfully!!');
    }
}
