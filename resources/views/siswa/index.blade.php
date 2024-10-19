<x-app-layout>
<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
    <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
        <!-- Start coding here -->
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                <div class="w-full md:w-1/2">
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                        </div>
                    </form>
                </div>
                <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                    <a href="{{ route ('siswa.create')}}" type="button" class="flex items-center justify-center text-white bg-red-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-primary-800">
                        LAPOR !
                    </a>
                </div>
            </div>
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswas as $siswa)

                        <tr class="border-b dark:border-gray-700">
                            <td class="px-4 py-3">{{ $loop->iteration }}</td>
                            <td class="px-4 py-3">{{ $siswa->pelapor}}</td>
                            <td class="px-4 py-3">{{ $siswa->terlapor}}</td>
                            <td class="px-4 py-3">{{ $siswa->kelas}}</td>
                            <td class="px-4 py-3">{{ $siswa->laporan}}</td>
                            <td class="px-4 py-3">
                                <img src="{{ asset('storage/'.$siswa->bukti) }}" class="w-24 h-auto" />
                            </td>
                            <td class="px-4 py-3">
                                <span class="
                                    @if ($siswa->status == 'sedang dalam tinjauan')
                                        bg-red-500 text-white px-2 py-1 rounded
                                    @elseif ($siswa->status == 'done')
                                        bg-green-500 text-white px-2 py-1 rounded
                                    @endif">
                                    {{$siswa->status}}
                                </span>
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
