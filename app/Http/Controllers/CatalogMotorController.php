<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;

class CatalogMotorController extends Controller
{
    // public function index()
    // {
    //     $motors = Motor::all();
    //     return view('catalog-page', compact('motors'));
    // }

    public function searchCatalog(Request $request)
    {
        // Validasi ketat di sisi server
        $request->validate([
            'rent_date_time' => 'required|date|after_or_equal:now', // Wajib diisi dan tidak boleh tanggal lampau
            'rent_duration'  => 'required|integer|in:1,2,3,5,7',    // Durasi harus sesuai dengan opsi select
            'search_keyword' => 'nullable|string|max:100',          // Filter kata kunci opsional aman dari injeksi
        ], [
            // Kustomisasi pesan eror bahasa Indonesia yang premium
            'rent_date_time.after_or_equal' => 'Jadwal pengambilan tidak boleh menggunakan tanggal waktu masa lalu.',
            'rent_duration.in' => 'Durasi sewa yang dipilih tidak valid dengan paket kami.',
        ]);

        // Jika lolos validasi, lanjut ke logika pencarian database...
        $query = Motor::query();
        // ...
    }
}
