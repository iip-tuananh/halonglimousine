@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
{{languageName($product->description)}}
@endsection
@section('image')
@php
$img = json_decode($product->images);
@endphp
{{url(''.$img[0])}}
@endsection
@section('css')


@endsection
@section('js')

@endsection
@section('content')
<main id="content" class="site-main">
  <section class="package-inner-page">
     <!-- ***Inner Banner html start form here*** -->
     <div class="inner-banner-wrap">
      <div class="inner-baner-container" style="background-image: url({{asset('frontend/img/hinh-anh-vinh-ha-long-3.jpg')}})">
           <div class="container">
              <div class="inner-banner-content">
                 <h1 class="page-title">Package Deatil</h1>
              </div>
           </div>
        </div>
     </div>
     <!-- ***Inner Banner html end here*** -->
     <!-- ***career section html start form here*** -->
     <div class="inner-package-detail-wrap">
        <div class="container">
           <div class="row">
              <div class="col-lg-8 primary right-sidebar">
                 <div class="single-packge-wrap">
                    <div class="single-package-head d-flex align-items-center">
                       <div class="package-title">
                          <h2>{{languageName($product->name)}}</h2>
                          <div class="rating-start-wrap">
                             <div class="rating-start">
                                <span style="width: 80%"></span>
                             </div>
                          </div>
                       </div>
                       <div class="package-price">
                          <h6 class="price-list">
                             <span>{{number_format($product->price)}}đ</span>
                             / per person
                          </h6>
                       </div>
                    </div>
                    <div class="package-meta">
                       <ul>
                          <li>
                            <a href="{{route('allListProCate',['danhmuc'=>$product->cate->slug])}}">{{languageName($product->cate->name)}}</a>
                          </li>
                         
                       </ul>
                    </div>
                    <figure class="single-package-image">
                      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

                    
                    </head>
                    
                 
                      <!-- Swiper -->
                      <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                          @foreach ($img as $item)
                           <div class="swiper-slide">
                            <img src="{{$item}}" alt="" srcset="">
                           </div>
                              
                          @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                      </div>
                    
                      <!-- Swiper JS -->
                      <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
                    
                      <!-- Initialize Swiper -->
                      <script>
                        var swiper = new Swiper(".mySwiper", {
                          pagination: {
                            el: ".swiper-pagination",
                          },
                        });
                      </script>
                    </figure>
                    <div class="package-content-detail">
                       <article class="package-overview">
                          <h3>OVERVIEW :</h3>
                         {!!languageName($product->content)!!}
                       </article>
                    </div>
                 </div>
              </div>
              <div class="col-lg-4">
                 <div class="sidebar">
                    <div class="booking-form-wrap">
                       <div class="booking-form-inner primary-bg">
                          <h3>BOOKING NOW</h3>
                          <form method="POST" class="booking-form" action="{{route('SentMail')}}">
                            @csrf
                            <input type="hidden" name="idticket" value="{{$product->id}}">
                             <p>
                                <input type="text" name="name" placeholder="Your Name...">
                             </p>
                             <p>
                                <input type="email" name="email" placeholder="Your Email...">
                             </p>
                             <p class="width-5">
                                <label>Phone</label>
                                <input class="input-date-picker" type="text" name="phone" placeholder="Enter phone" autocomplete="off" >
                             </p>
                             <p class="width-5">
                                <label>Note</label>
                                <input class="input-date-picker" type="text" name="s" placeholder="Enter note" autocomplete="off" >
                             </p>
                             <p>
                                <button type="submit" class="outline-btn outline-btn-white">BOOk NOW</button>
                             </p>
                          </form>
                       </div>
                    </div>
                
                    <div class="package-map">
                      {!!$setting->iframe_map!!}
                    </div>
                    <div class="package-list">
                     @include('layouts.blog.rightbar')
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!-- ***career section html start form here*** -->
  </section>
</main>
@endsection

