<div class="w-full text-center overflow-hidden">
    <h3 class="text-2xl font-bold text-white z-20" data-aos="fade-in">{{ __('Tech Stack') }}</h3>
    <p class="text-gray-500 leading-tight z-20" data-aos="fade-in">{{ __('See what I use to build my projects') }}</p>
    
    <div class="relative flex flex-col gap-2 xs:gap-4 px-4" 
        x-data="{
            squareSize: window.innerWidth < 480 ? 40 : window.innerWidth < 640 ? 60 : window.innerWidth < 1280 ? 80 : 100,
            gap: window.innerWidth < 480 ? 8 : 16,
            minMargin: 16,
            cols: 4,
            techStack: {{ Js::from($techStack) }},

            init() {
                this.updateGridColumns();
                window.addEventListener('resize', () => {
                    this.squareSize = window.innerWidth < 480 ? 40 : window.innerWidth < 640 ? 60 : window.innerWidth < 1280 ? 80 : 100;
                    this.gap = window.innerWidth < 480 ? 12 : 16;
                    this.updateGridColumns();
                });
            },

            updateGridColumns() {
                const availableWidth = window.innerWidth - (this.minMargin * 2);
                const itemWidth = this.squareSize + this.gap;
                this.cols = Math.floor(availableWidth / itemWidth);
                this.cols = Math.max(2, Math.min(20, this.cols));
            },

            overlaySize(type) {
                const baseSize = this.squareSize + this.gap;
                return window.innerWidth >= 1280 && type === 'side' 
                    ? `${baseSize * 2}px` 
                    : `${baseSize}px`;
            },

            maxItemsPerRow() {
                const reservedSpaces = window.innerWidth >= 1280 ? 4 : 2;
                return Math.max(1, this.cols - reservedSpaces);
            },

            techStackRows() {
                const chunks = [];
                const maxItems = this.maxItemsPerRow();
                for (let i = 0; i < this.techStack.length; i += maxItems) {
                    chunks.push(this.techStack.slice(i, i + maxItems));
                }
                return chunks;
            },

            emptySpaces(rowItems) {
                const mandatorySpaces = window.innerWidth >= 1280 ? 2 : 1;
                const remainingSpace = this.cols - rowItems.length - (mandatorySpaces * 2);
                const extraSpaces = Math.floor(remainingSpace / 2);
                return mandatorySpaces + extraSpaces;
            },

            gridStyles() {
                const dynamicPadding = (this.squareSize + this.gap) / 2;
                return {
                    'grid-template-columns': `repeat(${this.cols}, ${this.squareSize}px)`,
                    'gap': `${this.gap}px`,
                    'justify-content': 'center',
                    'padding-left': '0px',
                    'padding-right': '0px'
                };
            }
        }">
        <!-- Fade overlays -->
        <div class="absolute top-0 left-0 w-full bg-gradient-to-b from-gray-950 from-30% to-transparent pointer-events-none z-10" :style="{ height: overlaySize() }"></div>
        <div class="absolute top-0 left-0 w-full bg-gradient-to-b from-black/40 from-30% to-transparent pointer-events-none z-10" :style="{ height: overlaySize() }"></div>
        <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-gray-950 from-30% to-transparent pointer-events-none z-10" :style="{ height: overlaySize() }"></div>
        <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/40 from-30% to-transparent pointer-events-none z-10" :style="{ height: overlaySize() }"></div>
        <div class="absolute top-0 right-0 h-full bg-gradient-to-l from-gray-950 from-30% to-transparent pointer-events-none z-10" :style="{ width: overlaySize('side') }"></div>
        <div class="absolute top-0 right-0 h-full bg-gradient-to-l from-black/40 from-30% to-transparent pointer-events-none z-10" :style="{ width: overlaySize('side') }"></div>
        <div class="absolute top-0 left-0 h-full bg-gradient-to-r from-gray-950 from-30% to-transparent pointer-events-none z-10" :style="{ width: overlaySize('side') }"></div>
        <div class="absolute top-0 left-0 h-full bg-gradient-to-r from-black/40 from-30% to-transparent pointer-events-none z-10" :style="{ width: overlaySize('side') }"></div>

        <!-- Empty top row -->
        <div class="grid w-full" :style="{ ...gridStyles(), 'padding-right': `${(squareSize + gap) / 2}px` }" data-aos="fade-right">
            <template x-for="i in cols" :key="i">
                <div class="aspect-square border border-purple-400/10 bg-neutral-950 rounded-lg transition-transform hover:scale-90 hover:duration-100 duration-[1s]"></div>
            </template>
        </div>

        <!-- Tech stack rows -->
        <template x-for="(row, rowIndex) in techStackRows()" :key="rowIndex">
            <div class="grid w-full" 
                :style="{ ...gridStyles(), 
                    [rowIndex % 2 === 0 ? 'padding-left' : 'padding-right']: `${(squareSize + gap) / 2}px`
                }" 
                :data-aos="rowIndex % 2 === 0 ? 'fade-left' : 'fade-right'">
                <!-- Left padding empty items -->
                <template x-for="i in emptySpaces(row)" :key="rowIndex+'left-'+i">
                    <div class="aspect-square border border-purple-400/10 bg-neutral-950 rounded-lg transition-transform hover:scale-90 hover:duration-100 duration-[1s]"></div>
                </template>

                <!-- Tech stack items -->
                <template x-for="(tech, techIndex) in row" :key="rowIndex+'-'+techIndex">
                    <a :href="tech.url" target="_blank" rel="noopener noreferrer" 
                        class="group relative aspect-square flex items-center justify-center border border-purple-400/10 bg-neutral-950 rounded-lg transform-gpu"
                        :style="{ '--tech-color': tech.color }">
                        <!-- Glow effect layer -->
                        <div class="-z-10 absolute inset-[-25%] pointer-events-none rounded-[100%] opacity-0 group-hover:opacity-75 transition-opacity group-hover:duration-100 duration-[2s]"
                            :style="{ background: `radial-gradient(circle at center,
                                ${tech.color} 0%,
                                color-mix(in srgb, ${tech.color}, transparent 15%) 20%,
                                color-mix(in srgb, ${tech.color}, transparent 40%) 35%,
                                color-mix(in srgb, ${tech.color}, transparent 75%) 50%,
                                transparent 70%)`}">
                        </div>
                        
                        <div class="flex items-center justify-center w-full h-full bg-neutral-950 rounded-lg">
                            <img :src="tech.image" :alt="tech.name" 
                                loading="lazy"
                                class="w-[60%] h-[60%] object-contain transform-gpu" 
                                style="filter: drop-shadow(0 0 8px var(--tech-color));" />
                        </div>
                    </a>
                </template>

                <!-- Right padding empty items -->
                <template x-for="i in emptySpaces(row)" :key="rowIndex+'right-'+i">
                    <div class="aspect-square border border-purple-400/10 bg-neutral-950 rounded-lg transition-transform hover:scale-90 hover:duration-100 duration-[1s]"></div>
                </template>
            </div>
        </template>

        <!-- Empty bottom row -->
        <div class="grid w-full" 
            :style="{ ...gridStyles(), 
                [techStackRows().length % 2 === 0 ? 'padding-left' : 'padding-right']: `${(squareSize + gap) / 2}px`
            }" 
            :data-aos="techStackRows().length % 2 === 0 ? 'fade-left' : 'fade-right'">
            <template x-for="i in cols" :key="i">
                <div class="aspect-square border border-purple-400/10 bg-neutral-950 rounded-lg transition-transform hover:scale-90 hover:duration-100 duration-[1s]"></div>
            </template>
        </div>
    </div>
</div>