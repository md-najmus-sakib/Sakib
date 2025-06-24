<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Md. Najmus Sakib - Portfolio</title>
    

</head>
<body>
    @extends('index')
    @push('style')
        <title>Welcome Page</title>
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
                        <a class="nav-link" href="#personal-details">Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#education">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#professional">Professional</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-contact">About & Contact</a>
                    </li>
                </ul>
            </div>
            <i class="far fa-smile text-white me-3 d-none d-lg-block"></i> 
        </div>
    </nav>

    <div class="container main-content mt-5 pt-5">
        <section id="personal-details" class="row mb-5">
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="card h-100 shadow-sm text-center">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h5 class="card-title mb-3">Picture</h5>
                        <img src="https://via.placeholder.com/200x200?text=Your+Picture" alt="Your Picture" class="img-fluid rounded-circle border border-primary border-3" style="max-width: 180px;">
                        <p class="mt-3 text-muted">Upload your best photo!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title mb-3">Personal Details</h4>
                        <p><strong>Name:</strong> Md. Najmus Sakib</p>
                        <p><strong>Date of Birth:</strong> DD/MM/YYYY</p>
                        <p><strong>Location:</strong> Ashulia, Dhaka Division, Bangladesh</p>
                        <p><strong>Email:</strong> your.email@example.com</p>
                        <p><strong>Phone:</strong> +880 1xxxxxxxxx</p>
                        <p>
                            A brief introduction about yourself. Your aspirations, what you do, and what you are passionate about. 
                            This is your space to tell your story in a concise way.
                        </p>
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
                            <h5>Degree Name - University Name</h5>
                            <p class="mb-1"><em>Major: Your Major | Year: YYYY - YYYY</em></p>
                            <p class="text-muted">Relevant coursework or achievements.</p>
                        </li>
                        <li class="list-group-item">
                            <h5>High School Name - Board/Institution</h5>
                            <p class="mb-1"><em>Year: YYYY</em></p>
                            <p class="text-muted">Key subjects or extracurriculars.</p>
                        </li>
                        </ul>
                </div>
            </div>
        </section>

        <section id="professional" class="mb-5">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="card-title mb-3 text-center">Professional Life Details</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h5>Job Title - Company Name</h5>
                            <p class="mb-1"><em>Dates: Month YYYY - Present/Month YYYY</em></p>
                            <ul>
                                <li>Responsibility/Achievement 1: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                <li>Responsibility/Achievement 2: Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                <li>Responsibility/Achievement 3: Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <h5>Previous Job Title - Previous Company</h5>
                            <p class="mb-1"><em>Dates: Month YYYY - Month YYYY</em></p>
                            <ul>
                                <li>Responsibility/Achievement 1: Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</li>
                                <li>Responsibility/Achievement 2: Excepteur sint occaecat cupidatat non proident.</li>
                            </ul>
                        </li>
                        </ul>
                </div>
            </div>
        </section>

        <section id="about-contact" class="row mb-5">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title mb-3 text-center">About Me in short</h4>
                        <p>
                            This is a concise summary of who you are, your core skills, and what makes you unique. 
                            Think of it as an elevator pitch. For example: "A results-driven web developer with 5+ years of experience in building scalable web applications..."
                        </p>
                        <p>
                            Highlight your key strengths and what value you bring to a team or project.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title mb-3 text-center">Contact Details</h4>
                        <p><i class="fas fa-envelope me-2"></i> Email: <a href="mailto:your.email@example.com">your.email@example.com</a></p>
                        <p><i class="fas fa-phone me-2"></i> Phone: <a href="tel:+8801xxxxxxxxx">+880 1xxxxxxxxx</a></p>
                        <p><i class="fas fa-map-marker-alt me-2"></i> Location: Ashulia, Dhaka Division, Bangladesh</p>
                        <p class="mt-4">
                            Feel free to reach out via email or phone for any inquiries or collaborations.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div> 
    <footer class="bg-dark text-white text-center py-4 mt-5">
        <div class="container">
            <h5 class="mb-3">Social Media Links</h5>
            <div class="social-icons mb-3">
                <a href="#" target="_blank" class="text-white mx-2"><i class="fab fa-facebook-f fa-2x"></i></a>
                <a href="#" target="_blank" class="text-white mx-2"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="#" target="_blank" class="text-white mx-2"><i class="fab fa-linkedin-in fa-2x"></i></a>
                <a href="#" target="_blank" class="text-white mx-2"><i class="fab fa-github fa-2x"></i></a>
                </div>
            <p class="mb-0">&copy; Copyright <span id="current-year"></span></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    @endsection
</body>
</html>