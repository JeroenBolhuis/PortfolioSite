
<div class="w-full text-center overflow-hidden">
    <h3 class="text-2xl font-bold text-white mb-4 relative z-30" data-aos="fade-in">{{ __('Tech Stack') }}</h3>
    
    <div class="relative flex flex-col gap-8" 
        x-data="{
            rowWidth: 5,
            spacingPerSide: 1,
            techStack: {{ Js::from($techStack) }},

            init() {
                this.updateResponsiveValues();
                window.addEventListener('resize', () => this.updateResponsiveValues());
            },

            updateResponsiveValues() {
                if (window.innerWidth < 640) this.rowWidth = 4;      // default
                else if (window.innerWidth < 768) this.rowWidth = 8;   // md
                else if (window.innerWidth < 1024) this.rowWidth = 10; // lg
                else if (window.innerWidth < 1280) this.rowWidth = 12; // xl
                else this.rowWidth = 12;                                 // biggg

                this.spacingPerSide = window.innerWidth < 1024 ? 1 : 2;
            },

            maxItemsPerRow() {
                return this.rowWidth - (this.spacingPerSide * 2);
            },

            techStackRows() {
                const chunks = [];
                for (let i = 0; i < this.techStack.length; i += this.maxItemsPerRow()) {
                    chunks.push(this.techStack.slice(i, i + this.maxItemsPerRow()));
                }
                return chunks;
            },

            emptySpaces(rowItems) {
                return Math.floor((this.rowWidth - rowItems.length) / 2);
            }
        }">
        <!-- Fade overlays -->
        <div class="absolute top-0 left-0 h-40 w-full bg-gradient-to-b from-gray-950 to-transparent pointer-events-none z-10"></div>
        <div class="absolute top-0 left-0 h-40 w-full bg-gradient-to-b from-black/30 to-transparent pointer-events-none z-10"></div>
        <div class="absolute bottom-0 left-0 h-40 w-full bg-gradient-to-t from-gray-950 to-transparent pointer-events-none z-10"></div>
        <div class="absolute bottom-0 left-0 h-40 w-full bg-gradient-to-t from-black/30 to-transparent pointer-events-none z-10"></div>
        <div class="absolute top-0 right-0 h-full w-40 bg-gradient-to-l from-gray-950 to-transparent pointer-events-none z-10"></div>
        <div class="absolute top-0 right-0 h-full w-40 bg-gradient-to-l from-black/30 to-transparent pointer-events-none z-10"></div>
        <div class="absolute bottom-0 left-0 h-full w-40 bg-gradient-to-r from-gray-950 to-transparent pointer-events-none z-10"></div>
        <div class="absolute bottom-0 left-0 h-full w-40 bg-gradient-to-r from-black/30 to-transparent pointer-events-none z-10"></div>

        <!-- Empty top row -->
        <div class="grid gap-8 w-full pr-12" :style="{ 'grid-template-columns': `repeat(${rowWidth}, minmax(0, 1fr))` }" data-aos="fade-right">
            <template x-for="i in rowWidth" :key="i">
                <div class="aspect-square border border-neutral-800 bg-neutral-900 rounded-lg transition-all hover:scale-90 hover:duration-0 duration-[1s]"></div>
            </template>
        </div>

        <!-- Tech stack rows -->
        <template x-for="(row, rowIndex) in techStackRows()" :key="rowIndex">
            <div class="grid gap-8 w-full" :class="rowIndex % 2 === 0 ? 'pl-12' : 'pr-12'" 
                    :style="{ 'grid-template-columns': `repeat(${rowWidth}, minmax(0, 1fr))` }" :data-aos="rowIndex % 2 === 0 ? 'fade-left' : 'fade-right'">
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
                        
                        <img :src="tech.image" :alt="tech.name" class="w-10 h-10" style="filter: drop-shadow(0 0 8px var(--tech-color));" />
                    </a>
                </template>

                <!-- Right padding empty items -->
                <template x-for="i in emptySpaces(row)" :key="rowIndex+'right-'+i">
                    <div class="aspect-square border border-neutral-800 bg-neutral-900 rounded-lg transition-all hover:scale-90 hover:duration-0 duration-[1s]"></div>
                </template>
            </div>
        </template>

        <!-- Empty bottom row -->
        <div class="grid gap-8 w-full" :class="techStackRows().length % 2 === 0 ? 'pl-12' : 'pr-12'"
                :style="{ 'grid-template-columns': `repeat(${rowWidth}, minmax(0, 1fr))` }" :data-aos="techStackRows().length % 2 === 0 ? 'fade-left' : 'fade-right'">
            <template x-for="i in rowWidth" :key="i">
                <div class="aspect-square border border-neutral-800 bg-neutral-900 rounded-lg transition-all hover:scale-90 hover:duration-0 duration-[1s]"></div>
            </template>
        </div>
    </div>
</div>