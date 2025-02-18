<form id="localeform" action="{{ route('setLocale') }}" method="get" class="inline-flex items-center gap-4 h-full px-3 md:px-0">    
    @php
        $currentLocale = Session::get('locale', 'en');
        $locales = [
            'en' => ['flag' => 'images/united-kingdom.png', 'label' => 'English'],
            'nl' => ['flag' => 'images/netherlands.png', 'label' => 'Nederlands'],
        ];
    @endphp

    <div class="flex items-center gap-4">
        @foreach ($locales as $locale => $data)
            <button type="submit" 
                name="locale" 
                value="{{ $locale }}" 
                class="w-8 h-6 bg-center bg-no-repeat bg-cover rounded-md transition-all duration-200 hover:scale-105
                    {{ $locale === $currentLocale 
                        ? 'shadow-lg' 
                        : 'opacity-25 hover:opacity-100' }}"
                style="background-image: url('{{ $data['flag'] }}')"
                title="{{ $data['label'] }}"
            >
            </button>
        @endforeach
    </div>
</form>
