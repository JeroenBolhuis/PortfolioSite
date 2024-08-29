@extends('layouts.app')

<!-- section('title', __('Home')) -->

@section('content')
<!--Main-->
<div class="container pt-20 md:pt-36 mx-auto flex flex-wrap flex-col md:flex-row items-center">
  <!--Left Col-->
  <div class="relative flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
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

    <form action="{{ route('submit') }}" method="POST" class="bg-gray-900 opacity-75 w-full shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4 relative z-0 overflow-hidden">
        @csrf
        <div class="mb-4">
            <label class="block text-blue-300 py-2 font-bold mb-2" for="emailaddress">
                {{ __('Take the next step for your business') }}
            </label>
            <input
                name="email"
                class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                id="emailaddress"
                type="text"
                placeholder="{{ __('you@somewhere.com') }}"
            />
        </div>
        <!-- Alerts -->
        @if (session('success'))
            <div class="z-10 absolute top-12 left-2/3 rotate-12 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded text-xs md:text-sm">
                <strong class="font-bold">{{ __('Success!') }}</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        @if ($errors->any())
            <div class="z-10 absolute top-12 left-2/3 rotate-12 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded text-xs md:text-sm">
                <strong class="font-bold">{{ __('Whoops!') }}</strong>
                <span class="block sm:inline">{{ $errors->first() }}</span>
            </div>
        @endif
        <div class="justify-between pt-4">
          <button class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out" type="submit">
              {{ __('Get started') }}
          </button>
        </div>
    </form>
  </div>

  <!--Right Col-->
  <div class="w-full xl:w-3/5 p-12 overflow-hidden">
    <a href="portfolio">
    <img class="mx-auto w-full md:w-4/5 transform -rotate-6 transition hover:scale-105 duration-500 hover:rotate-0" src="{{ asset('storage/macbook.svg') }}" alt="{{ __('Macbook Image') }}" />
    </a>
  </div>
@endsection
