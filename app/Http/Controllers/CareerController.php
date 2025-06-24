<?php

namespace App\Http\Controllers;

use App\Models\CareerApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CareerController extends Controller
{
    public function index()
    {
        if (auth()->check() && auth()->user()->role === 'admin') {
            $applications = CareerApplication::latest()->get();
            return view('admin.career', compact('applications')); // → admin/career.blade.php
        }

        return view('user.career'); // → user/career.blade.php
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'office' => 'required|string',
            'cv' => 'required|file|mimes:pdf|max:2048',
            'cover_letter' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        $cvPath = $request->file('cv')->store('career/cv', 'public');

        $coverLetterPath = $request->hasFile('cover_letter')
            ? $request->file('cover_letter')->store('career/cover_letter', 'public')
            : null;


        CareerApplication::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'office' => $validated['office'],
            'cv' => $cvPath,
            'cover_letter' => $coverLetterPath,
            'status' => 'pending',
        ]);

        return redirect()->back()->with('success', 'Lamaran berhasil dikirim.');
    }

    public function accept($id)
    {
        CareerApplication::findOrFail($id)->update(['status' => 'accepted']);
        return back()->with('success', 'Lamaran diterima.');
    }

    public function reject($id)
    {
        CareerApplication::findOrFail($id)->update(['status' => 'rejected']);
        return back()->with('success', 'Lamaran ditolak.');
    }

    public function delete($id)
    {
        $app = CareerApplication::findOrFail($id);

        if ($app->cv && Storage::disk('public')->exists($app->cv)) {
            Storage::disk('public')->delete($app->cv);
        }

        if ($app->cover_letter && Storage::disk('public')->exists($app->cover_letter)) {
            Storage::disk('public')->delete($app->cover_letter);
        }

        $app->delete();

        return back()->with('success', 'Lamaran berhasil dihapus.');
    }
}
