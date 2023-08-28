<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- add font-awesome --}}
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
            integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        {{-- add bootstrap --}}
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
            crossorigin="anonymous"
        />
        {{-- add slick --}}
        <link
            rel="stylesheet"
            type="text/css"
            href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
        />
        <link rel="stylesheet" href="{{ url('client') }}/assets/css/global.css" />
        <link rel="stylesheet" href="{{ asset('client/assets/css/main.css') }}" />
        <link rel="stylesheet" href="{{ asset('client/assets/css/detail.css') }}" />

        <title>Mixi-Market</title>
    </head>
    <body>

        <div class="app">
            <!-- Header -->
            @include('client.components.header')
            <!-- End header -->

            {{-- bs3form  --}}

             <!-- Main -->
            <div class="content main-content">
                <!-- Slider -->
                {{-- <div class="container-fluid"> --}}
                <div class="container">
                    @include('client.components.slider')
                </div>
                <!-- End slider -->

                <!-- Feature-Category -->
                @include('client.components.featured_category')
                <!--End Feature-Category -->

                <!-- banner Category -->
                <div class="container">
                @include('client.components.banner')
                </div>
                <!--End banner Category -->

                <!-- Popular Products -->
                <div class="container popular-product category">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-item-product">
                                <div class="product-title popular-product-title">
                                    <h3 class="hover_  name-category-popular scroll-animation" style="position: relative">Popular Products</h3>
                                    {{-- <h3 class="name-category-popular">Sản phẩm phổ biến</h3> --}}
                                    <ul class="nav-tab" style="opacity: 0">
                                        <li class="nav-item">
                                            <a href="#" class="nav-item-link">All </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-item-link">Featured</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-item-link">Popular</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-item-link">New added</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="product-grid row g-3" id="list-product">
                                {{-- @include('client.components.product_cart_item',[@include('cart-products', ['cartProducts' => $cartProducts, 'itemsPerRow' => 3])]) --}}
                                @include('client.components.product_cart_item', ['itemsPerRow' =>'1-5'])
                            </div>
                            <div class="product-grid row g-3 btn_load-more " >
                                <input type="hidden" value="1" id ="page" name = "page">
                                <div class="col-md-12" >
                                    <button type="button" data-url = {{ route('load-product') }} id="btn-load_product" class="scroll-animation translatex hover-top " style="background-color:rgb(93,168,138,0.8);display:inline-block; padding:4px 15px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);border-top-left-radius: 12px;border-bottom-right-radius: 12px;color:black;font-weight:600;position:relative" >Load more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Popular Products -->

                <!-- banner media -->
                <div class="container-fluid" style="margin-top: 30px">
                     @include('client.components.banner_media')
                </div>
                <!-- End Banner Media-->

                <!-- Featured Products -->
                <div class="container featured-product">
                    <div class="row ">
                        <div class="col-md-3">
                            <div class="banner-feature-left"></div>
                        </div>
                        <div class="col-md-9 ">
                            <div class="row g-3 product-featured-desciption ">
                                <div class="des-top">
                                    <p class="scrolling-text scroll-animation">Product</p>
                                </div>
                                <div class="des-bottom">
                                    <span>Products</span>
                                    <h2>Featured</h2>
                                </div>
                            </div>
                            <div class="nav-tab-icon" style="text-align: end;display:none">
                                <img
                                    class="translatey"
                                    width="40"
                                    height="40"
                                    src="https://img.icons8.com/bubbles/50/000000/long-arrow-left.png"
                                    alt="long-arrow-left"
                                />
                                <img
                                    class="translatey"
                                    width="40"
                                    height="40"
                                    src="https://img.icons8.com/bubbles/50/right.png"
                                    alt="right"
                                />
                            </div>
                            <div class="product-grid row product-featured">
                                @include('client.components.product_cart_item', ['itemsPerRow' =>'3'])
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Top Sale Products -->
                <div class="container featured-product">
                    <div class="row ">
                        <div class="col-md-9">
                            <div class="row g-3 product-featured-desciption">
                                <div class="des-top">
                                    <p class="scrolling-text_ scroll-animation">Product</p>
                                </div>
                                <div class="des-bottom">
                                    <span>Products</span>
                                    <h2>Top Sale</h2>
                                </div>
                            </div>
                            <div class="nav-tab-icon" style="text-align: end;display:none">
                                <img
                                    class="translatey"
                                    width="40"
                                    height="40"
                                    src="https://img.icons8.com/bubbles/50/000000/long-arrow-left.png"
                                    alt="long-arrow-left"
                                />
                                <img
                                    class="translatey"
                                    width="40"
                                    height="40"
                                    src="https://img.icons8.com/bubbles/50/right.png"
                                    alt="right"
                                />
                            </div>
                            <div class="product-grid row g-3 product-featured">
                                @include('client.components.product_cart_item', ['itemsPerRow' =>'3']) 
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="banner-feature-right"></div>
                        </div>
                    </div>
                </div>

                <!-- List Brands -->
                <div class="container list-brands ">
                    <div class="row ">
                        <!-- Brands Favorite -->
                        <h4 class="list-brand-title">Shop by brands</h4>
                    </div>
                    <div class="row g-3 brand-list ">
                        <div class="col-md-2">
                            <div class="brand-item scroll-animation">
                                <a href="#">
                                    <img src="{{ url('client') }}/assets/img/brand_3.png" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="brand-item scroll-animation">
                                <a href="#">
                                    <img src="{{ url('client') }}/assets/img/brand4.png" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="brand-item scroll-animation">
                                <a href="#">
                                    <img src="{{ url('client') }}/assets/img/brand_5.png" alt="" />
                                </a>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="brand-item scroll-animation">
                                <a href="#">
                                    <img src="{{ url('client') }}/assets/img/brand_3.png" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="brand-item scroll-animation">
                                <a href="#">
                                    <img src="{{ url('client') }}/assets/img/brand4.png" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="brand-item scroll-animation">
                                <a href="#">
                                    <img src="{{ url('client') }}/assets/img/brand_5.png" alt="" />
                                </a>
                            </div>
                        </div>

                        <div class="brand-direction">
                            <img
                                class="translatey"
                                width="30"
                                height="30"
                                src="https://img.icons8.com/bubbles/50/000000/long-arrow-left.png"
                                alt="long-arrow-left"
                            />
                            <img
                                class="translatey"
                                width="30"
                                height="30"
                                src="https://img.icons8.com/bubbles/50/right.png"
                                alt="right"
                            />
                        </div>
                    </div>
                </div>
                <!-- <div style="height: 3000px"></div> -->
            </div>

            <!-- Footer -->
            <div class="footer">
            @include('client.components.footer')
            </div>

            <!-- Position -->
            <div id="cart_list_wrapper">
                {{-- @include('client.components.cart_list',['carts' => $carts]) --}}
                @include('client.components.cart_list')
            </div>
            <div id="site-overlay" class="site-overlay"></div>
            <!-- --Toast Messeage -->
            <div id="toast"></div>
        </div>
                      {{-- thêm jquery --}}
        <script src="{{ asset('js/jquery-3.7.0.min.js') }}"></script>
        {{-- <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script> --}}

        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script
            type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
        ></script>

        <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
            integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
            crossorigin="anonymous"
        ></script>

        <script src="{{ url('client') }}/assets/js/main.js"></script>
        <script src="{{ url('client') }}/assets/js/toast_msg.js"></script>
        <script src="{{ url('client') }}/assets/js/loadmore.js"></script>
        {{-- <script src="{{ url('client') }}/assets/js/search.js"></script> --}}


        <script src="{{ url('client') }}/assets/js/add_cart.js"></script>
        @stack('custom-script')
    </body>
</html>

{{-- php artisan key:

php artisan cache: --}}