<footer id="colophon" class="site-footer footer-primary">
   <div class="top-footer">
       <div class="container">
           <div class="upper-footer">
               <div class="row">
                   <div class="col-lg-3 col-sm-6">
                       <aside class="widget widget_text">
                           <div class="footer-logo">
                               <a href="index.html"><img src="{{$setting->logo}}" alt=""></a>
                           </div>
                           <div class="textwidget widget-text">
                               {{$setting->webname}}
                           </div>
                       </aside>
                   </div>
                   <div class="col-lg-3 col-sm-6">
                       <aside class="widget widget_latest_post widget-post-thumb">
                           <h3 class="widget-title">Popular Short Tours</h3>
                           <ul>
                            @foreach ($categoryhome as $item)
                                <li>
                                <a href="{{route('allListProCate',['danhmuc'=>$item->slug])}}">{{languageName($item->name)}}</a>
                                </li>
                            @endforeach
                           </ul>
                       </aside>
                   </div>
                   <div class="col-lg-3 col-sm-6">
                       <aside class="widget widget_text">
                           <h3 class="widget-title">CONTACT US</h3>
                           <div class="textwidget widget-text">
                               <ul>
                                @if($setting->phone1 != "")
                                   <li>
                                       <a href="tel:{{$setting->phone1}}">
                                       <i aria-hidden="true" class="icon icon-phone1"></i>
                                       {{$setting->phone1}}
                                       </a>
                                   </li>
                                @endif
                                @if($setting->phone2 != "")
                                <li>
                                    <a href="tel:{{$setting->phone2}}">
                                    <i aria-hidden="true" class="icon icon-phone1"></i>
                                    {{$setting->phone2}}
                                    </a>
                                </li>
                             @endif
                             @if($setting->email != "")
                             <li>
                                <a href="mailto:{{$setting->email}}">
                                <i aria-hidden="true" class="icon icon-envelope1"></i>
                                {{$setting->email}}
                                </a>
                            </li>
                          @endif
                                  @if($setting->addess1 != "")
                                   <li>
                                       <i aria-hidden="true" class="icon icon-map-marker1"></i>
                                       {{$setting->addess1}}
                                   </li>
                                   @endif
                                   @if($setting->addess2 != "")
                                   <li>
                                       <i aria-hidden="true" class="icon icon-map-marker1"></i>
                                       {{$setting->addess2}}
                                   </li>
                                   @endif
                               </ul>
                           </div>
                       </aside>
                   </div>
                   <div class="col-lg-3 col-sm-6">
                       <aside class="widget">
                           <h3 class="widget-title">MAP</h3>
                           <div class="gallery gallery-colum-3">
                            {!!$setting->iframe_map!!}
                           </div>
                       </aside>
                   </div>
               </div>
           </div>
          
       </div>
   </div>
   <div class="bottom-footer">
       <div class="container">
           <div class="copy-right text-center">Copyright &copy; 2023 Traveler. All rights reserved.Design by SBT </div>
       </div>
   </div>
</footer>