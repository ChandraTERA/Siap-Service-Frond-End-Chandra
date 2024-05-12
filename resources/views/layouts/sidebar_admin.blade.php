<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/datepicker.min.js"></script>


</head>

<body class="bg-[#ECECEC] relative md:overflow-x-hidden font-[Poppins] flex flex-row">


    <!-- sidebar -->
    <aside class="left-0 top-0 w-72 min-h-screen bg-main fixed z-50">
        <div class="relative flex justify-between flex-col">
            <a href="#" class="flex flex-col items-center pt-6">
                <img src="./assets/image/Avatar.png" alt="profile-photo" class="w-20 h-20 rounded-full">
                <span class="text-white text-xl">Douglas</span>
            </a>

            <ul class="relative mt-12 flex flex-col gap-2">
                <li>
                    <a href="/dashboard-admin" class="relative group">
                        <span
                            class="content-[''] group-hover:bg-white group-hover:opacity-100 group-active:opacity-100 opacity-0 absolute w-1.5 h-14 rounded-full bg-white left-0 z-30"></span>
                        <div
                            class="px-6 py-4 w-60 mx-auto ml-6 rounded-md text-light ease-linear hover:bg-white hover:text-main flex gap-2
                        {{ request()->is('dashboard-admin') ? 'bg-light text-main' : '' }}">
                            <svg class="hover:text-main text-xl" xmlns="http://www.w3.org/2000/svg" width="22"
                                height="23" viewBox="0 0 22 23" fill="CurrentColor">
                                <path
                                    d="M13.2222 7.5C12.6699 7.5 12.2222 7.05228 12.2222 6.5V1C12.2222 0.447715 12.6699 0 13.2222 0H21C21.5523 0 22 0.447715 22 1V6.5C22 7.05228 21.5523 7.5 21 7.5H13.2222ZM1 12.5C0.447716 12.5 0 12.0523 0 11.5V1C0 0.447715 0.447715 0 1 0H8.77778C9.33006 0 9.77778 0.447715 9.77778 1V11.5C9.77778 12.0523 9.33006 12.5 8.77778 12.5H1ZM13.2222 22.5C12.6699 22.5 12.2222 22.0523 12.2222 21.5V11C12.2222 10.4477 12.6699 10 13.2222 10H21C21.5523 10 22 10.4477 22 11V21.5C22 22.0523 21.5523 22.5 21 22.5H13.2222ZM1 22.5C0.447716 22.5 0 22.0523 0 21.5V16C0 15.4477 0.447715 15 1 15H8.77778C9.33006 15 9.77778 15.4477 9.77778 16V21.5C9.77778 22.0523 9.33006 22.5 8.77778 22.5H1Z" />
                            </svg>
                            <span>Dashboard</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/pengguna-admin" class="relative group">
                        <span
                            class="content-[''] group-hover:bg-white group-hover:opacity-100 group-active:opacity-100 opacity-0 absolute w-1.5 h-14 rounded-full bg-white left-0 z-30"></span>
                        <div
                            class="px-6 py-4 w-60 mx-auto ml-6 rounded-md text-light ease-linear hover:bg-white hover:text-[#00BF71] flex gap-2
                        {{ request()->is('pengguna-admin') ? 'bg-white text-main' : '' }}">
                            <svg class="hover:text-main text-xl" xmlns="http://www.w3.org/2000/svg" width="22"
                                height="23" viewBox="0 0 25 18" fill="CurrentColor">
                                <path
                                    d="M18.125 8.75C18.5354 8.75 18.9417 8.66917 19.3209 8.51212C19.7 8.35508 20.0445 8.12489 20.3347 7.83471C20.6249 7.54453 20.8551 7.20003 21.0121 6.82089C21.1692 6.44174 21.25 6.03538 21.25 5.625C21.25 4.7962 20.9208 4.00134 20.3347 3.41529C19.7487 2.82924 18.9538 2.5 18.125 2.5C17.2962 2.5 16.5013 2.82924 15.9153 3.41529C15.3292 4.00134 15 4.7962 15 5.625C15 6.03538 15.0808 6.44174 15.2379 6.82089C15.3949 7.20003 15.6251 7.54453 15.9153 7.83471C16.5013 8.42076 17.2962 8.75 18.125 8.75ZM8.75 7.5C9.74456 7.5 10.6984 7.10491 11.4017 6.40165C12.1049 5.69839 12.5 4.74456 12.5 3.75C12.5 2.75544 12.1049 1.80161 11.4017 1.09835C10.6984 0.395088 9.74456 0 8.75 0C7.75544 0 6.80161 0.395088 6.09835 1.09835C5.39509 1.80161 5 2.75544 5 3.75C5 4.74456 5.39509 5.69839 6.09835 6.40165C6.80161 7.10491 7.75544 7.5 8.75 7.5ZM18.125 11.25C15.8375 11.25 11.25 12.4 11.25 14.6875V17.5H25V14.6875C25 12.4 20.4125 11.25 18.125 11.25ZM8.75 10C5.8375 10 0 11.4625 0 14.375V17.5H8.75V14.6875C8.75 13.625 9.1625 11.7625 11.7125 10.35C10.625 10.125 9.575 10 8.75 10Z" />
                            </svg>
                            <span>Pengguna</span>
                        </div> 
                    </a>
                </li>
                <li>
                    <div class="flex flex-col  relative overflow-hidden group">
                        <span
                            class="content-[''] group-hover:bg-white group-hover:opacity-100 group-active:opacity-100 opacity-0 absolute w-1.5 h-14 rounded-full bg-white left-0 z-30"></span>
                        <input type="checkbox"
                            class="absolute peer bg-transparent checked:bg-transparent border-none inset-x-0 h-16 w-full z-10 cursor-pointer checked:border-none opacity-0 appearance-none">
                        <div
                            class="px-6 py-4 w-60 mx-auto ml-6 relative rounded-md text-light ease-linear  peer-hover:bg-white peer-hover:text-[#00BF71] flex gap-2
                        {{ request()->is('data-admin') ? 'bg-white  text-main' : '' }}">
                            <svg class="hover:text-main text-xl" xmlns="http://www.w3.org/2000/svg" width="22"
                                height="23" viewBox="0 0 22 23" fill="CurrentColor">
                                <path
                                    d="M5.5 16.25L9.3125 12.4375L11.8125 14.9375L16.25 10.5313V12.5H18.75V6.25H12.5V8.75H14.4688L11.8125 11.4063L9.3125 8.90625L3.75 14.5L5.5 16.25ZM2.5 22.5C1.8125 22.5 1.22375 22.255 0.733752 21.765C0.243752 21.275 -0.000831211 20.6867 2.12224e-06 20V2.5C2.12224e-06 1.8125 0.245002 1.22375 0.735002 0.733752C1.225 0.243752 1.81334 -0.000831211 2.5 2.12224e-06H20C20.6875 2.12224e-06 21.2763 0.245002 21.7663 0.735002C22.2563 1.225 22.5008 1.81334 22.5 2.5V20C22.5 20.6875 22.255 21.2763 21.765 21.7663C21.275 22.2563 20.6867 22.5008 20 22.5H2.5Z" />
                            </svg>
                            <span>Data</span>
                        </div>
                        <div
                            class="absolute top-6 right-12 group-hover:text-[#00BF71] transition-transform duration-500 rotate-180 peer-checked:rotate-0 ">
                            <svg class="text-2xl text-white group-hover:text-[#00BF71] peer-hover:text-[#00BF71]" xmlns="http://www.w3.org/2000/svg"
                                width="13" height="7" viewBox="0 0 13 7" fill="CurrentColor">
                                <path
                                    d="M11.8534 7C12.29 7 12.5169 6.4797 12.2198 6.15977L6.8664 0.394581C6.66858 0.181549 6.33142 0.181549 6.1336 0.394581L0.78021 6.15977C0.483137 6.4797 0.710024 7 1.14661 7L11.8534 7Z" />
                            </svg>
                        </div>

                        <div
                            class="overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-fit divide-y-2">
                            <ul class="py-1 px-8 pl-8 ">
                                <a href="/data-transaksi">
                                    <div
                                        class="px-5 py-3 ml-4 flex justify-start items-center gap-2 text-sm text-white rounded-md hover:bg-white/20  hover:text-white  {{ request()->is('data-transaksi') ? 'bg-white text-emerald-500 ' : '' }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 21" fill="CurrentColor">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10.052 0.25H9.948C9.049 0.25 8.3 0.25 7.706 0.33C7.078 0.414 6.511 0.6 6.056 1.055C5.6 1.511 5.414 2.078 5.33 2.705C5.273 3.132 5.256 4.151 5.252 5.025C3.23 5.092 2.015 5.328 1.172 6.172C-1.19209e-07 7.343 0 9.229 0 13C0 16.771 -1.19209e-07 18.657 1.172 19.828C2.343 21 4.229 21 8 21H12C15.771 21 17.657 21 18.828 19.828C20 18.657 20 16.771 20 13C20 9.229 20 7.343 18.828 6.172C17.985 5.328 16.77 5.092 14.748 5.026C14.744 4.151 14.728 3.132 14.67 2.706C14.586 2.078 14.4 1.511 13.944 1.056C13.489 0.6 12.922 0.414 12.294 0.33C11.7 0.25 10.95 0.25 10.052 0.25ZM13.248 5.002C13.243 4.155 13.229 3.244 13.184 2.905C13.121 2.444 13.014 2.246 12.884 2.116C12.754 1.986 12.556 1.879 12.094 1.816C11.612 1.752 10.964 1.75 10 1.75C9.036 1.75 8.388 1.752 7.905 1.817C7.444 1.879 7.246 1.986 7.116 2.117C6.986 2.247 6.879 2.444 6.816 2.905C6.771 3.245 6.756 4.155 6.752 5.002C7.143 5 7.56 5 8 5H12C12.441 5 12.857 5 13.248 5.002ZM10 8.25C10.1989 8.25 10.3897 8.32902 10.5303 8.46967C10.671 8.61032 10.75 8.80109 10.75 9V9.01C11.839 9.284 12.75 10.143 12.75 11.333C12.75 11.5319 12.671 11.7227 12.5303 11.8633C12.3897 12.004 12.1989 12.083 12 12.083C11.8011 12.083 11.6103 12.004 11.4697 11.8633C11.329 11.7227 11.25 11.5319 11.25 11.333C11.25 10.949 10.824 10.417 10 10.417C9.176 10.417 8.75 10.949 8.75 11.333C8.75 11.717 9.176 12.25 10 12.25C11.385 12.25 12.75 13.21 12.75 14.667C12.75 15.857 11.839 16.715 10.75 16.99V17C10.75 17.1989 10.671 17.3897 10.5303 17.5303C10.3897 17.671 10.1989 17.75 10 17.75C9.80109 17.75 9.61032 17.671 9.46967 17.5303C9.32902 17.3897 9.25 17.1989 9.25 17V16.99C8.161 16.716 7.25 15.857 7.25 14.667C7.25 14.4681 7.32902 14.2773 7.46967 14.1367C7.61032 13.996 7.80109 13.917 8 13.917C8.19891 13.917 8.38968 13.996 8.53033 14.1367C8.67098 14.2773 8.75 14.4681 8.75 14.667C8.75 15.051 9.176 15.583 10 15.583C10.824 15.583 11.25 15.051 11.25 14.667C11.25 14.283 10.824 13.75 10 13.75C8.615 13.75 7.25 12.79 7.25 11.333C7.25 10.143 8.161 9.284 9.25 9.01V9C9.25 8.80109 9.32902 8.61032 9.46967 8.46967C9.61032 8.32902 9.80109 8.25 10 8.25Z"
                                                fill="CurrentColor" />
                                        </svg>
                                        <span>Data Transaksi</span>
                                    </div>
                                </a>
                                <a href="/tambah-pengguna">
                                    <div
                                        class="px-5 py-3 ml-4 flex justify-start items-center gap-2 text-sm rounded-md text-light hover:bg-white/20 hover:text-white  {{ request()->is('tambah-pengguna') ? 'bg-white text-emerald-500' : '' }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="CurrentColor">
                                            <g clip-path="url(#clip0_1978_834)">
                                                <path
                                                    d="M19 15C18.7167 15 18.479 14.904 18.287 14.712C18.095 14.52 17.9993 14.2827 18 14V12H16C15.7167 12 15.479 11.904 15.287 11.712C15.095 11.52 14.9993 11.2827 15 11C15 10.7167 15.096 10.479 15.288 10.287C15.48 10.095 15.7173 9.99933 16 10H18V8C18 7.71667 18.096 7.479 18.288 7.287C18.48 7.095 18.7173 6.99933 19 7C19.2833 7 19.521 7.096 19.713 7.288C19.905 7.48 20.0007 7.71733 20 8V10H22C22.2833 10 22.521 10.096 22.713 10.288C22.905 10.48 23.0007 10.7173 23 11C23 11.2833 22.904 11.521 22.712 11.713C22.52 11.905 22.2827 12.0007 22 12H20V14C20 14.2833 19.904 14.521 19.712 14.713C19.52 14.905 19.2827 15.0007 19 15ZM9 13C7.9 13 6.95834 12.6083 6.175 11.825C5.39167 11.0417 5 10.1 5 9C5 7.9 5.39167 6.95833 6.175 6.175C6.95834 5.39167 7.9 5 9 5C10.1 5 11.0417 5.39167 11.825 6.175C12.6083 6.95833 13 7.9 13 9C13 10.1 12.6083 11.0417 11.825 11.825C11.0417 12.6083 10.1 13 9 13ZM2 21C1.71667 21 1.479 20.904 1.287 20.712C1.095 20.52 0.999337 20.2827 1 20V18.2C1 17.6333 1.146 17.1123 1.438 16.637C1.73 16.1617 2.11734 15.7993 2.6 15.55C3.63334 15.0333 4.68334 14.6457 5.75 14.387C6.81667 14.1283 7.9 13.9993 9 14C10.1 14 11.1833 14.1293 12.25 14.388C13.3167 14.6467 14.3667 15.034 15.4 15.55C15.8833 15.8 16.271 16.1627 16.563 16.638C16.855 17.1133 17.0007 17.634 17 18.2V20C17 20.2833 16.904 20.521 16.712 20.713C16.52 20.905 16.2827 21.0007 16 21H2Z"
                                                    fill="CurrentColor" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1978_834">
                                                    <rect width="24" height="24" fill="CurrentColor" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <span>Tambah Pengguna</span>
                                    </div>
                                </a>
                                <a href="/tambah-kerusakan">
                                    <div
                                        class="px-5 py-3 ml-4 flex justify-start items-center gap-2 text-sm rounded-md text-light hover:bg-white/20 hover:text-white  {{ request()->is('tambah-kerusakan') ? 'bg-white text-emerald-500' : '' }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 22 22" fill="CurrentColor">
                                            <path
                                                d="M4.95 8.525C4.95 8.3062 5.03692 8.09636 5.19164 7.94164C5.34635 7.78692 5.5562 7.7 5.775 7.7C5.9938 7.7 6.20365 7.78692 6.35836 7.94164C6.51308 8.09636 6.6 8.3062 6.6 8.525C6.6 8.7438 6.51308 8.95365 6.35836 9.10836C6.20365 9.26308 5.9938 9.35 5.775 9.35C5.5562 9.35 5.34635 9.26308 5.19164 9.10836C5.03692 8.95365 4.95 8.7438 4.95 8.525ZM5.775 13.75C5.5562 13.75 5.34635 13.8369 5.19164 13.9916C5.03692 14.1464 4.95 14.3562 4.95 14.575C4.95 14.7938 5.03692 15.0036 5.19164 15.1584C5.34635 15.3131 5.5562 15.4 5.775 15.4C5.9938 15.4 6.20365 15.3131 6.35836 15.1584C6.51308 15.0036 6.6 14.7938 6.6 14.575C6.6 14.3562 6.51308 14.1464 6.35836 13.9916C6.20365 13.8369 5.9938 13.75 5.775 13.75ZM0 3.575C0 2.62685 0.376651 1.71754 1.04709 1.04709C1.71754 0.376651 2.62685 0 3.575 0H16.225C17.1731 0 18.0825 0.376651 18.7529 1.04709C19.4234 1.71754 19.8 2.62685 19.8 3.575V9.9242C18.7933 9.27888 17.6402 8.8979 16.4472 8.8165C16.4946 8.69161 16.511 8.55706 16.4949 8.42444C16.4788 8.29182 16.4306 8.16512 16.3546 8.05524C16.2786 7.94536 16.1771 7.85561 16.0587 7.79373C15.9403 7.73184 15.8086 7.69967 15.675 7.7H10.725C10.5062 7.7 10.2964 7.78692 10.1416 7.94164C9.98692 8.09636 9.9 8.3062 9.9 8.525C9.9 8.7438 9.98692 8.95365 10.1416 9.10836C10.2964 9.26308 10.5062 9.35 10.725 9.35H13.1956C12.2328 9.75206 11.3696 10.3599 10.6666 11.1309C9.96362 11.9019 9.43782 12.8174 9.12611 13.8131C8.81439 14.8088 8.72431 15.8607 8.86218 16.8949C9.00005 17.9292 9.36253 18.9207 9.9242 19.8H3.575C2.62685 19.8 1.71754 19.4234 1.04709 18.7529C0.376651 18.0825 0 17.1731 0 16.225V3.575ZM3.3 8.525C3.3 8.85002 3.36402 9.17186 3.4884 9.47214C3.61278 9.77242 3.79509 10.0453 4.02491 10.2751C4.25474 10.5049 4.52758 10.6872 4.82786 10.8116C5.12814 10.936 5.44998 11 5.775 11C6.10002 11 6.42186 10.936 6.72214 10.8116C7.02242 10.6872 7.29526 10.5049 7.52509 10.2751C7.75491 10.0453 7.93722 9.77242 8.0616 9.47214C8.18598 9.17186 8.25 8.85002 8.25 8.525C8.25 7.86859 7.98924 7.23906 7.52509 6.77491C7.06094 6.31076 6.43141 6.05 5.775 6.05C5.11859 6.05 4.48906 6.31076 4.02491 6.77491C3.56076 7.23906 3.3 7.86859 3.3 8.525ZM5.775 12.1C5.11859 12.1 4.48906 12.3608 4.02491 12.8249C3.56076 13.2891 3.3 13.9186 3.3 14.575C3.3 15.2314 3.56076 15.8609 4.02491 16.3251C4.48906 16.7892 5.11859 17.05 5.775 17.05C6.43141 17.05 7.06094 16.7892 7.52509 16.3251C7.98924 15.8609 8.25 15.2314 8.25 14.575C8.25 13.9186 7.98924 13.2891 7.52509 12.8249C7.06094 12.3608 6.43141 12.1 5.775 12.1ZM3.3 3.575C3.3 4.0304 3.6696 4.4 4.125 4.4H15.675C15.8938 4.4 16.1036 4.31308 16.2584 4.15836C16.4131 4.00365 16.5 3.7938 16.5 3.575C16.5 3.3562 16.4131 3.14635 16.2584 2.99164C16.1036 2.83692 15.8938 2.75 15.675 2.75H4.125C3.9062 2.75 3.69635 2.83692 3.54164 2.99164C3.38692 3.14635 3.3 3.3562 3.3 3.575ZM22 15.95C22 14.3454 21.3626 12.8066 20.228 11.672C19.0934 10.5374 17.5546 9.9 15.95 9.9C14.3454 9.9 12.8066 10.5374 11.672 11.672C10.5374 12.8066 9.9 14.3454 9.9 15.95C9.9 17.5546 10.5374 19.0934 11.672 20.228C12.8066 21.3626 14.3454 22 15.95 22C17.5546 22 19.0934 21.3626 20.228 20.228C21.3626 19.0934 22 17.5546 22 15.95ZM16.5 16.5L16.5011 19.2533C16.5011 19.3992 16.4432 19.5391 16.34 19.6422C16.2369 19.7454 16.097 19.8033 15.9511 19.8033C15.8052 19.8033 15.6653 19.7454 15.5622 19.6422C15.459 19.5391 15.4011 19.3992 15.4011 19.2533V16.5H12.6456C12.4997 16.5 12.3598 16.4421 12.2567 16.3389C12.1535 16.2358 12.0956 16.0959 12.0956 15.95C12.0956 15.8041 12.1535 15.6642 12.2567 15.5611C12.3598 15.4579 12.4997 15.4 12.6456 15.4H15.4V12.65C15.4 12.5041 15.4579 12.3642 15.5611 12.2611C15.6642 12.1579 15.8041 12.1 15.95 12.1C16.0959 12.1 16.2358 12.1579 16.3389 12.2611C16.4421 12.3642 16.5 12.5041 16.5 12.65V15.4H19.2467C19.3926 15.4 19.5325 15.4579 19.6356 15.5611C19.7388 15.6642 19.7967 15.8041 19.7967 15.95C19.7967 16.0959 19.7388 16.2358 19.6356 16.3389C19.5325 16.4421 19.3926 16.5 19.2467 16.5H16.5Z"
                                                fill="#CurrentColor" />
                                        </svg>
                                        <span>Tambah Kerusakan</span>
                                    </div>
                                </a>

                            </ul>
                        </div>

                    </div>
                </li>
                <li>
                    <a href="/profile-admin" class="relative group">
                        <span
                            class="content-[''] group-hover:bg-white group-hover:opacity-100 group-active:opacity-100 opacity-0 absolute w-1.5 h-14 rounded-full bg-white left-0 z-30"></span>
                        <div
                            class="px-6 py-4 w-60 mx-auto ml-6 rounded-md text-light ease-linear hover:bg-white hover:text-[#00BF71] flex gap-2
                        {{ request()->is('profile-admin') ? 'bg-white text-main' : '' }}">
                            <svg class="hover:text-main text-xl" xmlns="http://www.w3.org/2000/svg" width="22"
                                height="23" viewBox="0 0 22 23" fill="CurrentColor">
                                <path
                                    d="M10 0C11.3261 0 12.5979 0.526784 13.5355 1.46447C14.4732 2.40215 15 3.67392 15 5C15 6.32608 14.4732 7.59785 13.5355 8.53553C12.5979 9.47322 11.3261 10 10 10C8.67392 10 7.40215 9.47322 6.46447 8.53553C5.52678 7.59785 5 6.32608 5 5C5 3.67392 5.52678 2.40215 6.46447 1.46447C7.40215 0.526784 8.67392 0 10 0ZM10 12.5C15.525 12.5 20 14.7375 20 17.5V20H0V17.5C0 14.7375 4.475 12.5 10 12.5Z"
                                    </svg>
                                    <span>Profile</span>
                        </div>
                    </a>
                </li>

            </ul>

        </div>
        <ul class="absolute bottom-20 left-9">
            <li>
                <a href="/keluar-admin" class="relative group">
                    <span
                        class="content-[''] group-hover:bg-white group-hover:opacity-100 group-active:opacity-100 opacity-0 absolute w-1.5 h-14 rounded-full bg-white -left-9 z-30"></span>
                    <div
                    
                        class="px-6 py-4 w-60 mx-auto -ml-3 rounded-md text-light ease-linear hover:bg-white hover:text-main flex gap-2
                    {{ request()->is('keluar-admin') ? 'bg-white text-main' : '' }}">
                        <svg class="hover:text-main text-xl" xmlns="http://www.w3.org/2000/svg" width="22"
                            height="23" viewBox="0 0 22 23" fill="CurrentColor">
                            <path
                                d="M15.5556 6.11111L14 7.82222L15.7778 9.77778H6.66667V12.2222H15.7778L14 14.1778L15.5556 15.8889L20 11L15.5556 6.11111ZM2.22222 2.44444H10V0H2.22222C1 0 0 1.1 0 2.44444V19.5556C0 20.9 1 22 2.22222 22H10V19.5556H2.22222V2.44444Z"
                                </svg>
                                <span>Keluar</span>
                    </div>
                </a>
            </li>
        </ul>
    </aside>
    <div class="top-0 w-screen ml-72 mx-auto px-5">
        <article class="flex flex-col gap-8">

            @yield('navbar')


        @yield('contents')


        </article>


</body>

</html>