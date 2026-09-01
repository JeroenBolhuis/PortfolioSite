<div class="w-full text-center overflow-visible">
    <h3 class="text-2xl font-bold text-ink z-20" data-aos="fade-in">{{ __('Tech Stack') }}</h3>
    <p class="text-mute leading-tight z-20" data-aos="fade-in">{{ __('See what I use to build my projects') }}</p>

    <div class="relative"
        x-data="{
            squareSize: window.innerWidth < 480 ? 50 : window.innerWidth < 640 ? 60 : window.innerWidth < 1280 ? 80 : 100,
            gap: window.innerWidth < 480 ? 8 : 16,
            minMargin: 16,
            cols: 4,
            techStack: {{ Js::from($techStack) }},
            tooltip: null,

            init() {
                this.updateGridColumns();
                window.addEventListener('resize', () => {
                    this.squareSize = window.innerWidth < 480 ? 50 : window.innerWidth < 640 ? 60 : window.innerWidth < 1280 ? 80 : 100;
                    this.gap = window.innerWidth < 480 ? 12 : 16;
                    this.updateGridColumns();
                    this.hideTip();
                });
                window.addEventListener('scroll', () => this.hideTip(), true);
            },

            hideTip() {
                this.tooltip = null;
            },

            showTip(tech, el) {
                const rect = el.getBoundingClientRect();
                this.tooltip = {
                    name: tech.name,
                    text: tech.what,
                    color: tech.color,
                    left: -9999,
                    top: 0,
                    place: 'below',
                    caret: 50,
                    ready: false,
                };
                this.$nextTick(() => {
                    requestAnimationFrame(() => this.placeTip(rect));
                });
            },

            placeTip(rect) {
                const tip = this.$refs.tip;
                if (!tip || !this.tooltip) {
                    return;
                }
                const pad = 8;
                const gap = 8;
                const tw = tip.offsetWidth;
                const th = tip.offsetHeight;
                const cx = rect.left + rect.width / 2;
                let left = Math.min(window.innerWidth - pad - tw, Math.max(pad, cx - tw / 2));
                let place = 'below';
                let top = rect.bottom + gap;
                if (top + th > window.innerHeight - pad && rect.top - gap - th > pad) {
                    place = 'above';
                    top = rect.top - gap - th;
                }
                const caret = Math.min(tw - 14, Math.max(14, cx - left));
                this.tooltip = { ...this.tooltip, left, top, place, caret, ready: true };
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
                const reservedSpaces = window.innerWidth >= 1280 ? 4 : window.innerWidth >= 480 ? 2 : 0;
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
                const mandatorySpaces = window.innerWidth >= 1280 ? 2 : window.innerWidth >= 480 ? 1 : 0;
                const remainingSpace = this.cols - rowItems.length - (mandatorySpaces * 2);
                const extraSpaces = Math.floor(remainingSpace / 2);
                return mandatorySpaces + extraSpaces;
            },

            gridStyles() {
                return {
                    'grid-template-columns': `repeat(${this.cols}, ${this.squareSize}px)`,
                    'gap': `${this.gap}px`,
                    'justify-content': 'center',
                    'padding-left': '0px',
                    'padding-right': '0px'
                };
            }
        }">
        <div class="relative flex flex-col gap-2 xs:gap-4 overflow-hidden px-4">
        <!-- Fade overlays -->
        <div class="absolute top-0 left-0 w-full bg-gradient-to-b from-paper from-15% to-transparent pointer-events-none z-10" :style="{ height: overlaySize() }"></div>
        <div class="absolute top-0 left-0 w-full bg-gradient-to-b from-paper from-15% to-transparent pointer-events-none z-10" :style="{ height: overlaySize() }"></div>
        <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-paper from-15% to-transparent pointer-events-none z-10" :style="{ height: overlaySize() }"></div>
        <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-paper from-15% to-transparent pointer-events-none z-10" :style="{ height: overlaySize() }"></div>
        <div class="hidden xs:block absolute top-0 right-0 h-full bg-gradient-to-l from-paper from-15% to-transparent pointer-events-none z-10" :style="{ width: overlaySize('side') }"></div>
        <div class="hidden xs:block absolute top-0 right-0 h-full bg-gradient-to-l from-paper from-15% to-transparent pointer-events-none z-10" :style="{ width: overlaySize('side') }"></div>
        <div class="hidden xs:block absolute top-0 left-0 h-full bg-gradient-to-r from-paper from-15% to-transparent pointer-events-none z-10" :style="{ width: overlaySize('side') }"></div>
        <div class="hidden xs:block absolute top-0 left-0 h-full bg-gradient-to-r from-paper from-15% to-transparent pointer-events-none z-10" :style="{ width: overlaySize('side') }"></div>

        <!-- Empty top row -->
        <div class="grid w-full" :style="{ ...gridStyles(), 'padding-right': `${(squareSize + gap) / 2}px` }" data-aos="fade-right">
            <template x-for="i in cols" :key="i">
                <div class="aspect-square border border-ink/10 bg-tile rounded-lg transition-transform hover:scale-90 hover:duration-100 duration-[1s]"></div>
            </template>
        </div>

        <!-- Tech stack rows -->
        <template x-for="(row, rowIndex) in techStackRows()" :key="rowIndex">
            <div class="grid w-full"
                :style="{ ...gridStyles(),
                    [rowIndex % 2 === 0 ? 'padding-left' : 'padding-right']: `${(squareSize + gap) / 2}px`
                }"
                :data-aos="rowIndex % 2 === 0 ? 'fade-left' : 'fade-right'">
                <template x-for="i in emptySpaces(row)" :key="rowIndex+'left-'+i">
                    <div class="aspect-square border border-ink/10 bg-tile rounded-lg transition-transform hover:scale-90 hover:duration-100 duration-[1s]"></div>
                </template>

                <template x-for="(tech, techIndex) in row" :key="rowIndex+'-'+techIndex">
                    <div class="group relative aspect-square"
                        :style="{ '--tech-color': tech.color }">
                        <div class="pointer-events-none absolute inset-[-30%] -z-10 rounded-full opacity-0 transition-opacity duration-[2s] group-hover:opacity-75 group-hover:duration-100"
                            :style="{ background: `radial-gradient(circle at center,
                                ${tech.color} 0%,
                                color-mix(in srgb, ${tech.color}, transparent 15%) 20%,
                                color-mix(in srgb, ${tech.color}, transparent 40%) 35%,
                                color-mix(in srgb, ${tech.color}, transparent 75%) 50%,
                                transparent 70%)`}">
                        </div>
                        <a :href="tech.url" target="_blank" rel="noopener noreferrer nofollow"
                            class="relative z-10 flex h-full w-full items-center justify-center rounded-lg border border-ink/10 bg-tile transform-gpu"
                            :aria-label="tech.name + ': ' + tech.what"
                            @mouseenter="showTip(tech, $event.currentTarget)"
                            @mouseleave="hideTip()"
                            @focus="showTip(tech, $event.currentTarget)"
                            @blur="hideTip()">
                            <img :src="tech.image" :alt="tech.name + ' logo'"
                                loading="lazy"
                                width="48" height="48"
                                class="w-[60%] h-[60%] object-contain transform-gpu" />
                        </a>
                    </div>
                </template>

                <template x-for="i in emptySpaces(row)" :key="rowIndex+'right-'+i">
                    <div class="aspect-square border border-ink/10 bg-tile rounded-lg transition-transform hover:scale-90 hover:duration-100 duration-[1s]"></div>
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
                <div class="aspect-square border border-ink/10 bg-tile rounded-lg transition-transform hover:scale-90 hover:duration-100 duration-[1s]"></div>
            </template>
        </div>
        </div>

        <div x-ref="tip"
            class="tech-tip"
            :data-place="tooltip && tooltip.place"
            :style="tooltip ? {
                left: tooltip.left + 'px',
                top: tooltip.top + 'px',
                visibility: tooltip.ready ? 'visible' : 'hidden',
                '--caret-x': tooltip.caret + 'px',
                '--tech-color': tooltip.color
            } : { visibility: 'hidden', left: '-9999px', top: '0px' }">
            <p class="tech-tip-title" x-text="tooltip ? tooltip.name : ''"></p>
            <p class="tech-tip-body" x-text="tooltip ? tooltip.text : ''"></p>
        </div>
    </div>
</div>
