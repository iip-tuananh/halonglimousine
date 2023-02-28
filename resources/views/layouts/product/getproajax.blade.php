
<div class="row large-columns-3 medium-columns-3 small-columns-1 row-full-width">
    @foreach ($products as $item)   
    <div class="col post-item">
        <div class="col-inner">
            <a href="{{route('detailProduct',['cate'=>$item->cate_slug,'type'=>$item->type_slug ? $item->type_slug : 'loai','id'=>$item->slug])}}" class="plain">
                <div class="box box-normal box-text-bottom box-blog-post has-hover">
                    <div class="box-image">
                        <div class="image-overlay-add image-zoom image-cover" style="padding-top: 50%;">
                            @php
                                $img = json_decode($item->images)
                            @endphp
                            <img
                                width="1500"
                                height="844"
                                src="{{$img[0]}}"
                                class="attachment-original size-original wp-post-image"
                                alt="{!!languageName($item->name)!!}"
                                loading="lazy"
                                srcset="
                                {{$img[0]}}    2560w,
                                {{$img[0]}}    300w,
                                {{$img[0]}}  1024w,
                                {{$img[0]}}   768w,
                                {{$img[0]}} 1536w,
                                {{$img[0]}} 2048w
                                "
                                sizes="(max-width: 1500px) 100vw, 1500px"
                            />
                            <div class="overlay" style="background-color: rgba(63, 63, 63, 0.395);"></div>
                        </div>
                    </div>
                    <div class="box-text text-left">
                        <div class="box-text-inner blog-post-inner">
                            <h5 class="post-title is-large">{{languageName($item->name)}}</h5>
                            <div class="is-divider"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    @endforeach
        
</div>
