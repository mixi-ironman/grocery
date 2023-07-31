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
        <link rel="stylesheet" href="{{ url('client') }}/assets/css/main.css" />
        <link rel="stylesheet" href="{{ url('client') }}/assets/css/filter.css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.css" />
        <title>Document</title>
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
                                    {{-- <div class="mini-cart"> --}}
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
                                    {{-- </div> --}}
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
                                                <h3>Mixi Grocery</h3>
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

            <!-- Filter Product -->
            <div class="container filter-product">
                <!-- Banner-header -->
                <div class="banner-product-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bgr-banner-shop"></div>
                        </div>
                    </div>
                </div>

                <!-- Content-filter -->
                <div class="filter-product">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="sidebar-area-wrap">
                                <form name="product-filter" class="product-filter" method="POST">
                                    <!-- filer product category -->
                                    <div class="filter-category-name">
                                        <h4>Category</h4>
                                        <div class="product-category">
                                            <ul class="product-category-list" data-name="category" data-columns="2">
                                                <li class="product-category-item">
                                                    <a
                                                        href="#"
                                                        class="product-category-link"
                                                        data-id="1"
                                                        data-value="Adidas"
                                                        >Milks & Dairies <span class="quantity-product" style="opacity:0;">30</span></a
                                                    >
                                                </li>
                                                <li class="product-category-item">
                                                    <a
                                                        href="#"
                                                        class="product-category-link"
                                                        data-id="1"
                                                        data-value="Adidas"
                                                        >Vegetables <span class="quantity-product" style="opacity:0;">30</span></a
                                                    >
                                                </li>
                                                <li class="product-category-item">
                                                    <a
                                                        href="#"
                                                        class="product-category-link"
                                                        data-id="1"
                                                        data-value="Adidas"
                                                        >Means <span class="quantity-product" style="opacity:0;">30</span></a
                                                    >
                                                </li>
                                                <li class="product-category-item">
                                                    <a
                                                        href="#"
                                                        class="product-category-link"
                                                        data-id="1"
                                                        data-value="Adidas"
                                                        >Means <span class="quantity-product" style="opacity:0;">30</span></a
                                                    >
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- filter product frice -->
                                    <div class="price-slider sidebar-widget">
                                        <div class="price-ranger">
                                            <h4>Filter By Price</h4>
                                            <div
                                                id="price-slider"
                                                style="border: 1px solid #ccc; border-radius: 4px"
                                            ></div>
                                            <div class="filter-price">
                                                <div class="show-value-range">
                                                    Price: $<span class="min_">0</span> - $<span class="max_">100</span>
                                                </div>
                                                <button class="btn-filter-price translate" type="submit">Filter</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- filter brand name -->
                                    <div class="filter-brand-wrap" style="opacity: 0">
                                        <h4>Brand</h4>
                                        <div class="brand-name">
                                            <ul class="list-brand">
                                                <li class="brand-name-item">
                                                    <input type="checkbox" name="" id="" value="adidas" />
                                                    <label for=""> Adidas</label>
                                                </li>
                                                <li class="brand-name-item">
                                                    <input type="checkbox" name="" id="" value="adidas" />
                                                    <label for=""> Adidas</label>
                                                </li>
                                                <li class="brand-name-item">
                                                    <input type="checkbox" name="" id="" value="adidas" />
                                                    <label for=""> Adidas</label>
                                                </li>
                                                <li class="brand-name-item">
                                                    <input type="checkbox" name="" id="" value="adidas" />
                                                    <label for=""> Adidas</label>
                                                </li>
                                                <li class="brand-name-item">
                                                    <input type="checkbox" name="" id="" value="adidas" />
                                                    <label for=""> Adidas</label>
                                                </li>
                                                <li class="brand-name-item">
                                                    <input type="checkbox" name="" id="" value="adidas" />
                                                    <label for=""> Adidas</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="product-content-area">
                                <div class="row">
                                    <div class="shop-product-filter">
                                        <div class="total-product">
                                            <p style="opacity: 0">We found <strong>29</strong> items</p>
                                        </div>

                                        <div class="sort-by-product-area">
                                            <div class="sort-by-cover sort-by-cover_left" style="opacity:0">
                                                <div class="sort-by">
                                                    <img
                                                        width="25"
                                                        height="25"
                                                        src="https://img.icons8.com/fluency/48/sorting-answers.png"
                                                        alt="sorting-answers"
                                                    />
                                                    <span>Show: </span><span>50</span
                                                    ><span
                                                        ><i
                                                            class="fa-solid fa-layer-group"
                                                            style="margin-left: 10px"
                                                        ></i
                                                    ></span>
                                                </div>

                                                <div class="sort-by-dropdown-quantity" >
                                                    <ul>
                                                        <li><a href="#">50</a></li>
                                                        <li><a href="#">60</a></li>
                                                        <li><a href="#">70</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="sort-by-cover sort-by-cover_right">
                                                <div class="sort-by-product-atribute">
                                                    <div class="sort-by">
                                                        <img
                                                            width="25"
                                                            height="25"
                                                            src="https://img.icons8.com/fluency/48/sort-by.png"
                                                            alt="sort-by"
                                                        /><span>Sort by:</span><span>Featured</span>
                                                    </div>
                                                </div>
                                                <div class="sort-by-dropdown-atribute">
                                                    <ul class="atribute-list">
                                                        <li class="atribute-item">
                                                            <a href="#">Featured</a>
                                                        </li>
                                                        <li class="atribute-item">
                                                            <a href="#">Price: Low to High</a>
                                                        </li>
                                                        <li class="atribute-item">
                                                            <a href="#">Price: High to Low </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid row product-filter g-3">
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
                                                    <div class="product-price">
                                                        <p>1000$</p>
                                                        <p class="old-price">2000đ</p>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a href="#">
                                                            <i class="me-2 fa-solid fa-cart-shopping"></i
                                                            ><span>Add</span>
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
                                                    <div class="product-price">
                                                        <p>1000$</p>
                                                        <p class="old-price">2000đ</p>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a href="#">
                                                            <i class="me-2 fa-solid fa-cart-shopping"></i
                                                            ><span>Add</span>
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
                                                    <div class="product-price">
                                                        <p>1000$</p>
                                                        <p class="old-price">2000đ</p>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a href="#">
                                                            <i class="me-2 fa-solid fa-cart-shopping"></i
                                                            ><span>Add</span>
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
                                                    <div class="product-price">
                                                        <p>1000$</p>
                                                        <p class="old-price">2000đ</p>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a href="#">
                                                            <i class="me-2 fa-solid fa-cart-shopping"></i
                                                            ><span>Add</span>
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
                                                    <div class="product-price">
                                                        <p>1000$</p>
                                                        <p class="old-price">2000đ</p>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a href="#">
                                                            <i class="me-2 fa-solid fa-cart-shopping"></i
                                                            ><span>Add</span>
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
                                                    <div class="product-price">
                                                        <p>1000$</p>
                                                        <p class="old-price">2000đ</p>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a href="#">
                                                            <i class="me-2 fa-solid fa-cart-shopping"></i
                                                            ><span>Add</span>
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
                                                    <div class="product-price">
                                                        <p>1000$</p>
                                                        <p class="old-price">2000đ</p>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a href="#">
                                                            <i class="me-2 fa-solid fa-cart-shopping"></i
                                                            ><span>Add</span>
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
                </div>
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
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.js"></script>
        <script>
            const app = {
                scrollHeader() {
                    window.addEventListener('scroll', function () {
                        var stickyElement = document.querySelector('.nav-container');
                        var contentOffsetTop = document.querySelector('.filter-product');
                        console.log('hello');
                        if (contentOffsetTop) {
                            // Kiểm tra xem phần tử có tồn tại hay không
                            const topPosition = contentOffsetTop.offsetTop;
                            if (window.scrollY >= topPosition) {
                                stickyElement.classList.add('sticky');
                            } else {
                                stickyElement.classList.remove('sticky');
                            }
                        }
                    });
                },
                inputRange() {
                    const $ = document.querySelector.bind(document);
                    const $$ = document.querySelectorAll.bind(document);
                    const priceSlider = document.getElementById('price-slider');
                    const start_ = $('.min_');
                    const end_ = $('.max_');
                    noUiSlider.create(priceSlider, {
                        start: [0, 100],
                        connect: true,
                        range: {
                            min: 0,
                            max: 100,
                        },
                    });

                    priceSlider.noUiSlider.on('update', function (values, handle) {
                        start_.innerText = Math.round(values[0]);
                        end_.innerText = Math.round(values[1]);

                        // Gọi hàm filter sản phẩm dựa trên giá trị tối thiểu và tối đa
                        filterProductsByPriceRange(values[0], values[1]);
                    });

                    function filterProductsByPriceRange(minPrice, maxPrice) {
                        // Thực hiện các thao tác filter sản phẩm với giá trị tối thiểu và tối đa đã chọn
                    }
                },

                run() {
                    this.inputRange();
                    this.scrollHeader();
                },
            };

            app.run();
        </script>
    </body>
</html>
