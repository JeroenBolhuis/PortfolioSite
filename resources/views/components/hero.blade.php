<!-- Hero Section -->
<div class="min-h-screen flex items-center justify-center px-4 py-20 relative overflow-hidden">
    <!-- Animated gradient background -->
    <div class="absolute inset-0 bg-gradient-to-br from-purple-900/20 via-transparent to-pink-900/20 opacity-30"></div>
    
    <div class="container mx-auto relative">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <!-- Left Column -->
            <div class="lg:w-1/2">
                <h1 class="text-4xl lg:text-7xl font-bold min-h-24 flex items-end">
                    <span class="text-white">{{ __('Hi, I\'m') }}</span>
                    <a href="#about" 
                        class="bg-clip-text text-transparent bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 font-bold ml-4 transition-all duration-300 hover:text-5xl lg:hover:text-8xl">
                        {{ __('Jeroen') }}
                    </a>
                </h1>
                <p class="text-xl lg:text-2xl text-gray-300 leading-relaxed min-h-8 leading-tight my-2">
                    {{ __('A') }}
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 font-bold mx-1">
                        {{ __(' full-stack ')}}
                    </span>
                    {{ __('developer creating modern') }}
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 font-bold mx-1">
                        {{ __(' web')}}
                    </span>
                    {{ __('solutions.') }}
                </p>
                <div class="flex items-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <a href="https://www.google.com/maps/search/?api=1&query=Eindhoven%2C+NL" target="_blank" class="text-gray-300 text-sm ml-1">Eindhoven, NL</a>
                </div>
                <div class="flex gap-4 my-4">
                    <a href="#contact" class="glass hover:bg-white/10 text-white font-semibold py-3 px-6 rounded-lg transition duration-300">
                        {{ __('Contact Me') }}
                    </a>
                </div>
            </div>
            <!-- Right Column -->
            <div class="lg:w-1/2">
                <div class="macbook-container relative mx-auto transform hover:scale-105 duration-500 group">
                    <div class="macbook-screen absolute inset-0 overflow-hidden" style="top: 7%; left: 1.75%; right: 4.9%; bottom: 7.5%;">
                        <video autoplay loop muted playsinline class="w-full h-full object-cover">
                            <source src="{{ asset('images/Animation2.mp4') }}" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-neutral-700 bg-opacity-0 xl:bg-opacity-60 transition-opacity duration-300 group-hover:opacity-0 z-10"></div>
                    </div>
                    <img class="w-full" src="{{ asset('images/macbook.svg') }}" alt="{{ __('Macbook Frame') }}" />
                </div>
            </div>
        </div>
    </div>
</div> 