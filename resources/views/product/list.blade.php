@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('js')
@endsection
@section('css')

@endsection
@section('content')
<main id="content" class="site-main">
   <!-- ***Inner Banner html start form here*** -->
   <div class="inner-banner-wrap">
      <div class="inner-baner-container" style="background-image: url({{asset('frontend/img/hinh-anh-vinh-ha-long-3.jpg')}})">
         <div class="container">
            <div class="inner-banner-content">
               <h1 class="page-title">{{$title}}</h1>
            </div>
         </div>
      </div>
   </div>
   <!-- ***Inner Banner html end here*** -->
   <div class="archive-section blog-archive">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 secondary andes">
               @include('layouts.blog.rightbar')
             </div>
            <div class="col-lg-9 primary right-sidebar">
               <section class="home-package">
                  <div class="container">
                     <div class="package-section">
                     
                        @foreach ($list as $item)
                        @include('layouts.product.item',['pro'=>$item])
                        @endforeach
                      
                     </div>
                  </div>
               </section>
            </div>
          
         </div>
      </div>
   </div>
</main>
@endsection

