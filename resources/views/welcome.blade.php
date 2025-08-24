@extends('index')
@push('style')
    <title>Md. Najmus Sakib - Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
@endpush
@section('main-content')

<!-- Enhanced Interactive Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNavbar">
    <div class="container-fluid">
        <!-- Animated Hamburger Menu -->
        <button class="navbar-toggler hamburger-menu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </button>
        
        <!-- Enhanced Brand with Typing Effect -->
        <a class="navbar-brand ms-3 brand-animated" href="#personal-section">
            <span class="brand-text" data-text="Md. Najmus Sakib">Md. Najmus Sakib</span>
            <div class="brand-underline"></div>
        </a>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link nav-link-enhanced active" href="#personal-section" data-section="personal-section">
                        <span class="nav-icon">🏠</span>
                        <span class="nav-text">Home</span>
                        <div class="nav-hover-effect"></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-enhanced" href="#education" data-section="education">
                        <span class="nav-icon">🎓</span>
                        <span class="nav-text">Education</span>
                        <div class="nav-hover-effect"></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-enhanced" href="#professional" data-section="professional">
                        <span class="nav-icon">💼</span>
                        <span class="nav-text">Professional</span>
                        <div class="nav-hover-effect"></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-enhanced" href="#about" data-section="about">
                        <span class="nav-icon">👨‍💻</span>
                        <span class="nav-text">About Me</span>
                        <div class="nav-hover-effect"></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-enhanced me-3" href="#contact" data-section="contact">
                        <span class="nav-icon">📧</span>
                        <span class="nav-text">Contact</span>
                        <div class="nav-hover-effect"></div>
                    </a>
                </li>
            </ul>
            
            <!-- Interactive Elements -->
            <div class="navbar-extras d-flex align-items-center">
                <!-- Theme Toggle -->
                <button id="theme-toggle" class="btn btn-outline-light btn-sm me-2 theme-btn" title="Toggle Theme">
                    <i class="fas fa-moon theme-icon"></i>
                </button>
                
                <!-- Animated Smile Icon -->
                <div class="smile-container">
                    <i id="smile-icon" class="far fa-smile smile-icon" title="Click for a surprise! 😊"></i>
                    <div class="smile-ripple"></div>
                </div>
                
                <!-- Scroll Progress Bar -->
                <div class="scroll-progress-container">
                    <div class="scroll-progress-bar" id="scrollProgressBar"></div>
                </div>
            </div>
        </div>
    </div>
</nav>

<div class="container main-content mt-5 pt-5">
    
    <!-- Header Section: Picture + Personal Details -->
    <section id="personal-section" class="mb-4">
        <div class="row">
            <!-- Picture Section -->
            <div class="col-md-3 mb-3">
                <div class="card h-100 shadow-sm text-center bg-light interactive-card">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h5 class="card-title mb-3">Picture</h5>
                        <img src="{{asset('assets/images/profile.jpg')}}" alt="Sakib" class="img-fluid rounded-circle border border-primary border-3 profile-image" style="max-width: 150px; height: 150px; object-fit: cover;">
                        <p class="mt-3 text-muted">Hi! 😊</p>
                    </div>
                </div>
            </div>
            
            <!-- Personal Details Section -->
            <div class="col-md-9 mb-3">
                <div class="card h-100 shadow-sm bg-light interactive-card">
                    <div class="card-body">
                        <h4 class="card-title mb-3">Personal Details</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Name:</strong> Md. Najmus Sakib</p>
                                <p><strong>Location:</strong> Uttara, Dhaka, Bangladesh</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Email:</strong> sakib15@diu.edu.bd</p>
                                <p><strong>Phone:</strong> 01728557495</p>
                            </div>
                        </div>
                        <p class="mt-2">Hi! I'm a student of dept. of CSE at Daffodil International University</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Details Section -->
    <section id="education" class="mb-4">
        <div class="card shadow-sm interactive-card">
            <div class="card-body">
                <h4 class="card-title mb-3">Education Details</h4>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="border rounded p-3 h-100">
                            <h5 class="text-primary">Daffodil International University</h5>
                            <p class="mb-1"><strong>Degree:</strong> B.Sc. in Computer Science & Engineering</p>
                            <p class="mb-1"><strong>Year:</strong> 2022 - 2025</p>
                            <p class="mb-0"><strong>Status:</strong> <span class="badge bg-success">Current</span></p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="border rounded p-3 h-100">
                            <h5 class="text-primary">Nawabganj Govt. College</h5>
                            <p class="mb-1"><strong>Qualification:</strong> Higher Secondary Certificate</p>
                            <p class="mb-1"><strong>Passing Year:</strong> 2020</p>
                            <p class="mb-0"><strong>Group:</strong> Science</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Professional Life Details Section -->
    <section id="professional" class="mb-4">
        <div class="card shadow-sm interactive-card">
            <div class="card-body">
                <h4 class="card-title mb-3">Professional Life Details</h4>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="text-center p-3 border rounded">
                            <i class="fas fa-code fa-3x text-primary mb-2"></i>
                            <h6>Web Development</h6>
                            <p class="small text-muted">PHP, Laravel, JavaScript</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="text-center p-3 border rounded">
                            <i class="fas fa-database fa-3x text-success mb-2"></i>
                            <h6>Database Management</h6>
                            <p class="small text-muted">MySQL, Data Modeling</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="text-center p-3 border rounded">
                            <i class="fas fa-laptop-code fa-3x text-warning mb-2"></i>
                            <h6>Frontend Design</h6>
                            <p class="small text-muted">Bootstrap, CSS, Responsive</p>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <h6>Current Focus:</h6>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-success me-2"></i>Learning advanced Laravel features</li>
                        <li><i class="fas fa-check text-success me-2"></i>Building portfolio projects</li>
                        <li><i class="fas fa-check text-success me-2"></i>Preparing for software development career</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- About Me Section -->
    <section id="about" class="mb-4">
        <div class="card shadow-sm interactive-card">
            <div class="card-body">
                <h4 class="card-title mb-3">About Me in Short</h4>
                <div class="row">
                    <div class="col-md-8">
                        <p>I am a passionate Computer Science student at Daffodil International University with a strong interest in web development and software engineering.</p>
                        <p>My goal is to become a skilled full-stack developer and contribute to innovative technology solutions.</p>
                        <div class="mt-3">
                            <h6>Interests:</h6>
                            <span class="badge bg-primary me-1">Web Development</span>
                            <span class="badge bg-success me-1">Problem Solving</span>
                            <span class="badge bg-info me-1">Technology</span>
                            <span class="badge bg-warning">Learning</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <i class="fas fa-user-graduate fa-4x text-primary mb-3"></i>
                            <h6>Future Goals</h6>
                            <ul class="list-unstyled small">
                                <li>✨ Full-Stack Developer</li>
                                <li>🚀 Software Engineer</li>
                                <li>💡 Tech Innovator</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Details Section -->
    <section id="contact" class="mb-4">
        <div class="card shadow-sm interactive-card">
            <div class="card-body">
                <h4 class="card-title mb-3">Contact Details</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-info">
                            <p><i class="fas fa-envelope text-primary me-2"></i><strong>Email:</strong><br>sakib15@diu.edu.bd</p>
                            <p><i class="fas fa-phone text-success me-2"></i><strong>Phone:</strong><br>01728557495</p>
                            <p><i class="fas fa-map-marker-alt text-danger me-2"></i><strong>Address:</strong><br>Uttara, Dhaka, Bangladesh</p>
                            <p><i class="fas fa-university text-info me-2"></i><strong>Institution:</strong><br>Daffodil International University</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center">
                            <h6 class="mb-3">Get In Touch</h6>
                            <div class="d-flex flex-column gap-2">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fas fa-download me-1"></i>Download CV
                                </button>
                                <button class="btn btn-outline-primary btn-sm">
                                    <i class="fas fa-envelope me-1"></i>Send Email
                                </button>
                                <button class="btn btn-outline-success btn-sm">
                                    <i class="fas fa-phone me-1"></i>Call Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- Social Media Links Footer -->
<footer class="bg-dark text-white text-center py-4 mt-4">
    <div class="container">
        <h5 class="mb-3">Social Media Links</h5>
        <div class="d-flex justify-content-center footer-icon mb-3">
            <a href="https://www.facebook.com/" target="_blank" class="text-white me-4">
                <i class="fab fa-facebook fa-2x" title="Facebook"></i>
            </a>
            <a href="mailto:sakib15@diu.edu.bd" target="_blank" class="text-white me-4">
                <i class="fas fa-envelope fa-2x" title="Email"></i>
            </a>
            <a href="https://www.linkedin.com/" target="_blank" class="text-white me-4">
                <i class="fab fa-linkedin fa-2x" title="LinkedIn"></i>
            </a>
            <a href="https://github.com/" target="_blank" class="text-white">
                <i class="fab fa-github fa-2x" title="GitHub"></i>
            </a>
        </div>
        <p class="mb-0">&copy; Copyright <span id="current-year">2025</span> - Md. Najmus Sakib</p>
    </div>
</footer>

@endsection