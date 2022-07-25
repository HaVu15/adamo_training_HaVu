@extends('welcome')
@section('header')
    <link rel="stylesheet" href="{{asset('../frontend/css/detail_product.css')}}" type="text/css" />
    <title>Detail Page</title>
@endsection
@section('content')

<div class="main">
        <div class="main_title">
            <div class="main_link_title">
                <a href="#">Home</a> / <a href="#">Shop</a> / <a href="#">For Women</a> / <a href="#">Clothing
                    </a>
            </div>
        </div>
        @foreach($all_product as $key => $product)

        <div class="main_container">
            <div class="main_img">
                <div class="main_img_demo">
                    @foreach ($gallery as $key =>$gall)
                    <div class="item_img_demo" style="height: 118px">
                        <img src="{{asset('../uploads/product/gallery/'.$gall->gallery_image)}}"  />
                    </div>
                    @endforeach
                    
                </div>

                <div class="main_img_show"  >
                        <img src="{{URL::to('uploads/product/'.$product->product_image)}}" >
                </div>
            </div>
            <div class="main_content">
                <div class="content_title">
                    <p>{{$product->product_name}}</p>
                    <p class="title_type">HOT</p>
                </div>
                <div class="content_price">
                    {{number_format($product->product_price)}}
                </div>
                <div class="content_text">
                    {{$product->product_content}}
                </div>
                <div class="content_add_cart">
                    <div class="add_cart_subtraction">-</div>
                    <input type="text" class="add_cart_value" value="1">
                    <div class="add_cart_summation">+</div>
                    <div class="add_cart_to">ADD TO CART</div>
                </div>
                <div class="content_des">
                    <div class="content_des_title">
                        <p>Description</p><img src="{{asset('../frontend/images/detai_it_title.png')}}" alt="">
                    </div>
                    <div class="content_des_content">
                        <div class="ct_des_item">
                            <img src="{{asset('../frontend/images/item_img.png')}}" alt="">
                            <p>Woman 3-piece dress suits: 100% organic cotton</p>
                        </div>
                        <div class="ct_des_item">
                            <img src="{{asset('../frontend/images/item_img.png')}}" alt="">
                            <p>Dry clean only</p>
                        </div>
                        <div class="ct_des_item">
                            <img src="{{asset('../frontend/images/item_img.png')}}" alt="">
                            <p>This product contains (suit, vest and pants)</p>
                        </div>
                    </div>
                </div>
                <div class="content_des">
                    <div class="content_des_title">
                        <p>Additional Information</p><img src="{{asset('../frontend/images/detai_it_title.png')}}" alt="">
                    </div>
                    <div class="content_des_content">
                        <div class="ct_des_item">
                            <img src="{{asset('../frontend/images/item_img.png')}}" alt="">
                            <p>Category: Women, clothing, white, yellow, red, black,</p>
                        </div>
                        <div class="ct_des_item">
                            <img src="{{asset('../frontend/images/item_img.png')}}" alt="">
                            <p>Size: S, M, L, XL, XXL</p>
                        </div>
                    </div>
                </div>
                <div class="content_des">
                    <div class="content_des_title">
                        <p>Shipping and Returns</p><img src="{{asset('../frontend/images/detai_it_title.png')}}" alt="">
                    </div>
                    <div class="content_des_content">
                        <div class="ct_des_item">
                            <img src="{{asset('../frontend/images/item_img.png')}}" alt="">
                            <p>Delivery in 5-7 days</p>
                        </div>
                        <div class="ct_des_item">
                            <img src="{{asset('../frontend/images/item_img.png')}}" alt="">
                            <p>Free shipping (New York area only)</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        @endforeach

    </div>

@endsection