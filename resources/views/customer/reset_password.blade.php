@section('title', 'Reset Password')
@extends('components.navbar')

@section('back')
<a href="/verifikasi-password">
@endsection

@section('contents')

    <div class="flex justify-center p-4 relative my-2 h-[40vh]">
        <div class="mx-auto">
            <img src="./assets/image/reset.png" alt="reset password">
        </div>
    </div>
    <form action="">
        <h5 class="text-xl font-bold text-[#293032] mb-2 text-left">Reset Password</h5>
        <div class="mb-3 flex items-center border-b border-gray-500 relative cursor-pointer">
            <svg id="show1" class="hidden w-6 h-6 text-gray-800 absolute right-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 20 14">
                <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <path d="M10 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                    <path d="M10 13c4.97 0 9-2.686 9-6s-4.03-6-9-6-9 2.686-9 6 4.03 6 9 6Z" />
                </g>
            </svg>
            <svg id="hide1" class="w-6 h-6 text-gray-800 absolute right-3" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1.933 10.909A4.357 4.357 0 0 1 1 9c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 19 9c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M2 17 18 1m-5 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
            <input id="password1" placeholder="Password baru" type="password" class="input-line pl-0">
        </div>
        <div class="mb-16 flex items-center border-b border-gray-500 relative cursor-pointer">
            <svg id="show2" class="hidden w-6 h-6 text-gray-800 absolute right-3" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
                <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <path d="M10 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                    <path d="M10 13c4.97 0 9-2.686 9-6s-4.03-6-9-6-9 2.686-9 6 4.03 6 9 6Z" />
                </g>
            </svg>
            <svg id="hide2" class="w-6 h-6 text-gray-800 absolute right-3" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1.933 10.909A4.357 4.357 0 0 1 1 9c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 19 9c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M2 17 18 1m-5 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
            <input id="password2" placeholder="Konfirmasi Password Baru" type="password" class="input-line pl-0">
        </div>

        <div class="mb-6">
            <button type="submit" class="btn-main">Reset Password</button>
        </div>

    </form>

    <script>
    function togglePasswordVisibility(inputId, showIconId, hideIconId) {
        const passwordInput = document.getElementById(inputId);
        const showIcon = document.getElementById(showIconId);
        const hideIcon = document.getElementById(hideIconId);

        showIcon.addEventListener('click', () => {
            passwordInput.type = 'password';
            showIcon.style.display = 'none';
            hideIcon.style.display = 'block';
        });

        hideIcon.addEventListener('click', () => {
            passwordInput.type = 'text';
            showIcon.style.display = 'block';
            hideIcon.style.display = 'none';
        });
    }

    // Panggil fungsi untuk setiap pasangan input dan ikon
    togglePasswordVisibility('password1', 'show1', 'hide1');
    togglePasswordVisibility('password2', 'show2', 'hide2');
    </script>
@endsection
