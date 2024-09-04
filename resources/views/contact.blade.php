@extends('layouts.app')

@section('title', __('Contact Me'))

@section('content')
<div class="container mx-auto px-4 py-12">
    <h1 class="text-4xl md:text-6xl text-white text-center mb-12">{{ __('Contact Me') }}</h1>

    <div class="max-w-2xl mx-auto bg-gray-900 rounded-lg shadow-xl p-8">
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <div class="mb-6">
                <label for="name" class="block text-white mb-2">{{ __('Name') }}</label>
                <input type="text" id="name" name="name" required
                    class="w-full px-3 py-2 bg-gray-800 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-6">
                <label for="email" class="block text-white mb-2">{{ __('Email') }}</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-3 py-2 bg-gray-800 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-6">
                <label for="message" class="block text-white mb-2">{{ __('Message') }}</label>
                <textarea id="message" name="message" rows="5" required
                    class="w-full px-3 py-2 bg-gray-800 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>
            <div class="text-center">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                    {{ __('Send Message') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
