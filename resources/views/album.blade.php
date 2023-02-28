@extends('layouts.main.master')
@section('title')
Dự án thi công
@endsection
@section('description')
Dự án thi công
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('js')
@endsection
@section('css')
@endsection
@section('content')
<main id="main" class="">
    <div id="content" class="blog-wrapper blog-archive page-wrapper">
       <header class="archive-page-header">
          <div class="row row-full-width">
             <div class="large-12 text-center col">
                <h1 class="page-title is-xl-large uppercase">
                   <span>Dự án thi công</span>	
                </h1>
                <div class="breadcrumbs-category">
                   <div class="site-breadcrumbs clr"><a href="{{route('home')}}">Trang chủ</a><span class="separator"> / </span><span class="last">Dự án thi công</span></div>
                </div>
             </div>
          </div>
       </header>
       <div class="row align-center row-full-width ">
          <div class="large-12 col">
             <div class="row large-columns-3 medium-columns- small-columns-1 row-small row-full-width">
                @foreach ($duan as $duanS)
                    <div class="col post-item">
                    <div class="col-inner">
                        <a href="{{route('duanTieuBieuDetail',['slug'=>$duanS->slug])}}" class="plain">
                            <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                <div class="box-image">
                                    @php
                                        $img = json_decode($duanS->images)
                                    @endphp
                                    <div class="image-overlay-add image-zoom image-cover" style="padding-top: 50%;">
                                        <img
                                            width="2560"
                                            height="1706"
                                            src="{{$img[0]}}"
                                            class="attachment-original size-original wp-post-image"
                                            alt="{{$duanS->name}}"
                                            loading="lazy"
                                            srcset="
                                            {{$img[0]}}    2560w,
                                            {{$img[0]}}    300w,
                                            {{$img[0]}}  1024w,
                                            {{$img[0]}}   768w,
                                            {{$img[0]}} 1536w,
                                            {{$img[0]}} 2048w
                                            "
                                            sizes="(max-width: 2560px) 100vw, 2560px"
                                        />
                                        <div class="overlay" style="background-color: rgba(63, 63, 63, 0.395);"></div>
                                    </div>
                                </div>
                                <div class="box-text text-left">
                                    <div class="box-text-inner blog-post-inner">
                                        <h5 class="post-title is-large">{{$duanS->name}}</h5>
                                        <div class="is-divider"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    </div>
                @endforeach
                <div class="c-box-paginate">
                    {{$duan->links()}}
                  </div>
                  <style>
                    .c-box-paginate nav{
                       display: flex;
                       justify-content: center;
                    }
                    .pagination{
                       display: flex;
                       list-style-type: none;
                       margin: 5px 0;
                       font-size: .85em;
                       text-align: center;
                    }
                    .pagination li{
                       margin: 0 0.4em;
                       display: inline-block;
                       width: 33px;
                       height: 33px;
                       background: #878786;
                       margin-left: unset !important
                    }
                    .pagination .active{
                       width: 33px;
                       height: 33px;
                       background: #000 !important;
                    }
                    .pagination .page-item .page-link{
                       color: #fff;
                    }
                  </style>
             </div>
          </div>

       </div>
       <section class="taxonomy-description__bottom">
          <div class="row">
             <div class="col">
                <div class="container section-title-container">
                   <h3 class="section-title section-title-center"><b></b><span class="section-title-main">Đăng ký nhận báo giá thi công nội thất</span><b></b></h3>
                </div>
                <div class="row align-center" id="row-1711421272">
                   <div id="col-2065425617" class="col quote-form-category medium-5 small-12 large-5">
                      <div class="col-inner text-center" style="background-color:rgb(0,0,0);">
                         <div role="form" class="wpcf7" id="wpcf7-f11656-o1" lang="vi" dir="ltr">
                            <div class="screen-reader-response">
                               <p role="status" aria-live="polite" aria-atomic="true"></p>   
                               <ul></ul>
                            </div>
                            <form method="post" action="{{route('postcontact')}}" class="contact__form">
                              @csrf
                              <!-- Form elements -->
                              <div class="">
                                 <div class="col-md-12 form-group">
                                    <input name="name" type="text" placeholder="Họ tên*" required>
                                 </div>
                                 <div class="col-md-6 form-group">
                                    <input name="phone" type="text" placeholder="Số điện thoại" required>
                                 </div>
                                 <div class="col-md-12">
                                    <input name="submit" type="submit" value="Gửi tin">
                                 </div>
                              </div>
                           </form>
                         </div>
                      </div>
                      <style>
                         #col-2065425617 > .col-inner {
                         padding: 20px 20px 0px 20px;
                         }
                      </style>
                      <p></p>
                   </div>
                </div>
             </div>
          </div>
       </section>
       <section class="section" id="section_841668145">
          <div class="bg section-bg fill bg-fill bg-loaded bg-loaded">
          </div>
          <div class="section-content relative">
             <div class="container section-title-container" style="margin-top:50px;">
                <h2 class="section-title section-title-center"><b></b><span class="section-title-main">TẠI SAO CHỌN CHÚNG TÔI ?</span><b></b></h2>
             </div>
             <div class="row" id="row-1104412175">
                <div id="col-1363475540" class="col small-12 large-12">
                   <div class="col-inner">
                      <p>{!!$gioithieu->description!!}</p>
                   </div>
                </div>
             </div>
          </div>
          <style>
             #section_841668145 {
             padding-top: 0px;
             padding-bottom: 0px;
             }
          </style>
       </section>
       <section class="section section-why" id="section_1626418736">
          <div class="bg section-bg fill bg-fill bg-loaded bg-loaded">
          </div>
          <div class="section-content relative">
             <div id="gap-445116036" class="gap-element clearfix" style="display:block; height:auto;">
                <style>
                   #gap-445116036 {
                   padding-top: 30px;
                   }
                </style>
             </div>
             <div class="row align-equal align-equal" id="row-1669547654">
                <div id="col-838570909" class="col medium-6 small-12 large-3">
                   <div class="col-inner">
                      <div class="icon-box featured-box icon-box-center text-center is-small">
                         <div class="icon-box-img" style="width: 60px">
                            <div class="icon">
                               <div class="icon-inner">
                                  <img width="300" height="233" src="{{asset('frontend/images/100-NAM-KINH-NGHIEM-300x233.png')}}" class="attachment-medium size-medium" alt="10 NAM KINH NGHIEM" loading="lazy" 
                                 
                                  sizes="(max-width: 300px) 100vw, 300px">					
                               </div>
                            </div>
                         </div>
                         <div class="icon-box-text last-reset">
                            <h5 class="uppercase">10 năm đa phong cách</h5>
                            <div id="text-455130260" class="text">
                               {{$setting->company}} khẳng định vị thế dẫn đầu trong trường phái này. Với &gt; 400 căn hộ được thiết kế &amp; thi công nội thất trọn gói mỗi năm, chúng tôi là 1 trong những đơn vị uy tín hàng đầu miền Bắc.
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div id="col-2085890436" class="col medium-6 small-12 large-3">
                   <div class="col-inner">
                      <div class="icon-box featured-box icon-box-center text-center is-small">
                         <div class="icon-box-img" style="width: 60px">
                            <div class="icon">
                               <div class="icon-inner">
                                  <img width="300" height="209" src="{{asset('frontend/images/QUY-TRINH-CHAT-CHE-300x209.png')}}" class="attachment-medium size-medium" alt="QUY TRINH CHAT CHE" loading="lazy" 
                                   sizes="(max-width: 300px) 100vw, 300px">					
                               </div>
                            </div>
                         </div>
                         <div class="icon-box-text last-reset">
                            <h5 class="uppercase">Quy Trình Chặt Chẽ</h5>
                            <div id="text-216800540" class="text">
                               Sỡ hữu Nhà máy sản xuất rộng trên 2000m2 cùng hệ thống kiểm soát chất lượng chặt chẽ từ khâu sản xuất đến dịch vụ, bạn có thể hoàn toàn yên tâm khi sử dụng dịch vụ thiết kế - thi công trọn gói của chúng tôi.
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div id="col-1980242926" class="col medium-6 small-12 large-3">
                   <div class="col-inner">
                      <div class="icon-box featured-box icon-box-center text-center is-small">
                         <div class="icon-box-img" style="width: 60px">
                            <div class="icon">
                               <div class="icon-inner">
                                  <img width="300" height="233" src="{{asset('frontend/images/icon-phong-thuy1-300x233.png')}}" class="attachment-medium size-medium" alt="icon phong thuy1" loading="lazy"
                                   
                                   sizes="(max-width: 300px) 100vw, 300px">					
                               </div>
                            </div>
                         </div>
                         <div class="icon-box-text last-reset">
                            <h5 class="uppercase">Đề Cao Phong Thủy</h5>
                            <div id="text-3697852595" class="text">
                               Phong thủy luôn là yếu tố được cân nhắc đầu tiên trong thiết kế nội thất hiện đại của {{$setting->company}}, nhằm việc tạo không gian sống phù hợp với tuổi, mệnh của gia chủ, giúp hạn chế điềm xấu, tài vận sinh sôi.
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div id="col-236124658" class="col medium-6 small-12 large-3">
                   <div class="col-inner">
                      <div class="icon-box featured-box icon-box-center text-center is-small">
                         <div class="icon-box-img" style="width: 60px">
                            <div class="icon">
                               <div class="icon-inner">
                                  <img width="300" height="233" src="{{asset('frontend/images/CAM-KET-TIEN-DO-123-300x233.png')}}" class="attachment-medium size-medium" alt="CAM KET TIEN DO 123" loading="lazy" 
                            
                                  sizes="(max-width: 300px) 100vw, 300px">					
                               </div>
                            </div>
                         </div>
                         <div class="icon-box-text last-reset">
                            <h5 class="uppercase">Cam Kết Tiến Độ</h5>
                            <div id="text-2754584193" class="text">
                               {{$setting->company}} là đơn vị duy nhất hiện nay cam kết nếu thời gian thi công căn hộ chậm tiến độ so với hợp đồng thi công thì sẽ chịu phạt tiến độ với mức phạt 1 triệu đồng/1 ngày.
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <style>
             #section_1626418736 {
             padding-top: 15px;
             padding-bottom: 15px;
             background-color: rgb(239, 239, 239);
             }
          </style>
       </section>
    </div>
 </main>
@endsection

