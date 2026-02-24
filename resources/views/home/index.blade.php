

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OKETCH LEVEL FIVE | Compassionate Care</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-blue: #0d6efd;
            --hospital-teal: #008080;
        }
        .hero-banner {
            background: linear-gradient(rgba(13, 110, 253, 0.7), rgba(0, 128, 128, 0.7)),
            url('https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&q=80&w=1400');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0;
        }
        .emergency-bar {
            background: #dc3545;
            color: white;
            padding: 10px 0;
            font-weight: bold;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            transition: 0.3s;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<div class="emergency-bar text-center">
    <div class="container">
        <i class="bi bi-telephone-fill me-2"></i> 24/7 Emergency Hotline: <strong>0759136220</strong>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="#">
            <i class="bi bi-hospital me-2"></i>OKETCH LEVEL FIVE
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#departments">Departments</a></li>
                <li class="nav-item"><a class="nav-link" href="#doctors">Doctors</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                <li class="nav-item ms-lg-3">
                    {{--                    <a href="" class="btn btn-primary rounded-pill px-4 shadow-sm">Patient Portal</a>--}}
                </li>


                @if (Route::has('login'))
                    <nav class="flex items-center justify-end gap-4">
                        @auth
{{--                            <a--}}
{{--                                href="{{ url('/home') }}"--}}
{{--                                class="inline-block px-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] rounded-sm text-sm leading-normal"--}}
{{--                            >--}}
{{--                                Dashboard--}}
{{--                            </a>--}}
                            <x-app-layout>


                            </x-app-layout>
                        @else
                            <li class="nav-item ms-lg-3">
                                <a href="{{ route('login') }}" class="btn btn-success rounded-pill px-4 shadow-sm ">Login</a>

                            </li>
{{--                            <a--}}
{{--                                href="{{ route('login') }}"--}}
{{--                                class="inline-block px-5 py-1.5 text-[#1b1b18] border border-transparent hover:border-[#19140035] rounded-sm text-sm leading-normal"--}}
{{--                            >--}}
{{--                                Log in--}}
{{--                            </a>--}}

                            @if (Route::has('register'))
                                <li class="nav-item ms-lg-3">
                                    <a href="{{ route('register') }}" class="btn btn-primary rounded-pill px-4 shadow-sm ">Register</a>

                                </li>
{{--                                <a--}}
{{--                                    href="{{ route('register') }}"--}}
{{--                                    class="inline-block px-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] rounded-sm text-sm leading-normal">--}}
{{--                                    Register--}}
{{--                                </a>--}}
                            @endif
                        @endauth
                    </nav>
                @endif
            </ul>
        </div>
    </div>
</nav>

<header class="hero-banner text-center">
    <div class="container">
        <h1 class="display-3 fw-bold mb-3">Modern Healthcare, <br>Personalized For You</h1>
        <p class="lead mb-5 px-md-5">We are committed to providing the highest quality healthcare with advanced technology and compassionate medical professionals.</p>
        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
            <a href="#contact" class="btn btn-light btn-lg px-4 gap-3 fw-bold text-primary">Talk To Us </a>
            <a href="#services" class="btn btn-outline-light btn-lg px-4">Our Services</a>
        </div>
    </div>
</header>

<div class="container mt-n5" style="margin-top: -50px; position: relative; z-index: 5;">
    <div class="row g-4 justify-content-center">
        <div class="col-md-4">
            <div class="card border-0 shadow text-center p-4 bg-primary text-white card-hover">
                <i class="bi bi-clock-history mb-3 fs-1"></i>
                <h5>Working Hours</h5>
                <p class="small mb-0">Mon - Fri: 8am - 9pm<br>Sat - Sun: 10am - 4pm</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow text-center p-4 bg-white card-hover">
                <i class="bi bi-person-heart mb-3 fs-1 text-primary"></i>
                <h5 class="text-dark">Find a Doctor</h5>
                <p class="text-muted small">Search through our 200+ specialized healthcare providers.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow text-center p-4 bg-info text-white card-hover">
                <i class="bi bi-geo-alt mb-3 fs-1"></i>
                <h5>Locations</h5>
                <p class="small mb-0">Visit one of our 5 regional <br>centers near you.</p>
            </div>
        </div>
    </div>
</div>

<section id="departments" class="py-5 bg-light mt-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Specialties</h2>
            <div class="mx-auto bg-primary mb-3" style="height: 3px; width: 60px;"></div>
            <p class="text-muted">Comprehensive care across all major medical fields.</p>
        </div>
        <div class="row g-4">
            <div class="col-6 col-lg-3">
                <div class="card border-0 h-100 text-center p-3 shadow-sm card-hover">
                    <i class="bi bi-heart-pulse fs-2 text-danger mb-2"></i>
                    <h6>Cardiology</h6>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card border-0 h-100 text-center p-3 shadow-sm card-hover">
                    <i class="bi bi-brain fs-2 text-warning mb-2"></i>
                    <h6>Neurology</h6>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card border-0 h-100 text-center p-3 shadow-sm card-hover">
                    <i class="bi bi-capsule fs-2 text-success mb-2"></i>
                    <h6>Pediatrics</h6>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card border-0 h-100 text-center p-3 shadow-sm card-hover">
                    <i class="bi bi-eye fs-2 text-info mb-2"></i>
                    <h6>Ophthalmology</h6>
                </div>
            </div>
        </div>
    </div>
</section>

{{--<section id="appointment" class="py-5">--}}
{{--    <div class="container">--}}
{{--        <div class="row align-items-center">--}}
{{--            <div class="col-lg-6 mb-4 mb-lg-0">--}}
{{--                <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&q=80&w=800" class="img-fluid rounded-4 shadow" alt="Doctor Consultation">--}}
{{--            </div>--}}
{{--            <div class="col-lg-6 px-lg-5">--}}
{{--                <h2 class="fw-bold mb-4">Request An Appointment</h2>--}}
{{--                <form class="row g-3">--}}
{{--                    <div class="col-md-6">--}}
{{--                        <input type="text" class="form-control" placeholder="Your Name" required>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6">--}}
{{--                        <input type="email" class="form-control" placeholder="Email Address" required>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6">--}}
{{--                        <select class="form-select">--}}
{{--                            <option selected>Select Department</option>--}}
{{--                            <option>Cardiology</option>--}}
{{--                            <option>Neurology</option>--}}
{{--                            <option>General Surgery</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6">--}}
{{--                        <input type="date" class="form-control">--}}
{{--                    </div>--}}
{{--                    <div class="col-12">--}}
{{--                        <textarea class="form-control" rows="4" placeholder="How can we help you?"></textarea>--}}
{{--                    </div>--}}
{{--                    <div class="col-12">--}}
{{--                        <button type="submit" class="btn btn-primary w-100 py-3 fw-bold">Schedule Now</button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

<footer id="contact" class="bg-dark text-white pt-5 pb-3">
    <div class="container text-center text-md-start">
        <div class="row g-4">
            <div class="col-md-4">
                <h5 class="fw-bold mb-4">OKETCH LEVEL FIVE</h5>
                <p class="text-secondary small">Dedicated to providing reliable healthcare since 1995. We value your health and well-being above all else.</p>
            </div>
            <div class="col-md-4">
                <h5 class="fw-bold mb-4">Quick Links</h5>
                <ul class="list-unstyled text-secondary small">
                    <li><a href="#" class="text-decoration-none text-secondary">Emergency Services</a></li>
                    <li><a href="#" class="text-decoration-none text-secondary">Billing & Insurance</a></li>
                    <li><a href="#" class="text-decoration-none text-secondary">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5 class="fw-bold mb-4">Contact Us</h5>
                <p class="text-secondary small">
                    <i class="bi bi-geo-alt-fill me-2"></i> 123 Healthcare Way, Medical City<br>
                    <i class="bi bi-envelope-fill me-2"></i> contact@medilife.com
                </p>
            </div>
        </div>
        <hr class="mt-5 mb-4 border-secondary">
        <div class="text-center text-secondary small">
            &copy; 2026 MediLife Hospital. Designed for Excellence.
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
