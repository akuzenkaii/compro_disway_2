<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;

class RecruitmentController extends Controller
{
    public function index(Request $request)
    {
        // Filter status jika ada query ?status=
        $apps = Application::when($request->status, fn($q,$s)=>$q->where('status',$s))
                           ->orderBy('created_at','desc')
                           ->get();

        return view('career.admin_list', compact('apps'));
    }

    public function accept($id)
    {
        Application::findOrFail($id)->update(['status'=>'accepted']);
        return back();
    }

    public function reject($id)
    {
        Application::findOrFail($id)->update(['status'=>'rejected']);
        return back();
    }

    public function destroy($id)
    {
        Application::findOrFail($id)->delete();
        return back();
    }
}
