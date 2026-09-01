@extends('layouts.app')

@section('title', __('Page Not Found - Jeroen Bolhuis'))

@section('content')
<div class="min-h-screen py-12 flex items-center justify-center relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-ember/10 via-transparent to-ink/5 opacity-70"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-2xl mx-auto text-center">
            <h1 class="text-8xl lg:text-9xl font-bold text-ember mb-8">
                404
            </h1>
            <h2 class="text-2xl lg:text-3xl text-ink font-semibold mb-4">
                {{ __('Oops! Page Not Found') }}
            </h2>
            <p class="text-mute text-lg mb-8 leading-relaxed">
                {{ __('The page you\'re looking for doesn\'t exist or has been moved.') }}
            </p>
            <a href="/" class="bg-oxide hover:bg-ember text-lift font-semibold py-3 px-8 rounded-lg transition duration-300 hover:scale-105">
                {{ __('Back to Home') }}
            </a>
        </div>
    </div>
</div>
@endsection
