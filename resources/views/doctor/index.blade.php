<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doctor Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body class="bg-light">
<div class="container py-5">


    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">
                <i class="bi bi-hospital me-2"></i>OKETCH LEVEL FIVE DOCTOR'S DASHBOARD
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item ms-lg-3">
                        <form method="POST" action="{{ route('logout') }}" id="logout-form" class="d-none">
                            @csrf
                        </form>

                        <button type="button"
                                class="btn btn-outline-danger rounded-pill px-4 shadow-sm fw-bold"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </button>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


{{--    <h2 class="text-center mb-4 text-primary fw-bold">OKETCH LEVEL FIVE <span class="text-dark">| DOCTOR PORTAL</span></h2>--}}

    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-primary text-white fw-bold">Assigned Patients Today</div>
        <div class="card-body p-0">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                <tr>
                    <th>Patient ID</th>
                    <th>Name</th>
                    <th>Appt. Date</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($patients as $patient)
                    <tr>
                        <td>{{ $patient->ID_number }}</td>
                        <td>{{ $patient->first_name }} {{ $patient->last_name }}</td>
                        <td>{{ $patient->updated_at->format('Y-m-d') }}</td>
                        <td>
                            <button class="btn btn-success btn-sm" data-bs-toggle="collapse" data-bs-target="#treatmentForm{{ $patient->id }}">
                                <i class="bi bi-plus-circle"></i> Add Diagnosis
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @foreach($patients as $patient)
        <div class="collapse mt-3" id="treatmentForm{{ $patient->id }}">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-dark text-white d-flex justify-content-between">
                    <span class="fw-bold">Update Record: {{ $patient->first_name }}</span>
                    <span class="text-info">Doctor: {{ Auth::user()->last_name }}</span>
                </div>
                <div class="card-body">
                    <form action="{{ route('patients.update', $patient->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row g-3 mb-3">
                            <div class="col-md-4">
                                <label class="form-label fw-bold">B.P</label>
                                <input type="text" name="bp" class="form-control" value="{{ $patient->bp }}" placeholder="120/80">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-bold">Temp (°C)</label>
                                <input type="text" name="temp" class="form-control" value="{{ $patient->temp }}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-bold">Weight (kg)</label>
                                <input type="number" name="weight" class="form-control" value="{{ $patient->weight }}">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Diagnosis</label>
                            <input type="text" name="diagnosis" class="form-control" value="{{ $patient->diagnosis }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Clinical Notes</label>
                            <textarea name="medical_notes" class="form-control" rows="4">{{ $patient->medical_notes }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold text-danger">Upload Report (PDF Only)</label>
                            <input type="file" name="attachment" class="form-control" accept=".pdf">
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary fw-bold">Sync to Central Records</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
