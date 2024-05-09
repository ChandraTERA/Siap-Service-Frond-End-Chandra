@extends('layouts.template_admin')
@section('title', 'Data Transaksi')
@section('link-breadcrumb', 'Data Transaksi')

@section('contents')

    <div class="rounded-md flex justify-end">

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


    <section class="lg:w-12/12 w-full">
        <div class="w-full max-h-fit mx-auto bg-white relative overflow-hidden rounded-lg shadow-md sm:w-12/12">
            <div class="mx-auto">
                <div class=" overflow-x-auto">
                    <table class="w-full table-auto">
                        <thead class="text-white bg-main text-lg">
                            <tr class="text-left">
                                <th class="px-4 py-5 font-medium">No</th>
                                <th class="px-4 py-5 font-medium">ID Pengguna</th>
                                <th class="px-4 py-5 font-medium">Tanggal</th>
                                <th class="px-4 py-5 font-medium">Jenis</th>
                                <th class="px-4 py-5 font-medium">Status</th>
                                <th class="px-4 py-5 font-medium">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm font-normal text-gray-700">
                            <tr class="py-10 hover:bg-gray-200 font-medium">
                                <td class="px-4 py-4">
                                    1
                                </td>
                                <td class="px-4 py-4">
                                    ZXCVBH6785
                                </td>

                                <td class="px-4 py-4">
                                    29/9/2023
                                </td>

                                <td class="px-4 py-4">
                                    Laptop
                                </td>

                                <td class="items-center px-4 py-4">
                                    <div class="flex flex-col">
                                        <div class="font-medium text-danger uppercase">BELUM LUNAS</div>
                                    </div>
                                </td>
                                <td class="px-4 py-4">
                                    <div class="flex-col lg:flex-row lg:space-x-2 items-center space-y-2 lg:space-y-0">
                                        <a href="/detail-transaksi">
                                            <button
                                            class="items-center px-8 py-2 text-white bg-main rounded-md hover:secondary focus:outline-none">
                                            Detail
                                        </button>
                                    </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="py-10 hover:bg-gray-200 font-medium">
                                <td class="px-4 py-4">
                                    2
                                </td>
                                <td class="px-4 py-4">
                                    ZXCVBH6785
                                </td>

                                <td class="px-4 py-4">
                                    29/9/2023
                                </td>

                                <td class="px-4 py-4">
                                    Handphone
                                </td>

                                <td class="items-center px-4 py-4">
                                    <div class="flex flex-col">
                                        <div class="font-medium text-warning uppercase">DIBATALKAN</div>
                                    </div>
                                </td>
                                <td class="px-4 py-4">
                                    <div class="flex-col lg:flex-row lg:space-x-2 items-center space-y-2 lg:space-y-0">
                                        <a href="/detail-transaksi">
                                            <button
                                            class="items-center px-8 py-2 text-white bg-main rounded-md hover:secondary focus:outline-none">
                                            Detail
                                        </button>
                                    </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="py-10 hover:bg-gray-200 font-medium">
                                <td class="px-4 py-4">
                                    3
                                </td>
                                <td class="px-4 py-4">
                                    ZXCVBH6785
                                </td>

                                <td class="px-4 py-4">
                                    29/9/2023
                                </td>

                                <td class="px-4 py-4">
                                    Laptop
                                </td>

                                <td class="items-center px-4 py-4">
                                    <div class="flex flex-col">
                                        <div class="font-medium text-main uppercase">LUNAS</div>
                                    </div>
                                </td>
                                <td class="px-4 py-4">
                                    <div class="flex-col lg:flex-row lg:space-x-2 items-center space-y-2 lg:space-y-0">
                                        <a href="/detail-transaksi">
                                            <button
                                            class="items-center px-8 py-2 text-white bg-main rounded-md hover:secondary focus:outline-none">
                                            Detail
                                        </button>
                                    </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="py-10 hover:bg-gray-200 font-medium">
                                <td class="px-4 py-4">
                                    4
                                </td>
                                <td class="px-4 py-4">
                                    ZXCVBH6785
                                </td>

                                <td class="px-4 py-4">
                                    29/9/2023
                                </td>

                                <td class="px-4 py-4">
                                    Laptop
                                </td>

                                <td class="items-center px-4 py-4">
                                    <div class="flex flex-col">
                                        <div class="font-medium text-danger uppercase">BELUM LUNAS</div>
                                    </div>
                                </td>
                                <td class="px-4 py-4">
                                    <div class="flex-col lg:flex-row lg:space-x-2 items-center space-y-2 lg:space-y-0">
                                        <a href="/detail-transaksi">
                                            <button
                                            class="items-center px-8 py-2 text-white bg-main rounded-md hover:secondary focus:outline-none">
                                            Detail
                                        </button>
                                    </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="py-10 hover:bg-gray-200 font-medium">
                                <td class="px-4 py-4">
                                    5
                                </td>
                                <td class="px-4 py-4">
                                    ZXCVBH6785
                                </td>

                                <td class="px-4 py-4">
                                    29/9/2023
                                </td>

                                <td class="px-4 py-4">
                                    Handphone
                                </td>

                                <td class="items-center px-4 py-4">
                                    <div class="flex flex-col">
                                        <div class="font-medium text-warning uppercase">DIBATALKAN</div>
                                    </div>
                                </td>
                                <td class="px-4 py-4">
                                    <div class="flex-col lg:flex-row lg:space-x-2 items-center space-y-2 lg:space-y-0">
                                        <a href="/detail-transaksi">
                                            <button
                                            class="items-center px-8 py-2 text-white bg-main rounded-md hover:secondary focus:outline-none">
                                            Detail
                                        </button>
                                    </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="py-10 hover:bg-gray-200 font-medium">
                                <td class="px-4 py-4">
                                    6
                                </td>
                                <td class="px-4 py-4">
                                    ZXCVBH6785
                                </td>

                                <td class="px-4 py-4">
                                    29/9/2023
                                </td>

                                <td class="px-4 py-4">
                                    Laptop
                                </td>

                                <td class="items-center px-4 py-4">
                                    <div class="flex flex-col">
                                        <div class="font-medium text-main uppercase">LUNAS</div>
                                    </div>
                                </td>
                                <td class="px-4 py-4">
                                    <div class="flex-col lg:flex-row lg:space-x-2 items-center space-y-2 lg:space-y-0">
                                        <a href="/detail-transaksi">
                                            <button
                                            class="items-center px-8 py-2 text-white bg-main rounded-md hover:secondary focus:outline-none">
                                            Detail
                                        </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="py-10 hover:bg-gray-200 font-medium">
                                <td class="px-4 py-4">
                                    7
                                </td>
                                <td class="px-4 py-4">
                                    ZXCVBH6785
                                </td>

                                <td class="px-4 py-4">
                                    29/9/2023
                                </td>

                                <td class="px-4 py-4">
                                    Laptop
                                </td>

                                <td class="items-center px-4 py-4">
                                    <div class="flex flex-col">
                                        <div class="font-medium text-danger uppercase">BELUM LUNAS</div>
                                    </div>
                                </td>
                                <td class="px-4 py-4">
                                    <div class="flex-col lg:flex-row lg:space-x-2 items-center space-y-2 lg:space-y-0">
                                        <a href="/detail-transaksi">
                                            <button
                                            class="items-center px-8 py-2 text-white bg-main rounded-md hover:secondary focus:outline-none">
                                            Detail
                                        </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="py-10 hover:bg-gray-200 font-medium">
                                <td class="px-4 py-4">
                                    8
                                </td>
                                <td class="px-4 py-4">
                                    ZXCVBH6785
                                </td>

                                <td class="px-4 py-4">
                                    29/9/2023
                                </td>

                                <td class="px-4 py-4">
                                    Handphone
                                </td>

                                <td class="items-center px-4 py-4">
                                    <div class="flex flex-col">
                                        <div class="font-medium text-warning uppercase">DIBATALKAN</div>
                                    </div>
                                </td>
                                <td class="px-4 py-4">
                                    <div class="flex-col lg:flex-row lg:space-x-2 items-center space-y-2 lg:space-y-0">
                                        <a href="/detail-transaksi">
                                            <button
                                            class="items-center px-8 py-2 text-white bg-main rounded-md hover:secondary focus:outline-none">
                                            Detail
                                        </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="py-10 hover:bg-gray-200 font-medium">
                                <td class="px-4 py-4">
                                    9
                                </td>
                                <td class="px-4 py-4">
                                    ZXCVBH6785
                                </td>

                                <td class="px-4 py-4">
                                    29/9/2023
                                </td>

                                <td class="px-4 py-4">
                                    Laptop
                                </td>

                                <td class="items-center px-4 py-4">
                                    <div class="flex flex-col">
                                        <div class="font-medium text-main uppercase">LUNAS</div>
                                    </div>
                                </td>
                                <td class="px-4 py-4">
                                    <div class="flex-col lg:flex-row lg:space-x-2 items-center space-y-2 lg:space-y-0">
                                        <a href="/detail-transaksi">
                                            <button
                                            class="items-center px-8 py-2 text-white bg-main rounded-md hover:secondary focus:outline-none">
                                            Detail
                                        </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="py-10 hover:bg-gray-200 font-medium">
                                <td class="px-4 py-4">
                                    10
                                </td>
                                <td class="px-4 py-4">
                                    ZXCVBH6785
                                </td>

                                <td class="px-4 py-4">
                                    29/9/2023
                                </td>

                                <td class="px-4 py-4">
                                    Laptop
                                </td>

                                <td class="items-center px-4 py-4">
                                    <div class="flex flex-col">
                                        <div class="font-medium text-danger uppercase">BELUM LUNAS</div>
                                    </div>
                                </td>
                                <td class="px-4 py-4">
                                    <div class="flex-col lg:flex-row lg:space-x-2 items-center space-y-2 lg:space-y-0">
                                        <a href="/detail-transaksi">
                                            <button
                                            class="items-center px-8 py-2 text-white bg-main rounded-md hover:secondary focus:outline-none">
                                            Detail
                                        </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!--pagination-->
                <div class="flex justify-between px-4 py-5 mx-auto">
                    <button disabled="disabled"
                        class="px-8 py-2 rounded-md border-2 border-silver-50 text-silver-50 opacity-40">
                        Halaman <span>1</span>
                    </button>

                    <nav aria-label="Page navigation example">
                        <ul class="inline-flex -space-x-px text-base divide-x-2 divide-silver-250 h-10">
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-4 h-10 ml-0 leading-tight text-silver-50 bg-silver-200  rounded-l-lg hover:bg-gray-100 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                        <path d="M2.5116 8.58115L8.99997 15.0695L10.1354 13.9341L5.59357 9.39219H15.4883V7.7701H5.59357L10.1354 3.22824L8.99997 2.09277L2.5116 8.58115Z" fill="#707070"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-4 h-10 leading-tight text-white bg-main  hover:bg-main hover:text-white">1</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page"
                                    class="flex items-center justify-center px-4 h-10 text-silver-50 bg-silver-200 hover:bg-gray-100">2</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-4 h-10 leading-tight text-silver-50 bg-silver-200  hover:bg-gray-100">3</a>
                            </li>
                            
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-4 h-10 leading-tight text-silver-50 bg-silver-200  rounded-r-lg hover:bg-gray-100 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                        <path d="M15.4884 9.41885L9.00003 2.93048L7.86457 4.06595L12.4064 8.60781L2.51166 8.60781L2.51166 10.2299L12.4064 10.2299L7.86457 14.7718L9.00003 15.9072L15.4884 9.41885Z" fill="#707070"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </section>
@endsection
