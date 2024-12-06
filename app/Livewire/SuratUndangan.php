<?php

namespace App\Livewire;

use Livewire\Component;

class SuratUndangan extends Component
{
    public $nomor;
    public $perihal;
    public $lampiran;
    public $kepada;
    public $tanggal;
    public $waktu;
    public $tempat;
    public $agenda;

    public function mount()
    {
        // Default values
        $this->nomor = '4387/Pl36/PR/04-03/2024';
        $this->perihal = 'Undangan Asistensi SAKIP 2024';
        $this->lampiran = '1 lampiran';
        $this->kepada = 'Yth. Tim Penyusun Laporan\nTim Review, dan Evaluasi SAKIP, Kepegawaian dan Keuangan\nPoliteknik Negeri Banyuwangi\nDi Tempat';
        $this->tanggal = 'Selasa, 11 Juni 2024';
        $this->waktu = '08.30 WIB - selesai WIB';
        $this->tempat = 'Ruang B2.07';
        $this->agenda = [
            'Pengarahan Pimpinan',
            'Asistensi SAKIP 2024 oleh Direktorat Jenderal Pendidikan Vokasi'
        ];
    }
    
    public function render()
    {
        return view('livewire.surat-undangan');
    }
}
