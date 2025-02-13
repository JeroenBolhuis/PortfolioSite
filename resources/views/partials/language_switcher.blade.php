<form id="localeform" action="{{ route('setLocale') }}" method="get" class="relative inline-flex items-center h-full py-2 px-3">    
    @php
        $currentLocale = Session::get('locale', 'en');
        $locales = [
            'en' => ['flag' => 'images/united-kingdom.png', 'label' => 'English'],
            'nl' => ['flag' => 'images/netherlands.png', 'label' => 'Nederlands'],
        ];
    @endphp

    <button type="button" 
        class="inline-flex items-center border border-gray-300 bg-black px-2 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-gray-700 hover:bg-gray-200 w-8 h-6 bg-center bg-no-repeat bg-cover" 
        id="dropdownButton"
        style="background-image: url('{{ $locales[$currentLocale]['flag'] }}')"
    >
    </button>

    <div id="dropdownMenu" class="absolute top-full mt-1 origin-top hidden flex flex-col items-center gap-2">
        @foreach ($locales as $locale => $data)
            @if ($locale !== $currentLocale)
                <button type="submit" 
                    name="locale" 
                    value="{{ $locale }}" 
                    class="w-8 h-6 bg-center bg-no-repeat bg-cover rounded-md bg-gray-700 hover:border hover:border-gray-300"
                    style="background-image: url('{{ $data['flag'] }}')"
                >
                </button>
            @endif
        @endforeach
    </div>
</form>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const dropdownButton = document.getElementById('dropdownButton');
    const dropdownMenu = document.getElementById('dropdownMenu');

    dropdownButton.addEventListener('click', function() {
        dropdownMenu.classList.toggle('hidden');
    });

    document.addEventListener('click', function(event) {
        if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add('hidden');
        }
    });
});
</script>
