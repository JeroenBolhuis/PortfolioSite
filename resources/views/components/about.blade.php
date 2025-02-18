<!-- About Section -->
<div id="about" class="section-divider py-20 bg-black/30 backdrop-blur-sm relative">
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
                                <div class="relative pl-6 border-l-2 border-purple-500" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                                    <span class="absolute left-[-9px] top-2 w-4 h-4 bg-purple-500 rounded-full"></span>
                                    <div>
                                        <h4 class="text-xl font-bold text-white inline-block">{{ $item['title'] }}</h4>
                                        <span class="text-purple-400 text-sm ml-2">{{ $item['date'] }}</span>
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
                                <div class="relative pl-6 border-l-2 border-purple-500" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                                    <span class="absolute left-[-9px] top-2 w-4 h-4 bg-purple-500 rounded-full"></span>
                                    <div class="mb-1">
                                        <h4 class="text-xl font-bold text-white inline-block">{{ $item['title'] }}</h4>
                                        <span class="text-purple-400 text-sm ml-2">{{ $item['date'] }}</span>
                                    </div>
                                    <p class="text-gray-300">{{ $item['description'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tech Stack Section -->
        <div class="w-full text-center overflow-hidden" data-aos="fade-up">
            <h3 class="text-2xl font-bold text-white mb-12">{{ __('Tech Stack') }}</h3>
            
            <div class="relative flex flex-col gap-8">
                <!-- Fade overlays -->
                <div class="absolute top-0 left-0 h-40 w-full bg-gradient-to-b from-gray-950 to-transparent pointer-events-none z-10"></div>
                <div class="absolute top-0 left-0 h-40 w-full bg-gradient-to-b from-black/30 to-transparent pointer-events-none z-10"></div>
                <div class="absolute bottom-0 left-0 h-40 w-full bg-gradient-to-t from-gray-950 to-transparent pointer-events-none z-10"></div>
                <div class="absolute bottom-0 left-0 h-40 w-full bg-gradient-to-t from-black/30 to-transparent pointer-events-none z-10"></div>
                <div class="absolute top-0 right-0 h-full w-40 bg-gradient-to-l from-gray-950 to-transparent pointer-events-none z-10"></div>
                <div class="absolute top-0 right-0 h-full w-40 bg-gradient-to-l from-black/30 to-transparent pointer-events-none z-10"></div>
                <div class="absolute bottom-0 left-0 h-full w-40 bg-gradient-to-r from-gray-950 to-transparent pointer-events-none z-10"></div>
                <div class="absolute bottom-0 left-0 h-full w-40 bg-gradient-to-r from-black/30 to-transparent pointer-events-none z-10"></div>

                @php
                    $smallestRow = 14;
                    $largestRow = $smallestRow + 1;
                    $techStackRows = array_chunk($techStack, $smallestRow - 7); // Adjust number of items per row as needed
                @endphp

                <!-- Empty top row -->
                <div class="grid grid-cols-{{ $largestRow }} gap-8">
                    @for ($i = 0; $i < $largestRow; $i++)
                        <div class="relative aspect-square flex items-center justify-center border border-white/10 rounded-lg transition-all duration-300 hover:scale-90">
                            <div class="absolute inset-0 bg-white/5 rounded-lg"></div>
                        </div>
                    @endfor
                </div>

                <!-- Tech stack rows -->
                @foreach($techStackRows as $index => $techStackItems)
                    @php
                        $cols = ($index % 2 === 0) ? $smallestRow : $largestRow;
                        $emptySlots = $cols - count($techStackItems);
                        $leftPadding = floor($emptySlots / 2);
                        $rightPadding = ceil($emptySlots / 2);
                    @endphp
                    <div class="grid grid-cols-{{ $cols }} gap-8 {{ $cols === $smallestRow ? 'w-[calc((100%-96px))]' : 'w-full' }} mx-auto">
                        {{-- Left padding empty items --}}
                        @for($i = 0; $i < $leftPadding; $i++)
                            <div class="relative aspect-square flex items-center justify-center border border-white/10 rounded-lg transition-all duration-300 hover:scale-90">
                                <div class="absolute inset-0 bg-white/5 rounded-lg"></div>
                            </div>
                        @endfor

                        {{-- Tech stack items --}}
                        @foreach($techStackItems as $tech)
                            <a href="{{ $tech['url'] }}" target="_blank" rel="noopener noreferrer" 
                                class="group relative aspect-square flex items-center justify-center border border-white/10 rounded-lg transition-all duration-300 hover:scale-105"
                                style="--tech-color: {{ $tech['color'] }}">
                                <div class="absolute inset-0 opacity-0 group-hover:opacity-10 transition-opacity duration-300 rounded-lg" 
                                     style="background-color: var(--tech-color)"></div>
                                <img src="{{ $tech['image'] }}" alt="{{ $tech['name'] }}" 
                                     class="w-10 h-10 object-contain transition-transform duration-300 group-hover:-translate-y-1" />
                            </a>
                        @endforeach

                        {{-- Right padding empty items --}}
                        @for($i = 0; $i < $rightPadding; $i++)
                            <div class="relative aspect-square flex items-center justify-center border border-white/10 rounded-lg transition-all duration-300 hover:scale-90">
                                <div class="absolute inset-0 bg-white/5 rounded-lg"></div>
                            </div>
                        @endfor
                    </div>
                @endforeach

                <!-- Empty bottom row -->
                @php
                    $lastRowCols = count($techStackRows) % 2 === 0 ? $largestRow : $smallestRow;
                @endphp
                <div class="grid grid-cols-{{ $lastRowCols }} gap-8 {{ $lastRowCols === $smallestRow ? 'w-[calc((100%-96px))]' : 'w-full' }} mx-auto">
                    @for ($i = 0; $i < $lastRowCols; $i++)
                        <div class="relative aspect-square flex items-center justify-center border border-white/10 rounded-lg transition-all duration-300 hover:scale-90">
                            <div class="absolute inset-0 bg-white/5 rounded-lg"></div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div> 