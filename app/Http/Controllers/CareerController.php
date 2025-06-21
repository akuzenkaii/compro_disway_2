<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CareerController extends Controller
{
    public function index()
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            $applications = Application::latest()->get();
            return view('admin.career', compact('applications'));
        }

        return view('user.career');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'office' => 'required',
            'cv' => 'required|file|mimes:pdf,doc,docx',
            'cover_letter' => 'nullable|file|mimes:pdf,doc,docx',
        ]);

        $cvPath = $request->file('cv')->store('cv');
        $coverPath = $request->hasFile('cover_letter') ? $request->file('cover_letter')->store('cover') : null;

        Application::create([
            ...$validated,
            'cv' => $cvPath,
            'cover_letter' => $coverPath,
        ]);

        return redirect()->back()->with('success', 'Lamaran berhasil dikirim.');
    }
}