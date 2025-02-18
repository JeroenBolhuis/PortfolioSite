<div x-show="showImageModal" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform scale-90"
        x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-90"
        class="fixed inset-0 z-[9999] flex items-center justify-center p-4 sm:p-8 md:p-12"
        @click.self="showImageModal = false"
        style="background-color: rgba(0, 0, 0, 0.8);">
    <div class="relative max-w-6xl w-full bg-black/60 rounded-2xl overflow-hidden border-2 border-purple-400/20">
        <!-- Close Button -->
        <button @click="showImageModal = false" 
                class="absolute top-4 right-4 text-white/80 hover:text-white z-10 p-2 rounded-full bg-black/20 hover:bg-black/40 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        
        <!-- Modal Content -->
        <div class="p-4">
            <img :src="currentImage" 
                    :alt="currentTitle"
                    class="w-full h-auto max-h-[75vh] object-contain rounded-lg">
            <h4 class="text-white/90 text-lg font-medium mt-4 text-center" x-text="currentTitle"></h4>
        </div>
    </div>
</div>