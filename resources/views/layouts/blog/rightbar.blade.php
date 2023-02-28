<div class="sidebar">
    @foreach ($blogCate as $cate)
    @if(count($cate->typeCate)>0)
    <aside class="widget widget_category">
       <h3 class="widget-title">{{languageName($cate->name)}}</h3>
       <ul>
          @foreach ($cate->typeCate as $type)
          <li>
             <i aria-hidden="true" class="fas fa-dot-circle"></i>
             <a href="{{route('listTypeBlog',['slug'=>$type->slug])}}">
                <h5>{{languageName($type->name)}}</h5>
             </a>
             <span>({{count($cate->typeCate )}})</span>
          </li>
          @endforeach
       </ul>
    </aside>
    @endif
    @endforeach
    <aside class="widget widget_adds">
       <figure>
          <img src="{{asset('frontend/img/vinh-ha-long-1.jpg')}}">
       </figure>
    </aside>
    <aside class="widget widget_latest_post widget-post-thumb">
       <h3 class="widget-title">Recent Post</h3>
       <ul>
          @foreach ($listblognew as $blog)
          <li>
             <figure class="post-thumb">
                <a href="{{route('detailBlog',['slug'=>$blog->slug])}}"><img src="{{$blog->image}}" alt=""></a>
             </figure>
             <div class="post-content">
                <h5>
                   <a style=" color :black" href="{{route('detailBlog',['slug'=>$blog->slug])}}">{{languageName($blog->title)}}</a>
                </h5>
                <div class="entry-meta">
                   <span class="posted-on">
                   <a href="{{route('detailBlog',['slug'=>$blog->slug])}}">{{$blog->created_at->format('d/m/Y')}}</a>
                   </span>
                   <span class="comments-link">
                   {{-- <a href="{{route('detailBlog',['slug'=>$blog->slug])}}">No Comments</a> --}}
                   </span>
                </div>
             </div>
          </li>
          @endforeach
       </ul>
    </aside>
 </div>