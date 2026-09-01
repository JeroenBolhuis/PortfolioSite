<!-- Contact Section -->
<div id="contact" class="py-12 relative"
    x-data="{
        formData: {
            name: @js(old('name', '')),
            email: @js(old('email', '')),
            message: @js(old('message', '')),
            website: ''
        },
        errors: @js($errors->getMessages()),
        isSubmitting: false,
        statusMessage: '',
        statusType: 'success',
        firstError(field) {
            return Array.isArray(this.errors[field]) ? this.errors[field][0] : this.errors[field];
        },
        async submitForm(event) {
            this.isSubmitting = true;
            this.errors = {};
            this.statusMessage = '';

            try {
                const response = await fetch(event.currentTarget.action, {
                    method: event.currentTarget.method,
                    headers: {
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content
                    },
                    body: new FormData(event.currentTarget)
                });

                const data = await response.json().catch(() => ({}));

                if (response.status === 422) {
                    this.errors = data.errors || {};
                    this.statusType = 'error';
                    this.statusMessage = @js(__('Please correct the highlighted fields and try again.'));
                    this.$nextTick(() => document.getElementById(Object.keys(this.errors)[0])?.focus());
                    return;
                }

                if (!response.ok) {
                    this.statusType = 'error';
                    this.statusMessage = data.message || @js(__('Your message could not be sent. Please try again later.'));
                    return;
                }

                event.currentTarget.reset();
                this.formData = { name: '', email: '', message: '', website: '' };
                this.statusType = 'success';
                this.statusMessage = data.message || @js(__('Your message has been sent successfully!'));
            } catch (error) {
                this.statusType = 'error';
                this.statusMessage = @js(__('The connection failed. Check your internet connection and try again.'));
            } finally {
                this.isSubmitting = false;
            }
        }
    }">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl lg:text-5xl text-ink font-bold text-center mb-12" data-aos="fade-up">{{ __('Get in Touch') }}</h2>
        <div class="max-w-3xl mx-auto">
            @if (session('success'))
                <div role="status" aria-live="polite" class="bg-emerald-700/15 text-navi p-4 rounded-lg mb-6">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div role="alert" aria-live="assertive" class="bg-red-800/10 text-navi p-4 rounded-lg mb-6">
                    {{ session('error') }}
                </div>
            @endif

            <div x-show="statusMessage" x-cloak
                :role="statusType === 'error' ? 'alert' : 'status'"
                :aria-live="statusType === 'error' ? 'assertive' : 'polite'"
                :class="statusType === 'error' ? 'bg-red-800/10 text-navi' : 'bg-emerald-700/15 text-navi'"
                class="p-4 rounded-lg mb-6">
                <span x-text="statusMessage"></span>
            </div>

            <form action="{{ route('contact.submit') }}" method="POST" @submit.prevent="submitForm($event)"
                class="space-y-6 glass rounded-2xl p-6" data-aos="fade-up">
                @csrf

                <div class="absolute -start-[10000px] h-px w-px overflow-hidden" aria-hidden="true">
                    <label for="website">{{ __('Website') }}</label>
                    <input type="text" id="website" name="website" x-model="formData.website" tabindex="-1" autocomplete="off">
                </div>

                <div>
                    <label for="name" class="block text-ink mb-2">{{ __('Name') }}</label>
                    <input type="text" id="name" name="name" x-model="formData.name" value="{{ old('name') }}"
                        required maxlength="100" autocomplete="name" aria-describedby="name-error"
                        :aria-invalid="errors.name ? 'true' : 'false'"
                        :class="{'border-navi': errors.name}"
                        class="w-full px-4 py-3 bg-paper text-ink rounded-lg focus:outline-none focus:ring-2 focus:ring-navi transition duration-300 border border-ink/10">
                    <p id="name-error" x-show="errors.name" x-text="firstError('name')" class="text-navi text-sm mt-1">
                        {{ $errors->first('name') }}
                    </p>
                </div>

                <div>
                    <label for="email" class="block text-ink mb-2">{{ __('Email') }}</label>
                    <input type="email" id="email" name="email" x-model="formData.email" value="{{ old('email') }}"
                        required maxlength="254" autocomplete="email" inputmode="email" aria-describedby="email-error"
                        :aria-invalid="errors.email ? 'true' : 'false'"
                        :class="{'border-navi': errors.email}"
                        class="w-full px-4 py-3 bg-paper text-ink rounded-lg focus:outline-none focus:ring-2 focus:ring-navi transition duration-300 border border-ink/10">
                    <p id="email-error" x-show="errors.email" x-text="firstError('email')" class="text-navi text-sm mt-1">
                        {{ $errors->first('email') }}
                    </p>
                </div>

                <div>
                    <div class="flex items-baseline justify-between gap-4">
                        <label for="message" class="block text-ink mb-2">{{ __('Message') }}</label>
                        <span class="text-sm text-mute" aria-hidden="true" x-text="`${formData.message.length.toLocaleString()} / 5,000`">0 / 5,000</span>
                    </div>
                    <textarea id="message" name="message" x-model="formData.message" rows="6" required maxlength="5000"
                        aria-describedby="message-hint message-error" :aria-invalid="errors.message ? 'true' : 'false'"
                        :class="{'border-navi': errors.message}"
                        class="w-full px-4 py-3 bg-paper text-ink rounded-lg focus:outline-none focus:ring-2 focus:ring-navi transition duration-300 border border-ink/10">{{ old('message') }}</textarea>
                    <p id="message-hint" class="sr-only">{{ __('Maximum 5,000 characters.') }}</p>
                    <p id="message-error" x-show="errors.message" x-text="firstError('message')" class="text-navi text-sm mt-1">
                        {{ $errors->first('message') }}
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <p class="text-sm text-mute max-w-xl">
                        {{ __('I use these details only to reply to your request. Read the') }}
                        <a href="{{ route('privacy') }}" class="text-navi underline decoration-navi/50 underline-offset-4 hover:decoration-navi">
                            {{ __('privacy notice') }}
                        </a>.
                    </p>
                    <button type="submit" :disabled="isSubmitting" :aria-busy="isSubmitting"
                        :class="{'opacity-50 cursor-not-allowed': isSubmitting}"
                        class="min-h-11 shrink-0 bg-navi text-lift font-bold py-3 px-8 rounded-lg transition duration-300 motion-safe:hover:scale-105">
                        <span x-show="!isSubmitting">{{ __('Send Message') }}</span>
                        <span x-show="isSubmitting" x-cloak>{{ __('Sending...') }}</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
