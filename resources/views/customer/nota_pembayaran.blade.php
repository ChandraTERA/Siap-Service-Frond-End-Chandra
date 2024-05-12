<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Nota Pembayaran</title>
</head>

<body class="bg-slate-100">
    <main class="flex flex-col min-h-screen max-w-lg mx-auto bg-white">
        <div id="nota" class="bg-white pb-3">
            <header class="bg-main py-6  z-50">
                <nav class="px-5 pl-24 w-full flex items-center">
                    <h1 class="text-white font-normal text-xl">Nota Pembayaran</h1>
                </nav>
            </header>
            <article class="px-5">
                <div class="font-normal text-lg text-[#D71E1E] bg-[#FDCF6F] bg-opacity-50 p-5 mt-4">
                    <span>Caution :</span>
                    <p>
                        Jangan bagikan bukti pembayaran kepada orang lain.
                    </p>
                </div>
                <div class="px-5 mt-2">
                    <h1 class="text-2xl font-medium text-black">Informasi</h1>
                    <div class="flex justify-between">
                        <h2 class="text-md font-medium text-black text-opacity-[87%]">
                            ID Transaksi</h2>
                        <h2 class="text-md font-medium text-black text-opacity-60">
                            IT47578</h2>
                    </div>
                    <div class="flex justify-between">
                        <h2 class="text-md font-medium text-black text-opacity-[87%]">
                            Tanggal Service</h2>
                        <h2 class="text-md font-medium text-black text-opacity-60">
                            20/10/2022</h2>
                    </div>
                    <div class="flex justify-between">
                        <h2 class="text-md font-medium text-black text-opacity-[87%]">
                            Tanggal Pengambilan</h2>
                        <h2 class="text-md font-medium text-black text-opacity-60">
                            23/10/2022</h2>
                    </div>
                    <div class="flex justify-between">
                        <h2 class="text-md font-medium text-black text-opacity-[87%]">
                            Nama Customer</h2>
                        <h2 class="text-md font-medium text-black text-opacity-60">
                            Martin Bergson</h2>
                    </div>
                    <div class="flex justify-between">
                        <h2 class="text-md font-medium text-black text-opacity-[87%]">
                            Metode Pembayaran</h2>
                        <h2 class="text-md font-medium text-black text-opacity-60">
                            Transfer Bank</h2>
                    </div>
                    <div class="flex justify-between">
                        <h2 class="text-md font-medium text-black text-opacity-[87%]">
                            Jenis Bank</h2>
                        <h2 class="text-md font-medium text-black text-opacity-60">
                            BRI</h2>
                    </div>
                </div>
                <div class="px-5 mt-4">
                    <h1 class="text-2xl font-medium text-black">Jenis Barang Service</h1>
                    <div class="flex justify-start">
                        <h2 class="text-md font-medium text-black text-opacity-[87%]">
                            Laptop Asus x1</h2>
                    </div>
                </div>
                <div class="px-5 mt-4">
                    <h1 class="text-2xl font-medium text-black">Rincian Pembayaran</h1>
                    <div class="flex justify-between">
                        <h2 class="text-md font-medium text-black text-opacity-[87%]">
                            Harga</h2>
                        <h2 class="text-md font-medium text-black text-opacity-60">
                            Rp <span>2.500.000</span></h2>
                    </div>
                    <div class="flex justify-between border-b-2 pb-2">
                        <h2 class="text-md font-medium text-black text-opacity-[87%]">
                            Biaya Layanan Service</h2>
                        <h2 class="text-md font-medium text-black text-opacity-60">
                            Rp <span>300.000</span></h2>
                    </div>
                    <div class="flex justify-between pt-2">
                        <h2 class="text-md font-medium text-black text-opacity-[87%]">
                            Total Pembayaran</h2>
                        <h2 class="text-md font-medium text-black text-opacity-60">
                            Rp <span>2.800.000</span></h2>
                    </div>
                    <div class="flex justify-between pb-4">
                        <h2 class="text-md font-medium text-black text-opacity-[87%]">
                            Status</h2>
                        <h2 class="text-md font-medium text-[#00B56A] text-opacity-60">
                            Berhasil</h2>
                    </div>
                </div>
        </div>
        </article>
        <div class="px-5 flex flex-col gap-2 justify-center mt-8 mb-4 ">
            <a id="btnNota"
                class="btn-main bg-[#9E9E9E] hover:bg-[#959494] w-full cursor-pointer text-center my-0">Download</a>
            <a href="/upload-bukti-pembayaran" class=" my-0 btn-main w-full cursor-pointer text-center">Kembali</a>
        </div>
    </main>
    
    <script>

    </script>
</body>
