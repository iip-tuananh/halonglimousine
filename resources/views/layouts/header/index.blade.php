<header id="masthead" class="site-header">
  
   <!-- header html start -->
   <div class="top-header">
       <div class="container">
           <div class="top-header-inner">
               <div class="header-contact text-left">
                   <a href="telto:01977259912">
                       <i aria-hidden="true" class="icon icon-phone-call2"></i>
                       <div class="header-contact-details d-none d-sm-block">
                           <span class="contact-label">For Further Inquires :</span>
                           <h5 class="header-contact-no">{{$setting->phone1}}</h5>
                       </div>
                   </a>
               </div>
               <div class="site-logo text-center">
                   <h1 class="site-title">
                       <a href="{{route('home')}}">
                       <img src="{{$setting->logo}}" alt="Logo">
                       </a>
                   </h1>
               </div>
               <div class="header-icon text-right">
                   {{-- <div class="header-search-icon d-inline-block">
                       <a href="#">
                       <i aria-hidden="true" class="fas fa-search"></i>
                       </a>
                   </div> --}}
                   <div class="offcanvas-menu d-inline-block">
                    <div id="translate_select" style="display: none"></div>
                    <div class="image-item " style="display: flex;">
                       <a href="javascript:;" class="flag_link text-center" rel="" title="Tiếng Việt" data-lang="vi" style="margin-right: 20px;">
                          <div>
                             <img src="{{asset('frontend/img/flag-en.png')}}" alt="" loading="lazy">
                          </div>
                          <div>
                             <span style="color: white" class="ngonngu">VN</span>
                          </div>
                       </a>
                       <a href="javascript:;" class="flag_link text-center" rel="" title="Tiếng Anh" data-lang="en">
                          <div>
                             <img src="{{asset('frontend/img/flag-en (1).png')}}" alt="" loading="lazy">
                          </div>
                          <div>
                             <span style="color: white" class="ngonngu">EN</span>
                          </div>
                       </a>
                    </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <div class="bottom-header">
       <div class="container">
           <div class="bottom-header-inner d-flex justify-content-between align-items-center">
               <div class="header-social social-icon">
                   <ul>
                       <li>
                           <a href="{{$setting->facebook}}" target="_blank">
                           <i class="fab fa-facebook-f" aria-hidden="true"></i>
                           </a>
                       </li>
                       <li>
                           <a href="{{$setting->google}}" target="_blank">
                           <i class="fab fa-youtube" aria-hidden="true"></i>
                           </a>
                       </li>
                   </ul>
               </div>
               <div class="navigation-container d-none d-lg-block">
                   <nav id="navigation" class="navigation">
                       <ul>
                           <li class="menu">
                               <a href="{{route('home')}}">Home</a>
                           </li>
                           <li>
                               <a href="{{route('aboutUs')}}">about us</a>
                           </li>
                           <li class="menu-item-has-children">
                               <a href="">Book car</a>
                               <ul>
                                @foreach ($categoryhome as $cate)
                                    <li >
                                        <a href="{{route('allListProCate',['danhmuc'=>$cate->slug])}}">{{languageName($cate->name)}}</a>
                                    
                                    </li>
                                @endforeach
                               </ul>
                           </li>
                           @foreach ($blogCate as $cate)
                            <li class="menu-item-has-children">
                                <a href="{{route('listCateBlog',['slug'=>$cate->slug])}}">{{languageName($cate->name)}} </a>
                                <ul>
                                    @foreach ($cate->typeCate as $type)
                                        <li>
                                            <a href="{{route('listTypeBlog',['slug'=>$type->slug])}}">{{languageName($type->name)}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                           @endforeach
                           <li>
                               <a href="{{route('lienHe')}}">Contact us</a>
                           </li>
                       </ul>
                   </nav>
               </div>
               <div class="header-btn">
                   @if(Route::currentRouteName('home') == 'home')
                   <a href="#bok" class="round-btn">Book Now</a>
                   @endif
               </div>
           </div>
       </div>
   </div>
   <div class="mobile-menu-container"></div>
</header>