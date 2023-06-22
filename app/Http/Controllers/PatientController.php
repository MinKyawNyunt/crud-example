<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index(Request $request)
    {
        $patients = Patient::all();
        return view('patient.index', ['patients' => $patients]);
    }

    public function create()
    {
        return view('patient.create');
    }

    public function store(PatientRequest $request)
    {
        Patient::create($request->all());

        return redirect()->route('patient.index')
            ->with('success', 'Patient added successfully.');
    }

    // Show the form for editing the specified item.
    public function edit(Patient $patient)
    {
        return view('patient.edit', compact('patient'));
    }

    // Update the specified item in the database.
    public function update(PatientRequest $request, Patient $patient)
    {
        $patient->update($request->all());

        return redirect()->route('patient.index')
            ->with('success', 'Patient updated successfully.');
    }

    // Remove the specified item from the database.
    public function destroy(Patient $patient)
    {
        $patient->delete();

        return redirect()->route('patient.index')
            ->with('success', 'Patient deleted successfully.');
    }
}
