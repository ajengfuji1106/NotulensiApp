<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\notulensi;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class NotulensiController extends Controller
{
    public function index() {
        $notulensi = notulensi::all();
        return view('livewire.halaman-notulensi', compact('notulensi'));
    }
    public function create() {
        return view('livewire.notulensi');
    }
    public function store(Request $request) {
        $request->validate([
            'hari_tanggal' => 'required|date',
            'ruang_rapat' => 'required|string|max:255',
            'waktu' => 'required|date_format:H:i',
            'surat_undangan' => 'required|string|max:255',
            'tipe_rapat' => 'required|string|max:255',
            'file_path.*' => 'nullable|mimes:jpg,jpeg,png,pdf,doc,docx|max:2048', // Validasi file
            'message' => 'nullable|string', 
        ]);

        // $filePath = null;
            // if ($request->hasFile('file_path')) {
                //  $file = $request->file('file_path');
                // $filePath = $file->storeAs('file_paths', time() . '_' . $file->getClientOriginalName(), 'public'); // Simpan di 'public/uploads'
            // }
            $filePaths = []; // To store paths of uploaded files

            if ($request->hasFile('file_path')) {
                foreach ($request->file('file_path') as $file) {
                    // Store each file and push the path into the array
                    $filePaths[] = $file->storeAs('file_paths', time() . '_' . $file->getClientOriginalName(), 'public');
                }
            }
        notulensi::create([
            'hari_tanggal' => $request->hari_tanggal,
            'ruang_rapat' => $request->ruang_rapat,
            'waktu' => $request->waktu,
            'surat_undangan' => $request->surat_undangan,
            'tipe_rapat' => $request->tipe_rapat,
            'file_path' => json_encode($filePaths), // Path file yang diupload
            'message' => $request->message, // Notulensi
        ]);
        return redirect()->route('notulensi.create')->with('success', 'Notulensi created successfully.');
    }

    // public function download($id) {
        // Find the notulensi record by its ID
        // $notulensi = notulensi::findOrFail($id);

        // Get the file path from the database
        //  $filePaths = $notulensi->file_path;

        // Ensure the file exists in the storage
        // if (Storage::disk('public')->exists($filePaths)) {
            // Return a response to download the file
            // return Storage::disk('public')->download($filePaths);
        // }

        // If the file doesn't exist, return a 404 error or custom error response
        // return redirect()->back()->withErrors(['message' => 'File not found.']);
    // }
    public function generatePDF($id) {
        // Find the notulensi record by its ID
        $notulensi = notulensi::findOrFail($id);
        
        // Decode the JSON file paths
        $filePaths = json_decode($notulensi->file_path, true);
        
        // Prepare data for the PDF
        $data = [
            'message' => $notulensi->message,
            'file_path' => $filePaths,
        ];
    
        // Load the view and pass the data
        $pdf = PDF::loadView('pdf', $data);
    
        // Download the PDF
        return $pdf->download('notulensi_' . $id . '.pdf');
    }
}
