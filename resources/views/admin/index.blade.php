@extends('layouts.app')

@section('content')

    <style>
        body {
            background-color: #f4f6f9;
        }

        .sidebar {
            min-height: 100vh;
            background: #1e293b;
            color: #fff;
            position: fixed;
            width: 220px;
        }

        .sidebar h5 {
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .sidebar a {
            display: block;
            padding: 12px 20px;
            color: #cbd5e1;
            text-decoration: none;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background: #334155;
            color: #fff;
        }

        .content-wrapper {
            margin-left: 220px;
            padding: 30px;
        }

        .card-kpi {
            border: none;
            border-radius: 12px;
            transition: 0.3s;
        }

        .card-kpi:hover {
            transform: translateY(-3px);
        }

        .kpi-icon {
            font-size: 30px;
            opacity: 0.3;
        }

        .table thead {
            background-color: #f1f5f9;
        }

        .card {
            border-radius: 14px;
            border: none;
        }
    </style>

    <div class="sidebar">
        <h5 class="text-center py-4 border-bottom">Hospital Admin</h5>
        <a href="#">Dashboard</a>
        <a href="#patients">Patients</a>
        <a href="#doctors">Doctors</a>
        <a href="#users">Users</a>
    </div>

    <div class="content-wrapper">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-semibold">Dashboard Overview</h3>
            <span class="text-muted">Welcome back, {{ auth()->user()->first_name }}</span>
        </div>

        <!-- KPI Cards -->
        <div class="row g-4 mb-4">

            <div class="col-md-4">
                <div class="card card-kpi shadow-sm p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted">Total Patients</small>
                            <h3 class="fw-bold">{{ $totalPatients }}</h3>
                        </div>
                        <div class="kpi-icon text-primary">👥</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-kpi shadow-sm p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted">Total Doctors</small>
                            <h3 class="fw-bold">{{ $totalDoctors }}</h3>
                        </div>
                        <div class="kpi-icon text-success">🩺</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-kpi shadow-sm p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted">Total Receptionists</small>
                            <h3 class="fw-bold">{{ $totalReceptionists }}</h3>
                        </div>
                        <div class="kpi-icon text-warning">📋</div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Patients Section -->
        <div class="card shadow-sm mb-4" id="patients">
            <div class="card-header bg-white fw-semibold">
                Registered Patients
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($patients as $patient)
                        <tr>
                            <td>{{ $patient->id }}</td>
                            <td>{{ $patient->first_name }} {{ $patient->last_name }}</td>
                            <td>{{ $patient->email }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Doctors Section -->
        <div class="card shadow-sm mb-4" id="doctors">
            <div class="card-header bg-white fw-semibold">
                Registered Doctors
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($doctors as $doctor)
                        <tr>
                            <td>{{ $doctor->id }}</td>
                            <td>{{ $doctor->first_name }} {{ $doctor->last_name }}</td>
                            <td>{{ $doctor->email }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Users Section -->
        <div class="card shadow-sm" id="users">
            <div class="card-header bg-white fw-semibold">
                All System Users
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                            <span class="badge bg-primary">
                                {{ ucfirst($user->usertype) }}
                            </span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
