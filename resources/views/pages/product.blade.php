
@extends('welcome')
@section('header')
    <link rel="stylesheet" href="{{asset('../frontend/css/list_products.css')}}" type="text/css" />
    <title>Shop Page</title>
@endsection
@section('content')
<div class="main">
        <div class="main_title">
            <div class="main_link_title">
                <a href="#">Home</a>/<a href="#">Shop</a>/<a href="#">For-women</a>
            </div>
        </div>
        <div class="main_container">
            <div class="container_box1">
                <img src="{{asset('../frontend/images/list_banner.png')}}" alt="">
            </div>
            <div class="container_box2">
                <div class="c_b2_find">
                    <div class="b2_find_b1">
                        <div class="c2_find_title">
                            PRODUCTS CATEGORY
                        </div>
                        <div class="c2_find_content">
                        @foreach($cate_product as $key => $cate_product)

                            <div class="c2_find_b1_item " style="font-weight: bold">
                                {{$cate_product->category_name}}
                            </div>
                            
                        @endforeach
                        </div>
                    </div>
                    <div class="b2_find_b2">
                        <div class="c2_find_title">
                            FILTER BY PRICE
                        </div>
                        <div class="c2_find_content">
                            <div class="slider">
                                <div class="progress">
                                </div>
                                <div class="range_input">
                                    <input type="range" class="range_min" min="0" max="1000" value="100" step="10">
                                    <input type="range" class="range_max" min="0" max="1000" value="900" step="10">
                                </div>
                            </div>
                            <form action="">
                            <div class="find_price">
                                <div class="pricer_input">
                                    <p>$</p><input type="number" id="start" class="ip_min" value="100">
                                </div>
                                <div class="separator">-</div>
                                <div class="pricer_input">
                                    <p>$</p><input type="number" id="end" class="ip_max" value="900">
                                </div>
                                
                                    <input style="background-color: black;color:white;padding:5px" type="submit" value="Lọc giá">
                                
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="b2_find_b3">
                        <div class="c2_find_title">
                            COLOUR
                        </div>
                        <div class="c2_find_content">
                            <div class="b3_box_color">
                                <button class="b3_item_color item_color_white">

                                </button>
                                <button class="b3_item_color item_color_black">

                                </button>
                                <button class="b3_item_color item_color_red">

                                </button>
                                <button class="b3_item_color item_color_yellow">

                                </button>
                                <button class="b3_item_color item_color_blue">

                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="b2_find_b4">
                        <div class="c2_find_title">
                            SIZE
                        </div>
                        <div class="c2_find_content">
                            <div class="b4_box_size">
                                <button class="b3_item_size">
                                    S
                                </button>
                                <button class="b3_item_size">
                                    M
                                </button>
                                <button class="b3_item_size">
                                    l
                                </button>
                                <button class="b3_item_size b3_item_size_check">
                                    xl
                                </button>
                                <button class="b3_item_size">
                                    xxl
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c_b2_list">
                    <div class="b2_list_sort">
                    
                            <form action="">
                                @csrf
                                <select name="sort" id="sort" class="form-control">
                                    <option value="">Sắp xếp theo</option>
                                    <option value="{{Request::url()}}?sort_by=tang_dan">---Giá tăng dần---</option>
                                    <option value="{{Request::url()}}?sort_by=giam_dan">---Giá giảm dần---</option>
                                    <option value="{{Request::url()}}?sort_by=kytu_az">---Từ A đến Z---</option>
                                    <option value="{{Request::url()}}?sort_by=kytu_za">---Từ Z đến A---</option>

                                    

                                </select>


                            </form>
                            {{-- <div class="list_sort_all hidden">
                                <div class="list_sort_post">Defaut Sorting</div>
                                <div class="list_sort_post">Sort by price: low to high</div>
                                <div class="list_sort_post">Sort by price: high to low</div>
                            </div> --}}
                        
                    </div>
                    <div class="b2_list_products">
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
        </div>
    </div>

@endsection


