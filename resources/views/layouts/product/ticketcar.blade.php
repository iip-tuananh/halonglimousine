@php
    $img = json_decode($product->images);
@endphp
    <input type="hidden" name="idticket" value="{{$product['id']}}">
    <figure class="package-image" style="background-image: url({{$img[0]}});"></figure>
    <div class="package-content">
    <h3>
        <a href="package-detail.html">
       {{languageName($product['name'])}}
        </a>
    </h3>
    <p>{!!languageName($product['description'])!!}</p>
    <div class="package-meta">
        <ul>
            <li>
                {{languageName($product->cate->name)}}
            </li>
        </ul>
    </div>
    </div>
    <div class="package-price">
    <div class="review-area">
        <span class="review-text">(Recomend)</span>
        <div class="rating-start-wrap d-inline-block">
            <div class="rating-start">
                <span style="width: 80%"></span>
            </div>
        </div>
    </div>
    <h6 class="price-list">
        <span>{{number_format($product['price'])}}đ</span>
        / per person
    </h6>
    </div>
