<form id="localeform" action="{{ route('setLocale') }}" method="get" class="relative inline-block text-left">
    @php
        $currentLocale = Session::get('locale', 'en');
        $locales = [
            'en' => ['flag' => 'storage/united-kingdom.png', 'label' => 'English'],
            'nl' => ['flag' => 'storage/netherlands.png', 'label' => 'Nederlands']
        ];
    @endphp

    <button type="button" class="inline-flex items-center border border-gray-300 bg-black px-2 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" id="dropdownButton">
        <img src="{{ $locales[$currentLocale]['flag'] }}" alt="Selected Flag" class="w-6 h-6 shadow-inner">
    </button>

    <div id="dropdownMenu" class="absolute right-0 z-10 mt-2 origin-top-right rounded-md bg-black shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden">
        <div class="py-0">
            @foreach ($locales as $locale => $data)
                @if ($locale !== $currentLocale)
                    <button type="submit" name="locale" value="{{ $locale }}" class="flex items-center w-full px-2 text-sm text-gray-700 rounded-md hover:bg-gray-100 focus:outline-none">
                        <img src="{{ $data['flag'] }}" alt="{{ $data['label'] }} Flag" class="w-6 h-6 shadow-inner">
                    </button>
                @endif
            @endforeach
        </div>
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
