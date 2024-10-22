<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use App\Models\notulensi;

class HalamanNotulensi extends Component
{
    // public $documents = [
        // ['name' => 'Data Dukung Evaluasi'],
        // ['name' => 'Sistematika Renstra PTN Vokasi'],
        // ['name' => 'Cascading IKU Sampai Komponen'],
        // ['name' => 'RKT 2025 Politeknik dan AKN'],
        // ['name' => 'Asistensi SAKIP Tahun 2024'],
        //Tambahkan dokumen lainnya sesuai kebutuhan
    // ];

    // public $search = ''; // Properti untuk pencarian

    // public function getFilteredDocumentsProperty()
    // {
        //Filter dokumen berdasarkan search
        // return array_filter($this->documents, function($document) {
            // return stripos($document['name'], $this->search) !== false;
        // });
    // }

    // public function render()
    // {
        // return view('livewire.halaman-notulensi', [
            // 'filteredDocuments' => $this->filteredDocuments, // Kirim dokumen yang sudah difilter
        // ]);
    // }
    public $search = ''; // Properti untuk pencarian

    // Query the notulensi data
    public function getFilteredDocumentsProperty()
    {
        // Filter notulensi based on the search query
        return notulensi::where('surat_undangan', 'like', '%'.$this->search.'%')
                        ->orWhere('ruang_rapat', 'like', '%'.$this->search.'%')
                        ->get();
    }

    public function deleteDocument($id)
    {
        $document = notulensi::findOrFail($id);
        
        // Delete file from storage if exists
        if ($document->file_path && Storage::disk('public')->exists($document->file_path)) {
            Storage::disk('public')->delete($document->file_path);
        }

        // Delete the document record from the database
        $document->delete();

        session()->flash('success', 'Dokumen berhasil dihapus.');
    }

    public function render()
    {
        return view('livewire.halaman-notulensi', [
            'filteredDocuments' => $this->filteredDocuments, // Kirim notulensi yang sudah difilter
        ]);
    }
}
