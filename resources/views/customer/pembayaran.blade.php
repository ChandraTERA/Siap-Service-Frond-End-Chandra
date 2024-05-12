@section('title', 'Pembayaran')
@extends('components.menu_navbar')

@section('back')
    <a href="#">
    @endsection

    @section('contents')

        <form action="" method="" class="flex flex-col mt-8 relative">
            <table class="table-auto">
                <tbody class="text-black">
                    <tr>
                        <td class="font-medium text-lg text-black">Detail Transaksi</td>
                    </tr>
                    <tr>
                        <td class="pt-4">Tanggal transaksi</td>
                        <td class="text-right pt-4">15 May 2020 8:00 pm</td>
                    </tr>

                    <tr>
                        <td class="pt-6 font-medium text-lg text-black">Jenis Barang Servis</td>
                    </tr>
                    <tr>
                        <td>Laptop ASUS 1x</td>
                    </tr>

                    <tr>
                        <td class=" pt-6 font-medium text-lg text-black">Solusi</td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li>Ganti LCD</li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="font-medium text-lg text-black">Rician Pembayaran</td>
                    </tr>
                    <tr>
                        <td class="pb-0">
                            <ul>
                                <li>
                                    Harga LCD
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul class="pb-0">
                                <li class="flex justify-end">
                                    Rp 2.500.000
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td class="pb-0">Biaya Service</td>
                        <td class="pb-0 text-right">Rp 300.000</td>
                    </tr>

                    <tr class="border-t-2 ">
                        <td>Total Pembayaran</td>
                        <td class="text-right">Rp 2.800.000</td>
                    </tr>
                </tbody>
            </table>
            <div class="flex justify-between items-center mt-8">
                <p>Pembayaran</p>
                <a href="/metode-pembayaran" class="flex items-center text-black hover:text-main">
                    <span class="w-24 cursor-pointer">Pilih metode pembayaran</span>
                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                        fill="CurrentColor">
                        <path
                            d="M7.75296 1.75286C7.34143 1.34133 6.67073 1.35289 6.27363 1.77836C5.89724 2.18163 5.90597 2.81 6.2934 3.20267L11.6141 8.59531C12.3826 9.37413 12.3826 10.6259 11.6141 11.4047L6.2934 16.7973C5.90597 17.19 5.89724 17.8184 6.27363 18.2216C6.67073 18.6471 7.34143 18.6587 7.75296 18.2471L14.5859 11.4142C15.3669 10.6332 15.3669 9.36683 14.5859 8.58579L7.75296 1.75286Z"
                            fill="CurrentColor" />
                    </svg>
                </a>
            </div>
            <div class="flex justify-between items-center mt-32">
                <div class="flex flex-col">
                    <h1 class="font-bold text-lg">Total</h1>
                    <h1 class="font-bold text-lg">Rp 2.800.000</h1>
                </div>
                <button type="submit" class="btn-main w-1/3 cursor-not-allowed" disabled>Bayar</button>
            </div>
        </form>

    @endsection
