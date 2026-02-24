<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();

        switch ($user->usertype) {

//            case 'admin':
//
//                $patients = User::where('usertype', 'patient')->count();
//                $doctors  = User::where('usertype', 'doctor')->count();
//                $receptionists = User::where('usertype', 'receptionist')->count();
//
//                return view('admin.index', compact(
//                    'patients',
//                    'doctors',
//                    'receptionists'
//                ));
            case 'admin':

                // KPI counts
                $totalPatients = User::where('usertype', 'patient')->count();
                $totalDoctors  = User::where('usertype', 'doctor')->count();
                $totalReceptionists = User::where('usertype', 'receptionist')->count();

                // Table data
                $patients = User::where('usertype', 'patient')
                    ->latest()->take(10)->get();

                $doctors = User::where('usertype', 'doctor')
                    ->latest()->take(10)->get();

                $users = User::latest()->take(10)->get();   // 👈 ADD THIS

                return view('admin.index', compact(
                    'totalPatients',
                    'totalDoctors',
                    'totalReceptionists',
                    'patients',
                    'doctors',
                    'users'   // 👈 AND THIS
                ));
            case 'doctor':

                $patients = User::where('usertype', 'patient')->get();

                return view('doctor.index', compact('patients'));

            case 'patient':
                return view('patient.index');

            case 'receptionist':
                return view('receptionist.index');

            default:
                return redirect('/');
        }
    }

    public function patient_update()
    {
        //
    }

    public function addBillItem(string $bill)
    {

    }

    public function recordPayment(string $bill)
    {

    }

    public function storeBill()
    {

    }

    public function createBill()
    {

    }

    public function bills()
    {

    }

    public function storeUser()
    {

    }

    public function users()
    {

    }

    public function doctors()
    {

    }

    public function storePatient()
    {

    }

    public function createPatient()
    {

    }

    public function patients()
    {

    }

    public function dashboard()
    {

    }
}
