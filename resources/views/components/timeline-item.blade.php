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

<article class="relative pl-7">
    <span class="timeline-line absolute left-0 top-6 -bottom-6 w-px bg-oxide/30" aria-hidden="true"></span>
    <span class="absolute left-[-5px] top-6 w-3 h-3 rounded-full bg-oxide ring-4 ring-paper" aria-hidden="true"></span>

    <div class="flex flex-col sm:flex-row gap-4 bg-lift rounded-xl p-4 sm:p-5 border border-ink/10">
        @if($image)
            <img src="{{ asset($image) }}"
                 alt="{{ __('Image related to') }} {{ $title }}"
                 loading="lazy"
                 width="112"
                 height="112"
                 class="w-full sm:w-28 h-36 sm:h-28 object-cover rounded-lg shrink-0">
        @endif

        <div class="flex-grow min-w-0 flex flex-col sm:flex-row sm:justify-between sm:items-start gap-3">
            <div class="flex flex-col gap-1.5">
                <h3 class="text-lg font-semibold text-ink leading-snug">{{ $title }}</h3>
                <span class="text-ember text-sm">{{ $date }}</span>

                @if($description)
                    <p class="timeline-description text-mute leading-relaxed text-[0.95rem]">
                        {!! $description !!}
                    </p>
                @endif

                @if($location)
                    <a href="https://www.google.com/maps/search/?api=1&query={{$location}}" target="_blank" rel="noopener noreferrer nofollow" class="mt-1 inline-flex items-center gap-1 text-mute hover:text-ember w-fit">
                        <svg class="w-4 h-4 text-ember" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="text-xs">{{ $location }}</span>
                    </a>
                @endif

                @if($technologies)
                    <p class="mt-1 text-xs text-ink/70">
                        {{ implode(' · ', $technologies) }}
                    </p>
                @endif
            </div>

            @if($link || $github)
                <div class="flex-shrink-0 flex sm:flex-col gap-2">
                    @if($link)
                        <a href="{{ $link }}" target="_blank" rel="noopener noreferrer nofollow"
                            class="p-2 bg-oxide hover:bg-ember rounded-lg text-lift transition-colors duration-200"
                            aria-label="{{ __('Visit') }} {{ $title }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </a>
                    @endif
                    @if($github)
                        <a href="{{ $github }}" target="_blank" rel="noopener noreferrer nofollow"
                            class="p-2 bg-paper hover:bg-paper/70 border border-ink/10 rounded-lg text-ink transition-colors duration-200"
                            aria-label="{{ __('View') }} {{ $title }} {{ __('on GitHub') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                    @endif
                </div>
            @endif
        </div>
    </div>
</article>
