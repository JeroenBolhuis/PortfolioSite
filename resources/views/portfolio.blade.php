@extends('layouts.app')

@section('title', __('Portfolio'))

@push('styles')
  <style>
    .masonry-grid {
      display: grid;
      grid-gap: 10px;
      grid-template-columns: repeat(auto-fill, minmax(250px,1fr));
      grid-auto-rows: 20px;
    }  
  </style>
@endpush

@section('content')
  <h1 class="uppercase text-center my-24 text-4xl md:text-6xl text-white">{{ __('My work') }}</h1>

  <div class="masonry-grid px-4 md:px-20 lg:px-40 max-w-screen-xl mx-auto">
    @foreach ($projects as $project)
      <div class="masonry-item">
        <div class="content bg-black rounded-3xl overflow-hidden flex mb-8" data-aos="fade-up">
          <div class="group relative flex flex-col w-full">
            <img src="{{ asset($project['src']) }}" class="w-full h-auto rounded-3xl shadow-lg object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-50 p-4 flex flex-col justify-end">
              <p class="text-white text-2xl md:text-3xl lg:text-4xl transition-all duration-300 transform translate-y-[50%] group-hover:translate-y-[-15%]">{{ __($project['title']) }}</p>
              <p class="text-white text-lg md:text-xl opacity-0 transition-all duration-300 transform group-hover:opacity-100">{{ __($project['subtitle']) }}</p>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection

@push('scripts')
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
  <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
  <script>
    function resizeGridItem(item){
      grid = document.getElementsByClassName("masonry-grid")[0];
      rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
      rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap'));
      rowSpan = Math.ceil((item.querySelector('.content').getBoundingClientRect().height+rowGap)/(rowHeight+rowGap));
      item.style.gridRowEnd = "span "+rowSpan;
    }

    function resizeAllGridItems(){
      allItems = document.getElementsByClassName("masonry-item");
      for(x=0;x<allItems.length;x++){
        resizeGridItem(allItems[x]);
      }
    }

    function resizeInstance(instance){
      item = instance.elements[0];
      resizeGridItem(item);
    }
    window.addEventListener("load", () => {
      resizeAllGridItems();
      AOS.init();
    });
    window.addEventListener("resize", resizeAllGridItems);

    allItems = document.getElementsByClassName("masonry-item");
    for(x=0;x<allItems.length;x++){
      imagesLoaded( allItems[x], resizeInstance);
    }
  </script>
@endpush

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
