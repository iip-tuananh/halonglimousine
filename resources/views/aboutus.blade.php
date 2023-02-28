@extends('layouts.main.master')
@section('title')
Về chúng tôi
@endsection
@section('description')
Về chúng tôi
@endsection
@section('css')
@section('image')
{{url(''.$setting->logo)}}
@endsection
@endsection
@section('js')
@endsection
@section('content')
<main id="content" class="site-main">
   <section class="inner-page-wrap">
      <!-- ***Inner Banner html start form here*** -->
      <div class="inner-banner-wrap">
         <div class="inner-baner-container" style="background-image: url({{asset('frontend/img/hinh-anh-vinh-ha-long-3.jpg')}})">
            <div class="container">
               <div class="inner-banner-content">
                  <h1 class="page-title">About Us</h1>
               </div>
            </div>
         </div>
      </div>
      <!-- ***Inner Banner html end here*** -->
      <!-- ***about section html start form here*** -->
      <div class="inner-about-wrap">
         <div class="container">
            <div class="row">
               <div class="col-lg-8">
                  <div class="about-content">
                     <figure class="about-image">
                        <img src="{{$gioithieu->image}}" alt="">
                        <div class="about-image-content">
                           <h3>WE ARE BEST FOR TOURS & TRAVEL  !</h3>
                        </div>
                     </figure>
                     <h2>{{$gioithieu->title}}</h2>
                     {!!$gioithieu->content!!}
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="icon-box">
                     <div class="box-icon">
                        <i aria-hidden="true" class="fas fa-umbrella-beach"></i>
                     </div>
                     <div class="icon-box-content">
                        <h3>AFFORDABLE TOURS</h3>
                        <p>Iure doloremque saepe? Ultrices mi aliquam dis tempore incididunt sint, cumque dis temp!</p>
                     </div>
                  </div>
                  <div class="icon-box">
                     <div class="box-icon">
                        <i aria-hidden="true" class="fas fa-user-tag"></i>
                     </div>
                     <div class="icon-box-content">
                        <h3>BEST TOUR GUIDES</h3>
                        <p>Iure doloremque saepe? Ultrices mi aliquam dis tempore incididunt sint, cumque dis temp!</p>
                     </div>
                  </div>
                  <div class="icon-box">
                     <div class="box-icon">
                        <i aria-hidden="true" class="fas fa-headset"></i>
                     </div>
                     <div class="icon-box-content">
                        <h3>AFFORDABLE TOURS</h3>
                        <p>Iure doloremque saepe? Ultrices mi aliquam dis tempore incididunt sint, cumque dis temp!</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
@endsection