@extends('layouts.main.master')
@section('title')
Dịch vụ của chúng tôi
@endsection
@section('description')
Dịch vụ của chúng tôi
@endsection
@section('image')
{{url(''.$banner[0])}}
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('frontend/css/post-23.css')}}">
@endsection
@section('js')
@endsection
@section('content')
<div id="pagetitle" class="page-title bg-image ">
   <div class="container">
      <div class="page-title-inner">
         <div class="page-title-holder">
            <h1 class="page-title">Dịch Vụ</h1>
         </div>
         <ul class="ct-breadcrumb">
            <li><a class="breadcrumb-entry" href="{{route('home')}}">TRANG CHỦ</a></li>
            <li><span class="breadcrumb-entry">Dịch Vụ</span></li>
         </ul>
      </div>
   </div>
</div>
               <main id="main" class="site-main">
                  <article id="post-23" class="post-23 page type-page status-publish hentry">
                     <div class="entry-content clearfix">
                        <div data-elementor-type="wp-page" data-elementor-id="23" class="elementor elementor-23" data-elementor-settings="[]">
                           <div class="elementor-section-wrap">
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-32d4dd8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="32d4dd8" data-element_type="section">
                                 <div class="elementor-container elementor-column-gap-extended ">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f7034ac" data-id="f7034ac" data-element_type="column">
                                       <div class="elementor-widget-wrap elementor-element-populated">
                                          <section class="elementor-section elementor-inner-section elementor-element elementor-element-26eab26 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="26eab26" data-element_type="section">
                                             <div class="elementor-container elementor-column-gap-extended ">
                                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-219ff61" data-id="219ff61" data-element_type="column">
                                                   <div class="elementor-widget-wrap elementor-element-populated">
                                                      <div class="elementor-element elementor-element-946668b elementor-widget elementor-widget-ct_heading" data-id="946668b" data-element_type="widget" data-widget_type="ct_heading.default">
                                                         <div class="elementor-widget-container">
                                                            <div class="ct-heading h-align-center item-st-default">
                                                               <div class="item--sub-title style-default">
                                                                  <span>
                                                                  SERVICES            </span>
                                                               </div>
                                                               <h3 class="item--title case-animate-time st-default " data-wow-delay="ms">
                                                                  <span>DỊCH VỤ UY TÍN - CHẤT LƯỢNG</span>    
                                                               </h3>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </section>
                                          <section class="elementor-section elementor-inner-section elementor-element elementor-element-509cac9 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="509cac9" data-element_type="section">
                                             <div class="elementor-container elementor-column-gap-extended ">
                                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-2741918" data-id="2741918" data-element_type="column">
                                                   <div class="elementor-widget-wrap elementor-element-populated">
                                                      <div class="elementor-element elementor-element-a265a17 elementor-widget elementor-widget-ct_text_editor" data-id="a265a17" data-element_type="widget" data-widget_type="ct_text_editor.default">
                                                         <div class="elementor-widget-container">
                                                            <div id="ct_text_editor-a265a17" class="ct-text-editor " data-wow-delay="ms">
                                                               <div class="ct-inline-css"  data-css="
                                                                  ">
                                                               </div>
                                                               <div class="ct-text-editor elementor-clearfix">
                                                                  <p style="text-align: center"><span style="font-size: 11pt"><strong>{{$setting->company}}</strong> hân hạnh là đại lý chính hãng của thang máy Hitachi tại Việt nam. Chúng tôi chuyên cung cấp các giải pháp tư vấn lựa chọn và lắp đặt thang máy với chất lượng hàng đầu, luôn tuân thủ chặt chẽ các quy trình quản lý dịch vụ trước và sau bán hàng, cùng với đó là các tiêu chuẩn lắp đặt, nghiệm thu, vận hành, bảo trì chính hãng, đảm bảo an toàn, chất lượng và lợi ích cao nhất cho quý khách hàng. </span></p>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </section>
                                    @foreach ($servicehome as $key=>$item)
                                    @if($key % 2 == 0)
                                       <section class="elementor-section elementor-inner-section elementor-element elementor-element-cf39d56 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="cf39d56" data-element_type="section">
                                          <div class="elementor-container elementor-column-gap-default ">
                                             <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3fa1530" data-id="3fa1530" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                   <div class="elementor-element elementor-element-2c99440 elementor-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="2c99440" data-element_type="widget" data-widget_type="icon-box.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                               <a class="elementor-icon elementor-animation-" href="{{route('serviceDetail',['slug'=>$item->slug])}}">
                                                               <i aria-hidden="true" class="material zmdi zmdi-account-box-phone"></i>				</a>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                               <h3 class="elementor-icon-box-title">
                                                                  <a href="{{route('serviceDetail',['slug'=>$item->slug])}}" >
                                                                 {{$item->name}}				</a>
                                                               </h3>
                                                               <p class="elementor-icon-box-description">
                                                                {{languageName($item->description)}}				
                                                               </p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e47b122" data-id="e47b122" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                   <div class="elementor-element elementor-element-3403535 elementor-widget elementor-widget-image" data-id="3403535" data-element_type="widget" data-widget_type="image.default">
                                                      <div class="elementor-widget-container">
                                                         <img decoding="async" width="600" height="375" src="{{$item->image}}" class="attachment-large size-large" alt="hỗ trợ khách hàng 2424 thang máy nsh" srcset="{{$item->image}} " sizes="(max-width: 600px) 100vw, 600px" />															
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </section>
                                       @else
                                       <section class="elementor-section elementor-inner-section elementor-element elementor-element-3a5b75f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3a5b75f" data-element_type="section">
                                          <div class="elementor-container elementor-column-gap-default ">
                                             <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-98b279f" data-id="98b279f" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                   <div class="elementor-element elementor-element-5faf87f elementor-widget elementor-widget-image" data-id="5faf87f" data-element_type="widget" data-widget_type="image.default">
                                                      <div class="elementor-widget-container">
                                                         <img decoding="async" width="640" height="426" src="{{$item->image}}" class="attachment-large size-large" alt="thi công lắp đặt thang máy nsh" srcset="{{$item->image}} 1000w, {{$item->image}} 600w,{{$item->image}} 300w, {{$item->image}} 768w" sizes="(max-width: 640px) 100vw, 640px">															
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5861673" data-id="5861673" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                   <div class="elementor-element elementor-element-4a09229 elementor-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="4a09229" data-element_type="widget" data-widget_type="icon-box.default">
                                                      <div class="elementor-widget-container">
                                                         <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                               <a class="elementor-icon elementor-animation-" href="{{route('serviceDetail',['slug'=>$item->slug])}}">
                                                               <i aria-hidden="true" class="fas fa-tools"></i>				</a>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                               <h3 class="elementor-icon-box-title">
                                                                  <a href="{{route('serviceDetail',['slug'=>$item->slug])}}" >
                                                                     {{$item->name}}				</a>
                                                               </h3>
                                                               <p class="elementor-icon-box-description">
                                                                  {{languageName($item->description)}}						
                                                               </p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </section>
                                       @endif

                                    @endforeach
                                             <div class="elementor-widget-container">
                                                <div id="ct_service_carousel-f605131" class="ct-service-carousel1 ct-slick-slider">
                                                   <div class="ct-carousel-inner">
                                                      <div class="ct-slick-carousel slick-shadow" data-arrows="false" data-dots="true" data-pauseOnHover="false" data-autoplay="false" data-autoplaySpeed="5000" data-infinite="" data-speed="500" data-colxs="1" data-colsm="2" data-colmd="2" data-collg="3" data-colxl="3" data-dir="false" data-slidesToScroll="1">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-442b7f4 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="442b7f4" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                 <div class="elementor-background-overlay"></div>
                                 <div class="elementor-container elementor-column-gap-default ">
                                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-601ad72" data-id="601ad72" data-element_type="column">
                                       <div class="elementor-widget-wrap">
                                       </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-449a0ac" data-id="449a0ac" data-element_type="column">
                                       <div class="elementor-widget-wrap elementor-element-populated">
                                          <div class="elementor-element elementor-element-3fd0b09 eael-dual-header-content-align-center elementor-widget elementor-widget-eael-dual-color-header" data-id="3fd0b09" data-element_type="widget" data-widget_type="eael-dual-color-header.default">
                                             <div class="elementor-widget-container">
                                                <div class="eael-dual-header">
                                                   <p class="title"><span  class="lead solid-color">YÊU CẦU BÁO GIÁ, TƯ VẤN THANG MÁY</span> <span></span></p>
                                                   <br>
                                                   <div class="eael-dch-separator-wrap"><span class="separator-one"></span>
                                                      <span class="separator-two"></span>
                                                   </div>
                                                   <span class="subtext"></span>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="elementor-element elementor-element-bc90e78 elementor-widget elementor-widget-ct_contact_form" data-id="bc90e78" data-element_type="widget" data-widget_type="ct_contact_form.default">
                                             <div class="elementor-widget-container">
                                                <div class="ct-contact-form ct-contact-form-layout1 style1 ">
                                                   <div class="ct-contact-form">
                                                      <div role="form" class="wpcf7" id="wpcf7-f3392-p23-o1" lang="en-US" dir="ltr">
                                                         <div class="screen-reader-response">
                                                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                            <ul></ul>
                                                         </div>
                                                         @include('layouts.contact.formcontact')
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-38ffe83" data-id="38ffe83" data-element_type="column">
                                       <div class="elementor-widget-wrap">
                                       </div>
                                    </div>
                                 </div>
                              </section>
                           </div>
                        </div>
                     </div>
                     <!-- .entry-content -->
                  </article>
                  <!-- #post-23 -->
               </main>
               <!-- #main -->
        
<!-- #content -->
@endsection