@section('title', 'Informasi Pembayaran')
@extends('components.menu_navbar')

@section('back')
    <a href="/after-pembayaran">
    @endsection

    @section('contents')

        <div class="flex flex-col items-center gap-4 mt-4">
            <h1 class="text-3xl font-normal">Total Pembayaran</h1>
            <h1 class="text-3xl font-normal text-[#007119]">IDR 2.000,000</h1>
            <p class="text-lg font-normal bg-[#FDCF6F] bg-opacity-50 px-5 py-2">Bayar sesuai dengan nominal yang tertera.</p>
        </div>

        <h2 class="mb-2 mt-4 text-lg font-semibold text-gray-900">Petunjuk Transfer ATM</h2>
        <ul class="space-y-4 text-left text-gray-500 dark:text-gray-400">
            <li class="flex items-start space-x-3">
                {{-- <svg class="flex-shrink-0 w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 16 15">
                    <path
                        d="M6.66658 4.375V5.625H7.99992V10.625H9.33325V4.375H6.66658ZM7.99992 1.25C8.8754 1.25 9.7423 1.41166 10.5511 1.72575C11.36 2.03984 12.0949 2.50022 12.714 3.08058C13.333 3.66095 13.8241 4.34994 14.1591 5.10823C14.4941 5.86651 14.6666 6.67924 14.6666 7.5C14.6666 9.1576 13.9642 10.7473 12.714 11.9194C11.4637 13.0915 9.76803 13.75 7.99992 13.75C7.12444 13.75 6.25753 13.5883 5.4487 13.2742C4.63986 12.9602 3.90493 12.4998 3.28587 11.9194C2.03563 10.7473 1.33325 9.1576 1.33325 7.5C1.33325 5.8424 2.03563 4.25269 3.28587 3.08058C4.53612 1.90848 6.23181 1.25 7.99992 1.25Z"
                        fill="black" />
                </svg> --}}
                <span>Gunakan ATM / iBanking / mBanking / setor tunai untuk transfer ke rekening berikut :</span>
            </li>
            <div class="mt-4 relative flex justify-center">
                <div class=" w-4/6 flex justify-between gap-2 px-3 mx-auto bg-[#D9D9D9] py-4">
                    <p id="myInput" class="text-xl text-black font-medium tracking-widest">0005‑01‑00130‑7304</p>
                    <!-- <button onclick="myFunction()" class="text-[#5E8BFF] text-xl cursor-pointer">Salin</button> -->

                    <div class="tooltip">
                        <button onclick="myFunction()" onmouseout="outFunc()" class="text-[#5E8BFF] text-xl cursor-pointer">
                            <span class="tooltiptext" id="myTooltip">klik untuk menyalin</span>
                            Salin
                    </div>
                </div>
            </div>
            <li class="flex items-start space-x-3">
                {{-- <svg class="flex-shrink-0 w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 16 15">
                    <path
                        d="M5.99992 4.375V5.625H8.66658V6.875H7.33325C6.97963 6.875 6.64049 7.0067 6.39044 7.24112C6.14039 7.47554 5.99992 7.79348 5.99992 8.125V10.625H9.99992V9.375H7.33325V8.125H8.66658C9.02021 8.125 9.35935 7.9933 9.60939 7.75888C9.85944 7.52446 9.99992 7.20652 9.99992 6.875V5.625C9.99992 5.29348 9.85944 4.97554 9.60939 4.74112C9.35935 4.5067 9.02021 4.375 8.66658 4.375H5.99992ZM7.99992 1.25C8.8754 1.25 9.7423 1.41166 10.5511 1.72575C11.36 2.03984 12.0949 2.50022 12.714 3.08058C13.333 3.66095 13.8241 4.34994 14.1591 5.10823C14.4941 5.86651 14.6666 6.67924 14.6666 7.5C14.6666 9.1576 13.9642 10.7473 12.714 11.9194C11.4637 13.0915 9.76803 13.75 7.99992 13.75C7.12444 13.75 6.25753 13.5883 5.4487 13.2742C4.63986 12.9602 3.90493 12.4998 3.28587 11.9194C2.03563 10.7473 1.33325 9.1576 1.33325 7.5C1.33325 5.8424 2.03563 4.25269 3.28587 3.08058C4.53612 1.90848 6.23181 1.25 7.99992 1.25Z"
                        fill="black" fill-opacity="0.87" />
                </svg> --}}
                <span>Silahkan upload bukti transfer sebelum <span> 02-01-2023</span></span>
            </li>
            <li class="flex items-start space-x-3">
                {{-- <svg class="flex-shrink-0 w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 16 15">
                    <path
                        d="M9.99992 9.375V8.4375C9.99992 8.18886 9.89456 7.9504 9.70702 7.77459C9.51949 7.59877 9.26513 7.5 8.99992 7.5C9.26513 7.5 9.51949 7.40123 9.70702 7.22541C9.89456 7.0496 9.99992 6.81114 9.99992 6.5625V5.625C9.99992 5.29348 9.85944 4.97554 9.60939 4.74112C9.35935 4.5067 9.02021 4.375 8.66658 4.375H5.99992V5.625H8.66658V6.875H7.33325V8.125H8.66658V9.375H5.99992V10.625H8.66658C9.02021 10.625 9.35935 10.4933 9.60939 10.2589C9.85944 10.0245 9.99992 9.70652 9.99992 9.375ZM7.99992 1.25C8.8754 1.25 9.7423 1.41166 10.5511 1.72575C11.36 2.03984 12.0949 2.50022 12.714 3.08058C13.333 3.66095 13.8241 4.34994 14.1591 5.10823C14.4941 5.86651 14.6666 6.67924 14.6666 7.5C14.6666 9.1576 13.9642 10.7473 12.714 11.9194C11.4637 13.0915 9.76803 13.75 7.99992 13.75C7.12444 13.75 6.25753 13.5883 5.4487 13.2742C4.63986 12.9602 3.90493 12.4998 3.28587 11.9194C2.03563 10.7473 1.33325 9.1576 1.33325 7.5C1.33325 5.8424 2.03563 4.25269 3.28587 3.08058C4.53612 1.90848 6.23181 1.25 7.99992 1.25Z"
                        fill="black" fill-opacity="0.87" />
                </svg> --}}
                <span>Demi keamanan transaksi, mohon untuk tidak membagikan bukti atau konfirmasi pembayaran pesanan kepada
                    siapapun, selain mengunggahnya via aplikasi</span>
            </li>

        </ul>

        <div class="flex justify-center mt-24">
            <a href="/upload-bukti-pembayaran" class="btn-main w-5/6 cursor-pointer text-center">Upload Bukti Transfer</a>
        </div>

        <script>
            function myFunction() {
                var copyText = document.getElementById("myInput").textContent;
                var textArea = document.createElement("textarea");
                textArea.value = copyText;
                document.body.appendChild(textArea);
                textArea.select();
                document.execCommand("copy");
                document.body.removeChild(textArea);

                var tooltip = document.getElementById("myTooltip");
                tooltip.innerHTML = "Berhasil disalin!: " + textArea.value;
            }

            function outFunc() {
                var tooltip = document.getElementById("myTooltip");
                tooltip.innerHTML = "klik untuk menyalin";
            }
        </script>

    @endsection
