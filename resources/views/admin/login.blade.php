@extends('admin.layout')

@section('title', 'Admin Login')

@push('styles')
<style>
    body {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .admin-sidebar, .admin-header, .admin-content {
        display: none;
    }
    
    .login-container {
        max-width: 400px;
        width: 100%;
        margin: 0 auto;
    }
    
    .login-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        padding: 40px;
        text-align: center;
    }
    
    .login-logo {
        font-size: 3rem;
        color: #667eea;
        margin-bottom: 20px;
    }
    
    .login-title {
        color: #333;
        margin-bottom: 30px;
        font-weight: 600;
    }
    
    .form-control {
        height: 50px;
        border-radius: 10px;
        border: 1px solid #e9ecef;
        padding: 0 20px;
        font-size: 16px;
        margin-bottom: 20px;
    }
    
    .form-control:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
    }
    
    .btn-login {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        border-radius: 10px;
        padding: 15px 30px;
        font-weight: 600;
        font-size: 16px;
        width: 100%;
        color: white;
        transition: all 0.3s ease;
    }
    
    .btn-login:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        color: white;
    }
    
    .back-to-portfolio {
        margin-top: 20px;
    }
    
    .back-to-portfolio a {
        color: #667eea;
        text-decoration: none;
        font-weight: 500;
    }
    
    .back-to-portfolio a:hover {
        text-decoration: underline;
    }
</style>
@endpush

@section('content')
<div class="login-container">
    <div class="login-card">
        <div class="login-logo">
            <i class="fas fa-user-shield"></i>
        </div>
        
        <h3 class="login-title">Admin Login</h3>
        
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        
        <form action="{{ route('admin.login.post') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                       name="email" placeholder="Email Address" value="{{ old('email') }}" required>
                @error('email')
                    <div class="invalid-feedback text-start">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror" 
                       name="password" placeholder="Password" required>
                @error('password')
                    <div class="invalid-feedback text-start">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <div class="form-check text-start">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                    <label class="form-check-label" for="remember">
                        Remember me
                    </label>
                </div>
            </div>
            
            <button type="submit" class="btn btn-login">
                <i class="fas fa-sign-in-alt me-2"></i>
                Login to Admin Panel
            </button>
        </form>
        
        <div class="back-to-portfolio">
            <a href="/">
                <i class="fas fa-arrow-left me-1"></i>
                Back to Portfolio
            </a>
        </div>
        
        <!-- Credentials Help -->
        <div class="mt-4 p-3 bg-light rounded">
            <small class="text-muted">
                <strong>Default Credentials:</strong><br>
                Email: admin@admin.com<br>
                Password: password
            </small>
        </div>
    </div>
</div>
@endsection
