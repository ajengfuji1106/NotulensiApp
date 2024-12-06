<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class UndanganController extends Controller
{
    // Fungsi untuk menampilkan halaman undangan
    public function index()
    {
        $undangans = Undangan::all();
        return view('undangan.index', compact('undangans'));
    }

    // Fungsi untuk menampilkan detail undangan
    public function show($id)
    {
        $undangan = Undangan::findOrFail($id);
        return view('undangan.show', compact('undangan'));
    }

    // Fungsi untuk mengunduh undangan sebagai PDF
    public function downloadPDF($id)
    {
        $undangan = Undangan::findOrFail($id);
        $pdf = Pdf::loadView('surat-undangan', ['undangan' => $undangan]);
        return $pdf->download('undangan_sakip_2024.pdf');
    }
}
