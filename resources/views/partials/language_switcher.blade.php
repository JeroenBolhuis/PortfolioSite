<form id="localeform" action="{{ route('setLocale') }}" method="get" class="d-flex align-items-center">

    <select class="form-select" name="locale" id="locale" onchange="this.form.submit()">

        <option disabled>Language</option>

        <option value="en" @if (Session::get('locale', 'en') == 'en') selected @endif> English</option>

        <option value="nl" @if (session('locale') == 'nl') selected @endif> Nederlands</option>

    </select>

</form>