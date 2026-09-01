<form id="localeform" action="{{ route('setLocale') }}" method="get" class="inline-flex items-center gap-3 px-3 md:px-0">
    @php
        $currentLocale = Session::get('locale', 'en');
        $locales = [
            'en' => ['flag' => 'images/united-kingdom.webp', 'label' => 'English'],
            'nl' => ['flag' => 'images/netherlands.webp', 'label' => 'Nederlands'],
        ];
    @endphp

    <div class="flex items-center gap-3">
        @foreach ($locales as $locale => $data)
            <button type="submit"
                name="locale"
                value="{{ $locale }}"
                class="inline-flex items-center justify-center p-0 m-0 w-8 h-[21px] min-h-[21px] max-h-[21px] leading-none text-[0] border-0 bg-transparent appearance-none cursor-pointer overflow-hidden rounded-[2px] transition-opacity duration-200 hover:opacity-100 focus-visible:outline-none
                    {{ $locale === $currentLocale
                        ? 'shadow-[0_0_0_2px_#6B2A10] focus-visible:shadow-[0_0_0_2px_#6B2A10]'
                        : 'opacity-40 focus-visible:shadow-[0_0_0_2px_#6B2A10]' }}"
                title="{{ $data['label'] }}"
            >
                <img src="{{ asset($data['flag']) }}"
                     alt="{{ $data['label'] }}"
                     width="32"
                     height="21"
                     class="block w-8 h-[21px] max-w-none object-cover">
            </button>
        @endforeach
    </div>
</form>
