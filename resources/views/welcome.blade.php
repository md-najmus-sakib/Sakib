@extends('index')
@push('style')
    <title>Najmus Sakib</title>
@endpush
@section('main-content')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand ms-3" href="#">Md. Najmus Sakib</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#education">Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#professional">Professional</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about-contact">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about-contact">Contact</a>
                </li>
            </ul>
        </div>
        <i class="far fa-smile text-white me-3 d-none d-lg-block"></i> 
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
</div>
@endsection