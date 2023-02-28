@extends('layouts.main.master')
@section('title')
Kết quả tìm kiếm
@endsection
@section('description')
Đã tìm thấy {{$countproduct}} kết quả phù hợp cho từ khóa "{{$keyword}}"
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
<link href="{{asset('frontend/css/collection_style.scss.css?1663035745304')}}" rel="stylesheet" type="text/css" />
<link rel="preload" as='style' type="text/css" href="{{asset('frontend/css/collection_style.scss.css?1663035745304')}}">
@endsection
@section('content')
<div id="pagetitle" class="page-title bg-image ">
	<div class="container">
		<div class="page-title-inner">
			<div class="page-title-holder">
									<h1 class="page-title">Kết quả tìm kiếm</h1>                </div>
 
								<ul class="ct-breadcrumb"><li><a class="breadcrumb-entry" href="{{route('home')}}">TRANG CHỦ</a></li><li><span class="breadcrumb-entry">Kết quả tìm kiếm</span></li></ul>                            </div>
	</div>
 </div>
 <main id="main" class="site-main bg-custom">
	<article id="post-6498" class="post-6498 page type-page status-publish hentry">
	   <div class="entry-content clearfix">
		  <div data-elementor-type="wp-page" data-elementor-id="6498" class="elementor elementor-6498" data-elementor-settings="[]">
			 <div class="elementor-section-wrap">
				<section class="elementor-section elementor-top-section elementor-element elementor-element-5647299 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5647299" data-element_type="section">
				   <div class="elementor-container elementor-column-gap-default ">
					  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e9430fa" data-id="e9430fa" data-element_type="column">
						 <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-c7918cd elementor-widget elementor-widget-text-editor" data-id="c7918cd" data-element_type="widget" data-widget_type="text-editor.default">
					   
							</div>
							<div class="elementor-element elementor-element-5eda97c elementor-grid-4 elementor-grid-tablet-3 elementor-grid-mobile-2 elementor-products-grid elementor-wc-products elementor-widget elementor-widget-woocommerce-products" data-id="5eda97c" data-element_type="widget" data-widget_type="woocommerce-products.default">
							   <div class="elementor-widget-container">
								  <div class="woocommerce columns-4 ">
									 <ul class="products elementor-grid columns-4">
										@foreach ($resultPro as $pro)
										  @include('layouts.product.item',['pro'=>$pro])
										@endforeach
									 </ul>
								  </div>
							   </div>
							</div>
						 </div>
					  </div>
				   </div>
				</section>
			 </div>
		  </div>
	   </div>
	   <!-- .entry-content -->
	</article>
	<!-- #post-6498 -->
 </main>
@endsection