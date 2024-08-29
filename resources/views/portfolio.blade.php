@extends('layouts.app')

@section('title', __('Portfolio'))

@push('styles')
  <style>
    .grid {
      display: grid;
      grid-gap: 30px;
      grid-template-columns: repeat(auto-fill, minmax(350px,1fr));
      grid-auto-rows: 20px;
    }  
  </style>
@endpush

@section('content')

  <h1 class="uppercase text-center my-24 text-6xl text-white">{{ __('My work') }}</h1>

  <div class="grid px-4 md:px-80">
    @foreach ($projects as $project)
      <div class="item">
        <div class="content bg-black rounded-3xl overflow-hidden flex duration-[600ms] taos:translate-y-[200px] taos:opacity-0" data-taos-offset="50">
          <div class="group relative flex flex-col">
            <img src="{{ asset($project['src']) }}" class="w-full h-auto rounded-3xl shadow-lg">
            <div class="absolute inset-0 bg-black bg-opacity-50 p-4 flex flex-col justify-end">
              <p class="text-white text-4xl md:text-5xl transition-all duration-300 transform translate-y-[50%] group-hover:translate-y-[-15%]">{{ __($project['title']) }}</p>
              <p class="text-white text-xl md:text-xl opacity-0 transition-all duration-300 transform group-hover:opacity-100">{{ __($project['subtitle']) }}</p>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection

@push('scripts')
  <script src="https://unpkg.com/imagesloaded@5.0.0/imagesloaded.pkgd.min.js"></script>
  <script>
    function resizeGridItem(item){
      const grid = document.querySelector(".grid");
      const rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
      const rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap'));
      const rowSpan = Math.ceil((item.querySelector('.content').getBoundingClientRect().height + rowGap) / (rowHeight + rowGap));
      item.style.gridRowEnd = "span " + rowSpan;
    }
    
    function resizeAllGridItems(){
      const allItems = document.querySelectorAll(".item");
      allItems.forEach(item => resizeGridItem(item));
    }
    
    function resizeInstance(instance){
      const item = instance.elements[0];
      resizeGridItem(item);
    }
    
    window.addEventListener("load", () => {
      resizeAllGridItems();
      TAOS.init();
    });
    
    window.addEventListener("resize", resizeAllGridItems);

    document.querySelectorAll(".item").forEach(item => {
      imagesLoaded(item, resizeInstance);
    });
  </script>
@endpush
