<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Patient Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">
                <i class="bi bi-hospital me-2"></i>OKETCH LEVEL FIVE PATIENT'S DASHBOARD
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
    <!-- Profile Card -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            Profile Information (Patient ID: P-1023)
        </div>
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" value="John Doe">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" value="john@example.com">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" value="+123456789">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" value="New York">
                    </div>
                </div>

                <button class="btn btn-success">Update Profile</button>
            </form>
        </div>
    </div>

    <!-- Patient History -->
    <div class="card">
        <div class="card-header bg-secondary text-white">
            Medical History
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Doctor</th>
                    <th>Diagnosis</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>2026-02-01</td>
                    <td>Dr. Smith</td>
                    <td>Flu</td>
                    <td><span class="badge bg-success">Recovered</span></td>
                </tr>
                <tr>
                    <td>2026-01-10</td>
                    <td>Dr. Adams</td>
                    <td>General Checkup</td>
                    <td><span class="badge bg-warning text-dark">Follow-up</span></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


