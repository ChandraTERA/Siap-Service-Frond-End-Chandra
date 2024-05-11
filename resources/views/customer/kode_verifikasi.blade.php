@section('title', 'Verifikasi Password')
@extends('components.navbar')

@section('back')
<a href="/lupa-password">
@endsection

@section('contents')
    <div class="flex justify-center p-4 relative mb-8 h-[30vh]">

        <div class="mx-auto">
            <img src="./assets/image/verif.png" alt="verifikasi password">
        </div>

    </div>
    <form action="" class="text-center mt-24">

        <h5 class="text-xl font-bold text-[#293032] m-2">Kode Verifikasi</h5>
        <p class="text-[#5C6672] opacity-90 mb-4">
            4 digit code telah dikirimkan ke email man***chkt08@gmail.com 
        </p>

        <div id="otp" class="flex flex-row justify-center text-center px-2 mt-5">
            <input class="input-box" type="text" id="first" maxlength="1" /> 
            <input class="input-box" type="text" id="second" maxlength="1" /> 
            <input class="input-box" type="text" id="third" maxlength="1" /> 
            <input class="input-box" type="text" id="fourth" maxlength="1" />
        </div>
        

        <div id="toast-top-left" class="mt-6 flex justify-center items-center w-full space-x-4 text-danger" role="alert">
            <div class="text-sm font-normal">kode sudah tidak berlaku</div>
        </div>
        <div class="mb-6 mt-4">
            <button type="submit" class="btn-main">Verifikasi</button>
            <div class="flex justify-between">
                <a href="" class="text-gray-400 hover:text-base">kirim ulang</a>
                <p class="text-gray-400 hover:text-base">1:20 min <span>lagi</span></p>
            </div>
        </div>

    </form>

    <script>
        // Menangani peristiwa ketika pengguna mengetik di setiap input
        document.querySelectorAll('.input-box').forEach(function(input, index, arr) {
            input.addEventListener('input', function(e) {
                // Jika ada karakter yang dimasukkan, pindah ke input berikutnya jika ada
                if (e.target.value.length === 1) {
                    // Jika ini bukan input terakhir
                    if (index < arr.length - 1) {
                        arr[index + 1].focus();
                    }
                }
            });
        
            // Kembali ke input sebelumnya jika menghapus karakter
            input.addEventListener('keydown', function(e) {
                if (e.key === 'Backspace' && e.target.value.length === 0) {
                    // Jika ini bukan input pertama
                    if (index > 0) {
                        arr[index - 1].focus();
                    }
                }
            });
        });
        </script>
@endsection
