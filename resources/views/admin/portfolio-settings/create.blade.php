@extends('admin.layout')

@section('title', 'Setup Portfolio Settings')
@section('page-title', 'Setup Portfolio Settings')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="admin-card">
            <div class="card-header bg-transparent border-0">
                <h5 class="card-title mb-0">
                    <i class="fas fa-plus-circle text-primary me-2"></i>
                    Setup Portfolio Settings
                </h5>
            </div>
            
            <div class="card-body">
                <form action="{{ route('admin.portfolio-settings.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="row">
                        <!-- Basic Information -->
                        <div class="col-md-6">
                            <h6 class="text-primary mb-3">
                                <i class="fas fa-user me-2"></i>
                                Basic Information
                            </h6>
                            
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name *</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                       id="name" name="name" value="{{ old('name', 'Md. Najmus Sakib') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                       id="email" name="email" value="{{ old('email', 'sakib15@diu.edu.bd') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number *</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" 
                                       id="phone" name="phone" value="{{ old('phone', '01728557495') }}" required>
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="location" class="form-label">Location *</label>
                                <input type="text" class="form-control @error('location') is-invalid @enderror" 
                                       id="location" name="location" value="{{ old('location', 'Uttara, Dhaka, Bangladesh') }}" required>
                                @error('location')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="short_description" class="form-label">Short Description</label>
                                <input type="text" class="form-control @error('short_description') is-invalid @enderror" 
                                       id="short_description" name="short_description" 
                                       value="{{ old('short_description', 'Hi! I\'m a student of dept. of CSE at Daffodil International University') }}"
                                       placeholder="Brief one-liner about yourself">
                                @error('short_description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- Files & Additional Info -->
                        <div class="col-md-6">
                            <h6 class="text-primary mb-3">
                                <i class="fas fa-file-upload me-2"></i>
                                Files & Additional Info
                            </h6>
                            
                            <div class="mb-3">
                                <label for="profile_image" class="form-label">Profile Image</label>
                                <input type="file" class="form-control @error('profile_image') is-invalid @enderror" 
                                       id="profile_image" name="profile_image" accept="image/*">
                                <div class="form-text">Upload a profile photo (JPEG, PNG, JPG, GIF - Max 2MB)</div>
                                @error('profile_image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="cv_file" class="form-label">CV/Resume File</label>
                                <input type="file" class="form-control @error('cv_file') is-invalid @enderror" 
                                       id="cv_file" name="cv_file" accept=".pdf">
                                <div class="form-text">Upload your CV/Resume (PDF only - Max 5MB)</div>
                                @error('cv_file')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="interests" class="form-label">Interests</label>
                                <input type="text" class="form-control @error('interests') is-invalid @enderror" 
                                       id="interests" name="interests" 
                                       value="{{ old('interests', 'Web Development, Problem Solving, Technology, Learning') }}"
                                       placeholder="Comma-separated interests">
                                <div class="form-text">Enter your interests separated by commas</div>
                                @error('interests')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <!-- Bio Section -->
                    <div class="row mt-4">
                        <div class="col-12">
                            <h6 class="text-primary mb-3">
                                <i class="fas fa-align-left me-2"></i>
                                About Me Bio
                            </h6>
                            
                            <div class="mb-3">
                                <label for="bio" class="form-label">Bio/About Me *</label>
                                <textarea class="form-control @error('bio') is-invalid @enderror" 
                                          id="bio" name="bio" rows="6" required>{{ old('bio', 'I am a passionate Computer Science student at Daffodil International University with a strong interest in web development and software engineering. My goal is to become a skilled full-stack developer and contribute to innovative technology solutions.') }}</textarea>
                                <div class="form-text">Write a detailed description about yourself, your goals, and aspirations</div>
                                @error('bio')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <!-- Form Actions -->
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('admin.portfolio-settings.index') }}" class="btn btn-outline-secondary">
                                    <i class="fas fa-arrow-left me-2"></i>
                                    Back to Settings
                                </a>
                                
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-2"></i>
                                    Save Portfolio Settings
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    // Preview profile image
    $('#profile_image').change(function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                // You could add image preview here
                console.log('Image selected:', file.name);
            }
            reader.readAsDataURL(file);
        }
    });
    
    // Format interests input
    $('#interests').on('blur', function() {
        let interests = $(this).val().split(',').map(item => item.trim()).filter(item => item.length > 0);
        $(this).val(interests.join(', '));
    });
});
</script>
@endpush
