@extends('layouts.app')

@section('title', __('Portfolio'))

@section('content')

<div class="container mx-auto px-4 py-12">
  <h1 class="text-4xl md:text-6xl text-white text-center mb-12">{{ __('My work') }}</h1>

  <div class="masonry-grid px-4 md:px-20 lg:px-40 max-w-screen-xl mx-auto">
    @foreach ($projects as $project)
      <div class="masonry-item">
        <div class="content bg-black rounded-3xl overflow-hidden" data-aos="fade-up" data-aos-duration="1000">
          <div class="group relative">
            <img src="{{ asset($project['src']) }}" class="w-full h-auto rounded-3xl shadow-lg object-cover" alt="{{ $project['title'] }}">
            <div class="absolute inset-0 bg-black bg-opacity-50 p-4 flex flex-col justify-end opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              <p class="text-white text-2xl md:text-3xl lg:text-4xl transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">{{ __($project['title']) }}</p>
              <p class="text-white text-lg md:text-xl mt-2 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 delay-100">{{ __($project['subtitle']) }}</p>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection