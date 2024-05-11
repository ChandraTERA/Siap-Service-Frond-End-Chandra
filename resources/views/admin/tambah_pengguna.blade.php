@extends('layouts.template_admin')
@section('title', 'Tambah Pengguna')
@section('link-breadcrumb', 'Tambah Pengguna')

@section('contents')
    <section class="bg-main rounded-lg shadow-lg w-full min-h-[90vh] mb-4 relative">
        <main class="h-44 py-6">
            <header class="w-[92%] mx-auto flex justify-between items-start">

                <div class="flex flex-row items-center gap-4">
                    <div class="relative flex items-end">
                        
                        <div  id="image-container" class="relative overflow-hidden w-36 h-36 rounded-full border-4 border-white">
                            <!-- after -->
                            <img id="uploaded-image" src="./assets/svg/profile-default.svg" alt="./assets/svg/profile-default.svg"
                                class="w-full bg-center object-contain bg-silver-10 p-6">

                            <!-- before -->
                            <img  src="./assets/image/Avatar-Profile.png" alt="./assets/image/Avatar-Profile.png"
                                class="w-full bg-center object-contain bg-silver-10 p-6">
                        </div>

                        <label for="dropzone-file"
                            class="w-12 h-12 rounded-full grid place-items-center bg-[#949494] border-4 border-white absolute right-0"
                            data-tooltip-target="tooltip-right" data-tooltip-placement="right">
                            <img src="./assets/svg/camera.svg" alt="" id="icon" class="w-6 cursor-pointer">
                        </label>

                        <input type="file" name="" id="dropzone-file" class="hidden">

                        <div id="tooltip-right" role="tooltip"
                            class="absolute z-10 invisible inline-block px-2 py-1 text-sm font-medium text-white bg-[#949494] rounded-lg shadow-sm opacity-0 tooltip ">
                            unggah foto... 📸
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <h1 class="text-white text-3xl font-semibold">Baim Weejadja</h1>
                        <p class="text-white font-medium text-xl">Pengguna Baru</p>
                    </div>
                </div>



                <div class="mt-8 top-6">
                    <h4 class="text-white text-lg">
                        Id: <span>usrxx333</span>
                    </h4>
                </div>
            </header>
        </main>
        <main class=" bg-white h-fit -my-10">
            <div class="w-[92%] mx-auto">
                <form action="" method="post">
                    <div class="pt-12 flex flex-row gap-x-4 md:gap-x-32">

                        <div class="w-full">
                            <h1 class="font-medium text-xl mb-2 text-silver-50">Personal</h1>
                            <div class="flex flex-col gap-2">
                                <div class="relative z-0 w-full mb-5  group">
                                    <input type="text" name="" id="floating_company1" class="input-form peer"
                                        placeholder=" " required oninput="validateInput(this.value)" />
                                    <label for="floating_company1" class="label-form">Nama Lengkap</label>
                                    <!-- client sides alert -->
                                    <img id="errorIcon" src="./assets/svg/alert.svg" alt="alert"
                                        class="hidden absolute right-2 top-3">
                                    <p id="errorMessage1" class="hidden mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-mediumb">ERROR : </span> Nama Lengkap Mengandung Angka dan Simbol
                                    </p>
                                    <p id="errorMessage"class="hidden mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-mediumb">ERROR : </span> Nama tidak boleh kosong</p>

                                </div>

                                <div class="relative z-0 w-full mb-5  group">
                                    <input type="text" name="" id="floating_company2"
                                        class="input-form peer appearance-none" placeholder=" " required />
                                    <label for="floating_company2" class="label-form">Tanggal Lahir</label>
                                    <!-- client sides alert -->
                                    <img id="errorIcon" src="./assets/svg/alert.svg" alt="alert"
                                        class="hidden absolute right-2 top-3">
                                    <p id="errorMessage"class="hidden mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-mediumb">ERROR : </span> Tanggal tidak boleh kosong</p>
                                </div>

                                <div class="relative z-0 w-full mb-5  group">
                                    <input type="tel" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" name=""
                                        id="floating_company3" class="input-form peer" placeholder=" " required />
                                    <label for="floating_company3" class="label-form">No. Telephone</label>
                                    <!-- client sides alert -->
                                    <img id="errorIcon" src="./assets/svg/alert.svg" alt="alert"
                                        class="hidden absolute right-2 top-3">
                                    <p id="errorMessage" class="hidden mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-mediumb">ERROR : </span> Nomer Telephone tidak boleh kosong</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <h1 class="font-medium text-xl mb-2 text-silver-50">Kontak</h1>
                            <div class="flex flex-col gap-2">
                                <div class="relative z-0 w-full mb-5  group">
                                    <input type="email" name="" id="floating_company4" class="input-form peer"
                                        placeholder=" " required />
                                    <label for="floating_company4" class="label-form">Email</label>
                                    <!-- client sides alert -->
                                    <img id="errorIcon" src="./assets/svg/alert.svg" alt="alert"
                                        class="hidden absolute right-2 top-3">
                                    <p id="errorMessage" class="hidden mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-mediumb">ERROR : </span> Email tidak boleh kosong</p>
                                </div>

                                <div class="relative z-0 w-full mb-5  group">
                                    <input type="text" name="" id="floating_company5" class="input-form peer"
                                        placeholder=" " required />
                                    <label for="floating_company5" class="label-form">Kota</label>
                                    <!-- client sides alert -->
                                    <img id="errorIcon" src="./assets/svg/alert.svg" alt="alert"
                                        class="hidden absolute right-2 top-3">
                                    <p id="errorMessage" class="hidden mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-mediumb">ERROR : </span> Kota tidak boleh kosong</p>
                                </div>

                                <div class="relative z-0 w-full mb-5 group">
                                    <textarea name="floating_company" id="floating_company"
                                        class="block py-2.5 px-4 w-full text-sm text-gray-900 bg-transparent border-2 border-silver appearance-none focus:outline-none rounded-md focus:ring-0 focus:border-silver peer"
                                        placeholder=" " required></textarea>

                                    <label for="floating_company"
                                        class="peer-focus:font-medium absolute text-sm text-silver-50 duration-300 transform -translate-y-6 scale-75 top-3 z-10 origin-[0] peer-focus:left-6 left-6 peer-focus:text-silver peer-focus:bg-white peer-focus:px-2 bg-white px-2 peer-focus:z-10 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:-translate-x-2.5 peer-focus:scale-75 peer-focus:-translate-y-6">Detail
                                        Alamat</label>
                                    <!-- client sides alert -->
                                    <img id="errorIcon" src="./assets/svg/alert.svg" alt="alert"
                                        class="hidden absolute right-2 top-3">
                                    <p id="errorMessage" class="hidden mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-mediumb">ERROR : </span> Alamat tidak boleh kosong</p>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <button onclick="validateInputs()" type="submit"
                            class="my-4 px-6 py-3 rounded-md bg-main hover:bg-secondary
                            text-white font-semibold text-lg">Simpan</button>
                    </div>
                </form>

                <!-- Toast alert to successfully add data -->
                
                <!-- <div class="absolute -top-32 right-[40%] flex items-center">
                    <div id="toast-simple" class="a flex items-center justify-center w-full max-w-sm p-4 space-x-4 text-white bg-main rounded-lg shadow" role="alert">
                        <div class="pl-4 text-sm font-normal">data berhasil ditambahkan!</div>
                    </div>
                </div> -->

                <!-- Toast alert to failed add data -->

                <!-- <div class="absolute -top-32 right-[40%] flex items-center">
                    <div id="toast-simple" class="a flex items-center justify-center w-full max-w-sm p-4 space-x-4 text-white bg-danger rounded-lg shadow" role="alert">
                        <div class="pl-4 text-sm font-normal">data gagal ditambahkan!</div>
                    </div>
                </div> -->

            </div>
        </main>

    </section>

    <script>
        function validateInput(inputValue) {
            var regex = /[^A-Za-z\s]/; // Mencocokkan karakter selain huruf dan spasi

            var errorIcon = document.getElementById("errorIcon");
            var errorMessage1 = document.getElementById("errorMessage1");

            if (regex.test(inputValue)) {
                // Input mengandung angka atau simbol
                errorIcon.style.display = "inline";
                errorMessage1.style.display = "block";
            } else {
                // Input hanya mengandung huruf dan spasi
                errorIcon.style.display = "none";
                errorMessage1.style.display = "none";
            }
        }


        function validateInputs() {
            var inputs = document.querySelectorAll('input[required], textarea[required]');
            var isValid = true;

            inputs.forEach(function(input) {
                if (input.value.trim() === "") {
                    isValid = false;
                    var errorIcon = input.parentElement.querySelector("#errorIcon");
                    var errorMessage = input.parentElement.querySelector("#errorMessage");

                    errorIcon.style.display = "inline";
                    errorMessage.style.display = "block";
                } else {
                    var errorIcon = input.parentElement.querySelector("#errorIcon");
                    var errorMessage = input.parentElement.querySelector("#errorMessage");

                    errorIcon.style.display = "none";
                    errorMessage.style.display = "none";
                }
            });

            // if (isValid) {
            //     // Semua input valid, lanjutkan dengan tindakan lain jika diperlukan.
            //     // Contoh: Kirim formulir atau lakukan tindakan lainnya.
            // } else {
            //     // Terdapat input yang tidak valid, mungkin tampilkan pesan kesalahan umum.
            //     alert("Harap isi semua kolom yang wajib diisi.");
            // }
        }
    </script>

<script>
    const dropzoneFile = document.getElementById("dropzone-file");
    // const imageContainer = document.getElementById("image-container");
    const uploadedImage = document.getElementById("uploaded-image");

    dropzoneFile.addEventListener("change", function() {
        const file = dropzoneFile.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                uploadedImage.src = e.target.result;
                uploadedImage.classList.remove("hidden", "p-6");

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
