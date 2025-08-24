<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PortfolioSetting;
use App\Models\Education;
use App\Models\ProfessionalSkill;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $stats = [
            'portfolio_exists' => PortfolioSetting::exists(),
            'education_count' => Education::count(),
            'skills_count' => ProfessionalSkill::count(),
            'social_links_count' => SocialLink::count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }

    public function preview()
    {
        // Redirect to main portfolio view
        return redirect('/');
    }
}
