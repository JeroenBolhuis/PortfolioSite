@extends('layouts.app')

@section('title', __('Page Not Found - Jeroen Bolhuis'))

@section('content')
<div class="min-h-screen py-12 flex items-center justify-center relative overflow-hidden bg-black/10 backdrop-blur-[2px]">
    <!-- Animated gradient background -->
    <div class="absolute inset-0 bg-gradient-to-br from-purple-900/30 via-transparent to-pink-900/30 opacity-40"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-2xl mx-auto text-center">
            <!-- 404 Number -->
            <h1 class="text-8xl lg:text-9xl font-bold text-white mb-8">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-purple-400 via-pink-500 to-red-500">
                    404
                </span>
            </h1>

            <!-- Error Message -->
            <h2 class="text-2xl lg:text-3xl text-white font-semibold mb-4">
                {{ __('Oops! Page Not Found') }}
            </h2>

            <p class="text-gray-300 text-lg mb-8 leading-relaxed">
                {{ __('The page you\'re looking for doesn\'t exist or has been moved.') }}
            </p>

            <!-- Go Back Button -->
            <a href="/" class="bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white font-semibold py-3 px-8 rounded-lg transition duration-300 hover:scale-105 mr-4">
                {{ __('Back to Home') }}
            </a>
        </div>
    </div>
</div>
@endsection