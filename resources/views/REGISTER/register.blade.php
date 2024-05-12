<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
    {{-- Registrasi --}}
    <div class="grid grid-rows-3 container min-w-fit  relative ">

    <div class=" mx-auto mr-8 mt-12 ">  <img src="../asset/img/LOGO.png" alt="Logo" class="w-[87px] h-[75px]"></div>
    <div class="text-center -mt-32 h-8 "><p class="font-poppins text-[#293032DE] font-semibold text-xl">Buat Akun Baru</p></div>
    <div class=" mx-auto -mt-[350px]">

            <form class="w-[300px] sm:w-[400px] lg:w-[550px]" action="#" method="" >
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="namalengkap" id="namalengkap" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none   focus:outline-none focus:ring-0 focus:border-green-400 peer" placeholder=" " required autofocus oninvalid="this.setCustomValidity('tidak boleh kosong')" oninput="this.setCustomValidity('')" />
                    <label for="namalengkap" class="peer-focus:font-medium absolute text-sm text-gray-500 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-400 peer-focus:dark:text-green-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 ">Nama Lengkap</label>

                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="date" name="ttl" id="ttl" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none   focus:outline-none focus:ring-0 focus:border-green-400 peer" placeholder=" " required autofocus oninvalid="this.setCustomValidity('tidak boleh kosong')" oninput="this.setCustomValidity('')" />
                    <label for="ttl" class="peer-focus:font-medium absolute text-sm text-gray-500 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-400 peer-focus:dark:text-green-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 ">Tanggal Lahir</label>

                </div>

                <div class="relative z-0 w-full mb-6 group">
                    <input type="email" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none   focus:outline-none focus:ring-0 focus:border-green-400 peer" placeholder=" " required oninvalid="this.setCustomValidity('tidak boleh kosong')" oninput="this.setCustomValidity('')" />
                    <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-400 peer-focus:dark:text-green-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="tel" name="notelp" id="notelp" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none   focus:outline-none focus:ring-0 focus:border-green-400 peer" placeholder=" " required pattern="(\+62|62|0)8[1-9][0-9]{6,13}$" oninvalid="this.setCustomValidity('tidak boleh kosong')" oninput="this.setCustomValidity('')" />
                    <label for="notelp" class="peer-focus:font-medium absolute text-sm text-gray-500 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-400 peer-focus:dark:text-green-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">No Telephone</label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="alamat" id="alamat" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none   focus:outline-none focus:ring-0 focus:border-green-400 peer" placeholder=" " required  oninvalid="this.setCustomValidity('tidak boleh kosong')" oninput="this.setCustomValidity('')"  />
                    <label for="alamat" class="peer-focus:font-medium absolute text-sm text-gray-500 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-400 peer-focus:dark:text-green-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat Lengkap</label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none   focus:outline-none focus:ring-0 focus:border-green-400 peer" placeholder=" " required   oninvalid="this.setCustomValidity('tidak boleh kosong')" oninput="this.setCustomValidity('')" />
                    <label for="password" class="peer-focus:font-medium absolute text-sm text-gray-500 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-400 peer-focus:dark:text-green-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                    <span class="flex justify-end -mt-5"><img src="../asset/img/eye.png" alt="logo" id="eyeicon" class=""></span>
                </div>
                <div class="relative z-0 w-full mb-6 group">

                     <input type="password" name="konfirmasi" id="konfirmasi" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none   focus:outline-none focus:ring-0 focus:border-green-400 peer"  placeholder=" " required  oninvalid="this.setCustomValidity('tidak boleh kosong')" oninput="this.setCustomValidity('')"   />

                    <label for="konfirmasi" class="peer-focus:font-medium absolute text-sm text-gray-500 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-400 peer-focus:dark:text-green-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Konfirmasi Password </label>
                    <span class="flex justify-end -mt-5"><img src="../asset/img/eye.png" alt="logo" id="eyeeye" class=""></span>
                </div>
                <div class="grid grid-rows-2 gap-4 mt-24">
                    <button type="submit" class="text-white h-11  bg-[#00BF71] hover:bg-[#21D68C]  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center font-poppins "> Kirim</button>
                    <button type="submit" class="flex justify-between  h-11 text-[#75818F]  bg-[#E3E5E8] hover:bg-[#B4B4B4]   font-semibold font-poppins hover:text-gray-200 items-center   rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                    <span class="  w-8"><img src="../asset/img/google.png" alt="google" ></span> <p class="mr-10 sm:mr-24 lg:mr-44">Register dengan Google</p></button>


                </div>

            </form>

    </div>






    </div>

    {{-- js --}}
    <script>
        let eyeicon= document.getElementById('eyeicon')
        let eye= document.getElementById('eyeeye')
        let pass= document.getElementById('password')
        let confir=document.getElementById('konfirmasi')

        eyeicon.onclick=function(){
            if(pass.type == "password"){
                pass.type = "text";
                eyeicon.src="../asset/img/eye2.png"
        }else{ pass.type = "password";
        eyeicon.src="../asset/img/eye.png"

        }
    }
    eye.onclick=function(){
            if(confir.type == "password"){
                confir.type = "text";
                eye.src="../asset/img/eye2.png"
        }else{ confir.type = "password";
        eye.src="../asset/img/eye.png"

        }
    }

    // Konfirmasi password

    </script>

</body>
</html>
