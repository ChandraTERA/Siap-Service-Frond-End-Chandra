<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>

<body class="bg-slate-100">
        <main class="flex flex-col min-h-screen max-w-lg mx-auto bg-white">
            
            <header class="bg-white py-2 top-0 sticky z-50">
                    <nav class="px-5 w-full flex justify-between">
                        @yield('back')
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <path d="M6.5625 14.0625H25.3125C25.5611 14.0625 25.7996 14.1613 25.9754 14.3371C26.1512 14.5129 26.25 14.7514 26.25 15C26.25 15.2486 26.1512 15.4871 25.9754 15.6629C25.7996 15.8387 25.5611 15.9375 25.3125 15.9375H6.5625C6.31386 15.9375 6.0754 15.8387 5.89959 15.6629C5.72377 15.4871 5.625 15.2486 5.625 15C5.625 14.7514 5.72377 14.5129 5.89959 14.3371C6.0754 14.1613 6.31386 14.0625 6.5625 14.0625Z" fill="#5C6672"/>
                            <path d="M6.95059 15L14.7262 22.7738C14.9023 22.9498 15.0012 23.1886 15.0012 23.4375C15.0012 23.6865 14.9023 23.9252 14.7262 24.1013C14.5502 24.2773 14.3114 24.3762 14.0625 24.3762C13.8135 24.3762 13.5748 24.2773 13.3987 24.1013L4.96122 15.6638C4.87391 15.5767 4.80464 15.4732 4.75738 15.3593C4.71012 15.2454 4.68579 15.1233 4.68579 15C4.68579 14.8767 4.71012 14.7546 4.75738 14.6407C4.80464 14.5268 4.87391 14.4234 4.96122 14.3363L13.3987 5.89877C13.5748 5.72274 13.8135 5.62384 14.0625 5.62384C14.3114 5.62384 14.5502 5.72274 14.7262 5.89877C14.9023 6.07481 15.0012 6.31357 15.0012 6.56252C15.0012 6.81148 14.9023 7.05024 14.7262 7.22627L6.95059 15Z" fill="#5C6672"/>
                        </svg>
                    </a>
                        <img src="./assets/image/logo/siap-service.png" alt="siap service logo" class="h-auto w-20">
                    </nav>
            </header>

                <article class="px-5">
                    @yield('contents')
                </article>
        </main>

</body>
</html>