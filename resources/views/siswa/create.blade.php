<x-app-layout>

<section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Segera Lapor</h2>
      <form action="{{route('siswa.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
              <div class="w-full">
                  <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pelapor</label>
                  <input type="text" name="pelapor" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Pelapor" required="">
              </div>
              <div class="w-full">
                  <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Terlapor</label>
                  <input type="text" name="terlapor" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Terlapor" required="">
                </div>
                <div>
                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                    <select name="kelas" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="" disabled>Pilih Kelas</option>
                        <option value="X-1">X-1</option>
                        <option value="X-2">X-2</option>
                        <option value="X-3">X-3</option>
                        <option value="XI RPL 1">XI RPL 1</option>
                        <option value="XI RPL 2">XI RPL 2</option>
                        <option value="XI TKJ">XI TKJ</option>
                        <option value="XI DKV">XI DKV</option>
                    </select>
                </div>
                <div class="w-full">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                <input name="bukti" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">

                </div>
              <div class="sm:col-span-2">
                  <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Laporan</label>
                  <textarea name="laporan" id="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Your description here"></textarea>
                </div>




          </div>
          <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-red-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-red-900 hover:bg-primary-800">
              Lapor Sekarang !
          </button>
      </form>
  </div>
</section>
</x-app-layout>
