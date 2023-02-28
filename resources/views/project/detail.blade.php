@extends('layouts.main.master')
@section('title')
{{$project_details['name']}} 
@endsection
@section('description')
Tin tức nổi bật và mới nhất
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('frontend/css/post-9513.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/post-8619.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

@endsection
@section('js')

@endsection
@section('content')
<div id="pagetitle" class="page-title bg-image ">
    <div class="container">
        <div class="page-title-inner">
            <div class="page-title-holder">
       
                                    <h1 class="page-title">{{$project_details->name}}</h1>                </div>

                                <ul class="ct-breadcrumb"><li><a class="breadcrumb-entry" href="{{route('home')}}">TRANG CHỦ</a></li><li><a class="breadcrumb-entry" href="{{route('allListConstruction')}}">Dự Án</a></li><li><span class="breadcrumb-entry">{{$project_details->name}}</span></li></ul>                            </div>
    </div>
</div>

<main id="main" class="site-main bg-custom">
   <div class="container ">
    <br>
    <div class="row description-cus">
        <div class="col-md-6 col-xs-12 ">
            <div style="padding: 10px 10px">
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                <div class="swiper-wrapper">
         
                    @php
                        $imgs = json_decode($project_details->images);
                    @endphp
                    @foreach ($imgs as $img)
                        <div class="swiper-slide">
                        <img src="{{$img}}" />
                        </div>
                    @endforeach
              
               
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
              <br>
              <div thumbsSlider="" class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($imgs as $img)
                    <div class="swiper-slide">
                    <img src="{{$img}}" />
                    </div>
                @endforeach
                </div>
              </div>
        </div>
        </div>
        <div class="col-md-6 col-xs-12 ">
            <div style="padding: 10px 10px">
                {!!languageName($project_details->description)!!}
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12 col-xs-12 description-cus">
            <div style="padding: 10px 10px">    

                {!!languageName($project_details->content)!!}
            </div>
        </div>
    </div>
    <br>
   </div>

     <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

   <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      thumbs: {
        swiper: swiper,
      },
    });
  </script>
 </main>
@endsection