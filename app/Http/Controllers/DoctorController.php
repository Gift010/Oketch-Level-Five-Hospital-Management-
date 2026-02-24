<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function dashboard()
    {
//        $patients = User::where('usertype', 'patient')->get();
        $patients = Patient::all();
        return view('doctor.index', compact('patients'));
    }

    public function updatePatient(Request $request, $id)
    {
        $patient = Patient::findOrFail($id);

        $request->validate([
            'diagnosis' => 'required|string',
            'attachment' => 'nullable|mimes:pdf|max:2048'
        ]);

        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->storeAs('reports', $filename, 'public');
            $patient->attachment = $filename;
        }

        $patient->bp = $request->bp;
        $patient->temp = $request->temp;
        $patient->weight = $request->weight;
        $patient->diagnosis = $request->diagnosis;
        $patient->medical_notes = $request->medical_notes;

        $patient->save();

        return back()->with('success', 'Patient record updated.');
    }
}
