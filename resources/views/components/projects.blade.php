<!-- Projects Section -->
<div id="projects" class="relative py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl lg:text-5xl text-white font-bold text-center mb-12" data-aos="fade-up">{{ __('My Projects') }}</h2>
        
        <!-- Using Tailwind's columns utilities -->
        <div class="masonry-grid columns-1 lg:columns-2 gap-8 px-4 md:px-20 lg:px-40 max-w-screen-xl mx-auto">
            @foreach ($projects as $project)
                <div class="break-inside-avoid mb-8">
                    <div class="bg-white/[0.03] backdrop-blur-[10px] border border-white/[0.05] rounded-3xl overflow-hidden" data-aos="fade-up">
                        <div class="group relative">
                            <img 
                                src="{{ asset($project['src']) }}" 
                                class="w-full h-auto rounded-3xl shadow-lg object-cover" 
                                alt="{{ $project['title'] }}"
                            >
                            <div class="absolute inset-0 bg-black/75 backdrop-blur-sm p-6 flex flex-col justify-end opacity-0 group-hover:opacity-100 transition-all duration-300">
                                <p class="text-white text-2xl md:text-3xl font-bold translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                    {{ __($project['title']) }}
                                </p>
                                <p class="text-gray-300 mt-2 translate-y-full group-hover:translate-y-0 transition-transform duration-300 delay-100">
                                    {{ __($project['subtitle']) }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div> 