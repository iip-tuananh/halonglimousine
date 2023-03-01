@php
    $img = json_decode($pro->images);
@endphp
<article class="package-item">
    <figure class="package-image" style="background-image: url({{ $img[0] }});"></figure>
    <div class="package-content">
        <h3>
            <a href="{{route('detailProduct',['cate'=>$pro->cate_slug,'slug'=>$pro->slug])}}">
                {{ languageName($pro->name) }}
            </a>
        </h3>
        <p>{!! languageName($pro->description) !!}</p>
        <div class="package-meta">
            <ul>
                <li style="color:  rgb(219, 0, 37)">
                    <a href="{{ route('allListProCate', ['danhmuc' => $pro->cate->slug]) }}">{{ languageName($pro->cate->name) }}</a>
                </li>
                <li>
                  <a href="{{route('detailProduct',['cate'=>$pro->cate_slug,'slug'=>$pro->slug])}}">Xem chi tiết vé</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="package-price">
        <div class="review-area">
            <span class="review-text" style="color: rgb(235, 211, 0)">(Recomend using !)</span>
            <div class="rating-start-wrap d-inline-block">
                <div class="rating-start">
                    <span style="width: 80%"></span>
                </div>
            </div>
        </div>
        @if ($pro->price > 0)
            <h6 class="price-list">
                <span>{{ number_format($pro->price) }}$</span>
                / per person
            </h6>
            <a href="" class="outline-btn outline-btn-white book-click" data-id="{{ $pro->id }}"
                data-url="{{ route('FormTicket') }}">Book now</a>
        @else
            <h6 class="price-list">
                <span>Update...</span>
                / per person
            </h6>
            <a href="tel:+{{ $setting->phone1 }}" class="outline-btn outline-btn-white">Contact Us</a>
        @endif
    </div>
</article>
