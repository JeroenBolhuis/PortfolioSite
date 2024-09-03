<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', __('EfficiënC'))</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="flex flex-col text-indigo-400" style="background-image: url('{{ asset('images/header.png') }}'); background-size: cover;">
    <nav class="bg-main fixed w-full z-20 top-0 start-0 border-b border-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-3">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="{{ __('Flowbite Logo') }}">
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">{{ __('EfficiënC') }}</span>
            </a>
            <!-- Toggle Button for Mobile Menu -->
            <input type="checkbox" id="menu-toggle" class="hidden peer" />
            <label for="menu-toggle" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 cursor-pointer">
                <span class="sr-only">{{ __('Open main menu') }}</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </label>
            <div class="w-full md:block md:w-auto peer-checked:block hidden">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent">
                    @foreach([
                        ['name' => __('Home'), 'url' => '/', 'active' => request()->is('/')],
                        ['name' => __('Portfolio'), 'url' => '/portfolio', 'active' => request()->is('portfolio')]
                    ] as $item)
                        <li>
                            <a href="{{ $item['url'] }}" class="block py-2 px-3 rounded md:p-0 {{ $item['active'] ? 'text-white bg-blue-700 md:bg-transparent md:text-blue-700' : 'md:hover:bg-transparent md:hover:text-blue-700 hover:bg-gray-700 text-gray-900 md:text-gray-50' }}">
                               {{ $item['name'] }}
                            </a>
                        </li>
                    @endforeach
                    <div class="hidden md:block">
                        @include('partials.language_switcher')
                    </div>
                </ul>
            </div>  
        </div>
    </nav>
    <main class="min-h-screen py-24">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white py-4 mt-auto">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} {{ __('EfficiënC') }}. {{ __('All rights reserved.') }}</p>
        </div>
    </footer>
    @stack('scripts')
</body>
</html>
