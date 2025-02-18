<!-- About Section -->
<div id="about" class="section-divider py-12 bg-black/40 backdrop-blur-sm relative">
    <div class="container mx-auto">
        <h2 class="text-3xl lg:text-5xl text-white font-bold text-center mb-12" data-aos="fade-up">{{ __('About Me') }}</h2>
        
        <!-- Education & Experience Toggle Section -->
        <div class="max-w-3xl mx-auto mb-16" x-data="{ 
            activeTab: 'education',
            switchTab(tab) {
                this.activeTab = tab;
                // Small delay to ensure content is rendered before refreshing AOS
                setTimeout(() => {
                    if (window.AOS) {
                        window.AOS.refresh();
                    }
                }, 5);
            }
        }">
            <!-- Modern Toggle Switch -->
            <div class="flex justify-center mb-8" data-aos="fade-up">
                <div class="glass inline-flex items-center rounded-full p-1 relative">
                    <!-- Background Slider -->
                    <div class="absolute h-[calc(100%-8px)] w-[calc(50%-4px)] rounded-full transition-all ease-out bg-gradient-to-r from-purple-500 to-pink-500 py-3 px-6 duration-300"
                         :class="{ 
                            'left-1': activeTab === 'education',
                            'left-[calc(50%+4px)]': activeTab === 'experience'
                         }">
                    </div>
                    
                    <!-- Buttons -->
                    <button 
                        @click="switchTab('education')" 
                        class="relative px-6 py-2 rounded-full text-white font-medium transition-all duration-300 z-10"
                        :class="{ 'text-white': activeTab === 'education', 'text-gray-400 hover:text-white': activeTab !== 'education' }">
                        {{ __('Education') }}
                    </button>
                    <button 
                        @click="switchTab('experience')" 
                        class="relative px-6 py-2 rounded-full text-white font-medium transition-all duration-300 z-10"
                        :class="{ 'text-white': activeTab === 'experience', 'text-gray-400 hover:text-white': activeTab !== 'experience' }">
                        {{ __('Experience') }}
                    </button>
                </div>
            </div>

            <!-- Content -->
            <div class="glass p-6 rounded-2xl">
                <div class="relative">
                    <!-- Education Panel -->
                    <div class="transition-all duration-300 ease-out w-full"
                         :class="{ 
                            'opacity-100 visible': activeTab === 'education',
                            'opacity-0 invisible absolute inset-0': activeTab !== 'education'
                         }">
                        <div class="space-y-8">
                            @foreach($education as $item)
                                <div class="relative pl-6 border-l-2 border-purple-500" data-aos="fade-right" data-aos-delay="{{ $loop->index * 100 }}">
                                    <span class="absolute left-[-9px] top-2 w-4 h-4 bg-purple-500 rounded-full"></span>
                                    <div>
                                        <h4 class="text-xl font-bold text-white inline-block">{{ $item['title'] }}</h4>
                                        <span class="text-purple-400 text-sm">{{ $item['date'] }}</span>
                                    </div>
                                    <p class="text-gray-300 my-2">{{ $item['description'] }}</p>
                                    
                                    <a href="https://www.google.com/maps/search/?api=1&query={{$item['location']}}" target="_blank" class="flex items-center gap-1 text-gray-300 hover:text-purple-400">
                                        <svg class="w-4 h-4 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <p class="text-xs">{{ $item['location'] }}</p>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Experience Panel -->
                    <div class="transition-all duration-300 ease-out w-full"
                         :class="{ 
                            'opacity-100 visible': activeTab === 'experience',
                            'opacity-0 invisible absolute inset-0': activeTab !== 'experience'
                         }">
                        <div class="space-y-8">
                            @foreach($experience as $item)
                                <div class="relative pl-6 border-l-2 border-purple-500" data-aos="fade-left" data-aos-delay="{{ $loop->index * 100 }}">
                                    <span class="absolute left-[-9px] top-2 w-4 h-4 bg-purple-500 rounded-full"></span>
                                    <div class="mb-1">
                                        <h4 class="text-xl font-bold text-white inline-block">{{ $item['title'] }}</h4>
                                        <span class="text-purple-400 text-sm">{{ $item['date'] }}</span>
                                    </div>
                                    <p class="text-gray-300">{{ $item['description'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Tech Stack Section - Full Width -->
    @include('components.partials.tech-stack')
</div> 