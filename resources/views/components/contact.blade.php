<!-- Contact Section -->
<div id="contact" class="section-divider py-20 bg-black/30 backdrop-blur-sm relative">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl lg:text-5xl text-white font-bold text-center mb-12" data-aos="fade-up">{{ __('Get in Touch') }}</h2>
        <div class="max-w-2xl mx-auto">
            @if (session('success'))
                <div class="bg-green-500/20 backdrop-blur-sm text-green-300 p-4 rounded-lg mb-6" data-aos="fade-up">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6 glass p-8 rounded-2xl" data-aos="fade-up">
                @csrf
                <div>
                    <label for="name" class="block text-white mb-2">{{ __('Name') }}</label>
                    <input type="text" id="name" name="name" required
                        class="w-full px-4 py-3 bg-white/5 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 transition duration-300 border border-white/10">
                </div>
                <div>
                    <label for="email" class="block text-white mb-2">{{ __('Email') }}</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-4 py-3 bg-white/5 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 transition duration-300 border border-white/10">
                </div>
                <div>
                    <label for="message" class="block text-white mb-2">{{ __('Message') }}</label>
                    <textarea id="message" name="message" rows="5" required
                        class="w-full px-4 py-3 bg-white/5 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 transition duration-300 border border-white/10"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit"
                        class="bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white font-bold py-3 px-8 rounded-lg transition duration-300 transform hover:scale-105">
                        {{ __('Send Message') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div> 