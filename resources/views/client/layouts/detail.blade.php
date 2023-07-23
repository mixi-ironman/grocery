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
        <link rel="stylesheet" href="./assets/css/global.css" />
        <link rel="stylesheet" href="./assets/css/main.css" />
        <link rel="stylesheet" href="./assets/css/detail.css" />
        <title>Mixi-Market</title>
    </head>
    <body>
        <!-- Header -->
        <div class="header">
            <!-- header-top -->
            <div class="container header-top">
                <div class="row header-top-wrapper">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <!-- Header-logo -->
                        <div class="header-logo">
                            <a href="#">
                                <img src="./assets/img/logo.jpg" alt="logo" />
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
                                                        src="./assets/img/fruits-icon.png"
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
                                                        src="./assets/img/salad-icon.png"
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
                                                        src="./assets/img/vegetable-icon.png"
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
                                                        src="./assets/img/juices-icon.png"
                                                        alt="juices"
                                                        class="mega-dropdown_toggle-img"
                                                    />
                                                    <span class="mega-dropdown_toggle-title">Juices</span>
                                                </a>
                                            </li>
                                            <li class="dropdown nosub">
                                                <a href="#" class="mega-dropdown_toggle">
                                                    <img
                                                        src="./assets/img/fish-icon.png"
                                                        alt="juices"
                                                        class="mega-dropdown_toggle-img"
                                                    />
                                                    <span class="mega-dropdown_toggle-title">Sea food</span>
                                                </a>
                                            </li>
                                            <li class="dropdown nosub">
                                                <a href="#" class="mega-dropdown_toggle">
                                                    <img
                                                        src="./assets/img/driyfruits-icon.png"
                                                        alt="juices"
                                                        class="mega-dropdown_toggle-img"
                                                    />
                                                    <span class="mega-dropdown_toggle-title">Dried Fruit</span>
                                                </a>
                                            </li>

                                            <li class="dropdown more-menu">
                                                <a href="#" class="mega-dropdown_toggle">
                                                    <img
                                                        src="./assets/img/meat-icon.png"
                                                        alt="juices"
                                                        class="mega-dropdown_toggle-img"
                                                    />
                                                    <span class="mega-dropdown_toggle-title">Fresh Meats</span>
                                                </a>
                                            </li>

                                            <li class="dropdown">
                                                <a href="#" class="mega-dropdown_toggle">
                                                    <img
                                                        src="./assets/img/dairy-icon.png"
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

        <!-- Detail-Product -->
        <div class="container">
            <div class="product-view">
                <div class="product-essential">
                    <div class="row">
                        <div class="col-12 col-xl-6 col-lg-6 col-md-6">
                            <div class="product-img-box">
                                <div class="product-img-full">
                                    <img src="./assets/img/detail_product-1.jpg" alt="" class="product-img" />
                                </div>
                                <hr />
                                <div class="more-view-list">
                                    <div class="more-view-item">
                                        <img class="more-view-img" src="./assets/img/detail-1-more.jpg" alt="" />
                                    </div>

                                    <div class="more-view-item">
                                        <img class="more-view-img" src="./assets/img/detail-more-2.jpg" alt="" />
                                    </div>

                                    <div class="more-view-item">
                                        <img class="more-view-img" src="./assets/img/detail-1-more.jpg" alt="" />
                                    </div>

                                    <div class="more-view-item">
                                        <img class="more-view-img" src="./assets/img/detail-more-2.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-6 col-lg-6 col-md-6">
                            <div class="product-summary">
                                <div class="product-name">
                                    <h1>Fresh Organically Grown Delicious Blue Grapes</h1>
                                </div>
                                <div class="product-rating">
                                    <div class="star-rating">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <span>32 reviews</span>
                                </div>
                                <div class="product-price-current">
                                    <p class="special-price">309.99$</p>
                                    <p class="old-price">315.99$</p>
                                </div>
                                <!-- <div class="product-detail-description" style="display: none">
                                    <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error saepe excepturi
                                        beatae corporis quis tenetur debitis quod,
                                    </p>
                                </div> -->
                                <div class="product-unit">
                                    <p class="title">Unit :</p>
                                    <p class="value">Pack</p>
                                </div>
                                <div class="product-vendor">
                                    <p class="vendor-title">Vendor :</p>
                                    <p class="vendor-name">Suite</p>
                                </div>
                                <div class="product-category">
                                    <p class="category-title">Type :</p>
                                    <p class="category-name">Cookie</p>
                                </div>
                                <div class="product-availability">
                                    <p class="availability-title">Availability :</p>
                                    <p class="in-stock">72 in stock</p>
                                </div>

                                <div class="add-to-cart">
                                    <form action="">
                                        <div class="full-left">
                                            <div class="quantity">
                                                <button type="button">
                                                    <i class="fa-solid fa-minus icon-minus"></i>
                                                </button>
                                                <!-- <input type="number" name="quatity" id="" value="1" max-length="12" /> -->
                                                <input
                                                    type="text"
                                                    inputmode="numeric"
                                                    name="quatity"
                                                    id=""
                                                    value="1"
                                                    max-length="12"
                                                    class="input-quantity"
                                                />
                                                <button type="button">
                                                    <i class="fa-solid fa-plus icon-flus"></i>
                                                </button>
                                            </div>
                                            <button type="submit" name="add-to-cart" class="btn-add-cart">
                                                <i class="fa-solid fa-cart-shopping"></i
                                                ><span class="btn-add">ADD TO CART</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <hr />
                                <!-- <hr
                                    style="
                                        border: 1px solid;
                                        border-image: linear-gradient(to right, #81ffb1, #ff6fe0) 1;
                                    "
                                /> -->
                                <div class="share-social">
                                    <p>Share :</p>
                                    <div class="share-social-icon">
                                        <a href="#" class="share-social-link">
                                            <img
                                                width="30"
                                                height="30"
                                                src="https://img.icons8.com/fluency/48/facebook-circled.png"
                                                alt="facebook-circled"
                                        /></a>

                                        <a href="#" class="share-social-link">
                                            <img
                                                width="32"
                                                height="32"
                                                src="https://img.icons8.com/fluency/48/instagram-new.png"
                                                alt="instagram-new"
                                            />
                                        </a>

                                        <a href="#" class="share-social-link"
                                            ><img
                                                width="30"
                                                height="30"
                                                src="https://img.icons8.com/fluency/48/twitter.png"
                                                alt="twitter"
                                        /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product-info  -->
            <div class="product-info">
                <!-- Tab items -->
                <div class="tabs">
                    <div class="tab-item active">
                        <img width="25" height="25" src="https://img.icons8.com/fluency/48/content.png" alt="content" />
                        <span> Description</span>
                    </div>
                    <div class="tab-item">
                        <img
                            width="25"
                            height="25"
                            src="https://img.icons8.com/fluency/48/feedback-hub.png"
                            alt="feedback-hub"
                        />
                        <span> Reviews</span>
                    </div>

                    <div class="line"></div>
                </div>

                <!-- Tab content -->

                <div class="tab-pane active">
                    <h2>React</h2>
                    <p>
                        React makes it painless to create interactive UIs. Design simple views for each state in your
                        application, and React will efficiently update and render just the right components when your
                        data changes.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet Sonsectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Busey ipsum dolor sit amet Tortor
                        at auctor urna nunc id cursus metus aliquam. Odio tempor orci dapibus ultrices. Tortor
                        condimentum lacinia quis vel eros donec ac odio. Velit euismod in pellentesque massa placerat
                        duis ultricies lacus. Scelerisque purus semper eget duis at tellus at urna condimentum. Eu
                        facilisis sed odio morbi quis commodo odio aenean urpis massa sed elemen. Vestibulum sit amet
                        ipsum Praesent vestibulum congue tellus at fringilla. Curabitur vitae semper sem, eu convallis
                        est. Cras felis nunc commodo eu convallis vitae interdum non nisl. Maecenas ac est sit amet
                        augue pharetra convallis nec danos dui. Cras suscipit quam et turpis eleifend vitae malesuada
                        magna congue. Damus id ullamcorper neque. Sed vitae mi a mi pretium aliquet ac sed elit.
                        Pellentesque nulla eros accumsan quis justo at tincidunt lobortis denimes loremous. Suspendisse
                        vestibulum lectus in lectus volutpat, ut dapibus purus pulvinar. Vestibulum sit amet auctor
                        ipsum.
                    </p>
                </div>

                <div class="tab-pane tab-review">
                    <div class="row">
                        <div class="col-md-6 review-comment">
                            <ol class="comment-list">
                                <li class="comment-item">
                                    <img class="comment-user-img" src="./assets/img/girl.jpg" alt="" />
                                    <div class="comment-text">
                                        <div class="star-cmt">
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                        <div class="comment-meta">
                                            <span>Nam LS</span>
                                            -
                                            <span>30/04/2023</span>
                                        </div>
                                        <div class="comment-description">
                                            <p>
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere quae
                                                doloribus modi praesentium saepe amet, nesciunt accusantium beatae,
                                                dicta sed ipsum rem at natus adipisci. Voluptate repellat vero tenetur
                                                quae.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="comment-item">
                                    <img class="comment-user-img" src="./assets/img/girl.jpg" alt="" />
                                    <div class="comment-text">
                                        <div class="star-cmt">
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                        <div class="comment-meta">
                                            <span>Nam LS</span>
                                            -
                                            <span>30/04/2023</span>
                                        </div>
                                        <div class="comment-description">
                                            <p>
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere quae
                                                doloribus modi praesentium saepe amet, nesciunt accusantium beatae,
                                                dicta sed ipsum rem at natus adipisci. Voluptate repellat vero tenetur
                                                quae.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="comment-item">
                                    <img class="comment-user-img" src="./assets/img/girl.jpg" alt="" />
                                    <div class="comment-text">
                                        <div class="star-cmt">
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                        <div class="comment-meta">
                                            <span>Nam LS</span>
                                            -
                                            <span>30/04/2023</span>
                                        </div>
                                        <div class="comment-description">
                                            <p>
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere quae
                                                doloribus modi praesentium saepe amet, nesciunt accusantium beatae,
                                                dicta sed ipsum rem at natus adipisci. Voluptate repellat vero tenetur
                                                quae.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="comment-item">
                                    <img class="comment-user-img" src="./assets/img/girl.jpg" alt="" />
                                    <div class="comment-text">
                                        <div class="star-cmt">
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                        <div class="comment-meta">
                                            <span>Nam LS</span>
                                            -
                                            <span>30/04/2023</span>
                                        </div>
                                        <div class="comment-description">
                                            <p>
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere quae
                                                doloribus modi praesentium saepe amet, nesciunt accusantium beatae,
                                                dicta sed ipsum rem at natus adipisci. Voluptate repellat vero tenetur
                                                quae.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-6 review-form-wraper">
                            <div class="review-form-res">
                                <h2>Add Review</h2>
                                <hr />

                                <form class="comment-form" action="" method="post">
                                    <div class="comment-form-rating">
                                        <label for="rating">Your rating &nbsp</label>
                                        <p class="stars">
                                            <span>
                                                <a class="star-1" href="#">
                                                    <i class="fa-regular fa-star"></i>
                                                </a>
                                                <a class="star-2" href="#">
                                                    <i class="fa-regular fa-star"></i>
                                                </a>
                                                <a class="star-3" href="#">
                                                    <i class="fa-regular fa-star"></i>
                                                </a>
                                                <a class="star-4" href="#">
                                                    <i class="fa-regular fa-star"></i>
                                                </a>
                                                <a class="star-5" href="#">
                                                    <i class="fa-regular fa-star"></i>
                                                </a>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group comment-form-comment">
                                                <textarea
                                                    class="form-control"
                                                    name="comment"
                                                    id="comment"
                                                    cols="30"
                                                    rows="6"
                                                    placeholder="Write comment"
                                                ></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group comment-form-author">
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    name="name"
                                                    id="name "
                                                    placeholder="Name..."
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group comment-form-email">
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    name="email"
                                                    id="email "
                                                    placeholder="Email..."
                                                />
                                            </div>
                                        </div>

                                        <div class="form-group btn-form-submit">
                                            <button type="submit" class="button-contactForm">Submit Review</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Product -->
        <div class="container">
            <div class="related-product">
                <div class="row">
                    <div class="col-md-12">
                        <div class="related-text-content">
                            <p>Produced</p>
                            <h4><span>Related Product</span></h4>
                            <div class="related-line"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-grid row g-3">
                            <div class="col-lg-1-5">
                                <div class="product-cart">
                                    <div class="product-img-action">
                                        <div class="product-cart-img">
                                            <a href="#">
                                                <img class="default-img" src="./assets/img/product-1-1.jpg" alt="" />
                                                <img class="hover-img" src="./assets/img/product-mg.jpg" alt="" />
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
                                                <img class="default-img" src="./assets/img/product-1-1.jpg" alt="" />
                                                <img class="hover-img" src="./assets/img/product-mg.jpg" alt="" />
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
                                                <img class="default-img" src="./assets/img/product-1-1.jpg" alt="" />
                                                <img class="hover-img" src="./assets/img/product-mg.jpg" alt="" />
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
                                                <img class="default-img" src="./assets/img/product-1-1.jpg" alt="" />
                                                <img class="hover-img" src="./assets/img/product-mg.jpg" alt="" />
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
                                                <img class="default-img" src="./assets/img/product-1-1.jpg" alt="" />
                                                <img class="hover-img" src="./assets/img/product-mg.jpg" alt="" />
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
                                            <img src="./assets/img/footer_logo-1.png" alt="" />
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
    </body>

    <script>
        const app = {
            scrollHeader() {
                window.addEventListener('scroll', function () {
                    var stickyElement = document.querySelector('.nav-container');
                    var contentOffsetTop = document.querySelector('.product-view');

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

            quantityInput() {
                const $ = document.querySelector.bind(document);
                const $$ = document.querySelectorAll.bind(document);

                const minusBtn = $('.icon-minus');
                const plusBtn = $('.icon-flus');
                const quantityInput_ = $('.input-quantity');

                minusBtn.addEventListener('click', function () {
                    let quantity = parseInt(quantityInput_.value);
                    if (quantity > 1) {
                        quantity -= 1;
                        quantityInput_.value = quantity;
                    }
                });

                plusBtn.addEventListener('click', function () {
                    let quantity = parseInt(quantityInput_.value);
                    if (quantity < 10 || quantity < 0) {
                        quantity += 1;
                        quantityInput_.value = quantity;
                    }
                });
            },

            toggleTabUi() {
                const $ = document.querySelector.bind(document);
                const $$ = document.querySelectorAll.bind(document);
                let tabItem = $$('.tab-item');
                const panes = $$('.tab-pane');
                tabItem = [...tabItem];

                tabItem.forEach((item, index) => {
                    item.addEventListener('click', function () {
                        $('.tab-item.active').classList.remove('active');
                        $('.tab-pane.active').classList.remove('active');

                        $('.line').style.left = `${this.offsetLeft}px`;
                        $('.line').style.width = `${this.offsetWidth}px`;
                        this.classList.add('active');
                        panes[index].classList.add('active');
                    });
                });

                // tabItem.forEach((element) => {
                //     element.addEventListener('click', (event) => {
                //         const clickedTab = event.target;
                //         console.log(clickedTab);
                //     });
                // });
            },
            run() {
                this.scrollHeader();
                this.quantityInput();
                this.toggleTabUi();
            },
        };

        app.run();
    </script>
</html>
