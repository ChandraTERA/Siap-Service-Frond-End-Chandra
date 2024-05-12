<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verifikasi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>

    {{-- Verifikasi --}}
    <div class="grid grid-rows-6 container max-h-[844px]  ">

        <div class=" mx-auto mr-12 mt-6">  <img src="../asset/img/LOGO.png" alt="Logo" class="w-[87px] h-[75px]"></div>
        <div class=" mx-auto -mt-8"><img src="../asset/img/expired.png" class="w-[405px] h-[282px]" alt="logoexpired"></div>
        <div class="mx-auto text-center mt-40">
            <h2 class="font-poppins text-lg text-black font-bold">Kode Verifikasi</h2>
            <p class="font-poppins text-xs mt-3">4 digit code telah dikirimkan ke email tienla***ktnd@gmail.com  </p>
        </div>


        <div class="grid grid-cols-4 gap-7 mt-28 mx-auto h-16">
            <input type="text" name="box1" id="box1" class="bg-[#E3E5E8] text-center font-poppins font-bold text-lg w-[31px] h-[48px] rounded-md shadow-md outline-none">
            <input type="text" name="box2" id="box2" class="bg-[#E3E5E8] text-center font-poppins font-bold text-lg w-[31px] h-[48px] rounded-md shadow-md outline-none">
            <input type="text" name="box3" id="box3" class="bg-[#E3E5E8] text-center font-poppins font-bold text-lg w-[31px] h-[48px] rounded-md shadow-md outline-none">
            <input type="text" name="box4" id="box4" class="bg-[#E3E5E8] text-center font-poppins font-bold text-lg w-[31px] h-[48px] rounded-md shadow-md outline-none">
        </div>
        <div class="mx-auto mt-12" >
            <p class="text-xs font-poppins text-[#FF6A69]">code sudah tidak berlaku</p>
        </div>



        <div class="mx-auto -mt-5  h-min">
            <button type="submit" class="text-white h-9  bg-[#00BF71] hover:bg-[#21D68C]  font-medium rounded-lg text-sm w-[385px]  px-5 py-2.5 text-center font-poppins "> Verifikasi</button>
            <div class="flex justify-between mt-2">
                <a href="#" class="font-poppins text-xs text-gray-400">kirim ulang</a>
                <a href="#" class="font-poppins text-xs text-gray-400">1:20 min lagi</a>
            </div>
        </div>









    </div>


</body>
</html>
