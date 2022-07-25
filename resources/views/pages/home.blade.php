@extends('welcome')
@section('header')
    <link rel="stylesheet" href="{{asset('../frontend/css/index.css')}}" type="text/css" />

@endsection
@section('content')
<div class="main">
        <div class="content_main">
            <div class="ct_main_box">
                <div class="main_title">NEW COLLECTION FOR MEN</div>
                <div class="main_content">From high to low, classic or modern, we have covered. Check out the hottest
                    men's
                    outfits of 2022. Find your own style and let us help you make it happen.</div>
                <a href="#" class="main_link">VIEW OUR SHOP</a>
            </div>
        </div>
        <div class="">
            <div class="img_banner">
                <img src="{{asset('../frontend/images/home_banner.png')}}" alt="">
            </div>
            
        </div>
    </div>
    
    <div class="main_box">
        <div class="main_box1">
            <div class="m_box1_left">
                <div class="m_box1_left_head"><span>FASHION’S</span> PORTFOLIO</div>
                <div class="m_box1_left_title">
                    LOOKBOOK FOR MEN
                </div>
                <div class="m_box1_left_content">
                    Fashion is a both of womenswear and menswear store dedicated to creating considered everyday pieces
                    of the highest quality.
                </div>
                <div class="m_box1_left_view">
                    VIEW OUR PRODUCT
                </div>
            </div>
            <div class="m_box1_right">
                <img src="{{asset('../frontend/images/gr_1.png')}}" class="img_b1_right_before">
                <img src="{{asset('../frontend/images/id_3.png')}}" class="img_b1_right_after">
                <img src="{{asset('../frontend/images/id_2.png')}}" class="img_b1_right_after">
            </div>
        </div>
        <div class="main_box2">
            <div class="m_box2_title">
                FEATURED PRODUCTS
            </div>
            <div class="m_box2_content">
                Wanna shine with the most outstanding outfits? Let’s see our featured products and choose the best
                choice for you
            </div>
            <div class="m_box2_nav">
                <div class="m_box2_nav_item m_box2_nav_item_tick">
                    WOMEN’S
                </div>
                <div class="m_box2_nav_item">
                    MENS
                </div>
                <div class="m_box2_nav_item">
                    UNISEX
                </div>
            </div>
            <div class="m_box2_container">
                @foreach($all_product as $key => $product)
                <div class="m_box2_item">
                    <a href="{{URL::to('/detail/'.$product->product_id)}}">
                    <div class="m_b2_it_img" style="height: 428px">
                        <img src="{{URL::to('uploads/product/'.$product->product_image)}}" >
                        <div class="m_b2_it_type">HOT</div>
                        <div class="m_b2_it_car">
                            <img src="{{asset('../frontend/images/cart_item.png')}}">
                        </div>
                    </div>
                    </a>
                    <div class="m_b2_it_title">{{$product->product_name}}</div>
                    <div class="m_b2_it_price">{{number_format($product->product_price)}}</div>
                </div>
                @endforeach
                

            </div>

        </div>
    </div>
    <div class="main_box3">
        <img src="{{asset('../frontend/images/bg_2.png')}}">
    </div>
    <div class="main_box">
        <div class="main_box4">
            <div class="m_box2_title">
                BEST SELLER
            </div>
            <div class="m_box2_content">
                Take a look at the most popular costumes at Fashion in recent times. Maybe you will like it!
            </div>
            <div class="m_box4_container">
                
            @foreach($all_product1 as $key => $product1)

                <div class="m_box4_item">

                    <div class="m_b2_it_img">
                    <a href="{{URL::to('/detail/'.$product1->product_id)}}">

                    <img src="{{URL::to('uploads/product/'.$product1->product_image)}}" >
                        <div class="m_b2_it_type">HOT</div>
                        <div class="m_b2_it_car">
                            <img src="{{asset('../frontend/images/cart_item.png')}}">
                        </div>
                    </div>
                    <div class="m_b2_it_title">{{$product1->product_name}}</div>
                    <div class="m_b2_it_price">{{number_format($product1->product_price)}}</div>
                    </a>
                </div>
                
            @endforeach


            </div>
        </div>
    </div>
    <div class="main_box5">
        <img src="{{asset('../frontend/images/home_box5.png')}}">
        <div class="m_sub_box5">
            <div class="m_sub_box5_title">
                Our Mission
            </div>
            <div class="m_sub_box5_content">
                Fashion is a contemporary clothing store known for its trend-driven styles with affordable prices.
                Drawing inspiration from the latest trends, from street style to runway, Fashion clothing store offers
                an array of styles that is fit for the fashion loving people. From workwear to street style, night out,
                Fashion store can keep you going from day-to-night. Shop the latest collection from Fashion clothing
                line, ranging in dresses to tops, backpacks, rompers, pants, outerwear, watches and shoes.
            </div>
            <a href="#">
                <div class="m_sub_box5_link">
                    READ MORE
                </div>
            </a>
        </div>
    </div>
    <div class="main_box6">
        <img src="{{asset('../frontend/images/b6_logo1.png')}}">
        <img src="{{asset('../frontend/images/b6_logo2.png')}}">
        <img src="{{asset('../frontend/images/b6_logo3.png')}}">
        <img src="{{asset('../frontend/images/b6_logo4.png')}}">
    </div>
    

@endsection