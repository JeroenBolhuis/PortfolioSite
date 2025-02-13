<!-- About Cards Section -->
<div id="about" class="section-divider py-20 bg-black/30 backdrop-blur-sm relative">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl lg:text-5xl text-white font-bold text-center mb-12" data-aos="fade-up">{{ __('About Me') }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Education Card -->
            <div class="glass p-8 rounded-2xl hover:transform hover:scale-105 transition duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="text-purple-400 mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">{{ __('Education') }}</h3>
                <p class="text-gray-300">{{ __('Currently studying Informatica (HBO) at Avans Hogeschool in Den Bosch, expanding my knowledge in software development and computer science.') }}</p>
            </div>
            <!-- Experience Card -->
            <div class="glass p-8 rounded-2xl hover:transform hover:scale-105 transition duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="text-purple-400 mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">{{ __('Experience') }}</h3>
                <p class="text-gray-300">{{ __('Specialized in developing custom web solutions for businesses, focusing on automation and efficiency through modern web technologies.') }}</p>
            </div>
            <!-- Tech Stack Card -->
            <div class="glass p-8 rounded-2xl hover:transform hover:scale-105 transition duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="text-purple-400 mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">{{ __('Tech Stack') }}</h3>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-purple-700/20 text-purple-300 rounded-full text-sm">Laravel</span>
                    <span class="px-3 py-1 bg-blue-700/20 text-blue-300 rounded-full text-sm">Blade</span>
                    <span class="px-3 py-1 bg-indigo-700/20 text-indigo-300 rounded-full text-sm">Tailwind CSS</span>
                    <span class="px-3 py-1 bg-pink-700/20 text-pink-300 rounded-full text-sm">Livewire</span>
                    <span class="px-3 py-1 bg-red-700/20 text-red-300 rounded-full text-sm">Alpine.js</span>
                    <span class="px-3 py-1 bg-yellow-700/20 text-yellow-300 rounded-full text-sm">JavaScript</span>
                    <span class="px-3 py-1 bg-green-700/20 text-green-300 rounded-full text-sm">MySQL</span>
                    <span class="px-3 py-1 bg-cyan-700/20 text-cyan-300 rounded-full text-sm">Vercel</span>
                    <span class="px-3 py-1 bg-orange-700/20 text-orange-300 rounded-full text-sm">Supabase</span>
                </div>
            </div>
        </div>
    </div>
</div> 