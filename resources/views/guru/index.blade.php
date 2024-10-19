<x-app-layout>
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">No</th>
                                <th scope="col" class="px-4 py-3">Pelapor</th>
                                <th scope="col" class="px-4 py-3">Terlapor</th>
                                <th scope="col" class="px-4 py-3">Kelas</th>
                                <th scope="col" class="px-4 py-3">Laporan</th>
                                <th scope="col" class="px-4 py-3">Bukti</th>
                                <th scope="col" class="px-4 py-3">Status</th>
                                <th scope="col" class="px-4 py-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswas as $siswa)
                            <tr class="border-b dark:border-gray-700">
                                <td class="px-4 py-3">{{ $loop->iteration }}</td>
                                <td class="px-4 py-3">{{ $siswa->pelapor }}</td>
                                <td class="px-4 py-3">{{ $siswa->terlapor }}</td>
                                <td class="px-4 py-3">{{ $siswa->kelas }}</td>
                                <td class="px-4 py-3">{{ $siswa->laporan }}</td>
                                <td class="px-4 py-3">
                                    <a href="{{ asset('storage/'.$siswa->bukti) }}" target="_blank" class="w-24 h-auto">
                                        <img src="{{ asset('storage/'.$siswa->bukti) }}" class="w-24 h-auto" />
                                    </a>
                                </td>
                                <td class="px-4 py-3">
                                    <span class="
                                        @if ($siswa->status == 'sedang dalam tinjauan')
                                            bg-red-500 text-white px-2 py-1 rounded
                                        @elseif ($siswa->status == 'done')
                                            bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300
                                        @endif">
                                        {{$siswa->status}}
                                    </span>
                                </td>
                                <td class="px-4 py-3 flex space-x-2">
                                    @if ($siswa->status != 'done')
                                        <form method="POST" action="{{ route('guru.update', $siswa->id) }}" onsubmit="return confirm('Are you sure you want to mark this as done?');">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                                Mark as Done
                                            </button>
                                        </form>
                                    @else
                                        <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                                            Done
                                        </span>
                                    @endif

                                    <!-- Tombol Trash (Delete) -->
                                    <form method="POST" action="{{ route('guru.destroy', $siswa->id) }}" onsubmit="return confirm('Are you sure you want to delete this?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>
</x-app-layout>
