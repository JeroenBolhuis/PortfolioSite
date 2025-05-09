@extends('layouts.app')

@section('content')
<div x-data="{ 
        showImageModal: false,
        currentImage: '',
        currentTitle: ''
    }"
    @keydown.escape.window="showImageModal = false">
    @include('components.hero')
    @include('components.about')
    @include('components.contact')
    
    @include('components.modals.show-image')
</div>
@endsection