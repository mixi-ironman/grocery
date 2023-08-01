{{-- {{ dd($menu) }} --}}
<div class="header">
    <!-- header-top -->
    <div class="container header-top">
        <div class="row header-top-wrapper">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <!-- Header-logo -->
                <div class="header-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ url('client') }}/assets/img/nlogo.png" alt="logo" />
                    </a>
                </div>
                <!-- End header-logo -->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                <div class="header-searh_box">
                    <form action="#" method="get" class="form-search">
                        <input
                            type="text"
                            id="keyword"
                            name="search"
                            placeholder="Tìm kiếm sản phảm..."
                            class="search-box"
                            maxlength="128"
                            value=""
                            data-url="{{ route('autocomplete-ajax') }}"
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
                    {{-- <h3 class="mixi">Wellcome to Mixi-Chill</h3> --}}

                   {{-- Dropdown Input search --}}
                    <div class="wrapper_input-dropdown">
                        @include('client.components.dropdown-input')
                    </div>
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
                                style="border-radius: 50%"
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
                                style="border-radius: 50%"
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
                                        style="border-radius: 50%"
                                    />
                                </a>
                                <span class="cart-count">{{ count($carts) }}</span>
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
                                <a href="{{ route('viewCategory') }}">
                                    <div class="mega-menu-title hover-top">
                                        <!-- <i class="fa-solid fa-face-grin-tongue-wink menu-icon"></i> -->
                                        <i class="fa-solid fa-chart-gantt menu-icon"></i>
                                        {{-- <h3>All Categories</h3> --}}
                                        <h3>Mixi Grocery</h3>
                                    </div>
                                </a>
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
                                    <a href="#">Trang chủ</a>
                                </li>
                                <li class="features-box_item">
                                    <a href="#">Sản phẩm</a>
                                </li>
                                <li class="features-box_item">
                                    <a href="#">Tin tức</a>
                                </li>
                                <li class="features-box_item">
                                    <a href="#">Giới thiệu</a>
                                </li>
                                <li class="features-box_item">
                                    <a href="#">Liên hệ</a>
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

@push('custom-script')
<script>
     // const searchBox = document.querySelector(".search-box");
        const headerDropdown = $(".header-action_dropdown");

        // Lắng nghe sự kiện focus vào input
        $(document).on("focus", ".search-box", function () {
            headerDropdown.addClass("show");
        });

        $(document).on("blur", ".search-box", function () {
            headerDropdown.removeClass("show");
        });
</script>

@endpush
