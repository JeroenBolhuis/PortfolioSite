<!DOCTYPE html>
<html lang="en" class="scroll-smooth overflow-x-hidden">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Jeroen Bolhuis - Full-stack developer based in Eindhoven, Netherlands. Creating modern web applications with expertise in Laravel, Livewire, PHP, and Tailwind CSS.">
    <meta name="keywords" content="Jeroen Bolhuis, full-stack developer, web developer, Laravel developer, PHP developer, JavaScript developer, React developer, Livewire, portfolio, Eindhoven, Netherlands, web applications, software development">
    <meta name="author" content="Jeroen Bolhuis">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ request()->url() }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://webdevsite.nl/">
    <meta property="og:title" content="Jeroen Bolhuis - Full-Stack Developer | Laravel PHP JavaScript Portfolio">
    <meta property="og:description" content="Full-stack developer based in Eindhoven, Netherlands. Creating modern web applications with expertise in Laravel, Livewire, PHP, JavaScript, and React.">
    <meta property="og:image" content="https://webdevsite.nl/images/Photo_JeroenBolhuis.webp">
    <meta property="og:site_name" content="Jeroen Bolhuis Portfolio">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://webdevsite.nl/">
    <meta property="twitter:title" content="Jeroen Bolhuis - Full-Stack Developer | Laravel PHP JavaScript Portfolio">
    <meta property="twitter:description" content="Full-stack developer based in Eindhoven, Netherlands. Creating modern web applications with expertise in Laravel, Livewire, PHP, JavaScript, and React.">
    <meta property="twitter:image" content="https://webdevsite.nl/images/Photo_JeroenBolhuis.webp">
    <meta property="twitter:creator" content="@_jeroentjeb_">
    <title>@yield('title', __('Jeroen Bolhuis - Full-Stack Dev | Portfolio | Eindhoven NL'))</title>

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Jeroen Bolhuis",
        "jobTitle": "Full-Stack Developer",
        "description": "Full-stack developer specializing in Laravel, PHP, JavaScript, and modern web technologies. Based in Eindhoven, Netherlands.",
        "url": "https://webdevsite.nl",
        "sameAs": [
            "https://github.com/JeroenBolhuis",
            "https://www.linkedin.com/in/jeroen-bolhuis",
            "https://www.x.com/_jeroentjeb_",
            "https://www.instagram.com/jeroenb4"
        ],
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Eindhoven",
            "addressCountry": "Netherlands"
        },
        "knowsAbout": [
            "Laravel",
            "PHP",
            "JavaScript",
            "Livewire",
            "Tailwind CSS",
            "MySQL",
            "PostgreSQL",
            "Redis",
            "Vite",
            "Alpine.js",
            "Full-Stack Development",
            "Web Applications"
        ],
        "alumniOf": {
            "@type": "EducationalOrganization",
            "name": "Avans University of Applied Sciences"
        }
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Jeroen Bolhuis - Portfolio",
        "url": "https://webdevsite.nl",
        "description": "Portfolio website of Jeroen Bolhuis, a full-stack developer based in Eindhoven, Netherlands. Showcasing web development projects and expertise.",
        "author": {
            "@type": "Person",
            "name": "Jeroen Bolhuis"
        },
        "publisher": {
            "@type": "Person",
            "name": "Jeroen Bolhuis"
        }
    }
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="flex flex-col text-indigo-400 bg-gray-950 min-h-screen relative overflow-x-hidden">    
    <nav class="bg-black/50 fixed w-full z-20 top-0 start-0 border-b border-white/5">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center justify-between py-3">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Jeroen Bolhuis</span>
                </a>
                <div class="md:hidden w-auto">
                    @include('partials.language_switcher')
                </div>
                <div class="md:block w-auto hidden">
                    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                        <li>
                            <a href="#" class="block py-2 px-3 text-white hover:text-purple-400 transition-colors duration-300">{{ __('Home') }}</a>
                        </li>
                        <li>
                            <a href="#about" class="block py-2 px-3 text-white hover:text-purple-400 transition-colors duration-300">{{ __('About') }}</a>
                        </li>
                        <li>
                            <a href="#contact" class="block py-2 px-3 text-white hover:text-purple-400 transition-colors duration-300">{{ __('Contact') }}</a>
                        </li>
                        <li>
                            @include('partials.language_switcher')
                        </li>
                    </ul>
                </div>  
            </div>
        </div>
    </nav>
    <main class="min-h-screen relative z-10">
        @yield('content')
    </main>

    <footer class="bg-black/50 text-white py-8 mt-auto relative z-10 border-t border-white/5">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
                <div class="flex flex-col gap-4">
                    <p>&copy; {{ date('Y') }} {{ __('Jeroen Bolhuis') }}. {{ __('All rights reserved.') }}</p>
                    <div class="flex flex-wrap gap-6 text-sm">
                        <a href="#hero" class="hover:text-purple-400 transition-colors duration-300">{{ __('Home') }}</a>
                    </div>
                </div>
                <div class="flex space-x-6">
                    <a href="https://github.com/JeroenBolhuis" target="_blank" rel="noopener noreferrer nofollow" class="hover:text-purple-400 transition-colors duration-300">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/in/jeroen-bolhuis" target="_blank" rel="noopener noreferrer nofollow" class="hover:text-purple-400 transition-colors duration-300">
                        <span class="sr-only">LinkedIn</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    <a href="https://www.x.com/_jeroentjeb_" target="_blank" rel="noopener noreferrer nofollow" class="hover:text-purple-400 transition-colors duration-300">
                        <span class="sr-only">X</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
                    <a href="https://www.instagram.com/jeroenb4" target="_blank" rel="noopener noreferrer nofollow" class="hover:text-purple-400 transition-colors duration-300">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    @stack('scripts')
</body>
</html>
