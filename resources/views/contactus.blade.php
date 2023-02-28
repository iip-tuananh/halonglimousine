@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="content" class="site-main">
	<section class="contact-inner-page">
	   <!-- ***Inner Banner html start form here*** -->
	   <div class="inner-banner-wrap">
		  <div class="inner-baner-container" style="background-image: url({{asset('frontend/img/hinh-anh-vinh-ha-long-3.jpg')}})">
			 <div class="container">
				<div class="inner-banner-content">
				   <h1 class="page-title">Contact US</h1>
				</div>
			 </div>
		  </div>
	   </div>
	   <!-- ***Inner Banner html end here*** -->
	   <!-- ***contact section html start form here*** -->
	   <div class="inner-contact-wrap">
		  <div class="container">
			 <div class="row">
				<div class="col-lg-6">
				   <div class="section-heading">
					  <h5 class="sub-title">GET IN TOUCH</h5>
					  <h2 class="section-title">REACH & CONTACT US!</h2>
					  <ul style="list-style :none">
						@if($setting->phone1 != '')
						<li>><span><i class="fa-solid fa-phone"></i></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$setting->phone1}}</li>
						@endif
						@if($setting->phone2 != '')
						<li><span><i class="fa-solid fa-phone"></i></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$setting->phone2}}</li>
						@endif
						@if($setting->address1 != '')
						<li><span><i class="fa-solid fa-location-dot"></i></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$setting->address1}}</li>
						@endif
					
						@if($setting->address2 != '')
						<li><span><i class="fa-solid fa-location-dot"></i></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$setting->address2}}</li>
						@endif
						@if($setting->email != '')
						<li><span><i class="fa-solid fa-envelope"></i></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$setting->email}}</li>
						@endif
					  </ul>
				   </div>
				   <div class="contact-map">
					  {!!$setting->iframe_map!!}
				   </div>
				</div>
				<div class="col-lg-6">
				   <div class="contact-from-wrap primary-bg">
					  <form method="post" class="contact-from" action="{{route('postcontact')}}">
						@csrf
						 <p>
							<label>First Name..</label>
							<input type="text" name="name" placeholder="Your Name*">
						 </p>
						 <p>
							<label>Phone..</label>
							<input type="text" name="phone" placeholder="Your Phone*">
						 </p>
						 <p>
							<label>Email Address</label>
							<input type="email" name="email" placeholder="Your Email*">
						 </p>
						 <p>
							<label>Comments / Questions</label>
							<textarea rows="8" placeholder="Your Message*" name="mess"></textarea>
						 </p>
						 <p>
							<input type="submit" name="submit" value="SUBMIT MESSAGE">
						 </p>
					  </form>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	   <!-- ***contact section html start form here*** -->
	   <!-- ***iconbox section html start form here*** -->
	   <div class="contact-details-section bg-light-grey">
		  <div class="container">
			 <div class="row align-items-center">
				<div class="col-lg-4">
				   <div class="icon-box border-icon-box">
					  <div class="box-icon">
						 <i aria-hidden="true" class="fas fa-envelope-open-text"></i>
					  </div>
					  <div class="icon-box-content">
						 <h4>EMAIL ADDRESS</h4>
						 <ul>
							<li>
							   <a href="mailto:{{$setting->email}}">{{$setting->email}}</a>
							</li>
						 </ul>
					  </div>
				   </div>
				</div>
				<div class="col-lg-4">
				   <div class="icon-box border-icon-box">
					  <div class="box-icon">
						 <i aria-hidden="true" class="fas fa-phone-alt"></i>
					  </div>
					  <div class="icon-box-content">
						 <h4>PHONE NUMBER</h4>
						 <ul>
							<li>
							   <a href="tell:{{$setting->phone1}}">{{$setting->phone1}}</a>
							</li>
							<li>
							   <a href="callto:{{$setting->phone2}}">{{$setting->phone2}}</a>
							</li>
							
						 </ul>
					  </div>
				   </div>
				</div>
				<div class="col-lg-4">
				   <div class="icon-box border-icon-box">
					  <div class="box-icon">
						 <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
					  </div>
					  <div class="icon-box-content">
						 <h4>ADDRESS LOCATION</h4>
						 <ul>
							<li>
							  {{$setting->address1}}
							</li>
						 </ul>
					  </div>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</section>
 </main>
@endsection