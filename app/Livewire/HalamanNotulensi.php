<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use App\Models\notulensi;


class HalamanNotulensi extends Component
{
    public $search = ''; // Properti untuk pencarian
    public $sortField = 'surat_undangan'; // Kolom untuk sorting default
    public $sortDirection = 'asc'; // Arah sorting default

    // Query the notulensi data
    public function getFilteredDocumentsProperty()
    {
        // Log pencarian
        Log::info('Pencarian dokumen dengan kata kunci: ' . $this->search);

        // Filter notulensi berdasarkan query pencarian
        $query = notulensi::query()
            ->where('surat_undangan', 'like', '%' . $this->search . '%')
            ->orWhere('ruang_rapat', 'like', '%' . $this->search . '%');

        // Sorting berdasarkan kolom yang dipilih
        return $query->orderBy($this->sortField, $this->sortDirection)->get();
    }

    public function searchDocuments()
{
    // Perbarui data dan log aktivitas pencarian
        $this->filteredDocuments = $this->getFilteredDocumentsProperty();
        Log::info('Dokumen diperbarui dengan hasil pencarian: ' . $this->search);
}


    public function deleteDocument($id)
    {
        $document = notulensi::findOrFail($id);

        // Log penghapusan sebelum dilakukan
        Log::info('Pengguna menghapus dokumen ID: ' . $id);
        
        // Hapus file dari storage jika ada
        if ($document->file_path && Storage::disk('public')->exists($document->file_path)) {
            Storage::disk('public')->delete($document->file_path);
            Log::info('File dokumen ' . $document->file_path . ' berhasil dihapus dari storage.');
        }

        // Hapus catatan dokumen dari database
        $document->delete();

        session()->flash('success', 'Dokumen berhasil dihapus.');
        Log::info('Dokumen ID: ' . $id . ' berhasil dihapus dari database.');
    }

    public function sortBy($field)
    {
        // Log penyortiran
        Log::info('Penyortiran dokumen berdasarkan: ' . $field . ', arah: ' . ($this->sortDirection === 'asc' ? 'Ascending' : 'Descending'));

        // Toggle sorting direction
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
    }

    public function render()
    {
        return view('livewire.halaman-notulensi', [
            'filteredDocuments' => $this->getFilteredDocumentsProperty(), // Panggil langsung data yang sudah disaring
        ]);
    }
}
