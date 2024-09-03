@extends('layouts.app')

@section('content')
<!--Main-->
<div class="container px-8 xl:px-0 pt-18 md:pt-36  mx-auto flex flex-wrap flex-col md:flex-row items-center">
  <!--Left Col-->
  <div class="relative flex flex-col w-full xl:w-2/5 justify-center xl:items-start overflow-y-hidden">
    <h1 class="my-4 text-2xl md:text-5xl text-white opacity-75 font-bold leading-tight text-center md:text-left">
      {{ __('I') }}
      <span class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">
      {{ __('Develop Websites') }}
      </span>
      {{ __('for business optimization') }}
    </h1>
    <p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left">
      {{ __('Say goodbye to loose papers, manual processes, and customer confusion. Automate your work and increase productivity with a custom-built website.') }}
    </p>

    <div class="bg-gray-900 opacity-75 w-full shadow-xl rounded-lg p-6 mb-4 md:px-8 relative z-0 overflow-hidden border border-purple-500 shadow-purple-500/25">
      @csrf
      <div class="mb-4">
        <label class="block text-blue-300 font-bold mb-2 md:text-3xl text-center md:text-left">
          {{ __('Take the next step for your business!') }}
        </label>
      </div>
      <div id="calendar-container"></div>
    </div>
  </div>
  <!--Right Col-->
  <div class="w-full xl:w-3/5 p-6 mt-12 md:p-12 xl:mt-0 overflow-hidden">
    <div class="macbook-container relative mx-auto w-full md:w-4/5 transform xl:-rotate-6 transition hover:scale-105 duration-500 hover:rotate-0 group">
      <div class="macbook-screen absolute inset-0 overflow-hidden" style="top: 7%; left: 1.75%; right: 4.9%; bottom: 7.5%;">
        <video autoplay loop muted playsinline class="w-full h-full object-cover">
          <source src="{{ asset('images/Animation2.mp4') }}" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <div class="absolute inset-0 bg-neutral-700 bg-opacity-0 xl:bg-opacity-60 transition-opacity duration-300 group-hover:opacity-0 z-10"></div>
      </div>
      <img class="w-full" src="{{ asset('images/macbook.svg') }}" alt="{{ __('Macbook Frame') }}" />
    </div>
  </div>
  <!--Right Col-->
@endsection
@push('styles')
    <link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet">
@endpush
@push('scripts')
    <script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script>
@endpush