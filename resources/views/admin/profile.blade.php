@extends('layouts.sidebar_admin')
@section('title', 'Profile Admin')
@section('link-breadcrumb', 'Profile')

@section('navbar')
    <nav class="bg-white rounded-lg sticky top-3 z-10">
        <div class="flex flex-wrap items-center justify-between mx-auto p-4">

            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li>
                        <div class="flex items-center">
                            <a href="#"
                                class="ml-1 text-sm font-medium  hover:text-main md:ml-2 text-gray-400"> 
                                @yield('link-breadcrumb')
                            </a>
                        </div>
                    </li>
                </ol>
            </nav>

            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col justify-center p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white md:dark:bg-white">

                    <li class="flex items-center">
                        <a href="/notifikasi-pembayaran">
                            <svg data-tooltip-target="tooltip-light" data-tooltip-style="light" class="cursor-pointer active:outline-none focus:outline-none"
                                xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29"
                                fill="none">
                                <mask id="path-1-inside-1_1246_4341" fill="white">
                                    <path
                                        d="M24.9264 19.332C24.8324 19.2187 24.7401 19.1054 24.6494 18.9961C23.4033 17.4889 22.6495 16.5793 22.6495 12.3125C22.6495 10.1036 22.121 8.29105 21.0794 6.93168C20.3113 5.92744 19.2731 5.16563 17.9047 4.60262C17.8871 4.59282 17.8713 4.57997 17.8582 4.56467C17.366 2.91643 16.0191 1.8125 14.5 1.8125C12.9809 1.8125 11.6345 2.91643 11.1423 4.56297C11.1292 4.57771 11.1137 4.59015 11.0965 4.59979C7.90306 5.91441 6.35111 8.43662 6.35111 12.3108C6.35111 16.5793 5.59836 17.4889 4.35113 18.9944C4.26051 19.1038 4.16818 19.2148 4.07416 19.3303C3.83128 19.6232 3.6774 19.9796 3.63073 20.3572C3.58405 20.7348 3.64653 21.1179 3.81078 21.4611C4.16025 22.1975 4.90508 22.6546 5.75525 22.6546H23.251C24.0972 22.6546 24.8369 22.198 25.1875 21.4651C25.3525 21.1218 25.4155 20.7384 25.3693 20.3603C25.323 19.9823 25.1693 19.6254 24.9264 19.332ZM14.5 27.1875C15.3185 27.1868 16.1215 26.9647 16.8239 26.5445C17.5264 26.1244 18.102 25.522 18.4898 24.8012C18.508 24.7667 18.5171 24.728 18.516 24.6889C18.5149 24.6499 18.5037 24.6118 18.4835 24.5783C18.4633 24.5448 18.4348 24.5172 18.4008 24.498C18.3668 24.4788 18.3283 24.4687 18.2893 24.4688H10.7119C10.6727 24.4686 10.6343 24.4786 10.6001 24.4978C10.566 24.5169 10.5375 24.5446 10.5172 24.5781C10.497 24.6115 10.4857 24.6497 10.4846 24.6888C10.4835 24.7279 10.4925 24.7666 10.5108 24.8012C10.8985 25.5219 11.4741 26.1243 12.1764 26.5444C12.8787 26.9645 13.6816 27.1867 14.5 27.1875Z" />
                                </mask>
                                <path
                                    d="M24.9264 19.332L26.8521 17.7377L26.8501 17.7353L24.9264 19.332ZM24.6494 18.9961L22.7227 20.5891L22.7248 20.5917L24.6494 18.9961ZM21.0794 6.93168L19.0936 8.45043L19.095 8.45224L21.0794 6.93168ZM17.9047 4.60262L16.6894 6.78734L16.8177 6.85872L16.9535 6.91459L17.9047 4.60262ZM17.8582 4.56467L15.4628 5.28002L15.6145 5.78824L15.9596 6.19106L17.8582 4.56467ZM11.1423 4.56297L13.0088 6.22618L13.3785 5.81135L13.5376 5.27899L11.1423 4.56297ZM11.0965 4.59979L12.0482 6.91156L12.1859 6.85484L12.316 6.78217L11.0965 4.59979ZM4.35113 18.9944L6.27576 20.59L6.27631 20.5893L4.35113 18.9944ZM4.07416 19.3303L5.99862 20.9261L6.00599 20.9172L6.01328 20.9082L4.07416 19.3303ZM3.81078 21.4611L6.06932 20.3892L6.06587 20.382L3.81078 21.4611ZM25.1875 21.4651L22.9341 20.3824L22.9323 20.3863L25.1875 21.4651ZM14.5 27.1875L14.4977 29.6875L14.502 29.6875L14.5 27.1875ZM18.4898 24.8012L20.6914 25.9857L20.6956 25.9778L20.6997 25.97L18.4898 24.8012ZM18.2893 24.4688V26.9688L18.2918 26.9687L18.2893 24.4688ZM10.7119 24.4688L10.7031 26.9688H10.7119V24.4688ZM10.5108 24.8012L8.30083 25.97L8.30497 25.9778L8.30918 25.9857L10.5108 24.8012ZM26.8501 17.7353C26.6966 17.5504 26.7426 17.6039 26.5741 17.4006L22.7248 20.5917C22.7375 20.607 22.9682 20.8871 23.0027 20.9287L26.8501 17.7353ZM26.5762 17.4032C25.9395 16.6331 25.7113 16.3302 25.5324 15.8368C25.3346 15.2915 25.1495 14.3375 25.1495 12.3125H20.1495C20.1495 14.5543 20.3413 16.1885 20.8319 17.5415C21.3415 18.9465 22.1133 19.852 22.7227 20.5891L26.5762 17.4032ZM25.1495 12.3125C25.1495 9.71492 24.5261 7.31949 23.0638 5.41112L19.095 8.45224C19.7159 9.26262 20.1495 10.4922 20.1495 12.3125H25.1495ZM23.0652 5.41293C21.9859 4.00174 20.5631 2.99305 18.8559 2.29064L16.9535 6.91459C17.9831 7.3382 18.6368 7.85315 19.0936 8.45043L23.0652 5.41293ZM19.12 2.41789C19.3615 2.55226 19.5772 2.72849 19.7569 2.93828L15.9596 6.19106C16.1655 6.43145 16.4126 6.63338 16.6894 6.78734L19.12 2.41789ZM20.2537 3.84932C19.5019 1.33195 17.3105 -0.6875 14.5 -0.6875V4.3125C14.7277 4.3125 15.2301 4.5009 15.4628 5.28002L20.2537 3.84932ZM14.5 -0.6875C11.6896 -0.6875 9.49895 1.33176 8.74707 3.84694L13.5376 5.27899C13.7702 4.50109 14.2722 4.3125 14.5 4.3125V-0.6875ZM9.27587 2.89975C9.44797 2.70663 9.65112 2.5436 9.87696 2.4174L12.316 6.78217C12.5763 6.63671 12.8104 6.44879 13.0088 6.22618L9.27587 2.89975ZM10.1448 2.28801C8.13946 3.11354 6.50315 4.38789 5.39711 6.18524C4.30503 7.95989 3.85111 10.0468 3.85111 12.3108H8.85111C8.85111 10.7007 9.17317 9.58936 9.65542 8.8057C10.1237 8.04473 10.8601 7.40066 12.0482 6.91156L10.1448 2.28801ZM3.85111 12.3108C3.85111 14.3372 3.66616 15.2915 3.46851 15.8367C3.29001 16.3291 3.06232 16.6314 2.42596 17.3995L6.27631 20.5893C6.88717 19.852 7.65947 18.9467 8.16915 17.5408C8.65968 16.1877 8.85111 14.5529 8.85111 12.3108H3.85111ZM2.4265 17.3989C2.33947 17.5039 2.23809 17.6258 2.13504 17.7524L6.01328 20.9082C6.09827 20.8038 6.18155 20.7036 6.27576 20.59L2.4265 17.3989ZM2.1497 17.7345C1.60193 18.3951 1.25488 19.1988 1.14961 20.0505L6.11185 20.6639C6.09993 20.7603 6.06063 20.8513 5.99862 20.9261L2.1497 17.7345ZM1.14961 20.0505C1.04434 20.9022 1.18526 21.7662 1.55569 22.5403L6.06587 20.382C6.10781 20.4696 6.12376 20.5674 6.11185 20.6639L1.14961 20.0505ZM1.55225 22.5331C2.33805 24.1887 3.99295 25.1546 5.75525 25.1546V20.1546C5.78077 20.1546 5.83637 20.1624 5.90294 20.2032C5.97081 20.2449 6.03198 20.3106 6.06931 20.3892L1.55225 22.5331ZM5.75525 25.1546H23.251V20.1546H5.75525V25.1546ZM23.251 25.1546C25.0165 25.1546 26.6583 24.1837 27.4428 22.5439L22.9323 20.3863C22.9679 20.3118 23.027 20.2473 23.0954 20.2052C23.1629 20.1636 23.2213 20.1546 23.251 20.1546V25.1546ZM27.4409 22.5478C27.8129 21.7737 27.9551 20.9091 27.8507 20.0566L22.8878 20.6641C22.876 20.5677 22.8921 20.4699 22.9341 20.3824L27.4409 22.5478ZM27.8507 20.0566C27.7464 19.204 27.3998 18.3993 26.8521 17.7377L23.0007 20.9263C22.9388 20.8515 22.8996 20.7605 22.8878 20.6641L27.8507 20.0566ZM14.502 29.6875C15.7717 29.6865 17.0175 29.3418 18.1072 28.6901L15.5407 24.399C15.2255 24.5875 14.8652 24.6872 14.498 24.6875L14.502 29.6875ZM18.1072 28.6901C19.1969 28.0383 20.0898 27.1038 20.6914 25.9857L16.2881 23.6168C16.1142 23.9402 15.8559 24.2105 15.5407 24.399L18.1072 28.6901ZM20.6997 25.97C20.9196 25.5542 21.0282 25.0887 21.015 24.6187L16.0169 24.7592C16.0059 24.3673 16.0965 23.9791 16.2798 23.6325L20.6997 25.97ZM21.015 24.6187C21.0018 24.1486 20.8672 23.69 20.6243 23.2872L16.3427 25.8694C16.1402 25.5336 16.028 25.1511 16.0169 24.7592L21.015 24.6187ZM20.6243 23.2872C20.3815 22.8845 20.0386 22.5515 19.629 22.3205L17.1726 26.6755C16.8311 26.4828 16.5452 26.2051 16.3427 25.8694L20.6243 23.2872ZM19.629 22.3205C19.2194 22.0894 18.757 21.9683 18.2867 21.9688L18.2918 26.9687C17.8997 26.9691 17.5141 26.8681 17.1726 26.6755L19.629 22.3205ZM18.2893 21.9688H10.7119V26.9688H18.2893V21.9688ZM10.7206 21.9688C10.2498 21.9671 9.78655 22.0874 9.37603 22.318L11.8243 26.6776C11.482 26.8698 11.0957 26.9701 10.7031 26.9687L10.7206 21.9688ZM9.37603 22.318C8.9655 22.5485 8.62166 22.8814 8.37799 23.2843L12.6564 25.8718C12.4533 26.2078 12.1666 26.4853 11.8243 26.6776L9.37603 22.318ZM8.37799 23.2843C8.13434 23.6872 7.99916 24.1464 7.98564 24.617L12.9836 24.7606C12.9723 25.153 12.8596 25.5359 12.6564 25.8718L8.37799 23.2843ZM7.98564 24.617C7.97212 25.0877 8.08072 25.5538 8.30083 25.97L12.7208 23.6325C12.9043 23.9795 12.9949 24.3681 12.9836 24.7606L7.98564 24.617ZM8.30918 25.9857C8.91066 27.1037 9.80349 28.0381 10.893 28.6898L13.4597 24.3989C13.1446 24.2104 12.8864 23.9402 12.7124 23.6168L8.30918 25.9857ZM10.893 28.6898C11.9825 29.3416 13.2281 29.6863 14.4977 29.6875L14.5023 24.6875C14.1351 24.6872 13.7749 24.5875 13.4597 24.3989L10.893 28.6898Z"
                                    fill="#C6C6C6" mask="url(#path-1-inside-1_1246_4341)" />
                            </svg>
                        </a>

                        <div id="tooltip-light" role="tooltip" data-tooltip-target="tooltip-light" data-tooltip-style="light"
                            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-main border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                            Notifikasi
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </li>
                    <li >
                        <a href="">
                            <img src="./assets/image/logo/siap-service.png" class="h-auto w-16 mr-3" alt="Flowbite Logo" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@endsection

    @section('contents')
    <main class="">
        <article>
            <section>
                <div class="bg-[#00BF71] w-full rounded-md relative">
                    <img src="./assets/image/avatar/avatar.png" alt="" class="w-36 absolute left-12 top-8 rounded-full ring-4 ring-[#FAFAFA]">
                    <button class="w-8 absolute left-36 top-36">
                        <form action="/upload" method="post" enctype="multipart/form-data">
                            <label for="fileInput" class=" cursor-pointer">
                                <img src="./assets/image/svg/Change Picture.svg" alt="">
                            </label>
                            <input type="file" id="fileInput" name="file" class="hidden">
                        </form>

                    </button>
                    <div class="flex flex-row relative px-12 py-6">
                        <div class="flex flex-col justify-center ml-40">
                            <span class="text-3xl text-[#ECECEC] font-bold my-2 mt-6">
                                Douglas Pratama
                            </span>
                            <span class="text-lg text-[#ECECEC] font-medium">
                                Admin
                            </span>
                        </div>
                        <span class="absolute right-12 top-12 text-[#ECECEC] text-lg"> id : Adzx888</span>
                    </div>
                    <div class="bg-[#FAFAFA] px-12 pt-20">
                        <div class="flex flex-row">
                            <div class="flex flex-col gap-8 w-96 mr-56">
                                <span class="text-silver-50 text-xl mb-3">Personal</span>
                                <form class="flex flex-col gap-10">
                                  
                                    <div class="relative z-0 w-full group">
                                        <input type="text" name="nama" id="nama" class="block p-4 w-full text-base text-silver-50 bg-transparent border-2 border-[#AFAFAF] rounded-md border-opacity-50 dark:focus:border-[#00BF71] focus:outline-none focus:ring-0 focus:border-[#00BF71] peer pl-7" placeholder=" " required />
                                        <label for="nama" class="peer-focus:font-medium absolute text-sm text-[#AFAFAF] bg-[#FAFAFA] px-2 duration-300 transform -translate-y-7 scale-90 top-5 left-4 z-10 peer-focus:text-[#00BF71] peer-focus:dark:text-[#00BF71] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-7 peer-focus:bg-[#FAFAFA] ">Nama Lengkap</label>
                                        <div id="error-message-nama-empty">
                                            <img src="./assets/image/svg/alert.svg" alt="" class="absolute right-5 top-5">
                                            <span class="text-[#FF6A69] text-xs">Error: Nama Tidak Boleh kosong</span>
                                        </div>
                                        <div id="error-message-nama-symbol" style="display: none;">
                                            <img src="./assets/image/svg/alert.svg" alt="" class="absolute right-5 top-5">
                                            <span class="text-[#FF6A69] text-xs">Error: Nama Lengkap Mengandung Angka dan Simbol</span>
                                        </div>
                                    </div>
                            
                                     <div class="relative z-0 w-full group">
                                        <input type="text" name="kota" id="kota" class="block p-4 w-full text-base text-silver-50 bg-transparent border-2 border-[#AFAFAF] rounded-md border-opacity-50 dark:focus:border-[#00BF71] focus:outline-none focus:ring-0 focus:border-[#00BF71] peer pl-7" placeholder=" " required />
                                        <label for="kota" class="peer-focus:font-medium absolute text-sm text-[#AFAFAF] bg-[#FAFAFA] px-2 duration-300 transform -translate-y-7 scale-90 top-5 left-5 z-10 peer-focus:text-[#00BF71] peer-focus:dark:text-[#00BF71] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-7 peer-focus:bg-[#FAFAFA] ">Kota</label>
                                        <div id="error-message-kota">
                                            <img src="./assets/image/svg/alert.svg" alt="" class="absolute right-5 top-5">
                                            <span class="text-[#FF6A69] text-xs">Error: Kota Tidak Boleh Kosong</span>
                                        </div>
                                    </div>

                                    <div class="relative z-0 w-full group">
                                        <textarea name="alamat" id="alamat" class="block p-4 w-full text-base text-silver-50 bg-transparent border-2 border-[#AFAFAF] rounded-md border-opacity-50 dark:focus:border-[#00BF71] focus:outline-none focus:ring-0 focus:border-[#00BF71] peer pl-7" placeholder=" " required ></textarea>
                                        <label for="alamat" class="peer-focus:font-medium absolute text-sm text-[#AFAFAF] bg-[#FAFAFA] px-2 duration-300 transform -translate-y-7 scale-90 top-5 left-4 z-10 peer-focus:text-[#00BF71] peer-focus:dark:text-[#00BF71] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-7 peer-focus:bg-[#FAFAFA] ">Detail Alamat</label>
                                        <div id="error-message-alamat">
                                            <img src="./assets/image/svg/alert.svg" alt="" class="absolute right-5 top-5">
                                            <span class="text-[#FF6A69] text-xs">Error: Alamat Tidak Boleh Kosong</span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="flex flex-col w-96 gap-8">
                                <span class="text-silver-50 text-xl mb-3">Kontak</span>
                                <form class="flex flex-col gap-10">
                                    <div class="relative z-0 w-full group">
                                        <input type="email" name="email" id="email" class="block p-4 w-full text-base text-silver-50 bg-transparent border-2 border-[#AFAFAF] rounded-md border-opacity-50 dark:focus:border-[#00BF71] focus:outline-none focus:ring-0 focus:border-[#00BF71] peer pl-7" placeholder=" " required />
                                        <label for="email" class="peer-focus:font-medium absolute text-sm text-[#AFAFAF] bg-[#FAFAFA] px-2 duration-300 transform -translate-y-7 scale-90 top-5 left-4 z-10 peer-focus:text-[#00BF71] peer-focus:dark:text-[#00BF71] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-90 peer-focus:-translate-y-7 peer-focus:bg-[#FAFAFA] ">Email</label>
                                        <div id="error-message-email">
                                            <img src="./assets/image/svg/alert.svg" alt="" class="absolute right-5 top-5">
                                            <span  class="text-[#FF6A69] text-xs">Error: Email Tidak Boleh Kosong</span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <div class="flex justify-center">
                            <button type="submit" class="bg-[#00BF71] py-3 px-6 my-6 mt-12 rounded-md text-[#FFFFFF] font-semibold  hover:bg-[#008753] hover:text-[#FFFFFF] ">Perbarui</button>
                        </div>
                        <script>
                            const namaInput = document.getElementById('nama');
                            const emptyError = document.getElementById('error-message-nama-empty');
                            const symbolError = document.getElementById('error-message-nama-symbol');

                            namaInput.addEventListener('input', function () {
                                const namaValue = namaInput.value;
                                const containsSymbol = /[!@#$%^&*(),.?":{}|<>]/.test(namaValue);
                                const containsNumber = /\d/.test(namaValue);

                                // Sembunyikan semua pesan error terlebih dahulu
                                emptyError.style.display = 'none';
                                symbolError.style.display = 'none';

                                // Tampilkan pesan error sesuai dengan kondisi input
                                if (!namaValue) {
                                    emptyError.style.display = 'block';
                                } else if (containsSymbol || containsNumber) {
                                    symbolError.style.display = 'block';
                                }
                            });
                        </script>
                        <script>
                            const emailInput = document.getElementById('email');
                            const kotaInput = document.getElementById('kota');
                            const alamatInput = document.getElementById('alamat');

                            const emailErrorMessage = document.getElementById('error-message-email');
                            const kotaErrorMessage = document.getElementById('error-message-kota');
                            const alamatErrorMessage = document.getElementById('error-message-alamat');

                            // Mendeteksi perubahan pada input
                            emailInput.addEventListener('input', function () {
                                // Menyembunyikan pesan error jika input diisi
                                emailErrorMessage.style.display = emailInput.value ? 'none' : 'block';
                            });

                            kotaInput.addEventListener('input', function () {
                                // Menyembunyikan pesan error jika input diisi
                                kotaErrorMessage.style.display = kotaInput.value ? 'none' : 'block';
                            });

                            alamatInput.addEventListener('input', function () {
                                // Menyembunyikan pesan error jika input diisi
                                alamatErrorMessage.style.display = alamatInput.value ? 'none' : 'block';
                            });
                        </script>
                    </div>
                    <div class="w-full bg-[#00BF71] h-6 rounded-md mb-6"></div>
                </div>
            </section>
        </article>
    </main>
    @endsection