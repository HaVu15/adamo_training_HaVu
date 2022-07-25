<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('../frontend/css/header.css')}}" type="text/css" />
    <!-- <link rel="stylesheet" href="{{asset('../frontend/css/index.css')}}" type="text/css" /> -->
    @yield('header')
    <link rel="stylesheet" href="{{asset('../frontend/css/footer.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('../frontend/css/reset.css')}}" type="text/css" />
    <!-- <link rel="stylesheet" href="{{asset('../frontend/css/list_products.css')}}" type="text/css" /> -->


    <title>Home Page</title>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="header_contact">
            <div class="h_contact_phone">
                <div class="ct_phone_img">
                    <img src="{{asset('../frontend/images/phone_header.png')}}" alt="" />
                </div>
                <div class="ct_phone_content">Hotline: (01) 23 456 789</div>
            </div>
            <div class="h_contact_title">Welcome Guest, have a nice day!</div>
        </div>
        <div class="header_content">
            <div class="header_logo">
                <a href="{{URL::to('/home')}}"><img src="{{asset('../frontend/images/logo.png')}}" alt="" /></a>
            </div>
            <div class="header_navbar">
                <a href="{{URL::to('/home')}}">
                    <div class="h_navbar_item h_navbar_item_tick">HOME</div>
                </a>
                <a href="#">
                    <div class="h_navbar_item">ABOUT US</div>
                </a>
                
                    <div class="h_navbar_item h_navbar_item_down">
                    <li class="sidebar-item" style="list-style: none"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="" aria-expanded="false"><i class="mdi mdi-tune-vertical"></i><span class="hide-menu"><p>SHOP</p> </span></a>
                            <ul aria-expanded="false" class="collapse  first-level" >
                                <li class="sidebar-item1"><a href="{{URL::to('/for-men')}}" class="sidebar-link"><i class="mdi mdi-view-quilt"></i><span class="hide-menu"> FOR MEN </span></a></li>
                                <li class="sidebar-item1"><a href="{{URL::to('/for-women')}}" class="sidebar-link"><i class="mdi mdi-view-parallel"></i><span class="hide-menu"> FOR WOMEN’S </span></a></li>
                                <li class="sidebar-item1"><a href="{{URL::to('/for-children')}}" class="sidebar-link"><i class="mdi mdi-view-parallel"></i><span class="hide-menu"> FOR CHILDREN </span></a></li>

                                
                            </ul>
                        </li>
                        <img src="{{asset('../frontend/images/img_down.png')}}" alt="" />
                    </div>
                
                <a href="#">
                    <div class="h_navbar_item">CONTACT</div>
                </a>
            </div>
            <div class="header_cart">
                <div class="header_cart_img">
                    <a href="#">
                        <img src="{{asset('../frontend/images/cart_img.png')}}" alt="" />
                    </a>
                    <div class="cart_img_absolute">0</div>
                </div>
                <div class="header_cart_content">$ 0.00</div>
            </div>
            <div class="header_menu">
                <img src="{{asset('../frontend/images/menu.png')}}" alt="" />
            </div>
        </div>
    </div>
    <div class="header_sub hidden">
        <div class="header_sub_container">
            <a href="#">
                <div class="header_sub_arrow">
                    <img src="{{asset('../frontend/images/hd_sub_arrow.png')}}" alt="">
                    <div class="header_sub_title hidden">
                        SHOP
                    </div>
                </div>
            </a>
            <div class="header_sub_box1">
                <a href="#">
                    <div class="h_sub_b1_item">
                        <div class="h_sub_b1_item_content h_navbar_item_tick">HOME</div>
                        <div class="h_sub_b1_item_img">
                            <img src="{{asset('../frontend/images/hd_sub_arr1.png')}}" alt="">
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="h_sub_b1_item">
                        <div class="h_sub_b1_item_content">ABOUT US</div>
                        <div class="h_sub_b1_item_img">
                            <img src="{{asset('../frontend/images/hd_sub_arr1.png')}}" alt="">
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="h_sub_b1_item h_sub_b1_item_shop">
                        <div class="h_sub_b1_item_content">SHOP</div>
                        <div class="h_sub_b1_item_img">
                            <img src="{{asset('../frontend/images/hd_sub_arr1.png')}}" alt="">
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="h_sub_b1_item">
                        <div class="h_sub_b1_item_content">CONTACT</div>
                        <div class="h_sub_b1_item_img">
                            <img src="{{asset('../frontend/images/hd_sub_arr1.png')}}" alt="">
                        </div>
                    </div>
                </a>
                <div class="h_sub_cart">
                    CART (0)
                </div>
            </div>
            <div class="header_sub_box2 hidden">
                <a href="#">
                    <div class="h_sub_b1_item">
                        <div class="h_sub_b1_item_content">FOR WOMEN</div>
                        <div class="h_sub_b1_item_img">
                            <img src="{{asset('../frontend/images/hd_sub_arr1.png')}}" alt="">
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="h_sub_b1_item">
                        <div class="h_sub_b1_item_content">FOR MEN</div>
                        <div class="h_sub_b1_item_img">
                            <img src="{{asset('../frontend/images/hd_sub_arr1.png')}}" alt="">
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="h_sub_b1_item">
                        <div class="h_sub_b1_item_content">FOR UNISEX</div>
                        <div class="h_sub_b1_item_img">
                            <img src="{{asset('../frontend/images/hd_sub_arr1.png')}}" alt="">
                        </div>
                    </div>
                </a>
            </div>



        </div>
    </div>
    <!-- End header -->

    @yield('content')


    <!-- Footer -->
    <div class="footer">
        <div class="footer_box">
            <div class="footer_box1">
                <div class="ft_box1_first">
                    <div class="footer_title">
                        contact us
                    </div>
                    <div class="footer_content">
                        <div class="footer_item">
                            <div class="footer_item_img">
                                <img src="{{asset('../frontend/images/footer_phone.png')}}" alt="">
                            </div>
                            <div class="footer_item_content">(01) 23 456 789</div>
                        </div>
                        <div class="footer_item">
                            <div class="footer_item_img">
                                <img src="{{asset('../frontend/images/footer_email.png')}}" alt="">
                            </div>
                            <div class="footer_item_content">support.fashion@gmail.com</div>
                        </div>
                        <div class="footer_item">
                            <div class="footer_item_img">
                                <img src="{{asset('../frontend/images/footer_map.png')}}" alt="">
                            </div>
                            <div class="footer_item_content">254 Milacina Streets, Behansed Tower, London</div>
                        </div>
                    </div>
                </div>
                <div class="ft_box1_second">
                    <div class="ft_b1_second_left">
                        <div class="footer_title">
                            GET HELP
                        </div>
                        <div class="footer_content">
                            <div class="footer_item">
                                <div class="footer_item_content">Privacy Policy</div>
                            </div>
                            <div class="footer_item">
                                <div class="footer_item_content">Customer Service</div>
                            </div>
                            <div class="footer_item">
                                <div class="footer_item_content">Payment options</div>
                            </div>
                        </div>
                    </div>
                    <div class="ft_b1_second_right">
                        <div class="footer_title">
                            quick Link
                        </div>
                        <div class="footer_content">
                            <div class="footer_item">
                                <div class="footer_item_content">About us</div>
                            </div>
                            <div class="footer_item">
                                <div class="footer_item_content">Shop</div>
                            </div>
                            <div class="footer_item">
                                <div class="footer_item_content">Cart</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ft_box1_end">
                    <div class="ft_b1_second_left">
                        <div class="footer_title">
                            SUBCRIbE FOR OUR NEWSLETTER
                        </div>
                        <div class="footer_content">
                            <div class="footer_item_content2">
                                <input type="text" placeholder="youremail.@gmail.com">
                                <div class="submit_footer">Submit</div>
                            </div>
                            <div class="footer_network">
                                <a href="#"> <img src="{{asset('../frontend/images/instagram.png')}}"></a>
                                <a href="#"> <img src="{{asset('../frontend/images/facebook.png')}}"></a>
                                <a href="#"> <img src="{{asset('../frontend/images/linkedin.png')}}"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_box2">
                <div class="footer_box2_item">
                    ©2022 Fashion Designer, Adamo Software
                </div>
                <div class="footer_box2_item">
                    <img src="{{asset('../frontend/images/cash.png')}}">
                    <img src="{{asset('../frontend/images/visa.png')}}">
                    <img src="{{asset('../frontend/images/paypal.png')}}">
                </div>
            </div>
        </div>
    </div>
    <!-- End footer -->
    <script type="text/javascript" src="{{asset('../frontend/js/jquery.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript" src="{{asset('../frontend/js/header.js')}}"></script>
    <script type="text/javascript" src="{{asset('../frontend/js/home.js')}}"></script>
    <script type="text/javascript" src="{{asset('../frontend/js/list_products.js')}}"></script>
   <script>
    $('.item_img_demo').on('click', function(){
    $src = $('.main_img_show img').attr('src');
    $str_tick = $(this).children('img').attr('src');
    if($src != $str_tick){
        $('.main_img_show img').attr('src', $(this).children('img').attr('src'))
    }
})
   </script>
   <script>
        $(document).ready(function(){
            $('#sort').on('change',function(){
                var url = $(this).val();
                if(url){
                    window.location = url;
                }
                return false;

            });

        });
   </script>
</body>
</html>