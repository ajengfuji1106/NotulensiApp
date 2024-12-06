<div class="flex min-h-screen">
     <!-- Sidebar -->
<div class="w-1/4 p-4 bg-blueLight min-h-screen">
    @livewire('sidebar')
</div>

    <!-- Konten Surat -->
    <div class="w-3/4 max-w-4xl mx-auto p-6 bg-white border border-gray-300 rounded-lg shadow-md mt-4">
        <h1 class="text-xl font-bold mb-4">Surat Undangan Rapat Asistensi SAKIP 2024</h1>
    
        <p class="mt-2"><strong>Nomor:</strong> {{ $nomor }}</p>
        <p><strong>Perihal:</strong> {{ $perihal }}</p>
        <p><strong>Lampiran:</strong> {{ $lampiran }}</p>
        <div class="mt-6">
            <p>Kepada:</p>
            <p class="whitespace-pre-line">{{ $kepada }}</p>
        </div>
        <div class="mt-6">
            <p>Menindaklanjuti surat dari Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi, Nomor: 2193/DJ/PR.04.03/2024 tanggal 25 Mei 2024 perihal Pemberitahuan Pelaksanaan Asistensi SAKIP tahun 2024, sehubungan dengan hal tersebut, maka bersama ini kami mengundang Bapak/Ibu pada :</p>
        </div>
        <div class="mt-6">
            <p><strong>Hari/tanggal:</strong> {{ $tanggal }}</p>
            <p><strong>Waktu:</strong> {{ $waktu }}</p>
            <p><strong>Tempat:</strong> {{ $tempat }}</p>
            <p><strong>Agenda:</strong></p>
            <ul class="list-disc pl-6">
                @foreach ($agenda as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
        <div class="mt-6">
            <p>Demikian undangan ini, mengingat pentingnya acara diharapkan hadir tepat waktu,</p>
            <p>Atas perhatian dan kerjasamanya diucapkan terima kasih.</p>
        </div>
    </div>
</div>
