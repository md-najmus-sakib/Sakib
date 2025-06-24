@extends('index')
@push('style')
    <title>Najmus Sakib</title>
@endpush
@section('main-content')
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand ms-3" href="#">Md. Najmus Sakib</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="">Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Professional</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="">Contact</a>
                </li>
            </ul>
        </div>
        <i id="smile-icon" class="far fa-smile text-white me-3 d-none d-lg-block"></i> 
    </div>
</nav>

<div class="container main-content mt-5 pt-5">
    <section id="personal-details" class="row mb-5">
        <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100 shadow-sm text-center bg-light">
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <h5 class="card-title mb-3">Picture</h5>
                    <img src="{{asset('assets/images/profile.jpg')}}" alt="Sakib" class="img-fluid rounded-circle border border-primary border-3" style="max-width: 180px;">
                    <p class="mt-3 text-muted">Hi!</p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card h-100 shadow-sm bg-light">
                <div class="card-body ms-4">
                    <h4 class="card-title mt-4 mb-3">Personal Details</h4>
                    <p><strong>Name:</strong> Md. Najmus Sakib</p>
                    <p><strong>Location:</strong>Uttara, Dhaka, Bangladesh</p>
                    <p><strong>Email:</strong>sakib15@diu.edu.bd</p>
                    <p><strong>Phone:</strong>01728557495</p>
                    <p>Hi! I'm a student of dept. of CSE at Daffodil Inetrnational University</p>
                </div>
            </div>
        </div>
    </section>
    <section id="education" class="mb-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h4 class="card-title mb-3 text-center">Education Details</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h5>Daffodil International University</h5>
                        <p class="mb-1"><em>B.Sc. in CSE</em></p>
                        <p class="mb-1"><em>Year: 2022 - 2025</em></p>
                    </li>
                    <li class="list-group-item">
                        <h5>Nawabganj Govt. College</h5>
                        <p class="mb-1"><em>Passing Year: 2020</em></p>
                        <p class="mb-1"><em>Group: Science</em></p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</div>

<footer class="bg-dark text-white text-center py-4 mt-5">
    <div class="container">
        <h5 class="mb-3">Social Media Links</h5>
        <div class="d-flex justify-content-center footer-icon">
                <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-square-facebook ms-3 me-3"></i></a>
                <a href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin me-3"></i></a>
                <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-square-twitter me-3"></i></a>
        </div>
        <p class="mb-0">&copy; Copyright <span id="current-year"></span></p>
    </div>
</footer>
@endsection