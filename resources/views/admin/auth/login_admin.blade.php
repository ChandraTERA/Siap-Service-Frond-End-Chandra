<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
     {{-- Favicon --}}
    <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <title>Login Admin</title>
    
</head>
<body class="overflow-hidden font-[Poppins]">
    <div class=" flex bg-slate-200 items-center justify-center min-h-screen relative p-16 ">
        <img src="./assets/image/ornament1.png" alt="" class="absolute left-0 top-0 xl:w-96 lg:w-72 md:w-56 sm:w-44 xs:w-14">
        <img src="./assets/image/ornament2.png" alt="" class="absolute right-0 bottom-0 xl:w-96 lg:w-64 md:w-48 sm:w-32 xs:w-10">
        <div class="flex flex-col ">
            <img src="./assets/image/logo/siap-service.png" alt="" class="w-32 mx-auto">
            <div class=" bg-white p-20 px-24 flex items-center flex-col rounded-xl z-50 my-3 mb-20">
                <h1 class="text-[#4E4E4E] text-lg font-bold mb-6">Login Admin</h1>
                <form action="" method="POST" class="flex flex-col gap-2">
                    <div class="flex flex-col mb-3">
                        <span class="text-sm font-medium my-1 text-[#344054]">Email Address</span>
                        <input type="text" name="email" id="email"
                            class="p-2 px-3 pr-14 border-2 focus:border-transparent border-[#D0D5DD] rounded-lg bg-transparent placeholder:text-sm placeholder:text-[#667085] appearance-none focus:outline-none active:outline-none focus:ring-1 focus:ring-[#00BF71]"
                            placeholder="example@gmail.com" >
                    </div>
                    <div class="flex flex-col mb-3 relative">
                        <span class="text-sm font-medium my-1 text-[#344054]">Kata Sandi</span>
                        <input type="password" name="password" id="password"
                            class="p-2 px-3 border-2 focus:border-transparent border-[#D0D5DD] rounded-lg bg-transparent placeholder:text-sm placeholder:text-[#667085] appearance-none focus:outline-none active:outline-none focus:ring-1 focus:ring-[#00BF71]"
                            placeholder="Enter Your Password">
                        
                        <!-- Tombol untuk menampilkan atau menyembunyikan password -->
                        <button type="button"
                            class="absolute top-12 right-3 transform -translate-y-1/2 text-[#98A2B3] focus:outline-none"
                            id="togglePassword">
                            <i class="fa-regular fa-eye" id="eyeIcon"></i>
                        </button>
                    </div>
                    
                    
                    <div>
                        <a href="#" class="text-sm text-[#1849A9] font-semibold">Forgot Password?</a>
                    </div>
                    <div class="mt-8 py-2">
                        <button type="submit" class="bg-[#00BF71] text-white text-sm p-2 rounded-lg w-full font-medium" >Sign in</button>
                    </div>
                </form>
             
                
            </div>
        </div>
    </div>
    
</body>
<script>
    const togglePassword = document.getElementById('togglePassword');
    const password = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');

    togglePassword.addEventListener('click', function () {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);

        // Ganti ikon mata
        if (type === 'password') {
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        } else {
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
        }
    });
</script>


</html>