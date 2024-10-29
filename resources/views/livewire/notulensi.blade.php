<div class="flex">
    <!-- Sidebar -->
    <div class="w-1/4 p-4 bg-blueLight">
        @livewire('sidebar')
    </div>

    <!-- Konten Utama -->
    <div class="w-3/4 max-w-4xl mx-auto p-6 bg-blue-100 rounded-md shadow-md mt-6">
        <div class="mt-2 mb-4">
            <a href="/halamannotulensi" class="text-black font-semibold">Lihat Notulensimu Disini</a>
        </div>
        <!-- Form -->
        <form action="{{ route('notulensi.store') }}" method="POST" enctype="multipart/form-data" class="bg-blueLight p-6 rounded-md shadow-md mb-4">
            @csrf    
            <div class="grid grid-cols-1 gap-4">
                <div>
                    <label for="hari_tanggal" class="block text-white font-bold mb-1">Hari/Tanggal</label>
                    <input type="date" id="hari_tanggal" name="hari_tanggal" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="ruang_rapat" class="block text-white font-bold mb-1">Ruang Rapat</label>
                    <input type="text" id="ruang_rapat" name="ruang_rapat" placeholder="Masukkan ruang rapat" class="placeholder-black w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="waktu" class="block text-white font-bold mb-1">Waktu</label>
                    <input type="time" id="waktu" name="waktu" class="placeholder-black w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="surat_undangan" class="block text-white font-bold mb-1">Surat Undangan</label>
                    <input type="text" id="surat_undangan" name="surat_undangan" placeholder="Masukkan surat undangan" class="placeholder-black w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="tipe_rapat" class="block text-white font-bold mb-1">Tipe Rapat</label>
                    <select id="tipe_rapat" name="tipe_rapat" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">Pilih Tipe Rapat</option>
                        <option value="Kegiatan Khusus">Kegiatan Khusus</option>
                        <option value="Rutin">Rutin</option>
                        <option value="Paripurna">Paripurna</option>
                    </select>
                </div>
            </div>

            <div>
                <label for="file_path" class="block text-black font-semibold mb-2">Upload Dokumentasi</label>
                <input type="file" id="file_path" name="file_path[]" multiple class="bg-white w-full p-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="mb-4 mt-4">
                <label for="message" class="block text-gray-700 font-medium mb-2">Notulensi</label>
                <textarea id="message" name="message" rows="4" placeholder="Tulis Hasil Rapat Anda Disini" class="w-full p-3 border border-gray-300 rounded-md focus:outlie-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>


            <div class="mt-2">
                <button type="submit" class="bg-white text-blue font-semibold px-4 py-2 rounded-md hover:bg-blue-600">Simpan</button>
            </div>
        </form>
        <div class="mt-2 mb-4">
    <a href="/tindakLanjut" class="text-black font-semibold">Rencana Tindak Lanjut Klik disini</a>
</div> 
    
    </div>
</div>
