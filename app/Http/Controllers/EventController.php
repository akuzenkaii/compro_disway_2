<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // ✅ Tampilkan halaman our-services untuk user & admin dengan fitur search
    public function index(Request $request)
    {
        $search = $request->query('search');

        $events = Event::when($search, function ($query) use ($search) {
            return $query->where('title', 'like', "%{$search}%")
                         ->orWhere('desc', 'like', "%{$search}%");
        })->get();

        // Menampilkan view berdasarkan role
        if (auth()->check() && auth()->user()->role === 'admin') {
            return view('admin.ourServices', [
                'events' => $events,
                'search' => $search
            ]);
        }

        return view('user.ourServices', [
            'events' => $events,
            'search' => $search
        ]);
    }

    // ✅ Tambah event baru
    public function store(Request $request)
    {
        $event = Event::create($request->only(['title', 'desc', 'img']));

        return response()->json([
            'message' => 'Event berhasil ditambahkan!',
            'event' => $event
        ]);
    }

    // ✅ Hapus satu event
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return response()->json(['success' => true]);
    }

    // ✅ Hapus banyak event sekaligus
    public function bulkDelete(Request $request)
    {
        $ids = $request->input('event_ids');

        if ($ids && is_array($ids)) {
            Event::whereIn('id', $ids)->delete();
            return response()->json([
                'success' => true,
                'message' => 'Event terpilih berhasil dihapus.'
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Tidak ada event yang dipilih.'
        ], 400);
    }

    // ✅ Ambil semua event (misalnya untuk keperluan AJAX)
    public function getEvents()
    {
        return response()->json(Event::all());
    }
}