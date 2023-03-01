@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
@endsection
@section('script')
@endsection
@section('content')
<main id="content" class="site-main">
   <!-- ***home banner html start form here*** -->
   <section class="home-banner-section home-banner-slider">
      @foreach ($banner as $item)
      <div class="home-banner d-flex flex-wrap align-items-center" style="background-image: url({{$item->image}})">
         <div class="overlay"></div>
         <div class="container">
            <div class="banner-content text-center">
               <div class="row">
                  {{-- 
                  <div class="col-lg-8 offset-lg-2">
                     <h2 class="banner-title">JOURNEY TO EXPLORE WORLD</h2>
                     <p>Ac mi duis mollis. Sapiente? Scelerisque quae, penatibus? Suscipit class corporis nostra rem quos voluptatibus habitant? Fames, vivamus minim nemo enim, gravida lobortis quasi, eum.</p>
                     <div class="banner-btn">
                        <a href="about.html" class="round-btn">LEARN MORE</a>
                        <a href="booking.html" class="outline-btn outline-btn-white">BOOK NOW</a>
                     </div>
                  </div>
                  --}}
               </div>
            </div>
         </div>
      </div>
      @endforeach
   </section>
   <!-- ***home banner html end here*** -->
   <!-- ***Home search field html start from here*** -->
   <div class="home-counter icon-cus">
      <div class="container">
         <div class="counter-wrap">
            <div class="counter-item">
               <span >
               <span ><i class="far fa-clock"></i></span>
               </span>
               <span class="counter-desc">
                  Always ready to advise and answer customers' questions 24/7
               </span>
            </div>
            <div class="counter-item">
               <span >
               <span ><i aria-hidden="true" class="far fa-money-bill-alt"></i></span>
               </span>
               <span class="counter-desc">
                  The price is always the best or equal to the listed price on the market.
               </span>
            </div>
            <div class="counter-item pd-cus">
               <span >
               <span ><i aria-hidden="true" class="far fa-handshake"></i></i></span>
               </span>
               <span class="counter-desc">
                  BOOKING COMMITMENT
                  Commitment to be responsible to you immediately after confirming the booking.
               </span>
            </div>
            <div class="counter-item pd-cus">
               <span >
               <span><i aria-hidden="true" class="fas fa-bus-alt"></i></span>
               </span>
               <span class="counter-desc">
                  SERVICE COMMITMENT
                  Always aim for the optimal value that customers want to receive
               </span>
            </div>
         </div>
      </div>
   </div>
   {{-- form bôking --}}
   <div class="home-trip-search primary-bg" id="bok">
      <div class="container">
         <h1 style="text-align: center">Book your tickets now</h1>
         <br>
         <br>
         <form method="POST" action="{{route('SentMail')}}" class="trip-search-inner d-flex row">
            @csrf
            <div class=" col-md-6">
               <label> Full Name </label>
               <input type="text" name="name" placeholder="Enter Full Name" required>
            </div>
            <div class=" col-md-6">
               <label> Phone or Whastapps </label>
               <input type="number" name="phone" placeholder="Enter Number" required>
            </div>
            <br>
            <div class="col-md-6">
               <label> Email </label>
               <i class="far fa-calendar"></i>
               <input  type="email" name="email"   required placeholder="Enter Email">
            </div>
            <div class="col-md-6">
               <label> Select Tour</label>
               <i class="far fa-calendar"></i>
               <select name="mess" id="">
                  @foreach ($categoryhome as $item)
                     <option value="{{languageName($item->name)}}">{{languageName($item->name)}}</option>
                  @endforeach
             
               </select>
            </div>
            <div class="col-md-12 pd-20">
               <input type="submit" name="travel-search" value="BOOK NOW">
            </div>
         </form>
      </div>
   </div>
   <!-- ***search search field html end here*** -->
   <!-- ***Home destination html start from here*** -->
   {{-- câu hỏi  --}}
   <br>
   <br>
   <br>
   <section class="contact-inner-page">
      <div class="faq-page-section">
         <div class="faq-page-container">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-md-6">
                     <div class="section-head">
                        <div class="sub-title">QUESTIONS / ANSWERS</div>
                        <h2 class="section-title">FREQUENTLY ASKED QUESTIONS</h2>
                        <p>Aperiam sociosqu urna praesent, tristique, corrupti condimentum asperiores platea ipsum ad arcu. Nostrud. Esse? Aut nostrum, ornare quas provident laoreet nesciunt odio voluptates etiam, omnis.</p>
                     </div>
                     <div id="accordion-tab-one" class="accordion-content" role="tablist">
                        <div id="accordion-A" class="card tab-pane  " role="tabpanel" aria-labelledby="accordion-A">
                           <div class="card-header" role="tab" id="qus-A">
                              <h5 class="mb-0">
                                 <a data-bs-toggle="collapse" href="#collapse-one" aria-expanded="false" aria-controls="collapse-one">
                                 HOW CAN I PAY FOR MY BOOKING?
                                 </a>
                              </h5>
                           </div>
                           <div id="collapse-one" class="collapse " data-bs-parent="#accordion-tab-one" role="tabpanel" aria-labelledby="qus-A">
                              <div class="card-body">
                                 Natoque consequat sodales autem nihil nec. Fusce molestias? Reiciendis voluptas, harum officia ante aliquet blanditiis scelerisque donec illo aperiam commodi hymenaeos.
                              </div>
                           </div>
                        </div>
                        <div id="accordion-B" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-B">
                           <div class="card-header" role="tab" id="qus-B">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-bs-toggle="collapse" href="#collapse-two" aria-expanded="false" aria-controls="collapse-two">
                                 WHAT ARE ACCEPTABLE PAYMENT METHOD?
                                 </a>
                              </h5>
                           </div>
                           <div id="collapse-two" class="collapse" data-bs-parent="#accordion-tab-one" role="tabpanel" aria-labelledby="qus-B">
                              <div class="card-body">
                                 Natoque consequat sodales autem nihil nec. Fusce molestias? Reiciendis voluptas, harum officia ante aliquet blanditiis scelerisque donec illo aperiam commodi hymenaeos.
                              </div>
                           </div>
                        </div>
                        <div id="accordion-C" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-C">
                           <div class="card-header" role="tab" id="qus-C">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-bs-toggle="collapse" href="#collapse-three" aria-expanded="true" aria-controls="collapse-three">
                                 How we provide services for you ?
                                 </a>
                              </h5>
                           </div>
                           <div id="collapse-three" class="collapse" data-bs-parent="#accordion-tab-one" role="tabpanel" aria-labelledby="qus-C">
                              <div class="card-body">
                                 Natoque consequat sodales autem nihil nec. Fusce molestias? Reiciendis voluptas, harum officia ante aliquet blanditiis scelerisque donec illo aperiam commodi hymenaeos.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                     <div class="faq-testimonial">
                        <figure class="faq-image">
                           <img src="{{asset('frontend/img/Du-lich-ha-long-2-ngay-1_1629271721 (1).jpg')}}" alt="">
                        </figure>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- ***faq section html start form here*** -->
   </section>
   {{-- end câu hỏi --}}
   {{-- 
   <section class="home-destination">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 offset-lg-2 text-sm-center">
               <div class="section-heading">
                  <h5 class="sub-title">UNCOVER PLACE</h5>
                  <h2 class="section-title">POPULAR DESTINATION</h2>
                  <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium. Sit ornare mollitia tenetur, aptent.</p>
               </div>
            </div>
         </div>
         <div class="destination-section">
            <div class="row">
               <div class="col-lg-4 col-md-6">
                  <article class="destination-item" style="background-image: url(assets/images/img1.jpg);">
                     <div class="destination-content">
                        <div class="rating-start-wrap">
                           <div class="rating-start">
                              <span style="width: 100%"></span>
                           </div>
                        </div>
                        <span class="cat-link">
                        <a href="destination.html">ITALY</a>
                        </span>
                        <h3>
                           <a href="package-detail.html">SAN MIGUEL</a>
                        </h3>
                        <p>Fusce hic augue velit wisi ips quibusdam pariatur, iusto.</p>
                     </div>
                  </article>
               </div>
               <div class="col-lg-4 col-md-6">
                  <article class="destination-item" style="background-image: url(assets/images/img2.jpg);">
                     <div class="destination-content">
                        <div class="rating-start-wrap">
                           <div class="rating-start">
                              <span style="width: 100%"></span>
                           </div>
                        </div>
                        <span class="cat-link">
                        <a href="destination.html">Dubai</a>
                        </span>
                        <h3>
                           <a href="package-detail.html">BURJ KHALIFA</a>
                        </h3>
                        <p>Fusce hic augue velit wisi ips quibusdam pariatur, iusto.</p>
                     </div>
                  </article>
               </div>
               <div class="col-lg-4 col-md-6">
                  <article class="destination-item" style="background-image: url(assets/images/img3.jpg);">
                     <div class="destination-content">
                        <div class="rating-start-wrap">
                           <div class="rating-start">
                              <span style="width: 100%"></span>
                           </div>
                        </div>
                        <span class="cat-link">
                        <a href="destination.html">Japan</a>
                        </span>
                        <h3>
                           <a href="package-detail.html">KYOTO TEMPLE</a>
                        </h3>
                        <p>Fusce hic augue velit wisi ips quibusdam pariatur, iusto.</p>
                     </div>
                  </article>
               </div>
            </div>
            <div class="section-btn-wrap text-center">
               <a href="destination.html" class="round-btn">More Destination</a>
            </div>
         </div>
      </div>
   </section>
   --}}
   <!-- ***Home destination html end here*** -->
   <!-- ***Home package html start from here*** -->
   <section class="home-package">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 offset-lg-2 text-sm-center">
               <div class="section-heading">
                  <h5 class="sub-title">POPULAR PACKAGES</h5>
                  <h2 class="section-title">CHECKOUT OUR PACKAGES</h2>
                  <p>Book tickets now to experience our service.</p>
               </div>
            </div>
         </div>
         <div class="package-section">
            @foreach ($categoryhome as $cate)
            @foreach ($cate->product as $pro)
                @include('layouts.product.item',['pro'=>$pro]);
            @endforeach
            @endforeach
            {{-- 
            <div class="section-btn-wrap text-center">
               <a href="package.html" class="round-btn">VIEW ALL PACKAGES</a>
            </div>
            --}}
         </div>
      </div>
   </section>
   <style>
   </style>
   <section class="home-callback bg-img-fullcallback" style=" background-image: url({{$pageContent->image}})">
      <div class="overlay"></div>
      <div class="container">
         <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
               <div class="callback-content">
                  {{-- 
                  <div class="video-button">
                     <a  id="video-container" data-fancybox="video-gallery" href="https://www.youtube.com/watch?v=2OYar8OHEOU">
                     <i class="fas fa-play"></i>
                     </a>
                  </div>
                  --}}
                  <h2 class="section-title">About US !!</h2>
                  <p>{!!$pageContent->description!!}</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- ***Home callback html end here*** -->
   <!-- ***Home counter html start from here*** -->
   <div class="home-counter home-2">
      <div class="container">
         <div class="counter-wrap">
            <div class="counter-item">
               <span class="counter-no">
               <span class="counter">80</span>K+
               </span>
               <span class="counter-desc">
               SATISFIED CUSTOMER
               </span>
            </div>
            <div class="counter-item">
               <span class="counter-no">
               <span class="counter">18</span>+
               </span>
               <span class="counter-desc">
               ACTIVE MEMBERS
               </span>
            </div>
            <div class="counter-item">
               <span class="counter-no">
               <span class="counter">220</span>+
               </span>
               <span class="counter-desc">
               TOUR DESTINATION
               </span>
            </div>
            <div class="counter-item">
               <span class="counter-no">
               <span class="counter">75</span>+
               </span>
               <span class="counter-desc">
               TRAVEL GUIDES
               </span>
            </div>
         </div>
      </div>
   </div>
   <!-- ***Home counter html end here*** -->
   <section class="contact-inner-page">
      <div class="faq-page-section">
      <div class="faq-page-container bg-light-grey">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 offset-lg-2 text-sm-center">
                  <div class="section-heading">
                     <h5 class="sub-title">
                        Our Utility
                     </h5>
                     <h2 class="section-title">  Our Utility</h2>
                     <p>Service quality assurance: Service providers are committed to providing customers with the best experience and meeting all customer needs.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-3">
                  <div class="faq-content-wrap">
                     <div id="accordion-tab-two" class="accordion-content" role="tablist">
                        <div id="accordion-E" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-E">
                           <div class="card-header" role="tab" id="qus-E">
                              <h5 class="mb-0">
                                 <a data-bs-toggle="collapse" href="#collapse-five" aria-expanded="true" aria-controls="collapse-five">
                                 <i class="fa-solid fa-couch"></i> &nbsp;   Heather Seats
                                 </a>
                              </h5>
                           </div>
                           <div id="collapse-five" class="collapse " data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-E">
                              <div class="card-body">
                                 All seats are covered with high-quality leather, the seats are improved with flexible folding mode to help customers reduce fatigue when traveling long distances.
                              </div>
                           </div>
                        </div>
                        <div id="accordion-F" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-F">
                           <div class="card-header" role="tab" id="qus-F">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-bs-toggle="collapse" href="#collapse-six" aria-expanded="false" aria-controls="collapse-six">
                                 <i class="fa-solid fa-wifi"></i>  High speed wifi
                                 </a>
                              </h5>
                           </div>
                           <div id="collapse-six" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-F">
                              <div class="card-body">
                                 Provide high-speed wifi, comfortable internet access
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="faq-content-wrap">
                     <div id="accordion-tab-three" class="accordion-content" role="tablist">
                        <div id="accordion-II" class="card tab-pane " role="tabpanel" aria-labelledby="accordion-II">
                           <div class="card-header" role="tab" id="qus-II">
                              <h5 class="mb-0">
                                 <a data-bs-toggle="collapse" href="#collapse-ninet" aria-expanded="true" aria-controls="collapse-nine">
                                 <i class="fa-brands fa-usb"></i> &nbsp;  Usb Charger 
                                 </a>
                              </h5>
                           </div>
                           <div id="collapse-ninet" class="collapse" data-bs-parent="#accordion-tab-three" role="tabpanel" aria-labelledby="qus-II">
                              <div class="card-body">
                                 Each seat position is equipped with a usb charger for phones and ipads
                              </div>
                           </div>
                        </div>
                        <div id="accordion-J" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-J">
                           <div class="card-header" role="tab" id="qus-J">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-bs-toggle="collapse" href="#collapse-tent" aria-expanded="false" aria-controls="collapse-ten">
                                 <i class="fa-regular fa-snowflake"></i> &nbsp; Air-conditioner
                                 </a>
                              </h5>
                           </div>
                           <div id="collapse-tent" class="collapse" data-bs-parent="#accordion-tab-three" role="tabpanel" aria-labelledby="qus-J">
                              <div class="card-body">
                                 The car's air-conditioning system is always checked and maintained for stable operation, making the air conditioning comfortable and pleasant.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="faq-content-wrap">
                     <div id="accordion-tab-three" class="accordion-content" role="tablist">
                        <div id="accordion-I" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-I">
                           <div class="card-header" role="tab" id="qus-I">
                              <h5 class="mb-0">
                                 <a data-bs-toggle="collapse" href="#collapse-nine" aria-expanded="true" aria-controls="collapse-nine">
                                 <i class="fa-solid fa-person-booth"></i> &nbsp; Hpull curtain
                                 </a>
                              </h5>
                           </div>
                           <div id="collapse-nine" class="collapse" data-bs-parent="#accordion-tab-three" role="tabpanel" aria-labelledby="qus-I">
                              <div class="card-body">
                                 The car is designed and installed with a high-class curtain system to help prevent UV rays
                              </div>
                           </div>
                        </div>
                        <div id="accordion-J" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-J">
                           <div class="card-header" role="tab" id="qus-J">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-bs-toggle="collapse" href="#collapse-ten" aria-expanded="false" aria-controls="collapse-ten">
                                 <i class="fa-solid fa-door-open"></i> &nbsp;  Automatic door 
                                 </a>
                              </h5>
                           </div>
                           <div id="collapse-ten" class="collapse" data-bs-parent="#accordion-tab-three" role="tabpanel" aria-labelledby="qus-J">
                              <div class="card-body">
                                 Modern and safe automatic designed car doors
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="faq-content-wrap">
                     <div id="accordion-tab-three" class="accordion-content" role="tablist">
                        <div id="accordion-K" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-K">
                           <div class="card-header" role="tab" id="qus-K">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-bs-toggle="collapse" href="#collapse-eleven" aria-expanded="true" aria-controls="collapse-eleven">
                                 <i class="fa-solid fa-bottle-water"></i> &nbsp; Essential Items
                                 </a>
                              </h5>
                           </div>
                           <div id="collapse-eleven" class="collapse" data-bs-parent="#accordion-tab-three" role="tabpanel" aria-labelledby="qus-K">
                              <div class="card-body">
                                 The car always provides all the necessary   Cold Towels, Thin Blankets, Drinking Water during the move
                              </div>
                           </div>
                        </div>
                        <div id="accordion-G" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-G">
                           <div class="card-header" role="tab" id="qus-G">
                              <h5 class="mb-0">
                                 <a class="collapsed" data-bs-toggle="collapse" href="#collapse-seven" aria-expanded="true" aria-controls="collapse-seven">
                                 <i class="fa-solid fa-tv"></i> Tivi Led
                                 </a>
                              </h5>
                           </div>
                           <div id="collapse-seven" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-G">
                              <div class="card-body">
                                 The car is installed with titi led to serve the entertainment needs of customers
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- ***faq section html start form here*** -->
   </section>
   <!-- ***Home callback html end here*** -->
</main>
@endsection