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
            <header class="bg-main py-6 top-0 sticky z-50">
                    <nav class="px-5 w-full flex justify-start gap-4">
                        @yield('back')
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <path d="M6.5625 14.0625H25.3125C25.5611 14.0625 25.7996 14.1613 25.9754 14.3371C26.1512 14.5129 26.25 14.7514 26.25 15C26.25 15.2486 26.1512 15.4871 25.9754 15.6629C25.7996 15.8387 25.5611 15.9375 25.3125 15.9375H6.5625C6.31386 15.9375 6.0754 15.8387 5.89959 15.6629C5.72377 15.4871 5.625 15.2486 5.625 15C5.625 14.7514 5.72377 14.5129 5.89959 14.3371C6.0754 14.1613 6.31386 14.0625 6.5625 14.0625Z" fill="white"/>
                            <path d="M6.95059 15.0002L14.7262 22.774C14.9023 22.95 15.0012 23.1888 15.0012 23.4377C15.0012 23.6867 14.9023 23.9254 14.7262 24.1015C14.5502 24.2775 14.3114 24.3764 14.0625 24.3764C13.8135 24.3764 13.5748 24.2775 13.3987 24.1015L4.96122 15.664C4.87391 15.5769 4.80464 15.4734 4.75738 15.3595C4.71012 15.2456 4.68579 15.1235 4.68579 15.0002C4.68579 14.8769 4.71012 14.7548 4.75738 14.6409C4.80464 14.527 4.87391 14.4235 4.96122 14.3365L13.3987 5.89896C13.5748 5.72292 13.8135 5.62402 14.0625 5.62402C14.3114 5.62402 14.5502 5.72292 14.7262 5.89896C14.9023 6.07499 15.0012 6.31375 15.0012 6.56271C15.0012 6.81166 14.9023 7.05042 14.7262 7.22646L6.95059 15.0002Z" fill="white"/>
                        </svg>
                    </a>
                    <h1 class="text-white font-normal text-xl">@yield('title')</h1>
                    </nav>
            </header>

                <article class="px-5">
                    @yield('contents')
                </article>
        </main>
</body>
</html>