<!-- About Section -->
<div id="about" class="pt-12 relative">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl lg:text-5xl text-ink font-bold text-center mb-12" data-aos="fade-up">{{ __('About Me') }}</h2>

        <div class="max-w-3xl mx-auto mb-16" x-data="{
            activeTab: 'education',
            switchTab(tab) {
                this.activeTab = tab;
                setTimeout(() => {
                    if (window.AOS) {
                        window.AOS.refresh();
                    }
                }, 5);
            },
            moveTab(offset) {
                const tabs = ['education', 'experience', 'hobbies'];
                const currentIndex = tabs.indexOf(this.activeTab);
                const nextTab = tabs[(currentIndex + offset + tabs.length) % tabs.length];
                this.switchTab(nextTab);
                this.$nextTick(() => document.getElementById(`about-tab-${nextTab}`).focus());
            },
            focusTab(tab) {
                this.switchTab(tab);
                this.$nextTick(() => document.getElementById(`about-tab-${tab}`).focus());
            }
        }">
            <div class="flex justify-center mb-8" data-aos="fade-up">
                <div class="glass relative grid grid-cols-3 p-1 rounded-full" role="tablist"
                    aria-label="{{ __('About me sections') }}"
                    @keydown.right.prevent="moveTab(1)" @keydown.left.prevent="moveTab(-1)"
                    @keydown.home.prevent="focusTab('education')" @keydown.end.prevent="focusTab('hobbies')">
                    <div class="absolute top-1 bottom-1 left-1 w-[calc((100%-0.5rem)/3)] rounded-full bg-navi transition-transform duration-300 ease-out"
                         :class="{
                            'translate-x-0': activeTab === 'education',
                            'translate-x-full': activeTab === 'experience',
                            'translate-x-[200%]': activeTab === 'hobbies'
                         }">
                    </div>

                    <button
                        type="button"
                        id="about-tab-education"
                        role="tab"
                        aria-controls="about-panel-education"
                        :aria-selected="activeTab === 'education'"
                        :tabindex="activeTab === 'education' ? 0 : -1"
                        @click="switchTab('education')"
                        class="relative min-h-11 px-3 sm:px-6 py-2 rounded-full font-medium text-xs xs:text-sm sm:text-base transition-colors duration-300 z-10"
                        :class="{ 'text-lift': activeTab === 'education', 'text-mute hover:text-ink': activeTab !== 'education' }">
                        {{ __('Education') }}
                    </button>
                    <button
                        type="button"
                        id="about-tab-experience"
                        role="tab"
                        aria-controls="about-panel-experience"
                        :aria-selected="activeTab === 'experience'"
                        :tabindex="activeTab === 'experience' ? 0 : -1"
                        @click="switchTab('experience')"
                        class="relative min-h-11 px-3 sm:px-6 py-2 rounded-full font-medium text-xs xs:text-sm sm:text-base transition-colors duration-300 z-10"
                        :class="{ 'text-lift': activeTab === 'experience', 'text-mute hover:text-ink': activeTab !== 'experience' }">
                        {{ __('Experience') }}
                    </button>
                    <button
                        type="button"
                        id="about-tab-hobbies"
                        role="tab"
                        aria-controls="about-panel-hobbies"
                        :aria-selected="activeTab === 'hobbies'"
                        :tabindex="activeTab === 'hobbies' ? 0 : -1"
                        @click="switchTab('hobbies')"
                        class="relative min-h-11 px-3 sm:px-6 py-2 rounded-full font-medium text-xs xs:text-sm sm:text-base transition-colors duration-300 z-10"
                        :class="{ 'text-lift': activeTab === 'hobbies', 'text-mute hover:text-ink': activeTab !== 'hobbies' }">
                        {{ __('Hobbies') }}
                    </button>
                </div>
            </div>

            <div class="relative">
                <div id="about-panel-education" role="tabpanel" aria-labelledby="about-tab-education" tabindex="0"
                     :hidden="activeTab !== 'education'" class="transition-all duration-300 ease-out w-full"
                     :class="{
                        'opacity-100 visible': activeTab === 'education',
                        'opacity-0 invisible absolute inset-0': activeTab !== 'education'
                     }">
                    <div class="space-y-6 [&>article:last-child_.timeline-line]:hidden" data-aos="fade-up">
                        @foreach($education as $item)
                            <x-timeline-item
                                :title="$item['title']"
                                :date="$item['date']"
                                :description="$item['description']"
                                :image="$item['image'] ?? null"
                                :location="$item['location']"
                                :link="$item['link'] ?? null"
                            />
                        @endforeach
                    </div>
                </div>

                <div id="about-panel-experience" role="tabpanel" aria-labelledby="about-tab-experience" tabindex="0"
                     :hidden="activeTab !== 'experience'" class="transition-all duration-300 ease-out w-full"
                     :class="{
                        'opacity-100 visible': activeTab === 'experience',
                        'opacity-0 invisible absolute inset-0': activeTab !== 'experience'
                     }">
                    <div class="space-y-6 [&>article:last-child_.timeline-line]:hidden" data-aos="fade-up">
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

                <div id="about-panel-hobbies" role="tabpanel" aria-labelledby="about-tab-hobbies" tabindex="0"
                     :hidden="activeTab !== 'hobbies'" class="transition-all duration-300 ease-out w-full"
                     :class="{
                        'opacity-100 visible': activeTab === 'hobbies',
                        'opacity-0 invisible absolute inset-0': activeTab !== 'hobbies'
                     }">
                    <div class="space-y-6 [&>article:last-child_.timeline-line]:hidden" data-aos="fade-up">
                        @foreach($hobbies as $item)
                            <x-timeline-item
                                :title="$item['title']"
                                :date="$item['date']"
                                :description="$item['description']"
                                :image="$item['image'] ?? null"
                            />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.partials.tech-stack')
</div>
