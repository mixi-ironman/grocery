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
                    <div class="wishlist-img_area wishlist " style="opacity:0">
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
                    <div class="user-img_area wishlist ">
                        @if(Auth::check())
                        <a class="user-img_area-link user-img_area-link_" href="">
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
                        <!-- dropdown-user -->
                        <div class="user-dropdown">
                            <ul class="user-dropdown-menu">
                                <li class="user-dropdown-menu-item">
                                    <a class="user-dropdown-menu-link translatex_" href="{{ route('customer.profile') }}">
                                        <span
                                            ><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 16 16"
                                                width="1em"
                                                height="1em"
                                                fill="currentColor"
                                                style="font-size: 20px"
                                            >
                                                <path
                                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"
                                                ></path></svg></span
                                        >Tài khoản của tôi
                                    </a>
                                </li>
                                {{-- <li class="user-dropdown-menu-item">
                                    <a class="user-dropdown-menu-link translatex_" href="#">
                                        <span
                                            ><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 16 16"
                                                width="1em"
                                                height="1em"
                                                fill="currentColor"
                                                style="font-size: 20px"
                                            >
                                                <path
                                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"
                                                ></path>
                                                <path
                                                    d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"
                                                ></path></svg></span
                                        >Địa chỉ</a
                                    >
                                </li>
                                <li class="user-dropdown-menu-item">
                                    <a class="user-dropdown-menu-link translatex_" href="#">
                                        <span
                                            ><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 16 16"
                                                width="1em"
                                                height="1em"
                                                fill="currentColor"
                                                style="font-size: 20px"
                                            >
                                                <path
                                                    d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"
                                                ></path></svg></span
                                        >Lịch sử giao dịch</a
                                    >
                                </li> --}}
                                <li class="user-dropdown-menu-item">
                                    <a class="user-dropdown-menu-link translatex_" href="{{ route('customer.logout') }}">
                                        <span
                                            ><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 16 16"
                                                width="1em"
                                                height="1em"
                                                fill="currentColor"
                                                style="font-size: 20px"
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"
                                                ></path>
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"
                                                ></path></svg></span
                                        >Đăng xuất
                                    </a
                                    >
                                </li>
                            </ul>
                        </div>
                        @else
                        <a class="user-img_area-link " href="{{ route("customer.login-page") }}">
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
                        @endif
                    </div>
                    <div class="mini-cart wishlist ">
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
                                
                                    <div class="mega-menu-title hover-top">
                                        <!-- <i class="fa-solid fa-face-grin-tongue-wink menu-icon"></i> -->
                                        <i class="fa-solid fa-chart-gantt menu-icon"></i>
                                        <a href="{{ route('viewCategory') }}">
                                            <h3 class="categories-button-active">Mixi Grocery</h3>
                                        </a>
                                        
                                        <!-- sub-category -->
                                        @include('client.components.main_menu',['categoryList'=>$categoryList])
                                    </div>
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
                                    <a href="{{ route('viewCategory') }}">Sản phẩm</a>
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
       $('.user-img_area-link_').on('click', function(e) {
            e.preventDefault(); 
        });

    </script>
@endpush
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
