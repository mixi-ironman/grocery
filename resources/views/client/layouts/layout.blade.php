<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
            integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
            crossorigin="anonymous"
        />

        <link
            rel="stylesheet"
            type="text/css"
            href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
        />
        <link rel="stylesheet" href="{{ url('client') }}/assets/css/global.css" />
        <link rel="stylesheet" href="{{ asset('client/assets/css/main.css') }}" />
        <title>Mixi-Market</title>
    </head>
    <body>
        <div class="app">
            <!-- Header -->
            <div class="header">
                <!-- header-top -->
                <div class="container header-top">
                    <div class="row header-top-wrapper">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <!-- Header-logo -->
                            <div class="header-logo">
                                <a href="#">
                                    <img src="{{ url('client') }}/assets/img/logo.jpg" alt="logo" />
                                </a>
                            </div>
                            <!-- End header-logo -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            <div class="header-searh_box">
                                <form action="#" method="get" class="form-search">
                                    <input
                                        type="text"
                                        id="search"
                                        name="search"
                                        placeholder="Search..."
                                        class="search-box"
                                        maxlength="128"
                                        autocomplete="off"
                                    />
                                    <button type="submit" class="header-search-btn" id="submit-button">
                                        <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
                                        <img
                                            style="background-color: white; border-radius: 50%"
                                            width="40"
                                            height="40"
                                            src="https://img.icons8.com/bubbles/50/search.png"
                                            alt="search"
                                        />
                                    </button>
                                </form>
                                <!-- <h3 class="mixi">From mixi with love</h3> -->
                                <h3 class="mixi">Wellcome to Mixi-Chill</h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="header-cart_wishlist">
                                <div class="wishlist-img_area wishlist translate">
                                    <a href="#">
                                        <!-- <i class="fa-regular fa-heart icon-heart"></i> -->
                                        <img
                                            class="translatey"
                                            width="40"
                                            height="40"
                                            src="https://img.icons8.com/bubbles/50/likee-ap.png"
                                            alt="likee-ap"
                                        />
                                        <span class="count">3</span>
                                    </a>
                                </div>
                                <div class="user-img_area wishlist translate">
                                    <a href="#">
                                        <!-- <i class="fa-solid fa-user-tie"></i> -->
                                        <img
                                            class="translatey"
                                            width="35"
                                            height="35"
                                            src="https://img.icons8.com/bubbles/50/user-female.png"
                                            alt="user-female"
                                        />
                                    </a>
                                    <div class="login-box" style="display: none">
                                        <h3>Sign in</h3>
                                    </div>
                                </div>
                                <div class="mini-cart wishlist translate">
                                    <div class="mini-cart">
                                        <div class="basket">
                                            <a href="#">
                                                <!-- <i class="fa-solid fa-cart-arrow-down icon-cart"></i> -->
                                                <img
                                                    class="translatey"
                                                    width="35"
                                                    height="35"
                                                    src="https://img.icons8.com/doodle/48/shopping-cart--v1.png"
                                                    alt="shopping-cart--v1"
                                                />
                                            </a>
                                            <span class="cart-count">2</span>
                                        </div>
                                        <div class="modal_container-view-cart_list" style="display: none"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- header-bottom -->
                <div class="header-bottom">
                    <div class="container-fluid nav-container">
                        <div class="container nav-container-wrapper">
                            <div class="row nav-container_center">
                                <div class="col-lg-3 col-md-4 col-xs-12 col-sm-3">
                                    <!-- nav-left -->
                                    <div class="header_mega-container">
                                        <div class="navleft-container">
                                            <div class="mega-menu-title hover-top">
                                                <!-- <i class="fa-solid fa-face-grin-tongue-wink menu-icon"></i> -->
                                                <i class="fa-solid fa-chart-gantt menu-icon"></i>
                                                <h3>All Categories</h3>
                                            </div>
                                        </div>
                                        <!-- mega-all-categories -->
                                        <div class="mega-menu-category" style="display: none">
                                            <ul class="nav-mega">
                                                <li class="dropdown">
                                                    <a href="#" class="mega-dropdown_toggle">
                                                        <img
                                                            src="{{ url('client') }}/assets/img/fruits-icon.png"
                                                            alt="fruits"
                                                            class="mega-dropdown_toggle-img"
                                                        />
                                                        <span class="mega-dropdown_toggle-title">Fresh Fruits</span>
                                                    </a>

                                                    <!-- sub-content-menu-dropdown -->
                                                    <div class="submenu-dropdown" style="display: none">
                                                        <div class="submenu-dropdown_popup">
                                                            <div class="row">
                                                                <div class="col-md-4 col-sm-6">
                                                                    <h3>Tropical Fruits</h3>
                                                                    <ul class="submenu-dropdown-nav_list">
                                                                        <li class="submenu-dropdown-nav_item">
                                                                            <a href="#">Coconuts</a>
                                                                        </li>
                                                                        <li class="submenu-dropdown-nav_item">
                                                                            <a href="#">Dragonfruits</a>
                                                                        </li>
                                                                        <li class="submenu-dropdown-nav_item">
                                                                            <a href="#">Pomegranates</a>
                                                                        </li>
                                                                        <li class="submenu-dropdown-nav_item">
                                                                            <a href="#">Passionfruit</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-md-4 col-sm-6">
                                                                    <h3>Tropical Fruits</h3>
                                                                    <ul class="submenu-dropdown-nav_list">
                                                                        <li class="submenu-dropdown-nav_item">
                                                                            <a href="#">Coconuts</a>
                                                                        </li>
                                                                        <li class="submenu-dropdown-nav_item">
                                                                            <a href="#">Dragonfruits</a>
                                                                        </li>
                                                                        <li class="submenu-dropdown-nav_item">
                                                                            <a href="#">Pomegranates</a>
                                                                        </li>
                                                                        <li class="submenu-dropdown-nav_item">
                                                                            <a href="#">Passionfruit</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-md-4 col-sm-6">
                                                                    <h3>Tropical Fruits</h3>
                                                                    <ul class="submenu-dropdown-nav_list">
                                                                        <li class="submenu-dropdown-nav_item">
                                                                            <a href="#">Coconuts</a>
                                                                        </li>
                                                                        <li class="submenu-dropdown-nav_item">
                                                                            <a href="#">Dragonfruits</a>
                                                                        </li>
                                                                        <li class="submenu-dropdown-nav_item">
                                                                            <a href="#">Pomegranates</a>
                                                                        </li>
                                                                        <li class="submenu-dropdown-nav_item">
                                                                            <a href="#">Passionfruit</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="mega-dropdown_toggle">
                                                        <img
                                                            src="{{ url('client') }}/assets/img/salad-icon.png"
                                                            alt="salad"
                                                            class="mega-dropdown_toggle-img"
                                                        />
                                                        <span class="mega-dropdown_toggle-title"> Fresh Salads </span>
                                                    </a>
                                                    <!-- sub-content-menu-dropdown -->
                                                    <div class="submenu-dropdown" style="display: none"></div>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="mega-dropdown_toggle">
                                                        <img
                                                            src="{{ url('client') }}/assets/img/vegetable-icon.png"
                                                            alt="vegetable"
                                                            class="mega-dropdown_toggle-img"
                                                        />
                                                        <span class="mega-dropdown_toggle-title">Vegetable</span>
                                                    </a>
                                                    <!-- sub-content-menu-dropdown -->
                                                    <div class="submenu-dropdown" style="display: none"></div>
                                                </li>
                                                <li class="dropdown nosub">
                                                    <a href="#" class="mega-dropdown_toggle">
                                                        <img
                                                            src="{{ url('client') }}/assets/img/juices-icon.png"
                                                            alt="juices"
                                                            class="mega-dropdown_toggle-img"
                                                        />
                                                        <span class="mega-dropdown_toggle-title">Juices</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown nosub">
                                                    <a href="#" class="mega-dropdown_toggle">
                                                        <img
                                                            src="{{ url('client') }}/assets/img/fish-icon.png"
                                                            alt="juices"
                                                            class="mega-dropdown_toggle-img"
                                                        />
                                                        <span class="mega-dropdown_toggle-title">Sea food</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown nosub">
                                                    <a href="#" class="mega-dropdown_toggle">
                                                        <img
                                                            src="{{ url('client') }}/assets/img/driyfruits-icon.png"
                                                            alt="juices"
                                                            class="mega-dropdown_toggle-img"
                                                        />
                                                        <span class="mega-dropdown_toggle-title">Dried Fruit</span>
                                                    </a>
                                                </li>

                                                <li class="dropdown more-menu">
                                                    <a href="#" class="mega-dropdown_toggle">
                                                        <img
                                                            src="{{ url('client') }}/assets/img/meat-icon.png"
                                                            alt="juices"
                                                            class="mega-dropdown_toggle-img"
                                                        />
                                                        <span class="mega-dropdown_toggle-title">Fresh Meats</span>
                                                    </a>
                                                </li>

                                                <li class="dropdown">
                                                    <a href="#" class="mega-dropdown_toggle">
                                                        <img
                                                            src="{{ url('client') }}/assets/img/dairy-icon.png"
                                                            alt="dairy"
                                                            class="mega-dropdown_toggle-img"
                                                        />
                                                        <span class="mega-dropdown_toggle-title">Dairy Products</span>
                                                    </a>

                                                    <!-- sub-content-menu-dropdown -->
                                                    <div class="submenu-dropdown" style="display: none">
                                                        <div class="submenu-dropdown_popup">
                                                            <div class="row">
                                                                <div class="col-md-4 col-sm-6">
                                                                    <h3>Tropical Fruits</h3>
                                                                    <ul class="submenu-dropdown-nav_list">
                                                                        <li class="submenu-dropdown-nav_item">
                                                                            <a href="#">Coconuts</a>
                                                                        </li>
                                                                        <li class="submenu-dropdown-nav_item">
                                                                            <a href="#">Dragonfruits</a>
                                                                        </li>
                                                                        <li class="submenu-dropdown-nav_item">
                                                                            <a href="#">Pomegranates</a>
                                                                        </li>
                                                                        <li class="submenu-dropdown-nav_item">
                                                                            <a href="#">Passionfruit</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-md-4 col-sm-6">
                                                                    <h3>Tropical Fruits</h3>
                                                                    <ul class="submenu-dropdown-nav_list">
                                                                        <li class="submenu-dropdown-nav_item">
                                                                            <a href="#">Coconuts</a>
                                                                        </li>
                                                                        <li class="submenu-dropdown-nav_item">
                                                                            <a href="#">Dragonfruits</a>
                                                                        </li>
                                                                        <li class="submenu-dropdown-nav_item">
                                                                            <a href="#">Pomegranates</a>
                                                                        </li>
                                                                        <li class="submenu-dropdown-nav_item">
                                                                            <a href="#">Passionfruit</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-md-4 col-sm-6">
                                                                    <h3>Tropical Fruits</h3>
                                                                    <ul class="submenu-dropdown-nav_list">
                                                                        <li class="submenu-dropdown-nav_item">
                                                                            <a href="#">Coconuts</a>
                                                                        </li>
                                                                        <li class="submenu-dropdown-nav_item">
                                                                            <a href="#">Dragonfruits</a>
                                                                        </li>
                                                                        <li class="submenu-dropdown-nav_item">
                                                                            <a href="#">Pomegranates</a>
                                                                        </li>
                                                                        <li class="submenu-dropdown-nav_item">
                                                                            <a href="#">Passionfruit</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-8 col-xs-12 col-sm-9">
                                    <!-- nav-right -->
                                    <div class="nav-features-box">
                                        <ul class="features-box_list">
                                            <li class="features-box_item">
                                                <a href="#">Home</a>
                                            </li>
                                            <li class="features-box_item">
                                                <a href="#">About</a>
                                            </li>
                                            <li class="features-box_item">
                                                <a href="#">Shop</a>
                                            </li>
                                            <li class="features-box_item">
                                                <a href="#">Blog</a>
                                            </li>
                                            <li class="features-box_item">
                                                <a href="#">Contact</a>
                                            </li>
                                        </ul>
                                        <div class="contact">
                                            <!-- <i class="fa-solid fa-id-card-clip contact-icon"></i> -->
                                            <img
                                                style="background-color: aliceblue; object-fit: cover"
                                                class="translatey"
                                                width="40"
                                                height="40"
                                                src="https://img.icons8.com/bubbles/50/phone-not-being-used.png"
                                                alt="phone-not-being-used"
                                            />
                                            <span>0123.456.789</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End header -->

            <!-- Slider -->
            <!-- <div class="container-fluid"> -->
            <div class="container">
                <div class="slider-wraper row">
                    <!-- <div class="col-md-12" style="padding: 0"> -->
                    <div class="col-md-12">
                        <div class="slider-wraper-list">
                            <div class="slider-wraper_item">
                                <div class="slider-item_img"></div>
                                <div class="slider-item_description">
                                    <p>100$ Ỏganic</p>
                                    <p>Farm Fresh Produce Right to Your Door</p>
                                    <a href="#"
                                        >Shop Now!
                                        <span
                                            ><i
                                                class="fa-regular fa-face-grin-hearts"
                                                style="font-size: 20px; color: rgb(93, 247, 111)"
                                            ></i></span
                                    ></a>
                                </div>
                                <!-- <div class="slider-wraper-direction">
                                    <i class="fa-solid fa-chevron-left direction-eye"></i>
                                    <i class="fa-solid fa-chevron-right direction-eye"></i>
                                    
                                </div> -->

                                <div class="slider-wraper-direction">
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
                    </div>
                </div>
            </div>
            <!-- End slider -->

            <!-- Main -->
            <div class="content">
                <!-- Feature-Category -->
                <div class="container feature-category category">
                    <div class="row">
                        <div class="slider-item-product">
                            <div class="product-title">
                                <h3 class="hover_" style="position: relative">Featured Categories</h3>
                                <div class="nav-wraper">
                                    <ul class="nav-tab">
                                        <li class="nav-item">
                                            <a href="#" class="nav-item-link">Cake - Milk</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-item-link">Coffes - Teas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-item-link">Pet Foods</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-item-link">Vegatables</a>
                                        </li>
                                    </ul>
                                    <div class="nav-tab-icon" style="text-align: end">
                                        <!-- <button type="button" class="slick-next">
                                            <img
                                                class="translatey"
                                                width="40"
                                                height="40"
                                                src="https://img.icons8.com/bubbles/50/000000/long-arrow-left.png"
                                                alt="long-arrow-left"
                                            />
                                        </button> -->
                                        <!-- <button type="button" class="slick-prev">
                                            <img
                                                class="translatey"
                                                width="40"
                                                height="40"
                                                src="https://img.icons8.com/bubbles/50/right.png"
                                                alt="right"
                                            />
                                        </button> -->
                                    </div>
                                </div>
                            </div>
                            <div class="slider-product-list">
                                <div class="slider-product-item col-md-1 bg-1">
                                    <figure>
                                        <a href="#">
                                            <img class="slider-item-img" src="{{ url('client') }}/assets/img/cake-milk.png" alt="" />
                                        </a>
                                    </figure>
                                    <h6>Cake & Milk</h6>
                                    <p>26 items</p>
                                </div>
                                <div class="slider-product-item col-md-1 bg-2">
                                    <figure>
                                        <a href="#">
                                            <img class="slider-item-img" src="{{ url('client') }}/assets/img/apple.png" alt="" />
                                        </a>
                                    </figure>
                                    <h6>Apple</h6>
                                    <p>2 items</p>
                                </div>
                                <div class="slider-product-item col-md-1 bg-3">
                                    <figure>
                                        <a href="#">
                                            <img class="slider-item-img" src="{{ url('client') }}/assets/img/dautay.png" alt="" />
                                        </a>
                                    </figure>
                                    <h6>Strawberry</h6>
                                    <p>26 items</p>
                                </div>
                                <div class="slider-product-item col-md-1 bg-4">
                                    <figure>
                                        <a href="#">
                                            <img class="slider-item-img" src="{{ url('client') }}/assets/img/kiwi.png" alt="" />
                                        </a>
                                    </figure>
                                    <h6>Oganic Kiwi</h6>
                                    <p>16 items</p>
                                </div>
                                <div class="slider-product-item col-md-1 bg-5">
                                    <figure>
                                        <a href="#">
                                            <img class="slider-item-img" src="{{ url('client') }}/assets/img/vegable.png" alt="" />
                                        </a>
                                    </figure>
                                    <h6>Vegetables</h6>
                                    <p>21 items</p>
                                </div>
                                <div class="slider-product-item col-md-1 bg-6">
                                    <figure>
                                        <a href="#">
                                            <img class="slider-item-img" src="{{ url('client') }}/assets/img/snack.png" alt="" />
                                        </a>
                                    </figure>
                                    <h6>Snack</h6>
                                    <p>26 items</p>
                                </div>
                                <div class="slider-product-item col-md-1 bg-7">
                                    <figure>
                                        <a href="#">
                                            <img class="slider-item-img" src="{{ url('client') }}/assets/img/peach.png" alt="" />
                                        </a>
                                    </figure>
                                    <h6>Peach</h6>
                                    <p>26 items</p>
                                </div>

                                <div class="slider-product-item col-md-1 bg-8">
                                    <figure>
                                        <a href="#">
                                            <img class="slider-item-img" src="{{ url('client') }}/assets/img/cake-milk.png" alt="" />
                                        </a>
                                    </figure>
                                    <h6>Cake & Milk</h6>
                                    <p>26 items</p>
                                </div>

                                <div class="slider-product-item col-md-1 bg-9">
                                    <figure>
                                        <a href="#">
                                            <img class="slider-item-img" src="{{ url('client') }}/assets/img/vegable.png" alt="" />
                                        </a>
                                    </figure>
                                    <h6>Vegetables</h6>
                                    <p>21 items</p>
                                </div>
                                <div class="slider-product-item col-md-1 bg-10">
                                    <figure>
                                        <a href="#">
                                            <img class="slider-item-img" src="{{ url('client') }}/assets/img/snack.png" alt="" />
                                        </a>
                                    </figure>
                                    <h6>Snack</h6>
                                    <p>26 items</p>
                                </div>
                                <div class="slider-product-item col-md-1 bg-11">
                                    <figure>
                                        <a href="#">
                                            <img class="slider-item-img" src="{{ url('client') }}/assets/img/peach.png" alt="" />
                                        </a>
                                    </figure>
                                    <h6>Peach</h6>
                                    <p>26 items</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Feature-Category -->

                <!-- banner -->
                <div class="container banner-wrapper">
                    <div class="row banner-wrapper-list g-3">
                        <div class="col-lg-4 col-md-6">
                            <div class="banner-item">
                                <img src="{{ url('client') }}/assets/img/banner-1.png" class="banner-item-img" alt="banner1" />
                                <div class="banner-item-description">
                                    <h4>
                                        Everyday Fresh &
                                        <br />
                                        Clear Width Our
                                        <br />
                                        Products
                                    </h4>
                                    <a class="translatey" href="#">Shop now!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="banner-item">
                                <img src="{{ url('client') }}/assets/img/banner-2.png" class="banner-item-img" alt="banner2" />
                                <div class="banner-item-description">
                                    <h4>
                                        Everyday Fresh &
                                        <br />
                                        Clear Width Our
                                        <br />
                                        Products
                                    </h4>
                                    <a class="translatey" href="#">Shop now!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="banner-item">
                                <img src="{{ url('client') }}/assets/img/banner-3.png" class="banner-item-img" alt="banner3" />
                                <div class="banner-item-description">
                                    <h4>
                                        Everyday Fresh &
                                        <br />
                                        Clear Width Our
                                        <br />
                                        Products
                                    </h4>
                                    <a class="translatey" href="#">Shop now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end banner -->

                <!-- Popular Products -->
                <div class="container popular-product category">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-item-product">
                                <div class="product-title popular-product-title">
                                    <h3 class="name-category-popular">Popular Products</h3>
                                    <ul class="nav-tab">
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
                            <div class="product-grid row g-3">
                                <div class="col-lg-1-5">
                                    <div class="product-cart">
                                        <div class="product-img-action">
                                            <div class="product-cart-img">
                                                <a href="#">
                                                    <img
                                                        class="default-img"
                                                        src="{{ url('client') }}/assets/img/product-1-1.jpg"
                                                        alt=""
                                                    />
                                                    <img class="hover-img" src="{{ url('client') }}/assets/img/product-mg.jpg" alt="" />
                                                </a>
                                                <div class="product-action">
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            width="35"
                                                            height="35"
                                                            class="translatex"
                                                            src="https://img.icons8.com/external-ddara-fill-ddara/64/external-eye-eye-ddara-fill-ddara.png"
                                                            alt="external-eye-eye-ddara-fill-ddara"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="37"
                                                            height="37"
                                                            src="https://img.icons8.com/bubbles/50/half-heart.png"
                                                            alt="half-heart"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="35"
                                                            height="35"
                                                            src="https://img.icons8.com/doodle/48/shopping-cart--v1.png"
                                                            alt="shopping-cart--v1"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- sao cho ở ngoài position lại ăn theo body -->
                                            <!-- <div class="product-action">
                                                <p>a</p>
                                                <p>b</p>
                                            </div> -->
                                            <!-- button hiển thị giá trị gảim giá của 1 cart là bao nhiêu -->
                                            <div class="product-badges"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-category">Snack</div>
                                            <h2 class="product-name">
                                                <a href="#"> Seeds of Change Organic Quinoa, Brown </a>
                                            </h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate">
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="product-jubge" style="display: none"></div>
                                            </div>
                                            <div class="product-cart-bottom">
                                                <p>1000$</p>
                                                <p class="old-price">2000đ</p>
                                                <div class="product-price">
                                                    <p>1000$</p>
                                                    <p class="old-price">2000đ</p>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="#">
                                                        <i class="me-2 fa-solid fa-cart-shopping"></i><span>Add</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1-5">
                                    <div class="product-cart">
                                        <div class="product-img-action">
                                            <div class="product-cart-img">
                                                <a href="#">
                                                    <img
                                                        class="default-img"
                                                        src="{{ url('client') }}/assets/img/product-1-1.jpg"
                                                        alt=""
                                                    />
                                                    <!-- <img class="hover-img" src="{{ url('client') }}/assets/img/product-1-2.jpg" alt="" /> -->
                                                </a>
                                                <div class="product-action">
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            width="35"
                                                            height="35"
                                                            class="translatex"
                                                            src="https://img.icons8.com/external-ddara-fill-ddara/64/external-eye-eye-ddara-fill-ddara.png"
                                                            alt="external-eye-eye-ddara-fill-ddara"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="37"
                                                            height="37"
                                                            src="https://img.icons8.com/bubbles/50/half-heart.png"
                                                            alt="half-heart"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="35"
                                                            height="35"
                                                            src="https://img.icons8.com/doodle/48/shopping-cart--v1.png"
                                                            alt="shopping-cart--v1"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- sao cho ở ngoài position lại ăn theo body -->
                                            <!-- <div class="product-action">
                                                <p>a</p>
                                                <p>b</p>
                                            </div> -->
                                            <!-- button hiển thị giá trị gảim giá của 1 cart là bao nhiêu -->
                                            <div class="product-badges"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-category">Snack</div>
                                            <h2 class="product-name">
                                                <a href="#"> Seeds of Change Organic Quinoa, Brown </a>
                                            </h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate">
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="product-jubge" style="display: none"></div>
                                            </div>
                                            <div class="product-cart-bottom">
                                                <p>1000$</p>
                                                <p class="old-price">2000đ</p>
                                                <div class="product-price">
                                                    <p>1000$</p>
                                                    <p class="old-price">2000đ</p>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="#">
                                                        <i class="me-2 fa-solid fa-cart-shopping"></i><span>Add</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1-5">
                                    <div class="product-cart">
                                        <div class="product-img-action">
                                            <div class="product-cart-img">
                                                <a href="#">
                                                    <img
                                                        class="default-img"
                                                        src="{{ url('client') }}/assets/img/product-1-1.jpg"
                                                        alt=""
                                                    />
                                                    <!-- <img class="hover-img" src="{{ url('client') }}/assets/img/product-1-2.jpg" alt="" /> -->
                                                </a>
                                                <div class="product-action">
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            width="35"
                                                            height="35"
                                                            class="translatex"
                                                            src="https://img.icons8.com/external-ddara-fill-ddara/64/external-eye-eye-ddara-fill-ddara.png"
                                                            alt="external-eye-eye-ddara-fill-ddara"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="37"
                                                            height="37"
                                                            src="https://img.icons8.com/bubbles/50/half-heart.png"
                                                            alt="half-heart"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="35"
                                                            height="35"
                                                            src="https://img.icons8.com/doodle/48/shopping-cart--v1.png"
                                                            alt="shopping-cart--v1"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- sao cho ở ngoài position lại ăn theo body -->
                                            <!-- <div class="product-action">
                                                <p>a</p>
                                                <p>b</p>
                                            </div> -->
                                            <!-- button hiển thị giá trị gảim giá của 1 cart là bao nhiêu -->
                                            <div class="product-badges"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-category">Snack</div>
                                            <h2 class="product-name">
                                                <a href="#"> Seeds of Change Organic Quinoa, Brown </a>
                                            </h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate">
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="product-jubge" style="display: none"></div>
                                            </div>
                                            <div class="product-cart-bottom">
                                                <p>1000$</p>
                                                <p class="old-price">2000đ</p>
                                                <div class="product-price">
                                                    <p>1000$</p>
                                                    <p class="old-price">2000đ</p>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="#">
                                                        <i class="me-2 fa-solid fa-cart-shopping"></i><span>Add</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1-5">
                                    <div class="product-cart">
                                        <div class="product-img-action">
                                            <div class="product-cart-img">
                                                <a href="#">
                                                    <img
                                                        class="default-img"
                                                        src="{{ url('client') }}/assets/img/product-1-1.jpg"
                                                        alt=""
                                                    />
                                                    <!-- <img class="hover-img" src="{{ url('client') }}/assets/img/product-1-2.jpg" alt="" /> -->
                                                </a>
                                                <div class="product-action">
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            width="35"
                                                            height="35"
                                                            class="translatex"
                                                            src="https://img.icons8.com/external-ddara-fill-ddara/64/external-eye-eye-ddara-fill-ddara.png"
                                                            alt="external-eye-eye-ddara-fill-ddara"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="37"
                                                            height="37"
                                                            src="https://img.icons8.com/bubbles/50/half-heart.png"
                                                            alt="half-heart"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="35"
                                                            height="35"
                                                            src="https://img.icons8.com/doodle/48/shopping-cart--v1.png"
                                                            alt="shopping-cart--v1"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- sao cho ở ngoài position lại ăn theo body -->
                                            <!-- <div class="product-action">
                                                <p>a</p>
                                                <p>b</p>
                                            </div> -->
                                            <!-- button hiển thị giá trị gảim giá của 1 cart là bao nhiêu -->
                                            <div class="product-badges"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-category">Snack</div>
                                            <h2 class="product-name">
                                                <a href="#"> Seeds of Change Organic Quinoa, Brown </a>
                                            </h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate">
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="product-jubge" style="display: none"></div>
                                            </div>
                                            <div class="product-cart-bottom">
                                                <p>1000$</p>
                                                <p class="old-price">2000đ</p>
                                                <div class="product-price">
                                                    <p>1000$</p>
                                                    <p class="old-price">2000đ</p>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="#">
                                                        <i class="me-2 fa-solid fa-cart-shopping"></i><span>Add</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1-5">
                                    <div class="product-cart">
                                        <div class="product-img-action">
                                            <div class="product-cart-img">
                                                <a href="#">
                                                    <img
                                                        class="default-img"
                                                        src="{{ url('client') }}/assets/img/product-1-1.jpg"
                                                        alt=""
                                                    />
                                                    <!-- <img class="hover-img" src="{{ url('client') }}/assets/img/product-1-2.jpg" alt="" /> -->
                                                </a>
                                                <div class="product-action">
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            width="35"
                                                            height="35"
                                                            class="translatex"
                                                            src="https://img.icons8.com/external-ddara-fill-ddara/64/external-eye-eye-ddara-fill-ddara.png"
                                                            alt="external-eye-eye-ddara-fill-ddara"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="37"
                                                            height="37"
                                                            src="https://img.icons8.com/bubbles/50/half-heart.png"
                                                            alt="half-heart"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="35"
                                                            height="35"
                                                            src="https://img.icons8.com/doodle/48/shopping-cart--v1.png"
                                                            alt="shopping-cart--v1"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- sao cho ở ngoài position lại ăn theo body -->
                                            <!-- <div class="product-action">
                                                <p>a</p>
                                                <p>b</p>
                                            </div> -->
                                            <!-- button hiển thị giá trị gảim giá của 1 cart là bao nhiêu -->
                                            <div class="product-badges"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-category">Snack</div>
                                            <h2 class="product-name">
                                                <a href="#"> Seeds of Change Organic Quinoa, Brown </a>
                                            </h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate">
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="product-jubge" style="display: none"></div>
                                            </div>
                                            <div class="product-cart-bottom">
                                                <p>1000$</p>
                                                <p class="old-price">2000đ</p>
                                                <div class="product-price">
                                                    <p>1000$</p>
                                                    <p class="old-price">2000đ</p>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="#">
                                                        <i class="me-2 fa-solid fa-cart-shopping"></i><span>Add</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1-5">
                                    <div class="product-cart">
                                        <div class="product-img-action">
                                            <div class="product-cart-img">
                                                <a href="#">
                                                    <img
                                                        class="default-img"
                                                        src="{{ url('client') }}/assets/img/product-1-1.jpg"
                                                        alt=""
                                                    />
                                                    <!-- <img class="hover-img" src="{{ url('client') }}/assets/img/product-1-2.jpg" alt="" /> -->
                                                </a>
                                                <div class="product-action">
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            width="35"
                                                            height="35"
                                                            class="translatex"
                                                            src="https://img.icons8.com/external-ddara-fill-ddara/64/external-eye-eye-ddara-fill-ddara.png"
                                                            alt="external-eye-eye-ddara-fill-ddara"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="37"
                                                            height="37"
                                                            src="https://img.icons8.com/bubbles/50/half-heart.png"
                                                            alt="half-heart"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="35"
                                                            height="35"
                                                            src="https://img.icons8.com/doodle/48/shopping-cart--v1.png"
                                                            alt="shopping-cart--v1"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- sao cho ở ngoài position lại ăn theo body -->
                                            <!-- <div class="product-action">
                                                <p>a</p>
                                                <p>b</p>
                                            </div> -->
                                            <!-- button hiển thị giá trị gảim giá của 1 cart là bao nhiêu -->
                                            <div class="product-badges"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-category">Snack</div>
                                            <h2 class="product-name">
                                                <a href="#"> Seeds of Change Organic Quinoa, Brown </a>
                                            </h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate">
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="product-jubge" style="display: none"></div>
                                            </div>
                                            <div class="product-cart-bottom">
                                                <p>1000$</p>
                                                <p class="old-price">2000đ</p>
                                                <div class="product-price">
                                                    <p>1000$</p>
                                                    <p class="old-price">2000đ</p>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="#">
                                                        <i class="me-2 fa-solid fa-cart-shopping"></i><span>Add</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1-5">
                                    <div class="product-cart">
                                        <div class="product-img-action">
                                            <div class="product-cart-img">
                                                <a href="#">
                                                    <img
                                                        class="default-img"
                                                        src="{{ url('client') }}/assets/img/product-1-1.jpg"
                                                        alt=""
                                                    />
                                                    <!-- <img class="hover-img" src="{{ url('client') }}/assets/img/product-1-2.jpg" alt="" /> -->
                                                </a>
                                                <div class="product-action">
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            width="35"
                                                            height="35"
                                                            class="translatex"
                                                            src="https://img.icons8.com/external-ddara-fill-ddara/64/external-eye-eye-ddara-fill-ddara.png"
                                                            alt="external-eye-eye-ddara-fill-ddara"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="37"
                                                            height="37"
                                                            src="https://img.icons8.com/bubbles/50/half-heart.png"
                                                            alt="half-heart"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="35"
                                                            height="35"
                                                            src="https://img.icons8.com/doodle/48/shopping-cart--v1.png"
                                                            alt="shopping-cart--v1"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- sao cho ở ngoài position lại ăn theo body -->
                                            <!-- <div class="product-action">
                                                <p>a</p>
                                                <p>b</p>
                                            </div> -->
                                            <!-- button hiển thị giá trị gảim giá của 1 cart là bao nhiêu -->
                                            <div class="product-badges"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-category">Snack</div>
                                            <h2 class="product-name">
                                                <a href="#"> Seeds of Change Organic Quinoa, Brown </a>
                                            </h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate">
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="product-jubge" style="display: none"></div>
                                            </div>
                                            <div class="product-cart-bottom">
                                                <p>1000$</p>
                                                <p class="old-price">2000đ</p>
                                                <div class="product-price">
                                                    <p>1000$</p>
                                                    <p class="old-price">2000đ</p>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="#">
                                                        <i class="me-2 fa-solid fa-cart-shopping"></i><span>Add</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1-5">
                                    <div class="product-cart">
                                        <div class="product-img-action">
                                            <div class="product-cart-img">
                                                <a href="#">
                                                    <img
                                                        class="default-img"
                                                        src="{{ url('client') }}/assets/img/product-1-1.jpg"
                                                        alt=""
                                                    />
                                                    <!-- <img class="hover-img" src="{{ url('client') }}/assets/img/product-1-2.jpg" alt="" /> -->
                                                </a>
                                                <div class="product-action">
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            width="35"
                                                            height="35"
                                                            class="translatex"
                                                            src="https://img.icons8.com/external-ddara-fill-ddara/64/external-eye-eye-ddara-fill-ddara.png"
                                                            alt="external-eye-eye-ddara-fill-ddara"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="37"
                                                            height="37"
                                                            src="https://img.icons8.com/bubbles/50/half-heart.png"
                                                            alt="half-heart"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="35"
                                                            height="35"
                                                            src="https://img.icons8.com/doodle/48/shopping-cart--v1.png"
                                                            alt="shopping-cart--v1"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- sao cho ở ngoài position lại ăn theo body -->
                                            <!-- <div class="product-action">
                                                <p>a</p>
                                                <p>b</p>
                                            </div> -->
                                            <!-- button hiển thị giá trị gảim giá của 1 cart là bao nhiêu -->
                                            <div class="product-badges"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-category">Snack</div>
                                            <h2 class="product-name">
                                                <a href="#"> Seeds of Change Organic Quinoa, Brown </a>
                                            </h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate">
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="product-jubge" style="display: none"></div>
                                            </div>
                                            <div class="product-cart-bottom">
                                                <p>1000$</p>
                                                <p class="old-price">2000đ</p>
                                                <div class="product-price">
                                                    <p>1000$</p>
                                                    <p class="old-price">2000đ</p>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="#">
                                                        <i class="me-2 fa-solid fa-cart-shopping"></i><span>Add</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1-5">
                                    <div class="product-cart">
                                        <div class="product-img-action">
                                            <div class="product-cart-img">
                                                <a href="#">
                                                    <img
                                                        class="default-img"
                                                        src="{{ url('client') }}/assets/img/product-1-1.jpg"
                                                        alt=""
                                                    />
                                                    <!-- <img class="hover-img" src="{{ url('client') }}/assets/img/product-1-2.jpg" alt="" /> -->
                                                </a>
                                                <div class="product-action">
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            width="35"
                                                            height="35"
                                                            class="translatex"
                                                            src="https://img.icons8.com/external-ddara-fill-ddara/64/external-eye-eye-ddara-fill-ddara.png"
                                                            alt="external-eye-eye-ddara-fill-ddara"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="37"
                                                            height="37"
                                                            src="https://img.icons8.com/bubbles/50/half-heart.png"
                                                            alt="half-heart"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="35"
                                                            height="35"
                                                            src="https://img.icons8.com/doodle/48/shopping-cart--v1.png"
                                                            alt="shopping-cart--v1"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- sao cho ở ngoài position lại ăn theo body -->
                                            <!-- <div class="product-action">
                                                <p>a</p>
                                                <p>b</p>
                                            </div> -->
                                            <!-- button hiển thị giá trị gảim giá của 1 cart là bao nhiêu -->
                                            <div class="product-badges"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-category">Snack</div>
                                            <h2 class="product-name">
                                                <a href="#"> Seeds of Change Organic Quinoa, Brown </a>
                                            </h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate">
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="product-jubge" style="display: none"></div>
                                            </div>
                                            <div class="product-cart-bottom">
                                                <p>1000$</p>
                                                <p class="old-price">2000đ</p>
                                                <div class="product-price">
                                                    <p>1000$</p>
                                                    <p class="old-price">2000đ</p>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="#">
                                                        <i class="me-2 fa-solid fa-cart-shopping"></i><span>Add</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1-5">
                                    <div class="product-cart">
                                        <div class="product-img-action">
                                            <div class="product-cart-img">
                                                <a href="#">
                                                    <img
                                                        class="default-img"
                                                        src="{{ url('client') }}/assets/img/product-1-1.jpg"
                                                        alt=""
                                                    />
                                                    <!-- <img class="hover-img" src="{{ url('client') }}/assets/img/product-1-2.jpg" alt="" /> -->
                                                </a>
                                                <div class="product-action">
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            width="35"
                                                            height="35"
                                                            class="translatex"
                                                            src="https://img.icons8.com/external-ddara-fill-ddara/64/external-eye-eye-ddara-fill-ddara.png"
                                                            alt="external-eye-eye-ddara-fill-ddara"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="37"
                                                            height="37"
                                                            src="https://img.icons8.com/bubbles/50/half-heart.png"
                                                            alt="half-heart"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="35"
                                                            height="35"
                                                            src="https://img.icons8.com/doodle/48/shopping-cart--v1.png"
                                                            alt="shopping-cart--v1"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- sao cho ở ngoài position lại ăn theo body -->
                                            <!-- <div class="product-action">
                                                <p>a</p>
                                                <p>b</p>
                                            </div> -->
                                            <!-- button hiển thị giá trị gảim giá của 1 cart là bao nhiêu -->
                                            <div class="product-badges"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-category">Snack</div>
                                            <h2 class="product-name">
                                                <a href="#"> Seeds of Change Organic Quinoa, Brown </a>
                                            </h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate">
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="product-jubge" style="display: none"></div>
                                            </div>
                                            <div class="product-cart-bottom">
                                                <p>1000$</p>
                                                <p class="old-price">2000đ</p>
                                                <div class="product-price">
                                                    <p>1000$</p>
                                                    <p class="old-price">2000đ</p>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="#">
                                                        <i class="me-2 fa-solid fa-cart-shopping"></i><span>Add</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Popular Products -->

                <!-- banner media -->
                <div class="container-fluid" style="margin-top: 30px">
                    <div class="banner-media row">
                        <!-- <img src="{{ url('client') }}/assets/img/banner_.png" alt="" /> -->
                        <div class="banner-media-des">
                            <h5>ORGANIC FOODS</h5>
                            <p>BIG SALE</p>
                            <p>$ON <span>OFF</span></p>
                        </div>
                    </div>
                </div>
                <!-- End Banner Media-->

                <!-- Featured Products -->
                <div class="container featured-product">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="banner-feature-left"></div>
                        </div>
                        <div class="col-md-9">
                            <div class="row g-3 product-featured-desciption">
                                <div class="des-top">
                                    <p class="scrolling-text">Product</p>
                                </div>
                                <div class="des-bottom">
                                    <span>Products</span>
                                    <h2>Featured</h2>
                                </div>
                            </div>
                            <div class="nav-tab-icon" style="text-align: end">
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
                                <div class="col-md-4">
                                    <div class="product-cart">
                                        <div class="product-img-action">
                                            <div class="product-cart-img">
                                                <a href="#">
                                                    <img
                                                        class="default-img"
                                                        src="{{ url('client') }}/assets/img/product-1-1.jpg"
                                                        alt=""
                                                    />
                                                    <!-- <img class="hover-img" src="{{ url('client') }}/assets/img/product-1-2.jpg" alt="" /> -->
                                                </a>
                                                <div class="product-action">
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            width="35"
                                                            height="35"
                                                            class="translatex"
                                                            src="https://img.icons8.com/external-ddara-fill-ddara/64/external-eye-eye-ddara-fill-ddara.png"
                                                            alt="external-eye-eye-ddara-fill-ddara"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="37"
                                                            height="37"
                                                            src="https://img.icons8.com/bubbles/50/half-heart.png"
                                                            alt="half-heart"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="35"
                                                            height="35"
                                                            src="https://img.icons8.com/doodle/48/shopping-cart--v1.png"
                                                            alt="shopping-cart--v1"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- sao cho ở ngoài position lại ăn theo body -->
                                            <!-- <div class="product-action">
                                                <p>a</p>
                                                <p>b</p>
                                            </div> -->
                                            <!-- button hiển thị giá trị gảim giá của 1 cart là bao nhiêu -->
                                            <div class="product-badges"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-category">Snack</div>
                                            <h2 class="product-name">
                                                <a href="#"> Seeds of Change Organic Quinoa, Brown </a>
                                            </h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate">
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="product-jubge" style="display: none"></div>
                                            </div>
                                            <div class="product-cart-bottom">
                                                <p>1000$</p>
                                                <p class="old-price">2000đ</p>
                                                <div class="product-price">
                                                    <p>1000$</p>
                                                    <p class="old-price">2000đ</p>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="#">
                                                        <i class="me-2 fa-solid fa-cart-shopping"></i><span>Add</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="product-cart">
                                        <div class="product-img-action">
                                            <div class="product-cart-img">
                                                <a href="#">
                                                    <img
                                                        class="default-img"
                                                        src="{{ url('client') }}/assets/img/product-1-1.jpg"
                                                        alt=""
                                                    />
                                                    <!-- <img class="hover-img" src="{{ url('client') }}/assets/img/product-1-2.jpg" alt="" /> -->
                                                </a>
                                                <div class="product-action">
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            width="35"
                                                            height="35"
                                                            class="translatex"
                                                            src="https://img.icons8.com/external-ddara-fill-ddara/64/external-eye-eye-ddara-fill-ddara.png"
                                                            alt="external-eye-eye-ddara-fill-ddara"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="37"
                                                            height="37"
                                                            src="https://img.icons8.com/bubbles/50/half-heart.png"
                                                            alt="half-heart"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="35"
                                                            height="35"
                                                            src="https://img.icons8.com/doodle/48/shopping-cart--v1.png"
                                                            alt="shopping-cart--v1"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- sao cho ở ngoài position lại ăn theo body -->
                                            <!-- <div class="product-action">
                                                <p>a</p>
                                                <p>b</p>
                                            </div> -->
                                            <!-- button hiển thị giá trị gảim giá của 1 cart là bao nhiêu -->
                                            <div class="product-badges"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-category">Snack</div>
                                            <h2 class="product-name">
                                                <a href="#"> Seeds of Change Organic Quinoa, Brown </a>
                                            </h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate">
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="product-jubge" style="display: none"></div>
                                            </div>
                                            <div class="product-cart-bottom">
                                                <p>1000$</p>
                                                <p class="old-price">2000đ</p>
                                                <div class="product-price">
                                                    <p>1000$</p>
                                                    <p class="old-price">2000đ</p>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="#">
                                                        <i class="me-2 fa-solid fa-cart-shopping"></i><span>Add</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="product-cart">
                                        <div class="product-img-action">
                                            <div class="product-cart-img">
                                                <a href="#">
                                                    <img
                                                        class="default-img"
                                                        src="{{ url('client') }}/assets/img/product-1-1.jpg"
                                                        alt=""
                                                    />
                                                    <!-- <img class="hover-img" src="{{ url('client') }}/assets/img/product-1-2.jpg" alt="" /> -->
                                                </a>
                                                <div class="product-action">
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            width="35"
                                                            height="35"
                                                            class="translatex"
                                                            src="https://img.icons8.com/external-ddara-fill-ddara/64/external-eye-eye-ddara-fill-ddara.png"
                                                            alt="external-eye-eye-ddara-fill-ddara"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="37"
                                                            height="37"
                                                            src="https://img.icons8.com/bubbles/50/half-heart.png"
                                                            alt="half-heart"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="35"
                                                            height="35"
                                                            src="https://img.icons8.com/doodle/48/shopping-cart--v1.png"
                                                            alt="shopping-cart--v1"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- sao cho ở ngoài position lại ăn theo body -->
                                            <!-- <div class="product-action">
                                                <p>a</p>
                                                <p>b</p>
                                            </div> -->
                                            <!-- button hiển thị giá trị gảim giá của 1 cart là bao nhiêu -->
                                            <div class="product-badges"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-category">Snack</div>
                                            <h2 class="product-name">
                                                <a href="#"> Seeds of Change Organic Quinoa, Brown </a>
                                            </h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate">
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="product-jubge" style="display: none"></div>
                                            </div>
                                            <div class="product-cart-bottom">
                                                <p>1000$</p>
                                                <p class="old-price">2000đ</p>
                                                <div class="product-price">
                                                    <p>1000$</p>
                                                    <p class="old-price">2000đ</p>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="#">
                                                        <i class="me-2 fa-solid fa-cart-shopping"></i><span>Add</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="product-cart">
                                        <div class="product-img-action">
                                            <div class="product-cart-img">
                                                <a href="#">
                                                    <img
                                                        class="default-img"
                                                        src="{{ url('client') }}/assets/img/product-1-1.jpg"
                                                        alt=""
                                                    />
                                                    <!-- <img class="hover-img" src="{{ url('client') }}/assets/img/product-1-2.jpg" alt="" /> -->
                                                </a>
                                                <div class="product-action">
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            width="35"
                                                            height="35"
                                                            class="translatex"
                                                            src="https://img.icons8.com/external-ddara-fill-ddara/64/external-eye-eye-ddara-fill-ddara.png"
                                                            alt="external-eye-eye-ddara-fill-ddara"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="37"
                                                            height="37"
                                                            src="https://img.icons8.com/bubbles/50/half-heart.png"
                                                            alt="half-heart"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="35"
                                                            height="35"
                                                            src="https://img.icons8.com/doodle/48/shopping-cart--v1.png"
                                                            alt="shopping-cart--v1"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- sao cho ở ngoài position lại ăn theo body -->
                                            <!-- <div class="product-action">
                                                <p>a</p>
                                                <p>b</p>
                                            </div> -->
                                            <!-- button hiển thị giá trị gảim giá của 1 cart là bao nhiêu -->
                                            <div class="product-badges"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-category">Snack</div>
                                            <h2 class="product-name">
                                                <a href="#"> Seeds of Change Organic Quinoa, Brown </a>
                                            </h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate">
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="product-jubge" style="display: none"></div>
                                            </div>
                                            <div class="product-cart-bottom">
                                                <p>1000$</p>
                                                <p class="old-price">2000đ</p>
                                                <div class="product-price">
                                                    <p>1000$</p>
                                                    <p class="old-price">2000đ</p>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="#">
                                                        <i class="me-2 fa-solid fa-cart-shopping"></i><span>Add</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="product-cart">
                                        <div class="product-img-action">
                                            <div class="product-cart-img">
                                                <a href="#">
                                                    <img
                                                        class="default-img"
                                                        src="{{ url('client') }}/assets/img/product-1-1.jpg"
                                                        alt=""
                                                    />
                                                    <!-- <img class="hover-img" src="{{ url('client') }}/assets/img/product-1-2.jpg" alt="" /> -->
                                                </a>
                                                <div class="product-action">
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            width="35"
                                                            height="35"
                                                            class="translatex"
                                                            src="https://img.icons8.com/external-ddara-fill-ddara/64/external-eye-eye-ddara-fill-ddara.png"
                                                            alt="external-eye-eye-ddara-fill-ddara"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="37"
                                                            height="37"
                                                            src="https://img.icons8.com/bubbles/50/half-heart.png"
                                                            alt="half-heart"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="35"
                                                            height="35"
                                                            src="https://img.icons8.com/doodle/48/shopping-cart--v1.png"
                                                            alt="shopping-cart--v1"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- sao cho ở ngoài position lại ăn theo body -->
                                            <!-- <div class="product-action">
                                                <p>a</p>
                                                <p>b</p>
                                            </div> -->
                                            <!-- button hiển thị giá trị gảim giá của 1 cart là bao nhiêu -->
                                            <div class="product-badges"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-category">Snack</div>
                                            <h2 class="product-name">
                                                <a href="#"> Seeds of Change Organic Quinoa, Brown </a>
                                            </h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate">
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="product-jubge" style="display: none"></div>
                                            </div>
                                            <div class="product-cart-bottom">
                                                <p>1000$</p>
                                                <p class="old-price">2000đ</p>
                                                <div class="product-price">
                                                    <p>1000$</p>
                                                    <p class="old-price">2000đ</p>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="#">
                                                        <i class="me-2 fa-solid fa-cart-shopping"></i><span>Add</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="product-cart">
                                        <div class="product-img-action">
                                            <div class="product-cart-img">
                                                <a href="#">
                                                    <img
                                                        class="default-img"
                                                        src="{{ url('client') }}/assets/img/product-1-1.jpg"
                                                        alt=""
                                                    />
                                                    <!-- <img class="hover-img" src="{{ url('client') }}/assets/img/product-1-2.jpg" alt="" /> -->
                                                </a>
                                                <div class="product-action">
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            width="35"
                                                            height="35"
                                                            class="translatex"
                                                            src="https://img.icons8.com/external-ddara-fill-ddara/64/external-eye-eye-ddara-fill-ddara.png"
                                                            alt="external-eye-eye-ddara-fill-ddara"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="37"
                                                            height="37"
                                                            src="https://img.icons8.com/bubbles/50/half-heart.png"
                                                            alt="half-heart"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="35"
                                                            height="35"
                                                            src="https://img.icons8.com/doodle/48/shopping-cart--v1.png"
                                                            alt="shopping-cart--v1"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- sao cho ở ngoài position lại ăn theo body -->
                                            <!-- <div class="product-action">
                                                <p>a</p>
                                                <p>b</p>
                                            </div> -->
                                            <!-- button hiển thị giá trị gảim giá của 1 cart là bao nhiêu -->
                                            <div class="product-badges"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-category">Snack</div>
                                            <h2 class="product-name">
                                                <a href="#"> Seeds of Change Organic Quinoa, Brown </a>
                                            </h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate">
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="product-jubge" style="display: none"></div>
                                            </div>
                                            <div class="product-cart-bottom">
                                                <p>1000$</p>
                                                <p class="old-price">2000đ</p>
                                                <div class="product-price">
                                                    <p>1000$</p>
                                                    <p class="old-price">2000đ</p>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="#">
                                                        <i class="me-2 fa-solid fa-cart-shopping"></i><span>Add</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="product-cart">
                                        <div class="product-img-action">
                                            <div class="product-cart-img">
                                                <a href="#">
                                                    <img
                                                        class="default-img"
                                                        src="{{ url('client') }}/assets/img/product-1-1.jpg"
                                                        alt=""
                                                    />
                                                    <!-- <img class="hover-img" src="{{ url('client') }}/assets/img/product-1-2.jpg" alt="" /> -->
                                                </a>
                                                <div class="product-action">
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            width="35"
                                                            height="35"
                                                            class="translatex"
                                                            src="https://img.icons8.com/external-ddara-fill-ddara/64/external-eye-eye-ddara-fill-ddara.png"
                                                            alt="external-eye-eye-ddara-fill-ddara"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="37"
                                                            height="37"
                                                            src="https://img.icons8.com/bubbles/50/half-heart.png"
                                                            alt="half-heart"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="35"
                                                            height="35"
                                                            src="https://img.icons8.com/doodle/48/shopping-cart--v1.png"
                                                            alt="shopping-cart--v1"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- sao cho ở ngoài position lại ăn theo body -->
                                            <!-- <div class="product-action">
                                                <p>a</p>
                                                <p>b</p>
                                            </div> -->
                                            <!-- button hiển thị giá trị gảim giá của 1 cart là bao nhiêu -->
                                            <div class="product-badges"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-category">Snack</div>
                                            <h2 class="product-name">
                                                <a href="#"> Seeds of Change Organic Quinoa, Brown </a>
                                            </h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate">
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="product-jubge" style="display: none"></div>
                                            </div>
                                            <div class="product-cart-bottom">
                                                <p>1000$</p>
                                                <p class="old-price">2000đ</p>
                                                <div class="product-price">
                                                    <p>1000$</p>
                                                    <p class="old-price">2000đ</p>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="#">
                                                        <i class="me-2 fa-solid fa-cart-shopping"></i><span>Add</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Top Sale Products -->
                <div class="container featured-product">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row g-3 product-featured-desciption">
                                <div class="des-top">
                                    <p class="scrolling-text_">Product</p>
                                </div>
                                <div class="des-bottom">
                                    <span>Products</span>
                                    <h2>Top Sale</h2>
                                </div>
                            </div>
                            <div class="nav-tab-icon" style="text-align: end">
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
                                <div class="col-md-3">
                                    <div class="product-cart">
                                        <div class="product-img-action">
                                            <div class="product-cart-img">
                                                <a href="#">
                                                    <img
                                                        class="default-img"
                                                        src="{{ url('client') }}/assets/img/product-1-1.jpg"
                                                        alt=""
                                                    />
                                                    <!-- <img class="hover-img" src="{{ url('client') }}/assets/img/product-1-2.jpg" alt="" /> -->
                                                </a>
                                                <div class="product-action">
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            width="35"
                                                            height="35"
                                                            class="translatex"
                                                            src="https://img.icons8.com/external-ddara-fill-ddara/64/external-eye-eye-ddara-fill-ddara.png"
                                                            alt="external-eye-eye-ddara-fill-ddara"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="37"
                                                            height="37"
                                                            src="https://img.icons8.com/bubbles/50/half-heart.png"
                                                            alt="half-heart"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="35"
                                                            height="35"
                                                            src="https://img.icons8.com/doodle/48/shopping-cart--v1.png"
                                                            alt="shopping-cart--v1"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- sao cho ở ngoài position lại ăn theo body -->
                                            <!-- <div class="product-action">
                                                <p>a</p>
                                                <p>b</p>
                                            </div> -->
                                            <!-- button hiển thị giá trị gảim giá của 1 cart là bao nhiêu -->
                                            <div class="product-badges"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-category">Snack</div>
                                            <h2 class="product-name">
                                                <a href="#"> Seeds of Change Organic Quinoa, Brown </a>
                                            </h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate">
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="product-jubge" style="display: none"></div>
                                            </div>
                                            <div class="product-cart-bottom">
                                                <p>1000$</p>
                                                <p class="old-price">2000đ</p>
                                                <div class="product-price">
                                                    <p>1000$</p>
                                                    <p class="old-price">2000đ</p>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="#">
                                                        <i class="me-2 fa-solid fa-cart-shopping"></i><span>Add</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="product-cart">
                                        <div class="product-img-action">
                                            <div class="product-cart-img">
                                                <a href="#">
                                                    <img
                                                        class="default-img"
                                                        src="{{ url('client') }}/assets/img/product-1-1.jpg"
                                                        alt=""
                                                    />
                                                    <!-- <img class="hover-img" src="{{ url('client') }}/assets/img/product-1-2.jpg" alt="" /> -->
                                                </a>
                                                <div class="product-action">
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            width="35"
                                                            height="35"
                                                            class="translatex"
                                                            src="https://img.icons8.com/external-ddara-fill-ddara/64/external-eye-eye-ddara-fill-ddara.png"
                                                            alt="external-eye-eye-ddara-fill-ddara"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="37"
                                                            height="37"
                                                            src="https://img.icons8.com/bubbles/50/half-heart.png"
                                                            alt="half-heart"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="35"
                                                            height="35"
                                                            src="https://img.icons8.com/doodle/48/shopping-cart--v1.png"
                                                            alt="shopping-cart--v1"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- sao cho ở ngoài position lại ăn theo body -->
                                            <!-- <div class="product-action">
                                                <p>a</p>
                                                <p>b</p>
                                            </div> -->
                                            <!-- button hiển thị giá trị gảim giá của 1 cart là bao nhiêu -->
                                            <div class="product-badges"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-category">Snack</div>
                                            <h2 class="product-name">
                                                <a href="#"> Seeds of Change Organic Quinoa, Brown </a>
                                            </h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate">
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="product-jubge" style="display: none"></div>
                                            </div>
                                            <div class="product-cart-bottom">
                                                <p>1000$</p>
                                                <p class="old-price">2000đ</p>
                                                <div class="product-price">
                                                    <p>1000$</p>
                                                    <p class="old-price">2000đ</p>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="#">
                                                        <i class="me-2 fa-solid fa-cart-shopping"></i><span>Add</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="product-cart">
                                        <div class="product-img-action">
                                            <div class="product-cart-img">
                                                <a href="#">
                                                    <img
                                                        class="default-img"
                                                        src="{{ url('client') }}/assets/img/product-1-1.jpg"
                                                        alt=""
                                                    />
                                                    <!-- <img class="hover-img" src="{{ url('client') }}/assets/img/product-1-2.jpg" alt="" /> -->
                                                </a>
                                                <div class="product-action">
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            width="35"
                                                            height="35"
                                                            class="translatex"
                                                            src="https://img.icons8.com/external-ddara-fill-ddara/64/external-eye-eye-ddara-fill-ddara.png"
                                                            alt="external-eye-eye-ddara-fill-ddara"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="37"
                                                            height="37"
                                                            src="https://img.icons8.com/bubbles/50/half-heart.png"
                                                            alt="half-heart"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="35"
                                                            height="35"
                                                            src="https://img.icons8.com/doodle/48/shopping-cart--v1.png"
                                                            alt="shopping-cart--v1"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- sao cho ở ngoài position lại ăn theo body -->
                                            <!-- <div class="product-action">
                                                <p>a</p>
                                                <p>b</p>
                                            </div> -->
                                            <!-- button hiển thị giá trị gảim giá của 1 cart là bao nhiêu -->
                                            <div class="product-badges"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-category">Snack</div>
                                            <h2 class="product-name">
                                                <a href="#"> Seeds of Change Organic Quinoa, Brown </a>
                                            </h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate">
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="product-jubge" style="display: none"></div>
                                            </div>
                                            <div class="product-cart-bottom">
                                                <p>1000$</p>
                                                <p class="old-price">2000đ</p>
                                                <div class="product-price">
                                                    <p>1000$</p>
                                                    <p class="old-price">2000đ</p>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="#">
                                                        <i class="me-2 fa-solid fa-cart-shopping"></i><span>Add</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="product-cart">
                                        <div class="product-img-action">
                                            <div class="product-cart-img">
                                                <a href="#">
                                                    <img
                                                        class="default-img"
                                                        src="{{ url('client') }}/assets/img/product-1-1.jpg"
                                                        alt=""
                                                    />
                                                    <!-- <img class="hover-img" src="{{ url('client') }}/assets/img/product-1-2.jpg" alt="" /> -->
                                                </a>
                                                <div class="product-action">
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            width="35"
                                                            height="35"
                                                            class="translatex"
                                                            src="https://img.icons8.com/external-ddara-fill-ddara/64/external-eye-eye-ddara-fill-ddara.png"
                                                            alt="external-eye-eye-ddara-fill-ddara"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="37"
                                                            height="37"
                                                            src="https://img.icons8.com/bubbles/50/half-heart.png"
                                                            alt="half-heart"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="35"
                                                            height="35"
                                                            src="https://img.icons8.com/doodle/48/shopping-cart--v1.png"
                                                            alt="shopping-cart--v1"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- sao cho ở ngoài position lại ăn theo body -->
                                            <!-- <div class="product-action">
                                                <p>a</p>
                                                <p>b</p>
                                            </div> -->
                                            <!-- button hiển thị giá trị gảim giá của 1 cart là bao nhiêu -->
                                            <div class="product-badges"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-category">Snack</div>
                                            <h2 class="product-name">
                                                <a href="#"> Seeds of Change Organic Quinoa, Brown </a>
                                            </h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate">
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="product-jubge" style="display: none"></div>
                                            </div>
                                            <div class="product-cart-bottom">
                                                <p>1000$</p>
                                                <p class="old-price">2000đ</p>
                                                <div class="product-price">
                                                    <p>1000$</p>
                                                    <p class="old-price">2000đ</p>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="#">
                                                        <i class="me-2 fa-solid fa-cart-shopping"></i><span>Add</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="product-cart">
                                        <div class="product-img-action">
                                            <div class="product-cart-img">
                                                <a href="#">
                                                    <img
                                                        class="default-img"
                                                        src="{{ url('client') }}/assets/img/product-1-1.jpg"
                                                        alt=""
                                                    />
                                                    <!-- <img class="hover-img" src="{{ url('client') }}/assets/img/product-1-2.jpg" alt="" /> -->
                                                </a>
                                                <div class="product-action">
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            width="35"
                                                            height="35"
                                                            class="translatex"
                                                            src="https://img.icons8.com/external-ddara-fill-ddara/64/external-eye-eye-ddara-fill-ddara.png"
                                                            alt="external-eye-eye-ddara-fill-ddara"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="37"
                                                            height="37"
                                                            src="https://img.icons8.com/bubbles/50/half-heart.png"
                                                            alt="half-heart"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="35"
                                                            height="35"
                                                            src="https://img.icons8.com/doodle/48/shopping-cart--v1.png"
                                                            alt="shopping-cart--v1"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- sao cho ở ngoài position lại ăn theo body -->
                                            <!-- <div class="product-action">
                                                <p>a</p>
                                                <p>b</p>
                                            </div> -->
                                            <!-- button hiển thị giá trị gảim giá của 1 cart là bao nhiêu -->
                                            <div class="product-badges"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-category">Snack</div>
                                            <h2 class="product-name">
                                                <a href="#"> Seeds of Change Organic Quinoa, Brown </a>
                                            </h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate">
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="product-jubge" style="display: none"></div>
                                            </div>
                                            <div class="product-cart-bottom">
                                                <p>1000$</p>
                                                <p class="old-price">2000đ</p>
                                                <div class="product-price">
                                                    <p>1000$</p>
                                                    <p class="old-price">2000đ</p>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="#">
                                                        <i class="me-2 fa-solid fa-cart-shopping"></i><span>Add</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="product-cart">
                                        <div class="product-img-action">
                                            <div class="product-cart-img">
                                                <a href="#">
                                                    <img
                                                        class="default-img"
                                                        src="{{ url('client') }}/assets/img/product-1-1.jpg"
                                                        alt=""
                                                    />
                                                    <!-- <img class="hover-img" src="{{ url('client') }}/assets/img/product-1-2.jpg" alt="" /> -->
                                                </a>
                                                <div class="product-action">
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            width="35"
                                                            height="35"
                                                            class="translatex"
                                                            src="https://img.icons8.com/external-ddara-fill-ddara/64/external-eye-eye-ddara-fill-ddara.png"
                                                            alt="external-eye-eye-ddara-fill-ddara"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="37"
                                                            height="37"
                                                            src="https://img.icons8.com/bubbles/50/half-heart.png"
                                                            alt="half-heart"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="35"
                                                            height="35"
                                                            src="https://img.icons8.com/doodle/48/shopping-cart--v1.png"
                                                            alt="shopping-cart--v1"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- sao cho ở ngoài position lại ăn theo body -->
                                            <!-- <div class="product-action">
                                                <p>a</p>
                                                <p>b</p>
                                            </div> -->
                                            <!-- button hiển thị giá trị gảim giá của 1 cart là bao nhiêu -->
                                            <div class="product-badges"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-category">Snack</div>
                                            <h2 class="product-name">
                                                <a href="#"> Seeds of Change Organic Quinoa, Brown </a>
                                            </h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate">
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="product-jubge" style="display: none"></div>
                                            </div>
                                            <div class="product-cart-bottom">
                                                <p>1000$</p>
                                                <p class="old-price">2000đ</p>
                                                <div class="product-price">
                                                    <p>1000$</p>
                                                    <p class="old-price">2000đ</p>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="#">
                                                        <i class="me-2 fa-solid fa-cart-shopping"></i><span>Add</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="product-cart">
                                        <div class="product-img-action">
                                            <div class="product-cart-img">
                                                <a href="#">
                                                    <img
                                                        class="default-img"
                                                        src="{{ url('client') }}/assets/img/product-1-1.jpg"
                                                        alt=""
                                                    />
                                                    <!-- <img class="hover-img" src="{{ url('client') }}/assets/img/product-1-2.jpg" alt="" /> -->
                                                </a>
                                                <div class="product-action">
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            width="35"
                                                            height="35"
                                                            class="translatex"
                                                            src="https://img.icons8.com/external-ddara-fill-ddara/64/external-eye-eye-ddara-fill-ddara.png"
                                                            alt="external-eye-eye-ddara-fill-ddara"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="37"
                                                            height="37"
                                                            src="https://img.icons8.com/bubbles/50/half-heart.png"
                                                            alt="half-heart"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="35"
                                                            height="35"
                                                            src="https://img.icons8.com/doodle/48/shopping-cart--v1.png"
                                                            alt="shopping-cart--v1"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- sao cho ở ngoài position lại ăn theo body -->
                                            <!-- <div class="product-action">
                                                <p>a</p>
                                                <p>b</p>
                                            </div> -->
                                            <!-- button hiển thị giá trị gảim giá của 1 cart là bao nhiêu -->
                                            <div class="product-badges"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-category">Snack</div>
                                            <h2 class="product-name">
                                                <a href="#"> Seeds of Change Organic Quinoa, Brown </a>
                                            </h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate">
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="product-jubge" style="display: none"></div>
                                            </div>
                                            <div class="product-cart-bottom">
                                                <p>1000$</p>
                                                <p class="old-price">2000đ</p>
                                                <div class="product-price">
                                                    <p>1000$</p>
                                                    <p class="old-price">2000đ</p>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="#">
                                                        <i class="me-2 fa-solid fa-cart-shopping"></i><span>Add</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="product-cart">
                                        <div class="product-img-action">
                                            <div class="product-cart-img">
                                                <a href="#">
                                                    <img
                                                        class="default-img"
                                                        src="{{ url('client') }}/assets/img/product-1-1.jpg"
                                                        alt=""
                                                    />
                                                    <!-- <img class="hover-img" src="{{ url('client') }}/assets/img/product-1-2.jpg" alt="" /> -->
                                                </a>
                                                <div class="product-action">
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            width="35"
                                                            height="35"
                                                            class="translatex"
                                                            src="https://img.icons8.com/external-ddara-fill-ddara/64/external-eye-eye-ddara-fill-ddara.png"
                                                            alt="external-eye-eye-ddara-fill-ddara"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="37"
                                                            height="37"
                                                            src="https://img.icons8.com/bubbles/50/half-heart.png"
                                                            alt="half-heart"
                                                        />
                                                    </a>
                                                    <a href="#" class="product-action-icon">
                                                        <img
                                                            class="translatex"
                                                            width="35"
                                                            height="35"
                                                            src="https://img.icons8.com/doodle/48/shopping-cart--v1.png"
                                                            alt="shopping-cart--v1"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- sao cho ở ngoài position lại ăn theo body -->
                                            <!-- <div class="product-action">
                                                <p>a</p>
                                                <p>b</p>
                                            </div> -->
                                            <!-- button hiển thị giá trị gảim giá của 1 cart là bao nhiêu -->
                                            <div class="product-badges"></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-category">Snack</div>
                                            <h2 class="product-name">
                                                <a href="#"> Seeds of Change Organic Quinoa, Brown </a>
                                            </h2>
                                            <div class="product-rate-cover">
                                                <div class="product-rate">
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="product-jubge" style="display: none"></div>
                                            </div>
                                            <div class="product-cart-bottom">
                                                <p>1000$</p>
                                                <p class="old-price">2000đ</p>
                                                <div class="product-price">
                                                    <p>1000$</p>
                                                    <p class="old-price">2000đ</p>
                                                </div>
                                                <div class="add-cart">
                                                    <a href="#">
                                                        <i class="me-2 fa-solid fa-cart-shopping"></i><span>Add</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="banner-feature-right"></div>
                        </div>
                    </div>
                </div>

                <!-- List Brands -->
                <div class="container list-brands">
                    <div class="row">
                        <!-- Brands Favorite -->
                        <h4 class="list-brand-title">Shop by brands</h4>
                    </div>
                    <div class="row g-3 brand-list">
                        <div class="col-md-2">
                            <div class="brand-item">
                                <a href="#">
                                    <img src="{{ url('client') }}/assets/img/brand_3.png" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="brand-item">
                                <a href="#">
                                    <img src="{{ url('client') }}/assets/img/brand4.png" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="brand-item">
                                <a href="#">
                                    <img src="{{ url('client') }}/assets/img/brand_5.png" alt="" />
                                </a>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="brand-item">
                                <a href="#">
                                    <img src="{{ url('client') }}/assets/img/brand_3.png" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="brand-item">
                                <a href="#">
                                    <img src="{{ url('client') }}/assets/img/brand4.png" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="brand-item">
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
                <div class="container-fluid">
                    <div class="footer-wrap">
                        <div class="row site-footer_top">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="footer-logo">
                                            <a href="#" style="display: block">
                                                <img src="{{ url('client') }}/assets/img/footer_logo-1.png" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="footer-address">
                                            <span
                                                ><img
                                                    style="background-color: white; padding: 5px; border-radius: 50%"
                                                    width="30"
                                                    height="30"
                                                    src="https://img.icons8.com/dusk/64/marker.png"
                                                    alt="marker"
                                            /></span>
                                            <h3>!9 Lô 2 Ngõ 67 Phùng Khoang</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="footer-contact">
                                            <span
                                                ><img
                                                    width="50"
                                                    height="50"
                                                    src="https://img.icons8.com/bubbles/50/phone--v1.png"
                                                    alt="phone--v1"
                                            /></span>
                                            <h3>0123.456.789</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="footer-social">
                                            <ul class="social-list">
                                                <li class="social-item">
                                                    <a href="#" class="social-item-link">
                                                        <img
                                                            class="translate"
                                                            width="30"
                                                            height="30"
                                                            src="https://img.icons8.com/3d-plastilina/69/facebook--v1.png"
                                                            alt="facebook--v1"
                                                        />
                                                    </a>
                                                </li>
                                                <li class="social-item">
                                                    <a href="#" class="social-item-link">
                                                        <img
                                                            class="translate"
                                                            width="30"
                                                            height="30"
                                                            src="https://img.icons8.com/3d-plastilina/69/instagram-new--v1.png"
                                                            alt="instagram-new--v1"
                                                        />
                                                    </a>
                                                </li>
                                                <li class="social-item">
                                                    <a href="#" class="social-item-link">
                                                        <img
                                                            class="translate"
                                                            width="30"
                                                            height="30"
                                                            src="https://img.icons8.com/3d-plastilina/69/twitter--v1.png"
                                                            alt="twitter--v1"
                                                        />
                                                    </a>
                                                </li>
                                                <li class="social-item">
                                                    <a href="#" class="social-item-link">
                                                        <img
                                                            class="translate"
                                                            width="30"
                                                            height="30"
                                                            src="https://img.icons8.com/3d-plastilina/69/linkedin--v2.png"
                                                            alt="linkedin--v2"
                                                        />
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="des-address">
                                            <h3>Your store</h3>
                                            <p>Monday - Friday: 9:00 - 20:00</p>
                                            <p>Saturady: 11:00 - 15:00</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <!-- <h3>Infomation</h3> -->
                                        <ul></ul>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row site-footer_bottom">
                            <p>© 2023,<span>Mixi-Grocery</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Position -->
            <!-- --Cart-sidebar -->
            <div class="cart-sidebar">
                <div class="header-cart-sidebar">
                    <h3>Giỏ hàng</h3>
                    <p class="icon-close-cart">
                        <img
                            width="25"
                            height="25"
                            src="https://img.icons8.com/fluency/48/multiply.png"
                            alt="multiply"
                        />
                    </p>
                </div>
                <hr />
                <div class="body-cart-main">
                    <div class="body-cart-sidebar">
                        <ul class="cart-product-list">
                            <li class="cart-product-item translate">
                                <div class="cart-product-image">
                                    <a href="#">
                                        <img alt="" src="{{ url('client') }}/assets/img/apple.png" />
                                    </a>
                                </div>
                                <div class="cart-product-meta">
                                    <div class="cart-product-des">
                                        <h3>
                                            <a class="cart-product-des-link" href="#"
                                                >Chicken Thighs From mixi with love Chicken Thighs From mixi with love
                                                Chicken Thighs From mixi with love Chicken Thighs From mixi with love</a
                                            >
                                        </h3>
                                        <div class="product-quantity">
                                            <span class="cart-product-price">1 x $23.00</span>
                                            <div class="cart-product-quantity">
                                                <!-- <div class="quantity-button cart-minus">-</div> -->
                                                <input
                                                    type="number"
                                                    class="cart-product-quantity-input"
                                                    value="1"
                                                    min="0"
                                                    max="10"
                                                    inputmode="numeric"
                                                    onchange="()=>{
                                                        saveInputValue(this)
                                                    }"
                                                />
                                                <!-- <div class="quantity-button cart-flus">+</div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#"><i class="fa-solid fa-xmark"></i></a>
                                </div>
                            </li>

                            <li class="cart-product-item translate">
                                <div class="cart-product-image">
                                    <a href="#">
                                        <img alt="" src="{{ url('client') }}/assets/img/apple.png" />
                                    </a>
                                </div>
                                <div class="cart-product-meta">
                                    <div class="cart-product-des">
                                        <h3>
                                            <a class="cart-product-des-link" href="#"
                                                >Chicken Thighs From mixi with love Chicken Thighs From mixi with love
                                                Chicken Thighs From mixi with love Chicken Thighs From mixi with love</a
                                            >
                                        </h3>
                                        <div class="product-quantity">
                                            <span class="cart-product-price">1 x $23.00</span>
                                            <div class="cart-product-quantity">
                                                <!-- <div class="quantity-button cart-minus">-</div> -->
                                                <input
                                                    type="number"
                                                    class="cart-product-quantity-input"
                                                    value="1"
                                                    min="0"
                                                    max="10"
                                                    inputmode="numeric"
                                                    onchange="()=>{
                                                        saveInputValue(this)
                                                    }"
                                                />
                                                <!-- <div class="quantity-button cart-flus">+</div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#"><i class="fa-solid fa-xmark"></i></a>
                                </div>
                            </li>

                            <li class="cart-product-item translate">
                                <div class="cart-product-image">
                                    <a href="#">
                                        <img alt="" src="{{ url('client') }}/assets/img/apple.png" />
                                    </a>
                                </div>
                                <div class="cart-product-meta">
                                    <div class="cart-product-des">
                                        <h3>
                                            <a class="cart-product-des-link" href="#"
                                                >Chicken Thighs From mixi with love Chicken Thighs From mixi with love
                                                Chicken Thighs From mixi with love Chicken Thighs From mixi with love</a
                                            >
                                        </h3>
                                        <div class="product-quantity">
                                            <span class="cart-product-price">1 x $23.00</span>
                                            <div class="cart-product-quantity">
                                                <!-- <div class="quantity-button cart-minus">-</div> -->
                                                <input
                                                    type="number"
                                                    class="cart-product-quantity-input"
                                                    value="1"
                                                    min="0"
                                                    max="10"
                                                    inputmode="numeric"
                                                    onchange="()=>{
                                                        saveInputValue(this)
                                                    }"
                                                />
                                                <!-- <div class="quantity-button cart-flus">+</div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#"><i class="fa-solid fa-xmark"></i></a>
                                </div>
                            </li>

                            <li class="cart-product-item translate">
                                <div class="cart-product-image">
                                    <a href="#">
                                        <img alt="" src="{{ url('client') }}/assets/img/apple.png" />
                                    </a>
                                </div>
                                <div class="cart-product-meta">
                                    <div class="cart-product-des">
                                        <h3>
                                            <a class="cart-product-des-link" href="#"
                                                >Chicken Thighs From mixi with love Chicken Thighs From mixi with love
                                                Chicken Thighs From mixi with love Chicken Thighs From mixi with love</a
                                            >
                                        </h3>
                                        <div class="product-quantity">
                                            <span class="cart-product-price">1 x $23.00</span>
                                            <div class="cart-product-quantity">
                                                <!-- <div class="quantity-button cart-minus">-</div> -->
                                                <input
                                                    type="number"
                                                    class="cart-product-quantity-input"
                                                    value="1"
                                                    min="0"
                                                    max="10"
                                                    inputmode="numeric"
                                                    onchange="()=>{
                                                        saveInputValue(this)
                                                    }"
                                                />
                                                <!-- <div class="quantity-button cart-flus">+</div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#"><i class="fa-solid fa-xmark"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-cart-sidebar">
                        <p class="cart-total">Tổng: <span class="cart-product-price">$58.11</span></p>
                        <p class="btn-cart">
                            <a href="#" class="btn-view-cart">View Cart</a>
                            <a href="#" class="btn-check-out translate">Check out</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

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
    </body>
</html>