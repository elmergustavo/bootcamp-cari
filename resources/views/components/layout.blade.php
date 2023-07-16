<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootcamp Cari</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <livewire:styles />
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <header x-data="{ mobileMenuOpen: false }" class="flex justify-end xl:justify-center  bg-slate-800 shadow-md text-white">

        <!-- Responsive Menu -->
        <div class="block fixed z-10 top-0 bottom-0 height h-full w-[220px] transition-all bg-slate-900 md:hidden"
            :class="mobileMenuOpen ? 'left-0' : '-left-[220px]'">
            <ul>
                <li x-data="{ open: false }" class="relative mt-3">
                    <a @click="open = !open"
                        class="cursor-pointer flex items-center py-navbar-item px-navbar-item py-8  hover:bg-slate-900">
                        <span class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                            </svg>

                            Curso de Alpine Js
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <ul x-show="open" x-transition class="z-10 right-0 bg-slate-800 py-2">
                        <li>
                            <a href="/src/profile.html" class="flex px-3 py-2 hover:bg-slate-900">
                                Basics
                            </a>
                        </li>
                        <li>
                            <a href="/src/orders.html" class="flex px-3 py-2 hover:bg-slate-900">

                                Components
                            </a>
                        </li>
                        <li>
                            <a href="/src/logout.html" class="flex px-3 py-2 hover:bg-slate-900">
                                Plugins
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('invoice') }}" class="flex px-3 py-2 hover:bg-slate-900">
                                Proyect invoice
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('multistep') }}" class="flex px-3 py-2 hover:bg-slate-900">
                                Proyect multistep
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('kanban') }}" class="flex px-3 py-2 hover:bg-slate-900">
                                Proyect kanban
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="px-3 py-3">
                    <a href="/src/signup.html"
                        class="block text-center text-white bg-emerald-600 py-2 px-3 rounded shadow-md hover:bg-emerald-700 active:bg-emerald-800 transition-colors w-full">
                        Register now
                    </a>
                </li>
            </ul>
        </div>
        <!--/ Responsive Menu -->

        <nav class="hidden md:block">
            <ul class="grid grid-flow-col items-center">

                <li x-data="{ open: false }" class="relative ">
                    <a @click="open = !open"
                        class="cursor-pointer flex items-center py-navbar-item px-navbar-item py-8  hover:bg-slate-900">
                        <span class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                            </svg>

                            Curso de Alpine Js
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <ul @click.outside="open = false" x-show="open" x-transition x-cloak
                        class="absolute z-10 right-0 bg-slate-800 py-2 w-48">
                        <li>
                            <a href="/src/profile.html" class="flex px-3 py-2 hover:bg-slate-900">
                                Basics
                            </a>
                        </li>
                        <li>
                            <a href="/src/orders.html" class="flex px-3 py-2 hover:bg-slate-900">

                                Components
                            </a>
                        </li>
                        <li>
                            <a href="/src/logout.html" class="flex px-3 py-2 hover:bg-slate-900">
                                Plugins
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('invoice') }}" class="flex px-3 py-2 hover:bg-slate-900">
                                Proyect invoice
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('multistep') }}" class="flex px-3 py-2 hover:bg-slate-900">
                                Proyect multistep
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('kanban') }}" class="flex px-3 py-2 hover:bg-slate-900">
                                Proyect kanban
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="/"
                        class="inline-flex items-center text-white bg-emerald-600 py-2 px-3 rounded shadow-md hover:bg-emerald-700 active:bg-emerald-800 transition-colors mx-5">
                        Livewire
                    </a>
                </li>
            </ul>
        </nav>
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="p-4 block md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </header>

    {{ $slot }}

    <livewire:scripts />
</body>

</html>
