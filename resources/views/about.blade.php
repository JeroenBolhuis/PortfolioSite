@extends('layouts.app')

@section('title', __('About Me'))

@section('content')
<div class="container mx-auto px-4 py-12">
    <h1 class="text-4xl md:text-6xl text-white text-center mb-12">{{ __('About Me') }}</h1>
    
    <div class="bg-gray-900 rounded-lg shadow-xl p-8 md:p-12 mb-12">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/3 mb-8 md:mb-0">
                <img src="{{ asset('images/face.jpg') }}" alt="{{ __('Jeroen Bolhuis') }}" class="rounded-full w-64 h-64 object-cover mx-auto">
            </div>
            <div class="md:w-2/3 md:pl-12">
                <h2 class="text-3xl md:text-4xl text-white mb-6">{{ __('Jeroen Bolhuis') }}</h2>
                <p class="text-xl text-gray-300 leading-relaxed mb-6">
                    {{ __("Hi, I'm Jeroen Bolhuis, a passionate web developer with a mission to revolutionize how businesses approach their online presence.") }}
                </p>
                <p class="text-xl text-gray-300 leading-relaxed mb-6">
                    {{ __("After completing my Computer Science degree, I dove headfirst into the corporate world, crafting bespoke websites for industry giants. However, I quickly realized that there was a gap between what clients truly needed and what companies were delivering.") }}
                </p>
                <p class="text-xl text-gray-300 leading-relaxed">
                    {{ __("This realization sparked my entrepreneurial journey, leading me to found EfficiënC - a web development agency that puts client needs and innovation at the forefront.") }}
                </p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-gray-800 rounded-lg p-8" data-aos="fade-up">
            <h3 class="text-2xl text-white mb-4">{{ __('My Approach') }}</h3>
            <p class="text-gray-300">
                {{ __("I believe in creating websites that not only look stunning but also drive real business results. By combining cutting-edge technology with a deep understanding of user experience, I deliver solutions that help businesses thrive in the digital landscape.") }}
            </p>
        </div>
        <div class="bg-gray-800 rounded-lg p-8" data-aos="fade-up">
            <h3 class="text-2xl text-white mb-4">{{ __('Why Choose Me?') }}</h3>
            <ul class="list-disc list-inside text-gray-300">
                <li>{{ __('Over a decade of experience in web development') }}</li>
                <li>{{ __('Proven track record of increasing client conversions') }}</li>
                <li>{{ __('Agile methodology for faster, more efficient project delivery') }}</li>
                <li>{{ __('Commitment to ongoing support and maintenance') }}</li>
            </ul>
        </div>
    </div>
</div>
@endsection