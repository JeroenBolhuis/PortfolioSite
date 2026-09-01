<form action="{{ route('setLocale') }}" method="post" class="inline-flex items-center gap-1 px-1 md:px-0" aria-label="{{ __('Choose language') }}">
    @csrf
    @php
        $currentLocale = Session::get('locale', 'en');
        $locales = [
            'en' => ['flag' => 'images/united-kingdom.webp', 'label' => 'English'],
            'nl' => ['flag' => 'images/netherlands.webp', 'label' => 'Nederlands'],
        ];
    @endphp

    <div class="flex items-center gap-2">
        @foreach ($locales as $locale => $data)
            <button type="submit"
                name="locale"
                value="{{ $locale }}"
                class="inline-flex items-center justify-center overflow-hidden leading-none text-[0] border-0 bg-navi appearance-none cursor-pointer rounded-md transition-opacity duration-200 hover:opacity-100 focus-visible:outline-none w-[32px] h-[21px] 
                    {{ $locale === $currentLocale
                        ? 'ring-2 ring-navi focus-visible:ring-2 focus-visible:ring-navi'
                        : 'opacity-40 focus-visible:ring-2 focus-visible:ring-navi' }}"
                title="{{ $data['label'] }}"
                aria-label="{{ $data['label'] }}"
                aria-pressed="{{ $locale === $currentLocale ? 'true' : 'false' }}"
            >
                <img src="{{ asset($data['flag']) }}"
                     alt=""
                     class="block w-full h-full object-cover">
            </button>
        @endforeach
    </div>
</form>
