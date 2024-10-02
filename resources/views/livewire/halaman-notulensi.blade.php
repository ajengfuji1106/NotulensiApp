<div class="flex">
    <!-- Sidebar -->
    <div class="w-1/4 p-4 bg-blueLight min-h-screen">
        @livewire('sidebar')
    </div>
    <!-- Tabel -->
    <div class="w-3/4 max-w-4xl mx-auto p-6 bg-blue-100 rounded-md shadow-md mt-6">
        <!-- Search Bar -->
        <div class="mb-4">
            <input type="text" wire:model="search" placeholder="Cari dokumen..." 
                class="px-4 py-2 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-blueLight" />
        </div>

        <table class="border-b-2 border-r-2 border-l-2 min-w-full divide-y divide-gray-200">
            <thead class="bg-blueLight">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">No</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Dokumen</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-gray-100 divide-y divide-gray-150">
                @forelse($filteredDocuments as $document)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $loop->index + 1 }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $document['name'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <button class="bg-blue hover:bg-blueLight text-white font-semibold py-1 px-4 rounded">Download</button>
                        <button class="bg-red hover:bg-red-700 text-white font-semibold py-1 px-4 rounded">Hapus</button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="px-6 py-4 text-center text-sm text-gray-500">Dokumen tidak ditemukan</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
