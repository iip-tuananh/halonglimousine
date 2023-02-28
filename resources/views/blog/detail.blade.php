@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="content" class="site-main">
	<!-- ***Inner Banner html start form here*** -->
	<div class="inner-banner-wrap">
	   <div class="inner-baner-container" style="background-image: url({{asset('frontend/img/hinh-anh-vinh-ha-long-3.jpg')}})">
		  <div class="container">
			 <div class="inner-banner-content">
				<h1 class="page-title">{{languageName($blog_detail->title)}}</h1>
			 </div>
		  </div>
	   </div>
	</div>
	<!-- ***Inner Banner html end here*** -->
	<div class="single-post-section">
	   <div class="single-post-inner">
		  <div class="container">
			 <div class="row">
				<div class="col-lg-8 primary right-sidebar">
				   <!-- single blog post html start -->
				   <figure class="feature-image">
					  <img src="{{$blog_detail->image}}" alt="">
				   </figure>
				   <div class="entry-meta">
					
					  <span class="posted-on">
					  <a href="javascript:;">{{$blog_detail->created_at->format('d/m/Y')}}</a>
					  </span>
					
				   </div>
				   <article class="single-content-wrap">
					{!!languageName($blog_detail->content)!!}
				   </article>
			
		
				   <!-- post comment html -->
				 
				   <!-- blog post item html end -->
				</div>
				<div class="col-lg-4 secondary">
				  @include('layouts.blog.rightbar')
				</div>
			 </div>
		  </div>
	   </div>
	</div>
 </main>
@endsection