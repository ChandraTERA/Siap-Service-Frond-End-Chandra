@extends('layouts.template_admin')
@section('title', 'Tambah Pengguna')
@section('link-breadcrumb', 'Tambah Pengguna')

@section('contents')
    <section class="bg-main rounded-lg shadow-lg w-full min-h-fit mb-4 relative">
        <main>
            <header class="w-[92%] h-32 mx-auto flex flex-row  justify-between items-center">
                <h1 class="text-white text-3xl font-bold">VERIFIKASI PEMBAYARAN</h1>
                <div>
                    <h4 class="text-white font-medium text-2xl">
                        IN321PRX
                    </h4>
                </div>
            </header>
        </main>
        <main class=" bg-white h-fit rounded-b-lg">
            <div class="w-[92%] mx-auto">
                <form action="" method="post">
                    <div class="pt-12 flex flex-row justify-between">
                        <div class="w-fit">
                            <table class="table-auto">
                                <tbody class="text-silver-100">
                                    <tr class="py-10">
                                        <td class="pr-6">Id Customer</td>
                                        <td class="pr-2">:</td>
                                        <td>Userxx333</td>
                                    </tr>
                                    <tr class="py-10">
                                        <td class="pr-6">Nama Pengguna</td>
                                        <td class="pr-2">:</td>
                                        <td>Biru Muluk Hadiawan</td>
                                    </tr>
                                    <tr class="py-10">
                                        <td class="pr-6">Tanggal Servis</td>
                                        <td class="pr-2">:</td>
                                        <td>20/10/23</td>
                                    </tr>
                                    <tr class="py-10">
                                        <td class="pr-6">Tanggal Pengembalian</td>
                                        <td class="pr-2">:</td>
                                        <td>23/10/23</td>
                                    </tr>
                                    <tr class="py-10">
                                        <td class="pr-6">Metode Pembayaran</td>
                                        <td class="pr-2">:</td>
                                        <td>Transfer Bank</td>
                                    </tr>
                                    <tr class="py-10">
                                        <td class="pr-6">Jenis Bank</td>
                                        <td class="pr-2">:</td>
                                        <td>BCA</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="w-fit">
                            <div class="border-[#00838E] border-2 border-dashed p-4 overflow-hidden w-80 h-auto">
                                <img src="./struk-pembayaran/struk-bca.png" alt="struk" class="w-full rounded-[3px] cursor-zoom-in hover:scale-125">
                            </div>
                        </div>
                    </div>

                    <div class="pt-12 flex justify-between">
                        <div class="flex flex-col">
                            <table class="table-auto">
                                <thead>
                                    <h2 class="font-bold text-lg text-silver-300">Biaya Servis</h2>
                                </thead>
                                <tbody class="text-silver-100">
                                    <tr class="py-10">
                                        <td class="pr-6">Ganti LCD</td>
                                        <td class="text-right">Rp 1.800.000</td>
                                    </tr>
                                    <tr class="py-10">
                                        <td class="pr-6">Biaya Layanan</td>
                                        <td class="text-right">Rp 200.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="flex flex-col">
                            <table class="table-auto">

                                <tbody class="text-silver-300">
                                    <tr class="py-10">
                                        <td class="pr-6 font-bold">Total Pembayaran</td>
                                        <td class="text-right font-bold">Rp 2.000.000</td>
                                    </tr>
                                    <tr class="py-10">
                                        <td class="pr-6 font-bold">Status</td>
                                        <td class="text-right text-success font-bold text-main">LUNAS</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div class="flex justify-center">
                        <button type="submit" class="btn-validate-approve">VALIDASI</button>
                        
                        <!-- Button Cancel -->
                        <!-- <button type="submit" class="btn-validate-canceled">BATALKAN VALIDASI</button> -->
                    </div>
                </form>


            </div>
        </main>

    </section>

@endsection
