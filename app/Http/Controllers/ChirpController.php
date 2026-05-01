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
    // 1. Validasi
    $validated = $request->validate([ 'message' => 'required|string|max:255']);
    
    // 2. Simpan ke Database (Harus ada 'message' juga!)
    \App\Models\Chirp::create([
        'user_id' => auth()->id(), 
        'message' => $validated['message'], // Tambahkan baris ini!
    ]);

    // 3. Balik lagi
    return redirect()->route('chirps.index');
}
}