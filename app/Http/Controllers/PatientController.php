<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index', compact('patients'));
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'arrival_time' => 'required',
        'appointment_time' => 'nullable',
        'reason_for_visit' => 'required',
        'priority' => 'required',
        'status' => 'required',
    ]);

    $data = $request->except('_token');
    Patient::create($data);

    return redirect()->route('patients.index')->with('success', 'Patient added successfully.');
}

    public function show(Patient $patient)
    {
        return view('patients.show', compact('patient'));
    }

    public function edit(Patient $patient)
    {
        return view('patients.edit', compact('patient'));
    }

   public function update(Request $request, Patient $patient)
{
    $request->validate([
        'name' => 'required',
        'arrival_time' => 'required',
        'appointment_time' => 'nullable',
        'reason_for_visit' => 'required',
        'priority' => 'required',
        'status' => 'required',
    ]);

    $data = $request->except('_token');
    $patient->update($data);

    return redirect()->route('patients.index')->with('success', 'Patient updated successfully.');
}

    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patients.index')->with('success', 'Patient removed successfully.');
    }
}
