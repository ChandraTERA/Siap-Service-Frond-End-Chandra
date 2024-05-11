@extends('layouts.template_admin')
@section('title', 'Tambah Kerusakan')
@section('link-breadcrumb', 'Tambah Kerusakan')

@section('contents')

    <div class="bg-white rounded-md p-6 flex flex-row justify-between">

        <table class="table-auto">
            <tbody class="text-silver-100">
                <tr>
                    <td class="pr-6">Id User</td>
                    <td class="pr-2">:</td>
                    <td>Userxx333</td>
                </tr>
                <tr>
                    <td class="pr-6">Nama Lengkap</td>
                    <td class="pr-2">:</td>
                    <td>Biru Muluk Hadiawan</td>
                </tr>
                <tr>
                    <td class="pr-6">No.Telepon</td>
                    <td class="pr-2">:</td>
                    <td>089 - 2574 -1487</td>
                </tr>
                <tr>
                    <td class="pr-6">Alamat Lengkap</td>
                    <td class="pr-2">:</td>
                    <td>Jalan raya Janti gang semar No.09</td>
                </tr>
            </tbody>
        </table>
        <form>
            <div class="flex">
                <div class="relative w-96">
                    <input type="search" id="search-dropdown"
                        class="block pl-12 p-2.4 w-full z-20 text-sm text-gray-900 bg-white rounded-lg border-silver-20 border  focus:ring-main focus:border-main "
                        placeholder="cari id pengguna" required>

                    <button type="submit"
                        class="absolute top-0 right-0 px-12 py-2.5 text-sm font-medium text-white  rounded-lg hover:bg-base active:bg-base focus:ring ring-offset-0 ring-main">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19"
                            fill="none">
                            <path
                                d="M16.625 16.625L11.875 11.875M2.375 7.91667C2.375 8.64441 2.51834 9.36503 2.79683 10.0374C3.07533 10.7097 3.48353 11.3206 3.99812 11.8352C4.51271 12.3498 5.12362 12.758 5.79596 13.0365C6.46831 13.315 7.18892 13.4583 7.91667 13.4583C8.64441 13.4583 9.36503 13.315 10.0374 13.0365C10.7097 12.758 11.3206 12.3498 11.8352 11.8352C12.3498 11.3206 12.758 10.7097 13.0365 10.0374C13.315 9.36503 13.4583 8.64441 13.4583 7.91667C13.4583 7.18892 13.315 6.46831 13.0365 5.79596C12.758 5.12362 12.3498 4.51271 11.8352 3.99812C11.3206 3.48353 10.7097 3.07533 10.0374 2.79683C9.36503 2.51834 8.64441 2.375 7.91667 2.375C7.18892 2.375 6.46831 2.51834 5.79596 2.79683C5.12362 3.07533 4.51271 3.48353 3.99812 3.99812C3.48353 4.51271 3.07533 5.12362 2.79683 5.79596C2.51834 6.46831 2.375 7.18892 2.375 7.91667Z"
                                stroke="#8A8A8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </div>
        </form>
    </div>


    <section class="bg-main rounded-lg shadow-lg w-full min-h-fit border border-[#393939] opacity-[56] relative">

        <main class=" bg-white h-fit py-12 my-10">
            <div class="w-[92%] mx-auto">

                <form id="form_kerusakan" action="" method="post">
                    <div class="pt-4 flex flex-col gap-y-4 md:gap-x-32">


                        <div class="w-full">
                            <h1 class="font-medium text-xl mb-2 text-silver-50">Solusi Kerusakan</h1>
                            <div class="flex flex-row items-center gap-48">

                                <div class="relative z-0 w-full mb-5 group">
                                    <textarea name="floating_company" id="floating_company"
                                        class="block h-32 py-2.5 px-4 w-full text-sm text-gray-900 bg-transparent active:border-[#00828E] focus:border-[#00828E] border-2 border-silver appearance-none focus:outline-none rounded-md focus:ring-0 peer"
                                        placeholder=" " required></textarea>

                                    <label for="floating_company"
                                        class="peer-focus:font-medium  absolute text-sm text-silver-50 duration-300 transform -translate-y-6 scale-75 top-3 z-10 origin-[0] peer-focus:left-6 left-6 peer-focus:text-silver peer-focus:bg-white peer-focus:px-2 bg-white px-2 peer-focus:z-10 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:-translate-x-2.5 peer-focus:scale-75 peer-focus:-translate-y-6">
                                        Detail Perbaikan</label>
                                    <!-- client sides alert -->
                                    <img id="errorIcon" src="./assets/svg/alert.svg" alt="alert"
                                        class="hidden absolute right-2 top-3">
                                    <p id="errorMessage" class="hidden mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-mediumb">ERROR : </span> Kerusakan wajib diisi</p>
                                </div>

                                <div class="mb-16 flex items-center gap-1 border-b border-gray-500">
                                    <span>Rp</span>
                                    <input placeholder="" type="text" class="input-line">
                                </div>
                            </div>


                        </div>

                        <div class="w-full">
                            <div class="flex flex-row items-center gap-48">

                                <div class="relative z-0 w-full mb-5 group">
                                    <h1 class="font-semibold text-silver-100">Biaya Service</h1>
                                </div>

                                <div class="mb-16 flex items-center gap-1 border-b border-gray-500">
                                    <span>Rp</span>
                                    <input placeholder="" type="text" class="input-line">
                                </div>
                            </div>

                        </div>

                        <div class="w-full">
                            <div class="flex flex-row items-center gap-48">

                                <div class="relative z-0 w-full mb-5 group">
                                    <h1 class="font-semibold text-main">Total pembayaran</h1>
                                </div>

                                <div class="mb-16 flex items-center gap-1 border-b border-main">
                                    <span class="text-main">Rp</span>
                                    <input placeholder="" type="text" class="input-line">
                                </div>
                            </div>

                        </div>

                    </div>


                    <div class="flex justify-between gap-0 divide-x-2">
                        <div class="flex flex-col w-6/12">
                            <button type="submit" onclick="checkTextarea()"
                            class="mt-8 w-96 px-6 py-3 rounded-xl bg-main hover:bg-secondary
                            text-white font-semibold text-lg">KIRIM</button>
                            <p class="text-[#8C8C8C] opacity-80 mb-4 pt-4">
                                NB : customer bisa konfirmasi mandiri melalui aplikasi
                            </p>
                        </div>

                        <div class="flex flex-col w-6/12 pl-12">
                            <div class="flex flex-row gap-4">
                                <button type="submit"
                                class="mt-8 w-48 px-6 py-3 rounded-xl bg-main hover:bg-secondary
                                text-white font-semibold text-lg">LANJUT</button>
                                <button type="submit"
                                class="mt-8 w-48 px-6 py-3 rounded-xl bg-danger hover:bg-secondary
                                text-white font-semibold text-lg">BATALKAN</button>
                            </div>
                            <p class="text-[#8C8C8C] opacity-80 mb-4 pt-4 break-words">
                                NB : Customer tidak bisa melakukan konfIrmasi pesanan secara mandiri
                            </p>
                        </div>

                    </div>
                </form>

                <!-- Toast alert data not found -->

                <!-- <div class="absolute -top-32 right-[40%] flex items-center">
                                <div id="toast-simple" class="a flex items-center justify-center w-full max-w-sm p-4 space-x-4 text-white bg-silver-150 rounded-lg shadow" role="alert">
                                    <div class="pl-4 text-sm font-normal">Maaf Data Tidak Ditemukan!</div>
                                </div>
                            </div> -->

                <!-- Toast alert to send data -->

                <!-- <div class="absolute -top-32 right-[40%] flex items-center">
                                <div id="toast-simple" class="a flex items-center justify-center w-full max-w-sm p-4 space-x-4 text-white bg-main rounded-lg shadow" role="alert">
                                    <div class="pl-4 text-sm font-normal">Berhasil terkirim!</div>
                                </div>
                            </div> -->

                <!-- Toast alert to failed send data -->

                <!-- <div class="absolute -top-32 right-[40%] flex items-center">
                                <div id="toast-simple" class="a flex items-center justify-center w-full max-w-sm p-4 space-x-4 text-white bg-danger rounded-lg shadow" role="alert">
                                    <div class="pl-4 text-sm font-normal">data gagal ditambahkan!</div>
                                </div>
                            </div> -->

            </div>
        </main>

    </section>


    <script>
        // Ambil elemen textarea dan pesan kesalahan
        const textarea = document.getElementById("floating_company");
        const errorMessage = document.getElementById("errorMessage");
        const errorIcon = document.getElementById("errorIcon");
    
        // Fungsi untuk memeriksa apakah textarea kosong
        function checkTextarea() {
            if (textarea.value.trim() === "") {
                // Jika textarea kosong, terapkan gaya error
                textarea.classList.add("border-red-500");
                textarea.classList.remove("border-silver");
                errorIcon.classList.remove("hidden");
                errorMessage.classList.remove("hidden");
            } else {
                // Jika textarea tidak kosong, hapus gaya error
                textarea.classList.remove("border-red-500");
                textarea.classList.add("border-silver");
                errorIcon.classList.add("hidden");
                errorMessage.classList.add("hidden");
            }
        }
    
        // Tambahkan event listener untuk memeriksa textarea saat kehilangan fokus
        textarea.addEventListener("blur", checkTextarea);
    
        // Tambahkan event listener untuk memeriksa textarea saat form disubmit
        // Anda harus menggantinya dengan id form yang sesuai
        const form = document.getElementById("form_kerusakan");
        form.addEventListener("submit", checkTextarea);
    
    </script>
    



@endsection
