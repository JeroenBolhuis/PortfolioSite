<!-- About Section -->
<div id="about" class="border-y border-purple-400/15 pt-12 pb-8 bg-black/40 relative">
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
                <div class="glass inline-flex items-center rounded-full relative">
                    <!-- Background Slider -->
                    <div class="absolute h-[calc(100%)] w-[calc(33.333%)] py-3 px-6 rounded-full transition-all ease-out bg-gradient-to-r from-purple-500 to-pink-500 duration-300"
                         :class="{ 
                            'left-1': activeTab === 'education',
                            'left-[calc(33.333%+4px)]': activeTab === 'experience',
                            'left-[calc(66.666%+4px)]': activeTab === 'hobbies'
                         }">
                    </div>
                    
                    <!-- Buttons -->
                    <button 
                        @click="switchTab('education')" 
                        class="relative px-6 py-2 rounded-full text-white font-medium text-xs xs:text-sm sm:text-base transition-colors duration-300 z-10"
                        :class="{ 'text-white': activeTab === 'education', 'text-gray-400 hover:text-white': activeTab !== 'education' }">
                        {{ __('Education') }}
                    </button>
                    <button 
                        @click="switchTab('experience')" 
                        class="relative px-6 py-2 rounded-full text-white font-medium text-xs xs:text-sm sm:text-base transition-colors duration-300 z-10"
                        :class="{ 'text-white': activeTab === 'experience', 'text-gray-400 hover:text-white': activeTab !== 'experience' }">
                        {{ __('Experience') }}
                    </button>
                    <button 
                        @click="switchTab('hobbies')" 
                        class="relative px-6 py-2 rounded-full text-white font-medium text-xs xs:text-sm sm:text-base transition-colors duration-300 z-10"
                        :class="{ 'text-white': activeTab === 'hobbies', 'text-gray-400 hover:text-white': activeTab !== 'hobbies' }">
                        {{ __('Hobbies') }}
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
                        <div class="space-y-8" data-aos="fade-up">
                            @foreach($education as $item)
                                <x-timeline-item
                                    :title="$item['title']"
                                    :date="$item['date']"
                                    :description="$item['description']"
                                    :image="$item['image']"
                                    :location="$item['location']"
                                    :link="$item['link'] ?? null"
                                />
                            @endforeach
                        </div>
                    </div>

                    <!-- Experience Panel -->
                    <div class="transition-all duration-300 ease-out w-full"
                         :class="{ 
                            'opacity-100 visible': activeTab === 'experience',
                            'opacity-0 invisible absolute inset-0': activeTab !== 'experience'
                         }">
                        <div class="space-y-8" data-aos="fade-up">
                            @foreach($experiences as $experience)
                                <x-timeline-item
                                    :title="$experience['title']"
                                    :date="$experience['date']"
                                    :description="$experience['description'] ?? null"
                                    :image="$experience['image'] ?? null"
                                    :technologies="$experience['technologies'] ?? null"
                                    :link="$experience['link'] ?? null"
                                    :github="$experience['github'] ?? null"
                                />
                            @endforeach
                        </div>
                    </div>

                    <!-- Hobbies Panel -->
                    <div class="transition-all duration-300 ease-out w-full"
                         :class="{ 
                            'opacity-100 visible': activeTab === 'hobbies',
                            'opacity-0 invisible absolute inset-0': activeTab !== 'hobbies'
                         }">
                        <div class="space-y-8" data-aos="fade-up">
                            @foreach($hobbies as $item)
                                <x-timeline-item
                                    :title="$item['title']"
                                    :date="$item['date']"
                                    :description="$item['description']"
                                    :image="$item['image']"
                                />
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