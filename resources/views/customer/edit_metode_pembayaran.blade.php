@section('title', 'Metode Pembayaran')
@extends('components.menu_navbar')

@section('back')
    <a href="/after-pembayaran">
    @endsection

    @section('contents')
        <form action="" method="" class="flex flex-col mt-8 relative">
            <ul class="grid w-full gap-4 md:grid-cols">
                <li class="relative">
                    <input type="radio" id="Dana" name="paymentMethod" value="Dana"
                        class="peer absolute right-4 top-5 focus:ring-[#108DE8] text-[#108DE8]" required>
                    <label for="Dana"
                        class="inline-flex items-center shadow-list justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer  peer-checked:border-[#108DE8] peer-checked:text-[#108DE8] hover:text-gray-600 hover:bg-gray-100">
                        <div class="flex gap-4">
                            <img src="./assets/svg/pembayaran/Dana.svg" alt="Gopay">
                            <div class=" text-lg">Dana</div>
                        </div>
                    </label>
                </li>
                <li class="relative">
                    <input type="radio" id="Gopay" name="paymentMethod" value="Gopay"
                        class="peer absolute right-4 top-5 focus:ring-[#00AED6] text-[#00AED6]" required>
                    <label for="Gopay"
                        class="inline-flex items-center shadow-list justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-[#00AED6] peer-checked:text-[#00AED6] hover:text-gray-600 hover:bg-gray-100">
                        <div class="flex gap-4">
                            <img src="./assets/svg/pembayaran/Gopay.svg" alt="Gopay">
                            <div class=" text-lg">Gopay</div>
                        </div>
                    </label>
                </li>
                <li class="relative">
                    <input type="radio" id="ShopeePay" name="paymentMethod" value="ShopeePay"
                    class="peer absolute right-4 top-5 focus:ring-[#EE4E2C] text-[#EE4E2C]" required>
                    <label for="ShopeePay"
                    class="inline-flex items-center shadow-list justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer  peer-checked:border-[#EE4E2C] peer-checked:text-[#EE4E2C] hover:text-gray-600 hover:bg-gray-100">
                    <div class="flex gap-4">
                            <img src="./assets/svg/pembayaran/ShopeePay.svg" alt="ShopeePay">
                            <div class=" text-lg">ShopeePay</div>
                        </div>
                    </label>
                </li>
                <li class="relative">
                    <input type="radio" id="Ovo" name="paymentMethod" value="Ovo"
                        class="peer absolute right-4 top-5 focus:ring-purple-700 text-purple-700" required>
                    <label for="Ovo"
                        class="inline-flex items-center shadow-list justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer  peer-checked:border-purple-700 peer-checked:text-purple-700 hover:text-gray-600 hover:bg-gray-100">
                        <div class="flex gap-4">
                            <img src="./assets/svg/pembayaran/Ovo.svg" alt="Ovo">
                            <div class=" text-lg">Ovo</div>
                        </div>
                    </label>
                </li>
                <li class="relative">
                    <input type="radio" id="LinkAja" name="paymentMethod" value="LinkAja"
                        class="peer absolute right-4 top-5 focus:ring-red-600 text-red-600" required>
                    <label for="LinkAja"
                        class="inline-flex items-center shadow-list justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-red-600 peer-checked:text-red-600 hover:text-gray-600 hover:bg-gray-100">
                        <div class="flex gap-4">
                            <img src="./assets/svg/pembayaran/LinkAja.svg" alt="LinkAja">
                            <div class=" text-lg">Link Aja</div>
                        </div>
                    </label>
                </li>
                <li class="relative">
                    <input type="radio" id="Cash" name="paymentMethod" value="Cash"
                    class="peer absolute right-4 top-5 focus:ring-[#57C487] text-[#57C487]" required>
                    <label for="Cash"
                    class="inline-flex items-center shadow-list justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-[#57C487] peer-checked:text-[#57C487] hover:text-gray-600 hover:bg-gray-100">
                    <div class="flex gap-4">
                            <img src="./assets/svg/pembayaran/Cash.svg" alt="Cash">
                            <div class=" text-lg">Cash</div>
                        </div>
                    </label>
                </li>
                <div class="flex flex-col  relative overflow-hidden group">
                    <input type="checkbox" id="Bank" name="paymentMethod" value="Bank"
                        class="peer absolute right-4 top-0 hidden focus:ring-gray-400 text-gray-400 bg-red-100 opacity-50 checked:bg-transparent border-none inset-x-0 h-16 w-full z-10 cursor-pointer checked:border-none  appearance-none"
                        required>
                    <label for="Bank"
                        class="inline-flex items-center shadow-list justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer  peer-checked:text-gray-400 hover:text-gray-600 hover:bg-gray-100">
                        <div class="flex gap-4">
                            <div class=" text-lg">Transfer Bank</div>
                        </div>
                    </label>
                    <svg class="absolute right-4 top-4 transition-transform duration-500 peer-checked:rotate-180 rotate-0"
                        xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19"
                        fill="none">
                        <path
                            d="M17.3348 7.36504C17.7258 6.97409 17.7148 6.33693 17.3106 5.95968C16.9275 5.60211 16.3305 5.6104 15.9575 5.97846L10.9047 10.9639C10.1259 11.7323 8.87418 11.7323 8.09536 10.9639L3.04258 5.97846C2.66955 5.6104 2.0726 5.60211 1.68949 5.95968C1.2853 6.33693 1.27431 6.97409 1.66527 7.36505L8.08583 13.7856C8.86688 14.5667 10.1332 14.5667 10.9143 13.7856L17.3348 7.36504Z"
                            fill="black" fill-opacity="0.7" />
                    </svg>

                    <div
                        class="overflow-hidden transition-all duration-500 max-h-2 peer-checked:max-h-fit peer-checked:pb-2">
                        <ul class="grid gap-4">
                            <li class="relative mt-4">
                                <input type="radio" id="BCA" name="paymentMethod" value="BCA"
                                    class="peer absolute right-4 top-5 focus:ring-[#003399] text-[#003399]" required>
                                <label for="BCA"
                                    class="inline-flex items-center shadow-list justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-[#003399] peer-checked:text-[#003399] hover:text-gray-600 hover:bg-gray-100">
                                    <div class="flex gap-4">
                                        <img src="./assets/svg/pembayaran/BCA.svg" alt="BCA">
                                        <div class=" text-lg">BCA</div>
                                    </div>
                                </label>
                            </li>
                            <li class="relative">
                                <input type="radio" id="BRI" name="paymentMethod" value="BRI"
                                    class="peer absolute right-4 top-5 focus:ring-[#1F4396] text-[#1F4396]" required>
                                <label for="BRI"
                                    class="inline-flex items-center shadow-list justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-[#1F4396] peer-checked:text-[#1F4396] hover:text-gray-600 hover:bg-gray-100">
                                    <div class="flex gap-4">
                                        <img src="./assets/svg/pembayaran/BRI.svg" alt="BRI">
                                        <div class=" text-lg">BRI</div>
                                    </div>
                                </label>
                            </li>
                            <li class="relative">
                                <input type="radio" id="BNI" name="paymentMethod" value="BNI"
                                class="peer absolute right-4 top-5 focus:ring-[#EC6722] text-[#EC6722]" required>
                                <label for="BNI"
                                class="inline-flex items-center shadow-list justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-[#EC6722] peer-checked:text-[#EC6722] hover:text-gray-600 hover:bg-gray-100">
                                <div class="flex gap-4">
                                        <img src="./assets/svg/pembayaran/BNI.svg" alt="BNI">
                                        <div class=" text-lg">BNI</div>
                                    </div>
                                </label>
                            </li>
                            <li class="relative">
                                <input type="radio" id="Mandiri" name="paymentMethod" value="Mandiri"
                                    class="peer absolute right-4 top-5 focus:ring-[#F6AD02] text-[#F6AD02]" required>
                                <label for="Mandiri"
                                    class="inline-flex items-center shadow-list justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-[#F6AD02] peer-checked:text-[#F6AD02] hover:text-gray-600 hover:bg-gray-100">
                                    <div class="flex gap-4">
                                        <img src="./assets/svg/pembayaran/mandiri.svg" alt="Mandiri">
                                        <div class=" text-lg">Mandiri</div>
                                    </div>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                </li>
            </ul>

            <div class="flex justify-center items-center mt-12 mb-2">
                <button type="submit" class="btn-main w-5/6 cursor-pointer" disabled>Konfirmasi</button>
            </div>
        </form>

        </div>
    @endsection
