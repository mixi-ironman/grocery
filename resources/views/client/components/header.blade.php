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
                            id="keyword_search"
                            name="search"
                            placeholder="Tìm kiếm sản phẩm..."
                            class="search-box"
                            maxlength="128"
                            value=""
                            data-url="{{ route('autocomplete-ajax') }}"
                            autocomplete="off"
                        />
                        {{-- Dropdown Input search --}}
                        <div class="wrapper_input-dropdown">
                            @include('client.components.dropdown-input')
                        </div>
                        <button type="button" class="header-search-btn" id="submit-button">
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
                            <span class="count" >3</span>
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
                                <span class="cart-count" id="count_number">{{ count($carts) }}</span>
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
                                        <h3 class="categories-button-active">Mixi Grocery</h3>
                                        <!-- sub-category -->
                                        @include('client.components.main_menu',['categoryList'=>$categoryList])
                                    </div>
                                </a>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-xs-12 col-sm-9">
                        <!-- nav-right -->
                        <div class="nav-features-box">
                            <ul class="features-box_list">
                                <li class="features-box_item">
                                    <a href="{{ route('home') }}">Trang chủ</a>
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

{{-- @push('custom-script')
<script>
     // const searchBox = document.querySelector(".search-box");
        const headerDropdown = $(".header-action_dropdown");

        // Lắng nghe sự kiện focus vào input
        $(document).on("focus", ".search-box", function () {
            headerDropdown.addClass("show");
            // headerDropdown.fadeIn();

        });

        $(document).on("blur", ".search-box", function () {
            headerDropdown.removeClass("show");
            // headerDropdown.fadeOut();
        });
</script>
@endpush --}}

{{-- Event delegation là một kỹ thuật trong lập trình web cho phép bạn gán sự 
kiện cho các phần tử con của một phần tử cha, ngay cả khi các phần tử con
 được tạo ra sau khi trang web đã được tải. Thông thường, khi bạn gán sự 
 kiện trực tiếp cho một phần tử, sự kiện chỉ áp dụng cho các phần tử đã 
 tồn tại khi trang web được tải, 
và các phần tử mới được thêm vào sau đó sẽ không có sự kiện nào được gán. 

ể đảm bảo các sự kiện không bị mất tác dụng sau khi có dữ liệu mới trả về từ 
Ajax, bạn có thể sử dụng event delegation. Event delegation cho phép bạn gán
 sự kiện cho các phần tử được tạo động trong tương lai,
 bao gồm các phần tử được thêm vào sau khi Ajax trả về dữ liệu.

 Ngăn chặn sự kiện "click" bị gọi nhiều lần: Nếu sự kiện "click" đang bị gọi nhiều
  lần, bạn có thể ngăn chặn điều này bằng cách sử dụng debounce hoặc thêm một biến
   cờ để xác định xem sự kiện đã được xử lý hay chưa trước khi tiếp tục thực hiện 
   hành động tiếp theo.
--}}
