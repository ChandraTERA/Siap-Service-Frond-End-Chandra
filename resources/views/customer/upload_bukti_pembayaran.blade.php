@section('title', 'Upload Bukti Pembayaran')
@extends('components.menu_navbar')

@section('back')
    <a href="/informasi-pembayaran">
    @endsection

    @section('contents')

        <div class="font-normal text-lg text-[#D71E1E] bg-[#FDCF6F] bg-opacity-50 p-5 mt-4">
            <span>Caution :</span>
            <p>
                Pastikan anda telah melengkapi seluruh informasi sebelum upload bukti transfer. jasaService akan memeriksa
                bukti anda dalam 24 jam.
            </p>
        </div>
        <div class="flex justify-between mt-2 p-5 shadow-list">
            <h2 class="text-md font-medium">Total Pembayaran</h2>
            <h2 class="text-md font-medium text-[#007119]">Rp 2.000,000</h2>
        </div>
        <div class="flex justify-between mt-2 p-5 shadow-list">
            <h2 class="text-md font-medium">Informasi Bank</h2>
            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M18 9L12 15L6 9" stroke="#6E6E6E" stroke-linecap="round" stroke-linejoin="round" />
            </svg> --}}
        </div>
        <div class="px-5 py-2 mt-2 border-b-2 border-[#C5C5C5]">
            <p class="text-sm text-silver-100">Upload foto bukti transfer Anda atau screenshot bukti dari internet Banking.
                jasaService akan memeriksa bukti Anda dalam 24 jam.</p>
        </div>
        <div class="flex justify-between mt-2 p-5">
            <h2 class="text-md font-medium">Info Rek Bank: </h2>
        </div>

        <!-- live show js -->

        <div class="flex items-center justify-center w-full relative">
            <div class="flex items-center justify-center w-full">
                <label for="dropzone-file"
                    class="flex flex-col items-center justify-center overflow-hidden w-64 h-64 border-2 border-black border-opacity-70 border-dashed cursor-pointer bg-white">
                    <div id="image-container" class="flex flex-col items-center justify-center pt-5 pb-6">
                        <img id="uploaded-image" class="w-full h-auto hidden pb-0" src="" alt="Uploaded Image">
                        <svg id="upload-svg" class="" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                            fill="none">
                            <path
                                d="M13.75 25H8.125C6.22917 25 4.60958 24.3437 3.26625 23.0312C1.92208 21.7188 1.25 20.1146 1.25 18.2188C1.25 16.5938 1.73958 15.1458 2.71875 13.875C3.69792 12.6042 4.97917 11.7917 6.5625 11.4375C7.08333 9.52083 8.125 7.96875 9.6875 6.78125C11.25 5.59375 13.0208 5 15 5C17.4375 5 19.505 5.84875 21.2025 7.54625C22.9008 9.24458 23.75 11.3125 23.75 13.75C25.1875 13.9167 26.3804 14.5363 27.3288 15.6088C28.2763 16.6821 28.75 17.9375 28.75 19.375C28.75 20.9375 28.2033 22.2658 27.11 23.36C26.0158 24.4533 24.6875 25 23.125 25H16.25V16.0625L18.25 18L20 16.25L15 11.25L10 16.25L11.75 18L13.75 16.0625V25Z"
                                fill="black" fill-opacity="0.7" />
                        </svg>
                        <p id="upload-text" class="mb-2 text-sm text-black text-opacity-70 font-semibold">Upload disini</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" />
                </label>
            </div>


{{-- <svg id="upload-svg" class="" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                            fill="none">
                            <path
                                d="M13.75 25H8.125C6.22917 25 4.60958 24.3437 3.26625 23.0312C1.92208 21.7188 1.25 20.1146 1.25 18.2188C1.25 16.5938 1.73958 15.1458 2.71875 13.875C3.69792 12.6042 4.97917 11.7917 6.5625 11.4375C7.08333 9.52083 8.125 7.96875 9.6875 6.78125C11.25 5.59375 13.0208 5 15 5C17.4375 5 19.505 5.84875 21.2025 7.54625C22.9008 9.24458 23.75 11.3125 23.75 13.75C25.1875 13.9167 26.3804 14.5363 27.3288 15.6088C28.2763 16.6821 28.75 17.9375 28.75 19.375C28.75 20.9375 28.2033 22.2658 27.11 23.36C26.0158 24.4533 24.6875 25 23.125 25H16.25V16.0625L18.25 18L20 16.25L15 11.25L10 16.25L11.75 18L13.75 16.0625V25Z"
                                fill="black" fill-opacity="0.7" />
                        </svg> --}}

        </div>


        <div class="flex justify-start items-center gap-4 mt-2 p-5 shadow-list">
            <img src="./struk-pembayaran/struk-bca.png" alt="struk" class="w-12 h-12 rounded-sm">
            <h2 class="text-sm font-medium">Contoh Foto untuk Transfer ATM</h2>

        </div>
        <form action="" method="" class="flex flex-col mt-8 relative">


            <ul class="divide-y-2 mt-2">
                <li class="flex justify-between items-center py-5 px-0.5 hover:bg-gray-100 cursor-pointer ">
                    <h2 class="text-md font-medium">Nama pengirim di Rekening Bank</h2>
                    <div class="relative z-0">
                        <input type="text" id="floating_standard"
                            class="text-right pr-2 block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0  border-gray-300 appearance-none d focus:outline-none focus:ring-0  peer"
                            placeholder=" " />
                        <label for="floating_standard"
                            class="absolute text-md font-medium text-gray-500 duration-300 transform -translate-y-6 scale-75 top-2 right-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-silver-100 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama
                            Lengkap</label>
                    </div>
                </li>
                <li class="flex justify-between items-center py-5 px-0.5 hover:bg-gray-100 cursor-pointer">
                    <h2 class="text-md font-medium">Transfer dari Bank</h2>
                    <div class="relative z-0">
                        <select id="Bank"
                            class="custom-select bg-white border-none outline-none text-gray-900 text-sm focus:ring-main rounded-sm focus:border-none block w-full p-2.5">
                            <option class="bg-silver-250 text-lg" disabled selected>Pilih Bank</option>
                            <option class="bg-silver-250 text-lg" value="BCA">BCA</option>
                            <option class="bg-silver-250 text-lg" value="BRI">BRI</option>
                            <option class="bg-silver-250 text-lg" value="BNI">BNI</option>
                            <option class="bg-silver-250 text-lg" value="Mandiri">Mandiri</option>
                        </select>


                    </div>
                </li>
                <li class="flex justify-between items-center py-5 px-0.5 hover:bg-gray-100 cursor-pointer">
                    <h2 class="text-md font-medium">No. Rekening Pengirim</h2>
                    <div class="relative z-0">
                        <input type="number" pattern="[0-9]*" inputmode="numeric" id="floating_standard"
                            class="item-lists  overflow-x-auto text-right pr-2 block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0  border-gray-300 appearance-none d focus:outline-none focus:ring-0  peer"
                            placeholder=" " />
                        <label for="floating_standard"
                            class="absolute text-md font-medium text-gray-500 duration-300 transform -translate-y-6 scale-75 top-2 right-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-silver-100 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">No.
                            Rekening</label>
                    </div>
                </li>
                <li class="flex justify-between items-center py-5 px-0.5 hover:bg-gray-100 cursor-pointer">
                    <h2 class="text-md font-medium">Jumlah Ditransfer (Rp)</h2>
                    <div class="relative z-0">
                        <input type="number" pattern="\d*" inputmode="numeric" id="floating_standard"
                            class="text-right pr-2 block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0  border-gray-300 appearance-none d focus:outline-none focus:ring-0  peer"
                            placeholder=" " />
                        <label for="floating_standard"
                            class="absolute text-md font-medium text-gray-500 duration-300 transform -translate-y-6 scale-75 top-2 right-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-silver-100 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nominal</label>
                    </div>
                </li>
                <li class="flex justify-between items-center py-5 px-0.5 hover:bg-gray-100 cursor-pointer">
                    <h2 class="text-md font-medium">Tanggal Transfer</h2>
                    <div class="relative z-0">
                        <input type="date" id="floating_standard"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0  border-gray-300 appearance-none d focus:outline-none focus:ring-0  peer"
                            placeholder=" " />
                        <label for="floating_standard"
                            class="absolute text-md font-medium text-gray-500 duration-300 transform -translate-y-6 scale-75 top-2 right-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-silver-100 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal</label>
                    </div>
                </li>
            </ul>

            <div class="flex justify-center items-center mt-12">
                <button type="submit" class="btn-main w-5/6 cursor-pointer">Kirim</button>
            </div>
        </form>

        </div>

        <style>
            /* Chrome, Safari, Edge, Opera */
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            /* Firefox */
            input[type=number] {
                -moz-appearance: textfield;
            }

        </style>

        <script>
            const dropzoneFile = document.getElementById("dropzone-file");
            const imageContainer = document.getElementById("image-container");
            const uploadedImage = document.getElementById("uploaded-image");
            const uploadText = document.getElementById("upload-text");
            const uploadSvg = document.getElementById("upload-svg");

            dropzoneFile.addEventListener("change", function() {
                const file = dropzoneFile.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        uploadedImage.src = e.target.result;
                        uploadedImage.classList.remove("hidden");
                        uploadText.classList.add("hidden");
                        uploadSvg.classList.add("hidden");
                    };
                    reader.readAsDataURL(file);
                }
            });

            // Tambahkan event listener untuk mengganti gambar saat diklik
            // imageContainer.addEventListener("click", function() {
            //     dropzoneFile.click();
            // });
        </script>
    @endsection
