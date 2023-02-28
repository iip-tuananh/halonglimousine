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
<link rel="stylesheet" href="{{asset('frontend/css/post-9513.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/post-8619.css')}}">
@endsection
@section('content')
<div id="pagetitle" class="page-title bg-image ">
    <div class="container">
        <div class="page-title-inner">
            <div class="page-title-holder">
                                    <h1 class="page-title">{{$title_page}}</h1>                </div>

                                <ul class="ct-breadcrumb"><li><a class="breadcrumb-entry" href="https://nsh-group.vn/">TRANG CHỦ</a></li><li><span class="breadcrumb-entry">{{$title_page}}</span></li></ul>                            </div>
    </div>
</div>
<main id="main" class="site-main">
    <article id="post-8619" class="post-8619 page type-page status-publish hentry">
       <div class="entry-content clearfix">
          <div data-elementor-type="wp-page" data-elementor-id="8619" class="elementor elementor-8619" data-elementor-settings="[]">
             <div class="elementor-section-wrap">
                <section class="elementor-section elementor-top-section elementor-element elementor-element-2d2ae2b elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2d2ae2b" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                   <div class="elementor-container elementor-column-gap-extended ">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b8d7465" data-id="b8d7465" data-element_type="column">
                         <div class="elementor-widget-wrap elementor-element-populated">
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-2ceb59a elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2ceb59a" data-element_type="section">
                               <div class="elementor-container elementor-column-gap-extended ">
                                  <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-dac1706" data-id="dac1706" data-element_type="column">
                                     <div class="elementor-widget-wrap elementor-element-populated">
                                 
                                        <div class="elementor-element elementor-element-55a8e6c elementor-widget elementor-widget-ct_portfolio_grid" data-id="55a8e6c" data-element_type="widget" data-widget_type="ct_portfolio_grid.default">
                                           <div class="elementor-widget-container">
                                              <div id="ct_portfolio_grid-55a8e6c" class="ct-grid ct-portfolio ct-portfolio-grid1" data-layout="masonry" data-start-page="1" data-max-pages="1" data-total="8" data-perpage="8" data-next-link="">
                                                 <div class="ct-grid-overlay"></div>
                                                 <div class="ct-grid-inner ct-grid-masonry row animate-time" data-gutter="15">
                                                    @foreach ($projectList as $project)
                                                    @php
                                                        $img = json_decode($project->images);
                                                    @endphp
                                                        <div class="grid-item col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                                                        <div class="grid-item-inner " data-wow-duration="1.2s">
                                                            <div class="item--featured">
                                                                <img width="200" height="300" src="{{$img[0]}}" class="no-lazyload attachment-medium" alt="" decoding="async" srcset="{{$img[0]}} " sizes="(max-width: 200px) 100vw, 200px" />                                                                    
                                                                <div class="item--readmore">
                                                                    <a class="btn btn-animate" href="{{route('detailConstruction',['id'=>$project->id,'slug'=>$project->slug])}}">
                                                                    <span>Chi tiết</span>
                                                                    <i>+</i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="item--holder">
                                                                <h3 class="item--title"><a href="{{route('detailConstruction',['id'=>$project->id,'slug'=>$project->slug])}}">{{$project->name}}</a></h3>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    @endforeach
                                                 </div>
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
                </section>
            
                <section class="elementor-section elementor-top-section elementor-element elementor-element-2d664082 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="2d664082" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                   <div class="elementor-background-overlay"></div>
                   <div class="elementor-container elementor-column-gap-default ">
                      <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-9dfc490" data-id="9dfc490" data-element_type="column">
                         <div class="elementor-widget-wrap">
                         </div>
                      </div>
                      <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6880b650" data-id="6880b650" data-element_type="column">
                         <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-1d17b26d eael-dual-header-content-align-center elementor-widget elementor-widget-eael-dual-color-header" data-id="1d17b26d" data-element_type="widget" data-widget_type="eael-dual-color-header.default">
                               <div class="elementor-widget-container">
                                  <div class="eael-dual-header">
                                     <p class="title"><span  class="lead solid-color">YÊU CẦU BÁO GIÁ, TƯ VẤN THANG MÁY HITACHI</span> <span></span></p>
                                     <br>
                                     <div class="eael-dch-separator-wrap"><span class="separator-one"></span>
                                        <span class="separator-two"></span>
                                     </div>
                                     <span class="subtext"></span>
                                  </div>
                               </div>
                            </div>
                            <div class="elementor-element elementor-element-7c9debd8 elementor-widget elementor-widget-ct_contact_form" data-id="7c9debd8" data-element_type="widget" data-widget_type="ct_contact_form.default">
                               <div class="elementor-widget-container">
                                  <div class="ct-contact-form ct-contact-form-layout1 style1 ">
                                     <div class="ct-contact-form">
                                        <div role="form" class="wpcf7" id="wpcf7-f3392-p8619-o1" lang="en-US" dir="ltr">
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
                      <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-aeab07b" data-id="aeab07b" data-element_type="column">
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
    <!-- #post-8619 -->
 </main>
@endsection