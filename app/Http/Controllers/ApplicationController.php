<?php
namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    // Tampilkan form lamaran untuk user
    public function create()
    {
        return view('career.user_form');  // nanti kita buat file ini
    }

    // Proses penyimpanan lamaran
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'          => 'required',
            'email'         => 'required|email',
            'phone'         => 'required',
            'location'      => 'required',
            'cv'            => 'required|file|mimes:pdf,doc,docx|max:2048',
            'cover_letter'  => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // Simpan file
        $cvPath = $request->file('cv')->store('public/cv');
        $clPath = $request->file('cover_letter')->store('public/cover_letters');

        // Simpan data
        Application::create([
            'name'               => $data['name'],
            'email'              => $data['email'],
            'phone'              => $data['phone'],
            'location'           => $data['location'],
            'cv_path'            => $cvPath,
            'cover_letter_path'  => $clPath,
            'status'             => 'pending',
        ]);

        return redirect()->route('career.apply')
                         ->with('success','Lamaran Anda berhasil terkirim!');
    }
}
