<!-- Projects Section -->
<div id="projects" class="py-16 bg-black/20 relative">
    <div class="container mx-auto px-4 relative">
        <h2 class="text-3xl lg:text-5xl text-white font-bold text-center mb-16" data-aos="fade-up">{{ __('My Projects') }}</h2>
        
        <div class="masonry-grid columns-1 lg:columns-2 gap-8 px-4 md:px-20 lg:px-40 max-w-screen-xl mx-auto">
            @foreach ($projects as $project)
                <div class="break-inside-avoid mb-8">
                    <div class="glass border-2 border-purple-400/15 rounded-2xl overflow-hidden transform transition-all duration-300 hover:scale-[1.02] hover:border-purple-400/30" data-aos="fade-up">
                        <!-- Image Section -->
                        @if(isset($project['src']))
                        <div class="relative overflow-hidden cursor-pointer" 
                             @click="showImageModal = true; currentImage = '{{ asset($project['src']) }}'; currentTitle = '{{ $project['title'] }}'">
                            <img 
                                src="{{ asset($project['src']) }}" 
                                class="w-full h-auto object-cover transition-transform duration-500 hover:scale-105" 
                                alt="{{ $project['title'] }}"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        @endif
                        
                        <!-- Content Section -->
                        <div class="p-8">
                            <h3 class="text-2xl md:text-3xl font-bold text-white mb-4 bg-gradient-to-r from-purple-500 to-pink-500 bg-clip-text text-transparent">
                                {{ __($project['title']) }}
                            </h3>
                            @if(isset($project['description']))
                            <p class="text-gray-300 text-lg leading-relaxed">
                                {{ __($project['description']) }}
                            </p>
                            @endif
                            
                            <!-- Technologies -->
                            @if(isset($project['technologies']))
                                <div class="mt-6 flex flex-wrap gap-2">
                                    @foreach($project['technologies'] as $tech)
                                        <span class="px-4 py-1.5 bg-purple-500/10 border border-purple-500/20 rounded-full text-sm text-purple-300 font-medium">
                                            {{ $tech }}
                                        </span>
                                    @endforeach
                                </div>
                            @endif
                            
                            <!-- Links -->
                            @if(isset($project['link']) || isset($project['github']))
                                <div class="mt-8 flex flex-wrap gap-4">
                                    @if(isset($project['link']))
                                        <a href="{{ $project['link'] }}" target="_blank" rel="noopener noreferrer" 
                                           class="inline-flex items-center px-6 py-2.5 bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 rounded-lg text-white transition-all duration-300 font-medium">
                                            <span>{{ __('View Project') }}</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                            </svg>
                                        </a>
                                    @endif
                                    @if(isset($project['github']))
                                        <a href="{{ $project['github'] }}" target="_blank" rel="noopener noreferrer" 
                                           class="inline-flex items-center px-6 py-2.5 bg-white/[0.05] hover:bg-white/[0.1] border border-purple-500/20 rounded-lg text-white transition-all duration-300 font-medium">
                                            <span>{{ __('View Code') }}</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                            </svg>
                                        </a>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div> 