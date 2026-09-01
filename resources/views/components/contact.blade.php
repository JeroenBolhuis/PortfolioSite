<!-- Contact Section -->
<div id="contact" class="py-12 relative"
    x-data="{
        formData: {
            name: '',
            email: '',
            message: ''
        },
        errors: {},
        isSubmitting: false,
        showSuccess: false,
        submitForm: function() {
            var self = this;
            self.isSubmitting = true;
            self.errors = {};
            self.showSuccess = false;

            fetch('{{ route('contact.submit') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content
                },
                body: JSON.stringify(self.formData)
            })
            .then(function(response) {
                if (response.status === 422) {
                    return response.json().then(function(data) {
                        self.errors = data.errors;
                        throw new Error('Validation failed');
                    });
                }
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(function(data) {
                self.formData.name = '';
                self.formData.email = '';
                self.formData.message = '';
                self.showSuccess = true;

                setTimeout(function() {
                    self.showSuccess = false;
                }, 5000);
            })
            .catch(function(error) {
                console.error('Error:', error);
                if (error.message !== 'Validation failed') {
                    alert('{{ __('An error occurred while sending your message.') }}');
                }
            })
            .finally(function() {
                self.isSubmitting = false;
            });
        }
    }">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl lg:text-5xl text-ink font-bold text-center mb-12" data-aos="fade-up">{{ __('Get in Touch') }}</h2>
        <div class="max-w-3xl mx-auto">
            <div x-show="showSuccess" x-cloak x-transition data-aos="fade-up"
                class="bg-emerald-700/15 text-oxide p-4 rounded-lg mb-6">
                {{ __('Your message has been sent successfully!') }}
            </div>

            <form @submit.prevent="submitForm()" class="space-y-6 glass rounded-2xl p-6" data-aos="fade-up">
                @csrf
                <div>
                    <label for="name" class="block text-ink mb-2">{{ __('Name') }}</label>
                    <input type="text" id="name" x-model="formData.name" required
                        :class="{'border-ember': errors.name}"
                        class="w-full px-4 py-3 bg-paper text-ink rounded-lg focus:outline-none focus:ring-2 focus:ring-oxide transition duration-300 border border-ink/10">
                    <span x-show="errors.name" x-text="errors.name" class="text-ember text-sm mt-1"></span>
                </div>
                <div>
                    <label for="email" class="block text-ink mb-2">{{ __('Email') }}</label>
                    <input type="email" id="email" x-model="formData.email" required
                        :class="{'border-ember': errors.email}"
                        class="w-full px-4 py-3 bg-paper text-ink rounded-lg focus:outline-none focus:ring-2 focus:ring-oxide transition duration-300 border border-ink/10">
                    <span x-show="errors.email" x-text="errors.email" class="text-ember text-sm mt-1"></span>
                </div>
                <div>
                    <label for="message" class="block text-ink mb-2">{{ __('Message') }}</label>
                    <textarea id="message" x-model="formData.message" rows="5" required
                        :class="{'border-ember': errors.message}"
                        class="w-full px-4 py-3 bg-paper text-ink rounded-lg focus:outline-none focus:ring-2 focus:ring-oxide transition duration-300 border border-ink/10"></textarea>
                    <span x-show="errors.message" x-text="errors.message" class="text-ember text-sm mt-1"></span>
                </div>
                <div class="text-center">
                    <button type="submit"
                        :disabled="isSubmitting"
                        :class="{'opacity-50 cursor-not-allowed': isSubmitting}"
                        class="bg-oxide hover:bg-ember text-lift font-bold py-3 px-8 rounded-lg transition duration-300 transform hover:scale-105">
                        <span x-show="!isSubmitting">{{ __('Send Message') }}</span>
                        <span x-show="isSubmitting">{{ __('Sending...') }}</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
[x-cloak] { display: none !important; }
</style>
