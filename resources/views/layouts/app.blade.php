<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', __('Jeroen Bolhuis'))</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="flex flex-col text-indigo-400 bg-gradient-to-br from-gray-900 via-gray-950 to-black min-h-screen relative">    
    <nav class="bg-black/50 backdrop-blur-sm fixed w-full z-20 top-0 start-0 border-b border-white/5">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-3">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="{{ __('Flowbite Logo') }}">
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Jeroen Bolhuis</span>
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
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                    <li>
                        <a href="#" class="block py-2 px-3 text-white hover:text-purple-400 transition-colors duration-300">{{ __('Home') }}</a>
                    </li>
                    <li>
                        <a href="#projects" class="block py-2 px-3 text-white hover:text-purple-400 transition-colors duration-300">{{ __('Projects') }}</a>
                    </li>
                    <li>
                        <a href="#contact" class="block py-2 px-3 text-white hover:text-purple-400 transition-colors duration-300">{{ __('Contact') }}</a>
                    </li>
                    <li class="hidden md:block">
                        @include('partials.language_switcher')
                    </li>
                </ul>
            </div>  
        </div>
    </nav>
    <main class="min-h-screen relative z-10">
        @yield('content')
    </main>

    <footer class="bg-black/50 backdrop-blur-sm text-white py-8 mt-auto relative z-10 border-t border-white/5">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="mb-4 md:mb-0">&copy; {{ date('Y') }} {{ __('EfficiënC') }}. {{ __('All rights reserved.') }}</p>
                <div class="flex space-x-6">
                    <a href="https://github.com/JeroenBolhuis" target="_blank" class="hover:text-purple-400 transition-colors duration-300">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                    </a>
                    <a href="https://linkedin.com/in/yourusername" target="_blank" class="hover:text-purple-400 transition-colors duration-300">
                        <span class="sr-only">LinkedIn</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    @stack('scripts')
</body>
</html>
