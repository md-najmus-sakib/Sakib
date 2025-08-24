<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::ordered()->get();
        return view('admin.education.index', compact('educations'));
    }

    public function create()
    {
        return view('admin.education.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'institution_name' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'field_of_study' => 'nullable|string|max:255',
            'start_year' => 'required|string|max:4',
            'end_year' => 'nullable|string|max:4',
            'status' => 'required|in:completed,current,pending',
            'description' => 'nullable|string',
            'order' => 'nullable|integer|min:0'
        ]);

        Education::create($request->all());

        return redirect()->route('admin.education.index')
            ->with('success', 'Education record created successfully!');
    }

    public function show(Education $education)
    {
        return view('admin.education.show', compact('education'));
    }

    public function edit(Education $education)
    {
        return view('admin.education.edit', compact('education'));
    }

    public function update(Request $request, Education $education)
    {
        $request->validate([
            'institution_name' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'field_of_study' => 'nullable|string|max:255',
            'start_year' => 'required|string|max:4',
            'end_year' => 'nullable|string|max:4',
            'status' => 'required|in:completed,current,pending',
            'description' => 'nullable|string',
            'order' => 'nullable|integer|min:0'
        ]);

        $education->update($request->all());

        return redirect()->route('admin.education.index')
            ->with('success', 'Education record updated successfully!');
    }

    public function destroy(Education $education)
    {
        $education->delete();

        return redirect()->route('admin.education.index')
            ->with('success', 'Education record deleted successfully!');
    }
}
