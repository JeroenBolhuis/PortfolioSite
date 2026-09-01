<div x-show="showImageModal"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-[9999] flex items-center justify-center p-4 sm:p-8 md:p-12"
        @click.self="showImageModal = false"
        style="background-color: rgba(28, 20, 16, 0.8);">
    <div class="relative max-w-6xl w-full bg-lift overflow-hidden border border-rule">
        <button @click="showImageModal = false"
                class="absolute top-4 right-4 text-ink/80 hover:text-ink z-10 p-2 bg-paper hover:bg-paper/80 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="p-4">
            <img :src="currentImage"
                :alt="currentTitle"
                class="w-full h-auto max-h-[75vh] object-contain">
            <h4 class="text-ink text-lg font-medium mt-4 text-center" x-text="currentTitle || 'Image'"></h4>
        </div>
    </div>
</div>
