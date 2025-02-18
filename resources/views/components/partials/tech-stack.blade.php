<div class="w-full text-center overflow-hidden">
    <h3 class="text-2xl font-bold text-white mb-4 relative z-30" data-aos="fade-in">{{ __('Tech Stack') }}</h3>
    
    <div class="relative flex flex-col gap-4 px-4" 
        x-data="{
            squareSize: window.innerWidth < 640 ? 60 : window.innerWidth < 1280 ? 80 : 100, // Responsive square size
            gap: 16, // Gap between squares
            minMargin: 16, // Minimum margin on sides
            cols: 4,
            techStack: {{ Js::from($techStack) }},

            init() {
                this.updateGridColumns();
                window.addEventListener('resize', () => {
                    this.squareSize = window.innerWidth < 640 ? 60 : window.innerWidth < 1280 ? 80 : 100;
                    this.updateGridColumns();
                });
            },

            updateGridColumns() {
                const availableWidth = window.innerWidth - (this.minMargin * 2);
                const itemWidth = this.squareSize + this.gap; // Total width including gap
                this.cols = Math.floor(availableWidth / itemWidth);
                // Ensure minimum of 2 columns and maximum of 20
                this.cols = Math.max(2, Math.min(20, this.cols));
            },

            // Calculate overlay size based on square size
            overlaySize(type) {
                const baseSize = this.squareSize + this.gap;
                // Double width for side fades on large screens
                return window.innerWidth >= 1280 && type === 'side' 
                    ? `${baseSize * 2}px` 
                    : `${baseSize}px`;
            },

            maxItemsPerRow() {
                // Reserve spaces (one or two per side depending on screen size) and return remaining space
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
                // Use 2 spaces on each side for large screens, 1 otherwise
                const mandatorySpaces = window.innerWidth >= 1280 ? 2 : 1;
                // Calculate remaining space after ensuring mandatory empty squares at start and end
                const remainingSpace = this.cols - rowItems.length - (mandatorySpaces * 2);
                // Distribute remaining space evenly between start and end
                const extraSpaces = Math.floor(remainingSpace / 2);
                return mandatorySpaces + extraSpaces;
            },

            gridStyles() {
                return {
                    'grid-template-columns': `repeat(${this.cols}, ${this.squareSize}px)`,
                    'gap': `${this.gap}px`,
                    'justify-content': 'center'
                };
            }
        }">
        <!-- Fade overlays -->
        <div class="absolute top-0 left-0 w-full bg-gradient-to-b from-gray-950 to-transparent pointer-events-none z-10" :style="{ height: overlaySize() }"></div>
        <div class="absolute top-0 left-0 w-full bg-gradient-to-b from-black/30 to-transparent pointer-events-none z-10" :style="{ height: overlaySize() }"></div>
        <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-gray-950 to-transparent pointer-events-none z-10" :style="{ height: overlaySize() }"></div>
        <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/30 to-transparent pointer-events-none z-10" :style="{ height: overlaySize() }"></div>
        <div class="absolute top-0 right-0 h-full bg-gradient-to-l from-gray-950 to-transparent pointer-events-none z-10" :style="{ width: overlaySize('side') }"></div>
        <div class="absolute top-0 right-0 h-full bg-gradient-to-l from-black/30 to-transparent pointer-events-none z-10" :style="{ width: overlaySize('side') }"></div>
        <div class="absolute top-0 left-0 h-full bg-gradient-to-r from-gray-950 to-transparent pointer-events-none z-10" :style="{ width: overlaySize('side') }"></div>
        <div class="absolute top-0 left-0 h-full bg-gradient-to-r from-black/30 to-transparent pointer-events-none z-10" :style="{ width: overlaySize('side') }"></div>

        <!-- Empty top row -->
        <div class="grid w-full pr-12" :style="gridStyles()" data-aos="fade-right">
            <template x-for="i in cols" :key="i">
                <div class="aspect-square border border-neutral-800 bg-neutral-900 rounded-lg transition-all hover:scale-90 hover:duration-0 duration-[1s]"></div>
            </template>
        </div>

        <!-- Tech stack rows -->
        <template x-for="(row, rowIndex) in techStackRows()" :key="rowIndex">
            <div class="grid w-full" :class="rowIndex % 2 === 0 ? 'pl-12' : 'pr-12'" 
                    :style="gridStyles()" :data-aos="rowIndex % 2 === 0 ? 'fade-left' : 'fade-right'">
                <!-- Left padding empty items -->
                <template x-for="i in emptySpaces(row)" :key="rowIndex+'left-'+i">
                    <div class="aspect-square border border-neutral-800 bg-neutral-900 rounded-lg transition-all hover:scale-90 hover:duration-0 duration-[1s]"></div>
                </template>

                <!-- Tech stack items -->
                <template x-for="(tech, techIndex) in row" :key="rowIndex+'-'+techIndex">
                    <a :href="tech.url" target="_blank" rel="noopener noreferrer" 
                        class="group relative aspect-square flex items-center justify-center border border-neutral-800 bg-neutral-900 rounded-lg"
                        :style="{ '--tech-color': tech.color }">
                        <!-- Glow effect layer -->
                        <div class="absolute -z-10 inset-0 rounded-lg">
                            <div class="absolute inset-0 rounded-lg bg-[var(--tech-color)] blur-xl opacity-0 scale-90 
                                        group-hover:opacity-50 transition-all ease-in-out group-hover:duration-0 duration-[2s]"></div>
                        </div>
                        
                        <img :src="tech.image" :alt="tech.name" class="w-[60%] h-[60%] object-contain" style="filter: drop-shadow(0 0 8px var(--tech-color));" />
                    </a>
                </template>

                <!-- Right padding empty items -->
                <template x-for="i in emptySpaces(row)" :key="rowIndex+'right-'+i">
                    <div class="aspect-square border border-neutral-800 bg-neutral-900 rounded-lg transition-all hover:scale-90 hover:duration-0 duration-[1s]"></div>
                </template>
            </div>
        </template>

        <!-- Empty bottom row -->
        <div class="grid w-full" :class="techStackRows().length % 2 === 0 ? 'pl-12' : 'pr-12'"
                :style="gridStyles()" :data-aos="techStackRows().length % 2 === 0 ? 'fade-left' : 'fade-right'">
            <template x-for="i in cols" :key="i">
                <div class="aspect-square border border-neutral-800 bg-neutral-900 rounded-lg transition-all hover:scale-90 hover:duration-0 duration-[1s]"></div>
            </template>
        </div>
    </div>
</div>