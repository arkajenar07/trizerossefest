<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlatIot; // pastikan nama model sesuai

class PenyewaanController extends Controller
{
    public function index()
    {
        $alatiot = AlatIot::all(); // Ambil semua data dari tabel alatiot
        return view('user.penyewaan', compact('alatiot')); // Kirim data ke view
    }

    public function show($id)
    {
        // Fetch the item with the specified ID
        $alat = AlatIot::findOrFail($id);

        // Return the view with the item details
        return view('user.show', compact('alat'));
    }
}
