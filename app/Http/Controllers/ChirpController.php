<?php

namespace App\Http\Controllers;

use App\Models\Chirp; // Supaya dia kenal model Chirp
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ChirpController extends Controller
{
    /**
     * Menampilkan daftar cerita terbaru.
     */
    public function index()
    {
        return view('chirps.index', [
            // latest() -> urutkan dari yang terbaru
            // get() -> ambil datanya
            'chirps' => Chirp::with('user')->latest()->get(),
        ]);
    }

    /**
     * Menyimpan cerita baru ke database.
     */

public function store(\Illuminate\Http\Request $request)
{
    // 1. Validasi: Jangan sampe postingan kosong
    $validated = $request->validate([ 'message' => 'required|string|max:255']);

    // 2. Simpan ke Database
    // Karena kita gak pake login, kita "tembak" aja pake User ID 1
    \App\Models\Chirp::create([
        'user_id' => 1, 
        'message' => $validated['message'],
    ]);

    // 3. Balik lagi ke halaman chirps
    return redirect()->route('chirps.index');
}
}