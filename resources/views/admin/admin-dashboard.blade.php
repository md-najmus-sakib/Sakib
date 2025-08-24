@extends('admin.layout')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="row">
    <!-- Stats Cards -->
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="admin-card">
            <div class="stats-card">
                <div class="stats-number">{{ $stats['portfolio_exists'] ? '1' : '0' }}</div>
                <div class="stats-label">Portfolio Setup</div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="admin-card">
            <div class="stats-card">
                <div class="stats-number">{{ $stats['education_count'] }}</div>
                <div class="stats-label">Education Records</div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="admin-card">
            <div class="stats-card">
                <div class="stats-number">{{ $stats['skills_count'] }}</div>
                <div class="stats-label">Professional Skills</div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="admin-card">
            <div class="stats-card">
                <div class="stats-number">{{ $stats['social_links_count'] }}</div>
                <div class="stats-label">Social Links</div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Quick Actions -->
    <div class="col-lg-8">
        <div class="admin-card">
            <div class="card-header bg-transparent border-0 pb-0">
                <h5 class="card-title mb-0">
                    <i class="fas fa-bolt text-primary me-2"></i>
                    Quick Actions
                </h5>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <a href="{{ route('admin.portfolio-settings.index') }}" class="btn btn-outline-primary w-100 p-3">
                            <i class="fas fa-user-cog fa-2x mb-2 d-block"></i>
                            <strong>Portfolio Settings</strong>
                            <small class="d-block text-muted">Manage personal info & profile</small>
                        </a>
                    </div>
                    
                    <div class="col-md-6">
                        <a href="{{ route('admin.education.index') }}" class="btn btn-outline-success w-100 p-3">
                            <i class="fas fa-graduation-cap fa-2x mb-2 d-block"></i>
                            <strong>Education</strong>
                            <small class="d-block text-muted">Add & manage education records</small>
                        </a>
                    </div>
                    
                    <div class="col-md-6">
                        <a href="{{ route('admin.professional-skills.index') }}" class="btn btn-outline-warning w-100 p-3">
                            <i class="fas fa-tools fa-2x mb-2 d-block"></i>
                            <strong>Professional Skills</strong>
                            <small class="d-block text-muted">Showcase your expertise</small>
                        </a>
                    </div>
                    
                    <div class="col-md-6">
                        <a href="{{ route('admin.social-links.index') }}" class="btn btn-outline-info w-100 p-3">
                            <i class="fas fa-share-alt fa-2x mb-2 d-block"></i>
                            <strong>Social Links</strong>
                            <small class="d-block text-muted">Connect your social profiles</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- System Status -->
    <div class="col-lg-4">
        <div class="admin-card">
            <div class="card-header bg-transparent border-0 pb-0">
                <h5 class="card-title mb-0">
                    <i class="fas fa-chart-line text-success me-2"></i>
                    System Status
                </h5>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span>Portfolio Setup</span>
                    @if($stats['portfolio_exists'])
                        <span class="badge bg-success">Complete</span>
                    @else
                        <span class="badge bg-warning">Pending</span>
                    @endif
                </div>
                
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span>Education Records</span>
                    @if($stats['education_count'] > 0)
                        <span class="badge bg-success">{{ $stats['education_count'] }} Added</span>
                    @else
                        <span class="badge bg-secondary">None</span>
                    @endif
                </div>
                
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span>Skills Showcase</span>
                    @if($stats['skills_count'] > 0)
                        <span class="badge bg-success">{{ $stats['skills_count'] }} Skills</span>
                    @else
                        <span class="badge bg-secondary">None</span>
                    @endif
                </div>
                
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span>Social Presence</span>
                    @if($stats['social_links_count'] > 0)
                        <span class="badge bg-success">{{ $stats['social_links_count'] }} Links</span>
                    @else
                        <span class="badge bg-secondary">None</span>
                    @endif
                </div>
                
                <hr>
                
                <div class="text-center">
                    <a href="{{ route('admin.preview') }}" class="btn btn-primary" target="_blank">
                        <i class="fas fa-eye me-2"></i>
                        Preview Portfolio
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Getting Started -->
@if(!$stats['portfolio_exists'])
<div class="row mt-4">
    <div class="col-12">
        <div class="admin-card">
            <div class="card-body text-center py-5">
                <i class="fas fa-rocket fa-3x text-primary mb-3"></i>
                <h4>Welcome to Your Portfolio Admin Panel!</h4>
                <p class="text-muted mb-4">Get started by setting up your basic portfolio information.</p>
                
                <a href="{{ route('admin.portfolio-settings.create') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-plus me-2"></i>
                    Setup Portfolio Settings
                </a>
            </div>
        </div>
    </div>
</div>
@endif
@endsection

@push('scripts')
<script>
    setInterval(function() {
    }, 30000);
</script>
@endpush
