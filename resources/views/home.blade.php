@extends('layouts.app')

<!-- section('title', __('Home')) -->

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
      <!-- Google Calendar Appointment Scheduling begin -->
      <div id="calendar-container"></div>
      <!-- end Google Calendar Appointment Scheduling -->
    </div>
  </div>

  <!--Right Col-->
  <div class="w-full xl:w-3/5 p-6 mt-12 md:p-12 lg:mt-0 overflow-hidden">
    <a href="portfolio">
      <img class="mx-auto w-full md:w-4/5 transform -rotate-6 transition hover:scale-105 duration-500 hover:rotate-0" src="{{ asset('images/macbook.svg') }}" alt="{{ __('Macbook Image') }}" />
    </a>
  </div>
</div>
@endsection

@push('styles')
    <link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet">
@endpush
@push('scripts')
    <script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script>
    <script>
      window.addEventListener('load', function() {
        console.log('load');
        var target = document.getElementById('calendar-container');
        var label = @json(__('Make an appointment'));
        calendar.schedulingButton.load({
          url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ3L2W-jtuGZGEAPef1y57HPVol19JEf08SWMKHsTp2jKdEhhKvirag_iTLSujEQrZmAGcb1w_O7?gv=true',
          color: '#039BE5',
          label: label,
          target: target,
        });

        // After the button is loaded, apply Tailwind-like styles
        const button = document.querySelector('.qxCTlb');
        if (button) {
          button.classList.add('bg-gradient-to-r', 'from-purple-800', 'to-green-500', 'hover:from-purple-700', 'hover:to-green-400', 'text-white', 'font-bold', 'py-2', 'px-4', 'rounded', 'focus:ring', 'transform', 'transition', 'hover:scale-105', 'duration-300', 'ease-in-out', 'md:text-lg', 'w-full', 'md:w-auto');
          button.style.setProperty('padding', '1rem 1.5rem', 'important');
        }
        // Add an event listener for the 'click' event
        button.addEventListener('click', function() {            
          setTimeout(() => {
            const cont = document.querySelector('.hur54b');
            if (cont) {
              if (window.innerWidth < 768) { // only change padding on mobile
                cont.style.setProperty('padding', '5rem 1rem 2rem 1rem', 'important');
              } 
            }
          }, 0);
        });
      });
    </script>
@endpush

