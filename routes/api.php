<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Event;

// Endpoint untuk ambil semua data event (GET)
Route::get('/events', function () {
    return response()->json(Event::all());
});

// Endpoint untuk simpan event baru (POST)
Route::post('/events', function (Request $request) {
    $event = Event::create($request->only(['title', 'desc', 'img']));
    return response()->json($event, 201);
});

// Endpoint untuk hapus event berdasarkan ID (DELETE)
Route::delete('/events/{id}', function ($id) {
    Event::destroy($id);
    return response()->json(['message' => 'Event deleted']);
});

// Endpoint untuk hapus banyak event sekaligus (DELETE)
Route::delete('/events', function (Request $request) {
    $ids = $request->input('ids'); // Ambil array ID dari body JSON
    Event::destroy($ids);
    return response()->json(['message' => 'Selected events deleted']);
});

Route::get('/events', function (Request $request) {
    $query = Event::query();

    if ($request->filled('search')) {
        $search = $request->input('search');
        $query->where('title', 'like', "%{$search}%")
              ->orWhere('desc', 'like', "%{$search}%");
    }

    return response()->json($query->get());
});
