<!doctype html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <link rel="icon" href="{{url(''.$setting->favicon)}}"
         type="image/x-icon" />
      <link rel="apple-touch-icon"
         href="{{url(''.$setting->favicon)}}">
      <meta name="robots" content="noodp,index,follow" />
      <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <title>@yield('title')</title>
      <link rel="canonical" href="{{\Request::url()}}" />
      <meta property="og:locale" content="vi_VN" />
      <meta property="og:type" content="article" />
      <meta property="og:title" content="@yield('title')" />
      <meta property="og:description" content="@yield('description')" />
      <meta property="og:url" content="{{\Request::url()}}" />
      <meta property="og:site_name" content="JicaFood" />
      <meta property="og:image" content="@yield('image')" />
      <meta property="og:image:secure_url" content="@yield('image')" />
      <meta property="og:image:width" content="548" />
      <meta property="og:image:height" content="343" />
      <meta name="twitter:card" content="summary_large_image" />
      <meta name="twitter:description" content="@yield('description')" />
      <meta name="twitter:title" content="@yield('title')" />
      <meta name="twitter:image" content="@yield('image')" />
      <!-- favicon -->
      <link rel="icon" href="{{ url('' . $setting->favicon) }}" type="image/x-icon">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
      <!-- jquery-ui css -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/jquery-ui.min.css')}}">
      <!-- fancybox box css -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/jquery.fancybox.min.css')}}">
      <!-- Fonts Awesome CSS -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/all.min.css')}}">
      <!-- Elmentkit Icon CSS -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/ekiticons.css')}}">
      <!-- slick slider css -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/slick.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/slick-theme.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
      <title>Traveler – Travel & Trip Business HTML5 Template</title>
   </head>
   <body class="home">
      <div class="model-book">
         <div class="layout-book"></div>
         <div class="form-book">
            <i class="fa-solid fa-xmark" id="close-book" title="Close"></i>
            <div class="home-trip-search primary-bg">
               <div class="container">
                  <h1 style="text-align: center">Book your tickets now</h1>
                  <form action="{{route('SentMail')}}" class="trip-search-inner d-flex row" method="POST">
                    @csrf
                    <section class="home-package" style="padding-bottom: 0px">
                        <div class="container">
                           <div class="package-section">
                              <article class="package-item item-book">
                               
                              </article>
                           </div>
                        </div>
                     </section>
                     <div class=" col-md-6">
                        <label> Full Name </label>
                        <input type="text" name="name" placeholder="Enter Full Name" required>
                     </div>
                     <div class=" col-md-6">
                        <label> Phone or Whastapps </label>
                        <input type="text" name="phone" placeholder="Enter Number" required>
                     </div>
                     <br>
                     <div class="col-md-6">
                        <label> Email </label>
                        <i class="far fa-calendar"></i>
                        <input  type="email" name="email" required placeholder="Enter Email">
                     </div>
                     <div class="col-md-6">
                        <label>Note</label>
                        <i class="far fa-calendar"></i>
                        <input type="text" name="mess" required placeholder="Ghi chú">
                     </div>
                     <div class="col-md-6">
                        <label>Date</label>
                        <i class="far fa-calendar"></i>
                        <input type="date" name="date" required placeholder="Ghi chú">
                     </div>
                     <br><br>
                     <div class="col-md-12 pd-20">
                        <input type="submit" name="travel-search" value="BOOK NOW">
                     </div>
                  </form>
                  <br>
                  <br>
           
               </div>
            </div>
         </div>
      </div>
      <div id="siteLoader" class="site-loader">
         <div class="preloader-content">
            <iframe src="https://giphy.com/embed/fQikBhyMqtO9zACTen" width="1080" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
            <p>
               <a class ="tieude" href="{{route('home')}}">
            <h1>{{$setting->company}}</h1></a></p>
         </div>
      </div>
      <div id="page" class="page">
         <!-- site header html start  -->
         @include('layouts.header.index')
         <!-- site header html end  -->
         @yield('content')
         <!-- ***site footer html start form here*** -->
         @include('layouts.footer.index')
         <!-- ***site footer html end*** -->
         <a id="backTotop" href="#" class="to-top-icon">
         <i class="fas fa-chevron-up"></i>
         </a>
         <!-- ***custom search field html*** -->
         <div class="header-search-form">
            <div class="container">
               <div class="header-search-container">
                  <form class="search-form" role="search" method="get" >
                     <input type="text" name="s" placeholder="Enter your text...">
                  </form>
                  <a href="#" class="search-close">
                  <i class="fas fa-times"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- ***custom search field html*** -->
         <!-- ***custom top bar offcanvas html*** -->
         <div id="offCanvas" class="offcanvas-container">
            <div class="offcanvas-inner">
               <div class="offcanvas-sidebar">
                  <aside class="widget author_widget">
                     <h3 class="widget-title">OUR PROPRIETOR</h3>
                     <div class="widget-content text-center">
                        <div class="profile">
                           <figure class="avatar"> 
                              <img src="assets/images/img21.jpg" alt=""> 
                           </figure>
                           <div class="text-content">
                              <div class="name-title">
                                 <h4> James Watson</h4>
                              </div>
                              <p>Accumsan? Aliquet nobis doloremque, aliqua? Inceptos voluptatem, duis tempore optio quae animi viverra distinctio cumque vivamus, earum congue, anim velit</p>
                           </div>
                           <div class="socialgroup">
                              <ul>
                                 <li> <a target="_blank" href="#"> <i class="fab fa-facebook"></i> </a> </li>
                                 <li> <a target="_blank" href="#"> <i class="fab fa-google"></i> </a> </li>
                                 <li> <a target="_blank" href="#"> <i class="fab fa-twitter"></i> </a> </li>
                                 <li> <a target="_blank" href="#"> <i class="fab fa-instagram"></i> </a> </li>
                                 <li> <a target="_blank" href="#"> <i class="fab fa-pinterest"></i> </a> </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </aside>
                  <aside class="widget widget_text text-center">
                     <h3 class="widget-title">CONTACT US</h3>
                     <div class="textwidget widget-text">
                        <p>Feel free to contact and<br/> reach us !!</p>
                        <ul>
                           <li>
                              <a href="tel:+01988256203">
                              <i aria-hidden="true" class="icon icon-phone1"></i>
                              +01(988) 256 203
                              </a>
                           </li>
                           <li>
                              <a href="mailtop:info@domain.com">
                              <i aria-hidden="true" class="icon icon-envelope1"></i>
                              info@domain.com
                              </a>
                           </li>
                           <li>
                              <i aria-hidden="true" class="icon icon-map-marker1"></i>
                              3146 Koontz, California
                           </li>
                        </ul>
                     </div>
                  </aside>
               </div>
               <a href="#" class="offcanvas-close">
               <i class="fas fa-times"></i>
               </a>
            </div>
            <div class="overlay"></div>
         </div>
         <!-- ***custom top bar offcanvas html*** -->
      </div>
      <!-- JavaScript -->
      <script src="{{asset('frontend/js/jquery.js')}}"></script>
      <script src="{{asset('frontend/js/waypoints.js')}}"></script>
      <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
      <script src="{{asset('frontend/js/loopcounter.js')}}"></script>
      <script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
      <script src="{{asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
      <script src="{{asset('frontend/js/masonry.pkgd.min.js')}}"></script>
      <script src="{{asset('frontend/js/slick.min.js')}}"></script>
      <script src="{{asset('frontend/js/jquery.fancybox.min.js')}}"></script>
      <script src="{{asset('frontend/js/jquery.slicknav.js')}}"></script>
      <script src="{{asset('frontend/js/custom.min.js')}}"></script>
      <script src="{{asset('frontend/js/notify.min.js')}}"></script>
      @yield('js')
 
      @if (session()->has('postcontactok'))
      <script>
         console.log(123);
         $.notify("Gửi thông tin liên hệ thành công", "success"
             );
      </script>
      @endif
      @if (session()->has('successMail'))
      <script>
         console.log(123);
         $.notify("Sent mail successfully", "success"
             );
      </script>
      @endif

      <script>
         $('.book-click').click(function (e) { 
             e.preventDefault();
             id = $(this).data('id');
             url = $(this).data('url');
             $.ajax({
                 type:'post',
                 headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                 url:url,
                 data: {
                     id:id
                 },
                 success: function(data) {
                     $('.item-book').html(data.html1);
                 }
             });
         
             $('.model-book').addClass('active');
         });
         $('.layout-book').click(function (e) { 
             e.preventDefault();
             $('.model-book').removeClass('active');
             
         });
         $('#close-book').click(function (e) { 
             e.preventDefault();
             $('.model-book').removeClass('active');
             
         });
      </script>
      <script type="text/javascript" 
      src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
   </script>
   <script type="text/javascript">
      function googleTranslateElementInit() {
      new google.translate.TranslateElement({
      pageLanguage: 'en',
      includedLanguages:'en,vi', 
      }, 'translate_select');
      }
   </script>
   <script>
      var flags = document.getElementsByClassName('flag_link');
      Array.prototype.forEach.call(flags, function(e){
      e.addEventListener('click', function(){
      var lang = e.getAttribute('data-lang'); 
      var languageSelect = document.querySelector("select.goog-te-combo");
      // console.log(document.querySelector("select.goog-te-combo"));
      languageSelect.value = lang; 
      languageSelect.dispatchEvent(new Event("change"));
      }); 
      });
   </script>
   <style type="text/css">
      /*google translate Dropdown */
      #translate_select select{
      background:#f6edfd;
      color:#383ffa;
      border: none;
      border-radius:3px;
      padding:6px 8px
      }
      /*google translate link | logo */
      .goog-logo-link{
      display:none!important;
      }
      .goog-te-gadget{
      color:transparent!important;
      }
      
      /* google translate banner-frame */
      
      .goog-te-banner-frame{
      display:none !important;
      }
      
      #goog-gt-tt, .goog-te-balloon-frame{display: none !important;}
      .goog-text-highlight { background: none !important; box-shadow: none !important;}
      
      body{top:0!important;}
      </style>
   <!-- Product detail JS,CSS -->
   <!-- Quick view -->
   </body>
</html>