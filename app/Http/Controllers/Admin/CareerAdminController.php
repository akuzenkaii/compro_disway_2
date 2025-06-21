<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;

class CareerAdminController extends Controller
{
    public function index()
    {
        $applications = Application::latest()->get();
        return view('admin.career', compact('applications'));
    }

    public function accept($id)
    {
        Application::findOrFail($id)->update(['status' => 'accepted']);
        return back();
    }

    public function reject($id)
    {
        Application::findOrFail($id)->update(['status' => 'rejected']);
        return back();
    }

    public function destroy($id)
    {
        Application::destroy($id);
        return back();
    }
}
