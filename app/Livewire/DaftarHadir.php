<?php

namespace App\Livewire;

use Livewire\Component;

class DaftarHadir extends Component
{
    public $peserta = [
        ['nama' => 'M. Shoft\'ul Amin, S.T., M.T.', 'jabatan' => 'Pengarah'],
        ['nama' => 'Alfin Hidayat, S.T., M.T.', 'jabatan' => 'KA SAKIP'],
        // Tambahkan peserta lainnya sesuai kebutuhan
    ];

    public function render()
    {
        return view('livewire.daftar-hadir');
    }
}
