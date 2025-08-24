@extends('admin.layout')

@section('title', 'Portfolio Settings')
@section('page-title', 'Portfolio Settings')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="admin-card">
            <div class="card-header bg-transparent border-0 d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">
                    <i class="fas fa-user-cog text-primary me-2"></i>
                    Portfolio Settings
                </h5>
                
                @if(!$settings || !$settings->id)
                    <a href="{{ route('admin.portfolio-settings.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i>
                        Setup Portfolio
                    </a>
                @else
                    <a href="{{ route('admin.portfolio-settings.edit', $settings->id) }}" class="btn btn-primary">
                        <i class="fas fa-edit me-2"></i>
                        Edit Settings
                    </a>
                @endif
            </div>
            
            <div class="card-body">
                @if($settings && $settings->id)
                    <!-- Display Current Settings -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center mb-4">
                                @if($settings->profile_image)
                                    <img src="{{ asset('storage/' . $settings->profile_image) }}" 
                                         alt="Profile" 
                                         class="img-fluid rounded-circle border border-3 border-primary"
                                         style="width: 200px; height: 200px; object-fit: cover;">
                                @else
                                    <div class="bg-light rounded-circle d-flex align-items-center justify-content-center border border-3 border-primary mx-auto" 
                                         style="width: 200px; height: 200px;">
                                        <i class="fas fa-user fa-5x text-muted"></i>
                                    </div>
                                @endif
                                
                                @if($settings->cv_file)
                                    <div class="mt-3">
                                        <a href="{{ asset('storage/' . $settings->cv_file) }}" 
                                           class="btn btn-outline-primary btn-sm" 
                                           target="_blank">
                                            <i class="fas fa-download me-1"></i>
                                            Download CV
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                        
                        <div class="col-md-8">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td><strong>Name:</strong></td>
                                        <td>{{ $settings->name }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Email:</strong></td>
                                        <td>{{ $settings->email }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Phone:</strong></td>
                                        <td>{{ $settings->phone }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Location:</strong></td>
                                        <td>{{ $settings->location }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Short Description:</strong></td>
                                        <td>{{ $settings->short_description ?? 'Not set' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            
                            <div class="mt-4">
                                <h6><strong>Bio:</strong></h6>
                                <p class="text-muted">{{ $settings->bio }}</p>
                            </div>
                            
                            @if($settings->interests)
                                <div class="mt-3">
                                    <h6><strong>Interests:</strong></h6>
                                    <div>
                                        @foreach($settings->interests as $interest)
                                            <span class="badge bg-primary me-1">{{ $interest }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                @else
                    <!-- No Settings Yet -->
                    <div class="text-center py-5">
                        <i class="fas fa-user-cog fa-4x text-muted mb-3"></i>
                        <h4>No Portfolio Settings Found</h4>
                        <p class="text-muted mb-4">Set up your basic portfolio information to get started.</p>
                        
                        <a href="{{ route('admin.portfolio-settings.create') }}" class="btn btn-primary btn-lg">
                            <i class="fas fa-plus me-2"></i>
                            Setup Portfolio Settings
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@if($settings && $settings->id)
<div class="row mt-4">
    <div class="col-12">
        <div class="admin-card">
            <div class="card-header bg-transparent border-0">
                <h5 class="card-title mb-0">
                    <i class="fas fa-chart-bar text-success me-2"></i>
                    Portfolio Statistics
                </h5>
            </div>
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-md-3">
                        <div class="border rounded p-3">
                            <i class="fas fa-clock fa-2x text-primary mb-2"></i>
                            <h5>Created</h5>
                            <small class="text-muted">{{ $settings->created_at->format('M d, Y') }}</small>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="border rounded p-3">
                            <i class="fas fa-edit fa-2x text-warning mb-2"></i>
                            <h5>Last Updated</h5>
                            <small class="text-muted">{{ $settings->updated_at->format('M d, Y') }}</small>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="border rounded p-3">
                            <i class="fas fa-image fa-2x text-info mb-2"></i>
                            <h5>Profile Image</h5>
                            <small class="text-muted">{{ $settings->profile_image ? 'Uploaded' : 'Not Set' }}</small>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="border rounded p-3">
                            <i class="fas fa-file-pdf fa-2x text-danger mb-2"></i>
                            <h5>CV File</h5>
                            <small class="text-muted">{{ $settings->cv_file ? 'Uploaded' : 'Not Set' }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
