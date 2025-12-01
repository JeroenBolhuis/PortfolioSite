@props([
    'title',
    'date',
    'description' => null,
    'image' => null,
    'location' => null,
    'technologies' => null,
    'link' => null,
    'github' => null
])

<div class="relative pl-6 border-l-2 border-purple-500">
    <span class="absolute left-[-9px] top-2 w-4 h-4 bg-purple-500 rounded-full"></span>
    <!-- Content with Background Image -->
    <div class="relative rounded-2xl overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-black/95 to-black/70 z-10"></div>
        @if($image)
            <div class="absolute inset-0">
                <img src="{{ asset($image) }}"
                     alt="{{ __('Image related to') }} {{ $title }}"
                     loading="lazy"
                     class="w-full h-full object-cover object-center"
                     width="400"
                     height="300">
            </div>
        @else
            <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-500"></div>
        @endif
        
        <div class="relative z-20 p-6">
            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-start gap-4">
                <div class="flex-grow flex flex-col gap-2">
                    <h3 class="text-xl font-bold text-white">{{ $title }}</h3>
                    <span class="text-purple-400 text-sm font-normal">{{ $date }}</span>
                    
                    @if($description)
                        <p class="text-gray-300 leading-relaxed">
                            {{ $description }}
                        </p>
                    @endif
                    
                    @if($location)
                        <a href="https://www.google.com/maps/search/?api=1&query={{$location}}" target="_blank" rel="noopener noreferrer nofollow" class="flex items-center gap-1 text-gray-300 hover:text-purple-400">
                            <svg class="w-4 h-4 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <p class="text-xs">{{ $location }}</p>
                        </a>
                    @endif
                    
                    <!-- Technologies -->
                    @if($technologies)
                        <div class="flex flex-wrap items-center gap-1.5">
                            @foreach($technologies as $tech)
                                <span class="text-xs text-purple-300 leading-none">{{ $tech }}</span>
                                @if(!$loop->last)
                                    <span class="text-purple-300 leading-none">•</span>
                                @endif
                            @endforeach
                        </div>
                    @endif
                </div>
                
                <!-- Links -->
                @if($link || $github)
                    <div class="flex-shrink-0 flex sm:flex-col gap-2">
                        @if($link)
                            <a href="{{ $link }}" target="_blank" rel="noopener noreferrer nofollow"
                                class="p-2 bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 rounded-lg text-white transition-all duration-300"
                                aria-label="{{ __('Visit') }} {{ $title }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>
                        @endif
                        @if($github)
                            <a href="{{ $github }}" target="_blank" rel="noopener noreferrer nofollow"
                                class="p-2 bg-white/[0.05] hover:bg-white/[0.1] border border-purple-500/20 rounded-lg text-white transition-all duration-300"
                                aria-label="{{ __('View') }} {{ $title }} {{ __('on GitHub') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.237 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </a>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
</div> 