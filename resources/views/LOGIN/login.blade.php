<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
    {{-- login --}}
    <div class="grid grid-rows-3 container  relative ">

    <div class=" mx-auto mr-16 mt-14 ">  <img src="../asset/img/LOGO.png" alt="Logo" class="w-[87px] h-[75px]"></div>
    <div class="text-center mx-auto -mt-40  "><img src="../asset/img/login.png" alt="logologin"></div>
    <div class=" mx-auto -mt-32 ">
        <div class="mb-4 ">
            <h2 class="font-poppins text-xl font-semibold ">Login</h2>
        </div>

            <form class="w-[300px] sm:w-[400px] " action="#" method="" >


                <div class="relative z-0 w-[250px] sm:w-[350px] mb-6 group mx-auto">
                    <input type="email" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none   focus:outline-none focus:ring-0 focus:border-green-400 peer" placeholder=" " required oninvalid="this.setCustomValidity('tidak boleh kosong')" oninput="this.setCustomValidity('')" />
                    <span class="flex justify-start -mt-8 mr-auto -ml-6 w-4">@</span>
                    <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-400 peer-focus:dark:text-green-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                </div>

                <div class="relative z-0 w-[250px] sm:w-[350px] mx-auto mb-6 group">
                    <input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none   focus:outline-none focus:ring-0 focus:border-green-400 peer" placeholder=" " required   oninvalid="this.setCustomValidity('tidak boleh kosong')" oninput="this.setCustomValidity('')" />
                    <label for="password" class="peer-focus:font-medium absolute text-sm text-gray-500 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-400 peer-focus:dark:text-green-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>

                </div>

                        <span class="flex justify-end"><a href="#lupapassword "  class="font-poppins text-sm text-[#0D3995CC]   hover:text-blue-400">Lupa password?</a></span>




                <div class="grid grid-rows-3 gap-4 mt-12">
                    <button type="submit" class="text-white h-9  bg-[#00BF71] hover:bg-[#21D68C]  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center font-poppins "> Masuk Akun</button>
                    <div class="mx-auto grid grid-cols-3   ">
                        <span class="border-t mt-3 border-[#9FA7B2] w-[50px]"></span>
                        <span class="font-poppins text-[#9FA7B2] text-center">OR</span>
                        <span class="border-t mt-3   border-[#9FA7B2] w-[50px]"></span>

                    </div>
                    <button type="submit" class="flex justify-between  h-9 text-[#75818F]  bg-[#E3E5E8] hover:bg-[#B4B4B4]   font-semibold font-poppins hover:text-gray-200    rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                    <span class=" w-6"><img src="../asset/img/google.png" alt="google" ></span> <p class="mr-12 sm:mr-24 font-poppins">Login dengan Google</p></button>


                 </div>
                 <div class="mx-auto mt-4 text-center mb-10">
                    <p class="text-xs text-[#959595] font-poppins">Belum memiliki akun ? <a href="/register" class="text-[#0D3995] hover:text-blue-400 font-poppins text-xs">REGISTER</a></p>
                 </div>

            </form>

    </div>






    </div>

</body>
</html>
