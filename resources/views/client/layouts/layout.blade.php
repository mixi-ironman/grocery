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
            @include('client.components.header')
            <!-- End header -->

            <!-- Slider -->
            <!-- <div class="container-fluid"> -->
            <div class="container">
            @include('client.components.slider')
            </div>
            <!-- End slider -->

            <!-- Main -->
            <div class="content">
                <!-- Feature-Category -->
                
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
            @include('client.components.footer')
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