@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
Tin tức nổi bật và mới nhất
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
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
               <h1 class="page-title">{{$title_page}} </h1>
            </div>
         </div>
      </div>
   </div>
   <!-- ***Inner Banner html end here*** -->
   <div class="archive-section blog-archive">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 primary right-sidebar">
               <!-- blog post item html start -->
               <div class="grid blog-inner row">
                  @foreach ($blog as $item)
                  <div class="grid-item col-md-6">
                     <article class="post">
                        <figure class="featured-post">
                           <img src="{{$item->image}}" alt="">
                        </figure>
                        <div class="post-content">
                           <div class="cat-meta">
                              <a href="blog-archive.html">{{$item->created_at->format('d/m/Y')}}</a>
                           </div>
                           <h3><a href="{{route('detailBlog',['slug'=>$item->slug])}}">{{languageName($item->title)}}</a></h3>
                           <p class="limit-text-3">{{languageName($item->description)  }}</p>
                           <div class="post-footer d-flex justify-content-between align-items-center">
                              <div class="post-btn">
                                 <a href="{{route('detailBlog',['slug'=>$item->slug])}}" class="round-btn">Read More</a>
                              </div>
                              <div class="meta-comment">
                              </div>
                           </div>
                        </div>
                     </article>
                  </div>
                  @endforeach
               </div>
               <!-- blog post item html end -->
               <!-- pagination html start-->
               <div class="pagenav">
                  {{$blog->links()}}
               </div>
            </div>
            <div class="col-lg-4 secondary">
             @include('layouts.blog.rightbar')
            </div>
         </div>
      </div>
   </div>
</main>
@endsection