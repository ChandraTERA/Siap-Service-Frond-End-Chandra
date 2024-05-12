<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Link Swiper's CSS -->
    <title>Siap Service</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <section style="background-image: url('./assets/image/bg-hero.png')"
        class="min-h-[500vh] z-20 md:h-screen h-full relative bg-cover object-contain bg-opacity-75 bg-center bg-local bg-no-repeat shrink-0 overflow">

        <div class="flex justify-center items-center h-screen absolute">
            <img src="./assets/image/bg-hero.png" alt="" class="min-h-screen w-screen -z-40 bg-no-repeat bg-center top-0 mt-0 bg-cover">
        </div>

        <!-- Navbar -->
        <nav 
            class="bg-[#131518]/50 backdrop-blur-xl w-full z-50 sticky top-0 left-0 ">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-end mx-auto p-4">
                <div class="flex md:order-1">
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 sticky justify-center text-sm text-white rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="md:order-2 items-center justify-between mx-auto  w-full md:flex md:w-auto"
                    id="navbar-sticky">
                    <ul
                        class="flex flex-col items-center p-4 md:p-0 mt-4 font-medium md:flex-row md:space-x-12 md:mt-0 md:border-0">
                        <li>
                            <a href="#home"
                                class="block cursor-pointer py-2 pl-3 pr-4 text-white hover:text-main rounded md:bg-transparent md:p-0"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#about"
                                class="block cursor-pointer py-2 pl-3 pr-4 text-white hover:text-main rounded md:bg-transparent md:p-0">About</a>
                        </li>
                        <li>
                            <a href="#layanan" class="flex items-center ">
                                <img src="./assets/image/logo/siap-service.png" class="h-16" alt="Siap Service Logo">
                            </a>
                        </li>
                        <li>
                            <a href="#aplikasi"
                                class="block cursor-pointer py-2 pl-3 pr-4 text-white hover:text-main rounded md:bg-transparent md:p-0">Aplikasi</a>
                        </li>
                        <li>
                            <a href="#contact-us"
                                class="block cursor-pointer py-2 pl-3 pr-4 text-white hover:text-main rounded md:bg-transparent md:p-0">Contact
                                Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        

        <!-- Hero -->
        <div id="home"
            class="container min-h-[40vh] flex flex-col-reverse md:flex-row items-center justify-start md:justify-between mx-auto md:gap-4 gap-0 my-4 p-4">
            <div 
                data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200"
                class="container min-w-md:w-6/12 w-full z-20">
                <h1
                    class="lg:mb-10 mb-4 text-xl sm:text-2xl md:text-3xl lg:text-5xl font-extrabold leading-none xs:leading-6 tracking-tight text-gray-900 dark:text-white">
                    Percayakan Perbaikan Handphone dan Komputer kepada Pakar Kami
                </h1>
                <button type="button"
                    class="md:w-64 text-white bg-main hover:bg-white hover:text-main focus:outline-none focus:ring-4 focus:ring-green-300 font-semibold border text-lg border-white hover:border-main px-8 py-4 xs:py-2 text-center shadow-md">Download</button>
            </div>
            <div data-aos="fade-up-left" data-aos-duration="2000" data-aos-delay="300" class="min-w-md:w-6/12 w-full z-40 md:mt-16 m-2">
                <img class="h-auto w-full bg-center" src="./assets/image/hero.png" alt="image description">
            </div>
        </div>


        <main style="background-image: url('./assets/image/bg-section.png')"
            class="min-h-screen relative overflow-x-clip bg-cover bg-opacity-50 bg-center bg-local bg-no-repeat shrink-0">
            <!-- separate -->
            <div class="bg-[#131518] blur-xl absolute content-[''] w-full h-28 py-6 -top-[75px]"></div>

            <div id="about"
                class="container mx-auto relative">
                <h2 class="text-4xl text-center font-bold text-white pt-8">Tentang <span class="text-main"> Siap
                        Service</span>
                </h2>
                <div
                    class="flex flex-col-reverse items-center md:flex-row xl:items-start md:justify-between mx-auto md:gap-24 gap-12">
                    <div data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200"   
                    class="lg:w-4/12 w-full md:mt-8 m-2">
                        <img class="h-auto w-full bg-center" src="./assets/image/about.png" alt="image description">
                    </div>
                    <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200"       
                    class="md:w-8/12 w-full sm:-mt-18 md:mt-16 mt-2 z-20">
                        <h3 class="text-3xl font-bold text-main mb-3">Siap Service</h3>
                        <p class="text-white max-w-lg">SIAP SERVICE adalah perusahaan unggulan dalam bidang jasa
                            perbaikan dan
                            dukungan teknologi, yang fokus pada layanan perangkat handphone, komputer, dan laptop. Kami
                            didirikan dengan visi untuk menyediakan solusi teknis yang handal, cepat, dan berkualitas
                            tinggi
                            bagi pelanggan kami. Sebagai mitra tepercaya, kami berkomitmen untuk menjadikan perangkat
                            teknologi Anda berfungsi dengan optimal.</p>
                    </div>
                </div>
            </div>

            <div id="layanan"
                class="container mx-auto relative mb-4">
                <h2 class="text-4xl text-center font-bold text-white pt-4 xs:pt-24">Layanan <span class="text-main">
                        Siap
                        Service</span></h2>
                <div class="flex flex-col lg:flex-row justify-between h-fit lg:gap-8 gap-2">
                    <figure data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" class="relative justify-center h-60 w-full lg:w-4/12 my-48 pb-4 px-6">
                        <div class="flex justify-center">
                            <img src="./assets/image/hp.png" alt="handphone" class="absolute -top-32 max-w-80">
                        </div>
                        <figcaption class="bg-base rounded-2xl pt-20 p-6 min-h-[20rem]">
                            <h3 class="text-3xl font-bold text-black text-center">Service Handphone</h3>
                            <p class="text-black mt-2  break-words">Tim teknisi berpengalaman kami siap untuk mengatasi berbagai
                                masalah handphone, termasuk layar retak, baterai lemah, perbaikan perangkat lunak, dan
                                lainnya. Kami menggunakan suku cadang asli dan peralatan terkini untuk memastikan
                                perbaikan yang handal.</p>
                        </figcaption>
                    </figure>
                    <figure data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" class="relative justify-center h-60 w-full lg:w-4/12 my-48 pb-4 px-6">
                        <div class="flex justify-center">
                            <img src="./assets/image/laptop.png" alt="handphone" class="absolute -top-32 max-w-80">
                        </div>
                        <figcaption class="bg-base rounded-2xl pt-20 p-6 min-h-[20rem]">
                            <h3 class="text-3xl font-bold text-black text-center">Service Laptop</h3>
                            <p class="text-black mt-2  break-words">SIAP SERVICE memiliki keahlian dalam perbaikan perangkat
                                komputer, termasuk desktop dan laptop. Kami mengatasi masalah perangkat keras, instalasi
                                perangkat lunak, pemulihan data, dan meningkatkan kinerja komputer Anda.</p>
                        </figcaption>
                    </figure>
                    <figure data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" class="relative justify-center h-60 w-full lg:w-4/12 my-48 pb-4 px-6 ">
                        <div class="flex justify-center">
                            <img src="./assets/image/komputer.png" alt="handphone" class="absolute -top-36 md:max-w-80">
                        </div>
                        <figcaption class="bg-base rounded-2xl pt-20 p-6 min-h-[20rem]">
                            <h3 class="text-3xl font-bold text-black text-center">Service Komputer</h3>
                            <p class="text-black mt-2  break-words">Kami memiliki teknisi yang terampil dalam perbaikan berbagai
                                jenis laptop, termasuk yang menjalankan sistem operasi Windows, macOS, dan lainnya. Kami
                                menangani masalah layar, keyboard, daya, dan komponen lainnya dengan cermat.</p>
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div
            class="container mx-auto relative ">
                <h2 class="text-4xl text-center font-bold text-white pt-4 xs:pt-24">Testimoni Pelanggan <span
                        class="text-main">
                        Siap
                        Service</span></h2>
                <div data-aos="zoom-in-up"
                class="flex flex-row justify-between gap-8">

                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide container sm:flex-row flex-col">
                                <figure
                                    class="relative justify-center h-auto xs:h-56 w-full sm:w-6/12 my-48 xs:my-28 pb-4 px-6">
                                    <div class="flex justify-center overflow-hidden">
                                        <img src="#" alt=""
                                            class="absolute h-32 w-32 rounded-full -top-16 border-[3px] border-[#D9D9D9] bg-indigo-500">
                                    </div>
                                    <figcaption class="bg-white rounded-xl pt-20 p-6">
                                        <div class="flex items-center justify-center space-x-1 mb-5">
                                            
                                            <img src="./assets/svg/star-rate.svg" alt="rating">
                                            <img src="./assets/svg/star-rate.svg" alt="rating">
                                            <img src="./assets/svg/star-rate.svg" alt="rating">
                                            <img src="./assets/svg/star-rate.svg" alt="rating">
                                            <img src="./assets/svg/star-unrate.svg" alt="rating">

                                        </div>
                                        <h3 class="text-3xl font-bold text-black text-center">Bima Wong</h3>
                                        <p class="text-black mt-2">Cuman mau bilang kalo disini, pelayanan ramah, harga
                                            terjangkau
                                        </p>
                                    </figcaption>
                                </figure>
                                <figure id="l-none"
                                    class="relative justify-center h-auto xs:h-56 w-full sm:w-6/12 my-48 xs:my-28 pb-4 px-6">
                                    <div class="flex justify-center overflow-hidden">
                                        <img src="#" alt=""
                                            class="absolute h-32 w-32 rounded-full -top-16 border-[3px] border-[#D9D9D9] bg-indigo-500">
                                    </div>
                                    <figcaption class="bg-white rounded-xl pt-20 p-6">
                                        <div class="flex items-center justify-center space-x-1 mb-5">
                                            <img src="./assets/svg/star-rate.svg" alt="rating">
                                            <img src="./assets/svg/star-rate.svg" alt="rating">
                                            <img src="./assets/svg/star-rate.svg" alt="rating">
                                            <img src="./assets/svg/star-rate.svg" alt="rating">
                                            <img src="./assets/svg/star-unrate.svg" alt="rating">

                                        </div>
                                        <h3 class="text-3xl font-bold text-black text-center">Nagita Salahvina</h3>
                                        <p class="text-black mt-2">Pelayanannya diluar dugaan beserta hasil servisannya
                                            tidak
                                            sembarngan</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="swiper-slide container sm:flex-row flex-col">
                                <figure 
                                    class="relative justify-center h-auto xs:h-56 w-full sm:w-6/12 my-48 xs:my-28 pb-4 px-6">
                                    <div class="flex justify-center overflow-hidden">
                                        <img src="#" alt=""
                                            class="absolute h-32 w-32 rounded-full -top-16 border-[3px] border-[#D9D9D9] bg-indigo-500">
                                    </div>
                                    <figcaption class="bg-white rounded-xl pt-20 p-6">
                                        <div class="flex items-center justify-center space-x-1 mb-5">
                                            <img src="./assets/svg/star-rate.svg" alt="rating">
                                            <img src="./assets/svg/star-rate.svg" alt="rating">
                                            <img src="./assets/svg/star-rate.svg" alt="rating">
                                            <img src="./assets/svg/star-rate.svg" alt="rating">
                                            <img src="./assets/svg/star-unrate.svg" alt="rating">

                                        </div>
                                        <h3 class="text-3xl font-bold text-black text-center">Bima Wong</h3>
                                        <p class="text-black mt-2">Cuman mau bilang kalo disini, pelayanan ramah, harga
                                            terjangkau
                                        </p>
                                    </figcaption>
                                </figure>
                                <figure id="l-none"
                                    class="relative justify-center h-auto xs:h-56 w-full sm:w-6/12 my-48 xs:my-28 pb-4 px-6">
                                    <div class="flex justify-center overflow-hidden">
                                        <img src="#" alt=""
                                            class="absolute h-32 w-32 rounded-full -top-16 border-[3px] border-[#D9D9D9] bg-indigo-500">
                                    </div>
                                    <figcaption class="bg-white rounded-xl pt-20 p-6">
                                        <div class="flex items-center justify-center space-x-1 mb-5">
                                            <img src="./assets/svg/star-rate.svg" alt="rating">
                                            <img src="./assets/svg/star-rate.svg" alt="rating">
                                            <img src="./assets/svg/star-rate.svg" alt="rating">
                                            <img src="./assets/svg/star-rate.svg" alt="rating">
                                            <img src="./assets/svg/star-unrate.svg" alt="rating">

                                        </div>
                                        <h3 class="text-3xl font-bold text-black text-center">Nagita Salahvina</h3>
                                        <p class="text-black mt-2">Pelayanannya diluar dugaan beserta hasil servisannya
                                            tidak
                                            sembarngan</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="swiper-slide container sm:flex-row flex-col">
                                <figure
                                    class="relative justify-center h-auto xs:h-56 w-full sm:w-6/12 my-48 xs:my-28 pb-4 px-6">
                                    <div class="flex justify-center overflow-hidden">
                                        <img src="#" alt=""
                                            class="absolute h-32 w-32 rounded-full -top-16 border-[3px] border-[#D9D9D9] bg-indigo-500">
                                    </div>
                                    <figcaption class="bg-white rounded-xl pt-20 p-6">
                                        <div class="flex items-center justify-center space-x-1 mb-5">
                                            <img src="./assets/svg/star-rate.svg" alt="rating">
                                            <img src="./assets/svg/star-rate.svg" alt="rating">
                                            <img src="./assets/svg/star-rate.svg" alt="rating">
                                            <img src="./assets/svg/star-rate.svg" alt="rating">
                                            <img src="./assets/svg/star-unrate.svg" alt="rating">

                                        </div>
                                        <h3 class="text-3xl font-bold text-black text-center">Bima Wong</h3>
                                        <p class="text-black mt-2">Cuman mau bilang kalo disini, pelayanan ramah, harga
                                            terjangkau
                                        </p>
                                    </figcaption>
                                </figure>
                                <figure id="l-none"
                                    class="relative justify-center h-auto xs:h-56 w-full sm:w-6/12 my-48 xs:my-28 pb-4 px-6">
                                    <div class="flex justify-center overflow-hidden">
                                        <img src="#" alt=""
                                            class="absolute h-32 w-32 rounded-full -top-16 border-[3px] border-[#D9D9D9] bg-indigo-500">
                                    </div>
                                    <figcaption class="bg-white rounded-xl pt-20 p-6">
                                        <div class="flex items-center justify-center space-x-1 mb-5">
                                            <img src="./assets/svg/star-rate.svg" alt="rating">
                                            <img src="./assets/svg/star-rate.svg" alt="rating">
                                            <img src="./assets/svg/star-rate.svg" alt="rating">
                                            <img src="./assets/svg/star-rate.svg" alt="rating">
                                            <img src="./assets/svg/star-unrate.svg" alt="rating">

                                        </div>
                                        <h3 class="text-3xl font-bold text-black text-center">Nagita Salahvina</h3>
                                        <p class="text-black mt-2">Pelayanannya diluar dugaan beserta hasil servisannya
                                            tidak
                                            sembarngan</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

                </div>
            </div>


            <div id="aplikasi"
            class="container mx-auto relative">
                <h2 data-aos="zoom-out-up" data-aos-duration="1000" data-aos-delay="300" class="text-4xl text-center font-bold text-white pt-4 xs:pt-24">
                    Aplikasi <span class="text-main">
                        Siap Service</span></h2>

                <div data-aos="flip-up" data-aos-duration="1000" data-aos-delay="300" c class="flex justify-center">
                    <figure class="relative justify-center h-auto w-full my-48 pb-4 px-6">
                        <div class="flex justify-center overflow-hidden">
                            <img src="./assets/image/apps.png" alt="app"
                                class="w-full h-auto max-w-xl z-20 static">
                            <figcaption
                                class="bg-[#7B7B7B] absolute sm:h-96 l:h-80 m:h-72 w-10/12 mt-36  rounded-2xl flex items-end justify-center">
                                <div class="flex flex-col">
                                    <h2 class="text-2xl text-center font-normal text-white py-4">
                                        Download Aplikasi <span class="text-main uppercase">
                                            Siap Service</span></h2>
                                    <div class="flex sm:flex-row flex-col justify-center mx-auto gap-2 sm:pb-6 pb-4">
                                        <button type="button"
                                            class="text-black bg-[#D9D9D9] hover:bg-main/90 focus:ring-4 focus:outline-none focus:ring-main/50 font-medium rounded-full text-sm px-5 py-2.5 text-center inline-flex items-center">
                                            <svg class="w-5 h-5 mr-2 -ml-1" xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="19" viewBox="0 0 16 19" fill="none">
                                                <path
                                                    d="M12.6371 17.28C11.6571 18.23 10.5871 18.08 9.55708 17.63C8.46708 17.17 7.46708 17.15 6.31708 17.63C4.87708 18.25 4.11708 18.07 3.25708 17.28C-1.62292 12.25 -0.902922 4.59 4.63708 4.31C5.98708 4.38 6.92708 5.05 7.71708 5.11C8.89708 4.87 10.0271 4.18 11.2871 4.27C12.7971 4.39 13.9371 4.99 14.6871 6.07C11.5671 7.94 12.3071 12.05 15.1671 13.2C14.5971 14.7 13.8571 16.19 12.6271 17.29L12.6371 17.28ZM7.61708 4.25C7.46708 2.02 9.27708 0.18 11.3571 0C11.6471 2.58 9.01708 4.5 7.61708 4.25Z"
                                                    fill="black" />
                                            </svg>
                                            App Store
                                        </button>
                                        <button type="button"
                                            class="text-black bg-[#D9D9D9] hover:bg-main/90 focus:ring-4 focus:outline-none focus:ring-main/50 font-medium rounded-full text-sm px-5 py-2.5 text-center inline-flex items-center">
                                            <svg class="w-5 h-5 mr-2 -ml-1" aria-hidden="true" focusable="false"
                                                xmlns="http://www.w3.org/2000/svg" width="17" height="18"
                                                viewBox="0 0 17 18" fill="none">
                                                <path
                                                    d="M8.954 8.60204L11.911 5.64504L2.36 0.277035C1.727 -0.0649652 1.134 -0.112965 0.614 0.261035L8.954 8.60204ZM12.415 12.064L15.489 10.335C16.089 9.99903 16.418 9.52304 16.418 8.99504C16.418 8.46803 16.089 7.99103 15.49 7.65503L12.707 6.09203L9.574 9.22404L12.415 12.064ZM0.0999999 0.988035C0.0359999 1.18503 0 1.40503 0 1.64603V16.351C0 16.732 0.0840001 17.06 0.236 17.321L8.333 9.22304L0.0999999 0.988035ZM8.954 9.84304L0.902 17.896C1.056 17.955 1.222 17.986 1.397 17.986C1.709 17.986 2.034 17.894 2.365 17.71L11.62 12.513L8.954 9.84304Z"
                                                    fill="black" />
                                            </svg>
                                            Play Store
                                        </button>
                                    </div>
                                </div>
                            </figcaption>
                        </div>
                    </figure>
                </div>
            </div>
            </div>

            <footer  id="contact-us"
            class="mx-auto bottom-0 bg-black py-6 mt-72">
                <div class="container  mx-auto">
                    <div class="relative flex flex-col sm:flex-row xl:justify-between border-b-2 border-white pb-6">

                        <div class="flex flex-col sm:flex-row justify-start md:gap-8 gap-4">
                            <a href="#layanan" class="flex items-center">
                                <img src="./assets/image/logo/siap-service.png" class="sm:w-full w-32 shrink-0"
                                    alt="Siap Service Logo">
                            </a>
                            <div class="flex flex-col justify-between gap-3">
                                <a href="https://www.google.com/maps?q=Jl.+Janti,+Gang.+Arjuna,+No.+59,+Karangjambe,+Banguntapan,+Bantul,+Yogyakarta+55198"
                                    target="_blank" class="text-white hover:text-main max-w-96">Jl. Janti, Gang. Arjuna, No. 59,
                                    Karangjambe,
                                    Banguntapan, Bantul, Yogyakarta 55198.
                                </a>
                                <a href="https://wa.me/02744534571" target="_blank" class="flex items-center gap-2">
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 22 22" fill="none">
                                        <path
                                            d="M21 17.33C21 17.69 20.9199 18.06 20.7496 18.42C20.5794 18.78 20.359 19.12 20.0686 19.44C19.5779 19.98 19.0371 20.37 18.4261 20.62C17.8252 20.87 17.1743 21 16.4732 21C15.4517 21 14.36 20.76 13.2083 20.27C12.0566 19.78 10.9049 19.12 9.76314 18.29C8.61142 17.45 7.51978 16.52 6.47822 15.49C5.44667 14.45 4.51527 13.36 3.68403 12.22C2.86279 11.08 2.2018 9.94 1.72108 8.81C1.24036 7.67 1 6.58 1 5.54C1 4.86 1.12018 4.21 1.36054 3.61C1.6009 3 1.98147 2.44 2.51227 1.94C3.15323 1.31 3.85428 1 4.59539 1C4.87581 1 5.15623 1.06 5.40661 1.18C5.667 1.3 5.89735 1.48 6.07762 1.74L8.4011 5.01C8.58137 5.26 8.71157 5.49 8.8017 5.71C8.89184 5.92 8.94191 6.13 8.94191 6.32C8.94191 6.56 8.87181 6.8 8.7316 7.03C8.6014 7.26 8.41112 7.5 8.17076 7.74L7.40961 8.53C7.29945 8.64 7.24937 8.77 7.24937 8.93C7.24937 9.01 7.25939 9.08 7.27942 9.16C7.30946 9.24 7.33951 9.3 7.35954 9.36C7.53981 9.69 7.85028 10.12 8.29094 10.64C8.74161 11.16 9.22233 11.69 9.74311 12.22C10.2839 12.75 10.8047 13.24 11.3355 13.69C11.8563 14.13 12.2869 14.43 12.6274 14.61C12.6775 14.63 12.7376 14.66 12.8077 14.69C12.8878 14.72 12.968 14.73 13.0581 14.73C13.2283 14.73 13.3585 14.67 13.4687 14.56L14.2298 13.81C14.4802 13.56 14.7206 13.37 14.9509 13.25C15.1813 13.11 15.4116 13.04 15.662 13.04C15.8523 13.04 16.0526 13.08 16.2729 13.17C16.4932 13.26 16.7236 13.39 16.974 13.56L20.2889 15.91C20.5493 16.09 20.7296 16.3 20.8398 16.55C20.9399 16.8 21 17.05 21 17.33Z"
                                            fill="white" stroke="#292D32" stroke-width="2"
                                            stroke-miterlimit="10" />
                                    </svg> --}}
                                    <span class="text-white hover:text-main">(0274) 4534571.</span>
                                </a>
                                <a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&to=sevenincjogja@gmail.com" target="_blank" class="flex items-center gap-2">
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="27" height="22"
                                        viewBox="0 0 27 22" fill="none">
                                        <path
                                            d="M19.75 21H7.25C3.5 21 1 19.2353 1 15.1176V6.88235C1 2.76471 3.5 1 7.25 1H19.75C23.5 1 26 2.76471 26 6.88235V15.1176C26 19.2353 23.5 21 19.75 21Z"
                                            fill="white" stroke="#292D32" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M19.75 7.4707L15.8375 10.4119C14.55 11.3766 12.4375 11.3766 11.15 10.4119L7.25 7.4707"
                                            fill="white" />
                                        <path
                                            d="M19.75 7.4707L15.8375 10.4119C14.55 11.3766 12.4375 11.3766 11.15 10.4119L7.25 7.4707"
                                            stroke="#292D32" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg> --}}
                                    <span class="text-white hover:text-main" target="_blank"
                                        >sevenincjogja@gmail.com</span>
                                </a>
                            </div>
                        </div>

                        <ul class="max-w-md space-y-1 text-white list-inside xl:right-56 xl:absolute">
                            <a href="#home">
                                <li class="flex items-center hover:text-main cursor-pointer">
                                    {{-- <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewBox="0 0 12 12" fill="none">
                                        <path
                                            d="M7.23755 6L3.56255 2.325C3.43755 2.2 3.37705 2.052 3.38105 1.881C3.38505 1.71 3.44971 1.56217 3.57505 1.4375C3.70005 1.3125 3.84805 1.25 4.01905 1.25C4.19005 1.25 4.33788 1.3125 4.46255 1.4375L8.30005 5.2875C8.40005 5.3875 8.47504 5.5 8.52504 5.625C8.57505 5.75 8.60005 5.875 8.60005 6C8.60005 6.125 8.57505 6.25 8.52504 6.375C8.47504 6.5 8.40005 6.6125 8.30005 6.7125L4.45005 10.5625C4.32505 10.6875 4.17921 10.748 4.01255 10.744C3.84588 10.74 3.70005 10.6753 3.57505 10.55C3.45005 10.425 3.38755 10.277 3.38755 10.106C3.38755 9.935 3.45005 9.78717 3.57505 9.6625L7.23755 6Z"
                                            fill="#2DC538" />
                                    </svg> --}}
                                    Home
                                </li>
                            </a>
                            <a href="#about">
                                <li class="flex items-center hover:text-main cursor-pointer">
                                    {{-- <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewBox="0 0 12 12" fill="none">
                                        <path
                                            d="M7.23755 6L3.56255 2.325C3.43755 2.2 3.37705 2.052 3.38105 1.881C3.38505 1.71 3.44971 1.56217 3.57505 1.4375C3.70005 1.3125 3.84805 1.25 4.01905 1.25C4.19005 1.25 4.33788 1.3125 4.46255 1.4375L8.30005 5.2875C8.40005 5.3875 8.47504 5.5 8.52504 5.625C8.57505 5.75 8.60005 5.875 8.60005 6C8.60005 6.125 8.57505 6.25 8.52504 6.375C8.47504 6.5 8.40005 6.6125 8.30005 6.7125L4.45005 10.5625C4.32505 10.6875 4.17921 10.748 4.01255 10.744C3.84588 10.74 3.70005 10.6753 3.57505 10.55C3.45005 10.425 3.38755 10.277 3.38755 10.106C3.38755 9.935 3.45005 9.78717 3.57505 9.6625L7.23755 6Z"
                                            fill="#2DC538" />
                                    </svg> --}}
                                    About
                                </li>
                            </a>
                            <a href="#aplikasi">
                                <li class="flex items-center hover:text-main cursor-pointer">
                                    {{-- <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewBox="0 0 12 12" fill="none">
                                        <path
                                            d="M7.23755 6L3.56255 2.325C3.43755 2.2 3.37705 2.052 3.38105 1.881C3.38505 1.71 3.44971 1.56217 3.57505 1.4375C3.70005 1.3125 3.84805 1.25 4.01905 1.25C4.19005 1.25 4.33788 1.3125 4.46255 1.4375L8.30005 5.2875C8.40005 5.3875 8.47504 5.5 8.52504 5.625C8.57505 5.75 8.60005 5.875 8.60005 6C8.60005 6.125 8.57505 6.25 8.52504 6.375C8.47504 6.5 8.40005 6.6125 8.30005 6.7125L4.45005 10.5625C4.32505 10.6875 4.17921 10.748 4.01255 10.744C3.84588 10.74 3.70005 10.6753 3.57505 10.55C3.45005 10.425 3.38755 10.277 3.38755 10.106C3.38755 9.935 3.45005 9.78717 3.57505 9.6625L7.23755 6Z"
                                            fill="#2DC538" />
                                    </svg> --}}
                                    Aplikasi
                                </li>
                            </a>
                            <a href="#contact-us">
                                <li class="flex items-center hover:text-main cursor-pointer">
                                    {{-- <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewBox="0 0 12 12" fill="none">
                                        <path
                                            d="M7.23755 6L3.56255 2.325C3.43755 2.2 3.37705 2.052 3.38105 1.881C3.38505 1.71 3.44971 1.56217 3.57505 1.4375C3.70005 1.3125 3.84805 1.25 4.01905 1.25C4.19005 1.25 4.33788 1.3125 4.46255 1.4375L8.30005 5.2875C8.40005 5.3875 8.47504 5.5 8.52504 5.625C8.57505 5.75 8.60005 5.875 8.60005 6C8.60005 6.125 8.57505 6.25 8.52504 6.375C8.47504 6.5 8.40005 6.6125 8.30005 6.7125L4.45005 10.5625C4.32505 10.6875 4.17921 10.748 4.01255 10.744C3.84588 10.74 3.70005 10.6753 3.57505 10.55C3.45005 10.425 3.38755 10.277 3.38755 10.106C3.38755 9.935 3.45005 9.78717 3.57505 9.6625L7.23755 6Z"
                                            fill="#2DC538" />
                                    </svg> --}}
                                    Contact Us
                                </li>
                            </a>

                        </ul>
                    </div>


                </div>
                <div class="container mx-auto flex gap-4 mt-2">
                    <a href="#">
                        {{-- <svg class="hover:text-main text-white" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                            fill="currentColor">
                            <path
                                d="M22.7273 0H2.27273C1.01705 0 0 1.01705 0 2.27273V22.7273C0 23.983 1.01705 25 2.27273 25H13.6364V14.7727H10.2273V11.3636H13.6364V9.53295C13.6364 6.06705 15.325 4.54545 18.2057 4.54545C19.5852 4.54545 20.3148 4.64773 20.6602 4.69432V7.95455H18.6955C17.4727 7.95455 17.0455 8.6 17.0455 9.90682V11.3636H20.6295L20.1432 14.7727H17.0455V25H22.7273C23.983 25 25 23.983 25 22.7273V2.27273C25 1.01705 23.9818 0 22.7273 0Z"
                                fill="currentColor" />
                        </svg> --}}
                    </a>
                    <a href="#">
                        {{-- <svg class="hover:text-main text-white" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                            fill="currentColor">
                            <path
                                d="M22.7273 0H2.27273C1.01705 0 0 1.01705 0 2.27273V22.7273C0 23.983 1.01705 25 2.27273 25H22.7273C23.983 25 25 23.983 25 22.7273V2.27273C25 1.01705 23.9818 0 22.7273 0ZM21.2375 10.7659C21.0898 10.7795 20.9409 10.7886 20.7909 10.7886C19.092 10.7886 17.5989 9.91591 16.7295 8.59432C16.7295 12.0591 16.7295 16.0023 16.7295 16.0682C16.7295 19.1193 14.2557 21.592 11.2057 21.592C8.15568 21.5909 5.68182 19.117 5.68182 16.067C5.68182 13.0159 8.15568 10.5432 11.2057 10.5432C11.3216 10.5432 11.4341 10.5534 11.5466 10.5602V13.283C11.433 13.2693 11.3227 13.2489 11.2057 13.2489C9.64886 13.2489 8.38636 14.5114 8.38636 16.0682C8.38636 17.625 9.64773 18.8875 11.2057 18.8875C12.7636 18.8875 14.1386 17.6602 14.1386 16.1034C14.1386 16.0409 14.1659 3.41023 14.1659 3.41023H16.767C17.0114 5.73636 18.8898 7.57273 21.2375 7.74091V10.7659Z"
                                fill="currentColor" />
                        </svg> --}}
                    </a>
                    <a href="#">
                        {{-- <svg class="hover:text-main text-white" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                            fill="currentColor">
                            <path
                                d="M7.28963 0C3.26984 0 0 3.27287 0 7.2937V17.7104C0 21.7302 3.27287 25 7.2937 25H17.7104C21.7302 25 25 21.7271 25 17.7063V7.28963C25 3.26984 21.7271 0 17.7063 0H7.28963ZM19.7917 4.16667C20.3667 4.16667 20.8333 4.63333 20.8333 5.20833C20.8333 5.78333 20.3667 6.25 19.7917 6.25C19.2167 6.25 18.75 5.78333 18.75 5.20833C18.75 4.63333 19.2167 4.16667 19.7917 4.16667ZM12.5 6.25C15.9469 6.25 18.75 9.05312 18.75 12.5C18.75 15.9469 15.9469 18.75 12.5 18.75C9.05312 18.75 6.25 15.9469 6.25 12.5C6.25 9.05312 9.05312 6.25 12.5 6.25ZM12.5 8.33333C11.3949 8.33333 10.3351 8.77232 9.55372 9.55372C8.77232 10.3351 8.33333 11.3949 8.33333 12.5C8.33333 13.6051 8.77232 14.6649 9.55372 15.4463C10.3351 16.2277 11.3949 16.6667 12.5 16.6667C13.6051 16.6667 14.6649 16.2277 15.4463 15.4463C16.2277 14.6649 16.6667 13.6051 16.6667 12.5C16.6667 11.3949 16.2277 10.3351 15.4463 9.55372C14.6649 8.77232 13.6051 8.33333 12.5 8.33333Z"
                                fill="currentColor" />
                        </svg> --}}
                    </a>
                    {{-- <a href="#">
                        <svg class="hover:text-main text-white" xmlns="http://www.w3.org/2000/svg" width="30" height="25" viewBox="0 0 30 25"
                            fill="currentColor">
                            <path
                                d="M14.7714 0C10.015 0 3.84154 1.19174 3.84154 1.19174L3.82601 1.2095C1.6597 1.55596 0 3.41745 0 5.68131V12.4989V12.5011V19.3165V19.3187C0.00211396 20.3999 0.38959 21.4449 1.09286 22.2661C1.79612 23.0874 2.76911 23.631 3.83711 23.7994L3.84154 23.806C3.84154 23.806 10.015 25 14.7714 25C19.5278 25 25.7013 23.806 25.7013 23.806L25.7035 23.8038C26.7727 23.6358 27.7468 23.0917 28.4506 22.2695C29.1544 21.4473 29.5417 20.401 29.5428 19.3187V19.3165V12.5011V12.4989V5.68131C29.5412 4.59974 29.154 3.55418 28.4507 2.73249C27.7474 1.91081 26.7741 1.36687 25.7057 1.1984L25.7013 1.19174C25.7013 1.19174 19.5278 0 14.7714 0ZM11.3626 7.27031L20.4527 12.4989L11.3626 17.7275V7.27031Z"
                                fill="currentColor" />
                        </svg> --}}
                    </a>
                </div>

            </footer>
        </main>
    </section>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
        
        // Initialize Swiper
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });


            // Menggunakan JavaScript untuk menampilkan kembali elemen dengan ID "l-none"
    function showElement() {
        const element = document.getElementById("l-none");
        if (element) {
            element.style.display = "none";
        }
    }

    // Contoh penggunaan: panggil fungsi ini saat perlu menampilkan kembali elemen.
    // Misalnya, Anda dapat memanggilnya saat suatu peristiwa tertentu terjadi.
    </script>
</body>

</html>