<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PortfolioSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioSettingController extends Controller
{
    public function index()
    {
        $settings = PortfolioSetting::first();
        return view('admin.portfolio-settings.index', compact('settings'));
    }

    public function create()
    {
        return view('admin.portfolio-settings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'location' => 'required|string|max:255',
            'bio' => 'required|string',
            'short_description' => 'nullable|string',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cv_file' => 'nullable|mimes:pdf|max:5120',
            'interests' => 'nullable|string'
        ]);

        $data = $request->except(['profile_image', 'cv_file']);

        // Handle interests
        if ($request->interests) {
            $data['interests'] = array_map('trim', explode(',', $request->interests));
        }

        // Handle file uploads
        if ($request->hasFile('profile_image')) {
            $data['profile_image'] = $request->file('profile_image')->store('profile', 'public');
        }

        if ($request->hasFile('cv_file')) {
            $data['cv_file'] = $request->file('cv_file')->store('cv', 'public');
        }

        PortfolioSetting::create($data);

        return redirect()->route('admin.portfolio-settings.index')
            ->with('success', 'Portfolio settings created successfully!');
    }

    public function edit(PortfolioSetting $portfolioSetting)
    {
        return view('admin.portfolio-settings.edit', compact('portfolioSetting'));
    }

    public function update(Request $request, PortfolioSetting $portfolioSetting)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'location' => 'required|string|max:255',
            'bio' => 'required|string',
            'short_description' => 'nullable|string',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cv_file' => 'nullable|mimes:pdf|max:5120',
            'interests' => 'nullable|string'
        ]);

        $data = $request->except(['profile_image', 'cv_file']);

        // Handle interests
        if ($request->interests) {
            $data['interests'] = array_map('trim', explode(',', $request->interests));
        }

        // Handle file uploads
        if ($request->hasFile('profile_image')) {
            if ($portfolioSetting->profile_image) {
                Storage::disk('public')->delete($portfolioSetting->profile_image);
            }
            $data['profile_image'] = $request->file('profile_image')->store('profile', 'public');
        }

        if ($request->hasFile('cv_file')) {
            if ($portfolioSetting->cv_file) {
                Storage::disk('public')->delete($portfolioSetting->cv_file);
            }
            $data['cv_file'] = $request->file('cv_file')->store('cv', 'public');
        }

        $portfolioSetting->update($data);

        return redirect()->route('admin.portfolio-settings.index')
            ->with('success', 'Portfolio settings updated successfully!');
    }
}
