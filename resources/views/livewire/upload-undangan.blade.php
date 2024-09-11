<div class="flex items-center justify-center min-h-screen">
    <div class="bg-blueLight p-8 rounded-lg shadow-lg max-w-md w-full">
    <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="tanggal" class="block text-white font-semibold mb-2">Tanggal</label>
                <input type="date" id="tanggal" name="tanggal" class="w-full p-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-4">
                <label for="upload" class="block text-white font-semibold mb-2">Upload Undangan</label>
                <input type="file" id="upload" name="upload" class="bg-white w-full p-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-4">
                <label for="waktu" class="block text-white font-semibold mb-2">Waktu</label>
                <input type="time" id="waktu" name="waktu" class="w-full p-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-4">
                <label for="tempat" class="block text-white font-semibold mb-2">Tempat</label>
                <input type="text" id="tempat" name="tempat" class="w-full p-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-white text-blue font-bold rounded-full shadow hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>