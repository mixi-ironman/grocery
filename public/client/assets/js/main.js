const app = {
    currentItemIndex: 0,
    //Typing Efect
    typingAnimation() {
        let typingText = document.querySelector(".mixi");

        const textList = ["Wellcome to Mixi-Grocery"];
        let currentText = "";
        let currentIndex = 0;
        if (textList.length > 0) {
            currentText = textList[currentIndex];
            typingText.innerHTML = "";
            let i = 0;
            var time = setInterval(() => {
                typingText.innerHTML += currentText.charAt(i);
                i++;
                if (i >= currentText.length) {
                    clearInterval(time);
                    currentIndex = (currentIndex + 1) % textList.length;
                    setTimeout(() => {
                        typingAnimation();
                    }, 500); // Sau khi hiển thị xong, chờ 0.2 giây rồi hiển thị phần tử tiếp theo
                }
            }, 500);
        }
    },

    //Position: Sticky use javascript
    headerScroll() {
        window.addEventListener("scroll", function () {
            var stickyElement = document.querySelector(".nav-container");
            var contentOffsetTop =
                document.querySelector(".main-content").offsetTop;

            if (window.scrollY >= contentOffsetTop) {
                stickyElement.classList.add("sticky");
            } else {
                stickyElement.classList.remove("sticky");
            }
        });
    },

    //Title change khi when scroll
    titleScroll() {
        window.addEventListener("scroll", function () {
            const scrollingText_ = document.querySelector(".scrolling-text_");

            if (scrollingText_) {
                const scrollPosition_ = window.scrollY;
                const translateY_ = scrollPosition_ - 2800; // Thay đổi tỷ lệ theo ý muốn
                const pos_ = scrollingText_.getBoundingClientRect();

                if (translateY_ > pos_.top) {
                    scrollingText_.style.transform = "translateX(0)";
                } else {
                    scrollingText_.style.transform = "translateX(120px)";
                }
            }

            const scrollingText = document.querySelector(".scrolling-text");
            if (scrollingText) {
                const scrollPosition = window.scrollY;
                const translateY = scrollPosition - 1700; // Thay đổi tỷ lệ theo ý muốn
                const pos = scrollingText.getBoundingClientRect();

                if (translateY > pos.top) {
                    scrollingText.style.transform = "translateX(0)";
                } else {
                    scrollingText.style.transform = "translateX(-120px)";
                }
            }
        });
    },

    //Carousel for Feature code thuần
    carouselFeatured: function () {
        let listCategorys = [
            ...document.querySelectorAll(".slider-product-item"),
        ];

        console.log(listCategorys[0].getBoundingClientRect().width);
        console.log(listCategorys.length);

        setInterval(() => {
            console.log("hihi");
            this.autoSwitchItem(listCategorys);
        }, 1400);
    },

    autoSwitchItem(listCategorys) {
        const wrapList = document.querySelector(".slider-product-list");
        const widthItem = listCategorys[0].offsetWidth;
        this.currentItemIndex =
            (this.currentItemIndex + 1) % listCategorys.length;
        console.log(this.currentItemIndex);
        wrapList.scrollLeft = this.currentItemIndex * widthItem;
        console.log(this.currentItemIndex * widthItem);
    },
    //carousekl trên code thuần chưa xong

    //Carousel use slick
    autoplay() {
        $(document).ready(function () {
            $(".product-featured").slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: false,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 1400,
            });

            //slickSetOption là một phương thức trong Slick Slider để thay đổi các tùy chọn (options) của slider sau khi nó đã được khởi tạo.
            // $('.product-featured').slick('slickSetOption', 'slidesToShow', 3, true);

            // On edge hit

            // $('.product-featured').on('edge', function (event, slick, direction) {
            //     if (direction === 'left') {
            //         console.log('hi');
            //         // Phần tử hiện tại là phần tử đầu tiên (viền bên trái)
            //     } else if (direction === 'right') {
            //         // Phần tử hiện tại là phần tử cuối cùng (viền bên phải)
            //     } else {
            //         // Phần tử hiện tại không nằm ở viền
            //     }
            // });

            $(".slider-product-list").slick({
                slidesToShow: 8,
                slidesToScroll: 1,
                infinite: true,
                autoplay: true,

                // dùng append-child thay vì dùng position
                prevArrow:
                    '<button type="button" class="slick-prev " style="margin-left:10px;"><img class="translatey rounded-circle" width="30" height="30" src="https://img.icons8.com/bubbles/50/right.png" alt="right" /></button>',
                nextArrow:
                    '<button type="button" class="slick-next "><img class="translatey rounded-circle" width="30" height="30" src="https://img.icons8.com/bubbles/50/000000/long-arrow-left.png" alt="long-arrow-left" /></button>',
                autoplaySpeed: 1400,
            });

            //để kiểm tra các mục hiển thị trên view của slide sau khi chuyển slide.
            // $('.slider-product-list').on('afterChange', (event, slick, currentSlide) => {
            //     // Remove margin from all items
            //     $('.slider-product-list .slider-product-item').css('margin', '0');

            //     // Add margin and background color to the visible items in the slide's view
            //     const visibleItems = $(slick.$slides[currentSlide]).find('.slider-product-item');
            //     visibleItems.css({
            //         margin: '10px',
            //         'background-color': 'red',
            //     });
            // });

            //để kiểm tra các mục hiển thị trên view của slide sau khi chuyển slide.
            // $('.slider-product-list').on('afterChange', (event, slick, currentSlide) => {
            //     const visibleItems = $(slick.$slides[currentSlide]).find('.item');
            //     // Kiểm tra các mục đang hiển thị trên view của slide
            //     console.log(visibleItems);
            // });

            $(".brand-list").slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                arrows: false,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 1400,
            });
        });
    },
    //ẩn text quá giới hạn item cart sidebar
    hiddenText() {
        const textContainers = document.querySelectorAll(
            ".cart-product-des-link"
        );
        const maxLength = 50;

        textContainers.forEach((textContainer) => {
            const text = textContainer.innerText;

            if (text.length > maxLength) {
                const truncatedText = text.slice(0, maxLength) + "...";
                textContainer.innerText = truncatedText;
            }
        });
    },

    // slide-cart ()khi click vào giỏ hàng sẽ hiện các item có trong giỏ hàng
    sideCart() {
        // Sử dụng event delegation cho cartIcon
        $(document).on("click", ".mini-cart", function () {
            $(".cart-sidebar").toggleClass("cart-sidebar-show");
            $(".site-overlay").addClass("active");
        });

        // Sự kiện click cho site-overlay
        $(document).on("click", ".site-overlay", function (event) {
            // Kiểm tra xem phần tử click có chứa cart-sidebar hay không
            if (!$(event.target).closest(".cart-sidebar").length) {
                // Nếu không chứa, ẩn cart-sidebar
                $(".cart-sidebar").removeClass("cart-sidebar-show");
                $(".site-overlay").removeClass("active");
            }
        });

        $(document).on("click", ".icon-close-cart", function () {
            $(".cart-sidebar").removeClass("cart-sidebar-show");
            $(".site-overlay").removeClass("active");
        });
    },

    //dropdown input search
    dropdowInput() {
        // const searchBox = document.querySelector(".search-box");
        const headerDropdown = $(".header-action_dropdown");

        // Lắng nghe sự kiện focus vào input
        $(document).on("focus", ".search-box", function () {
            headerDropdown.addClass("show");
        });

        $(document).on("blur", ".search-box", function () {
            headerDropdown.removeClass("show");
        });
    },

     //dropdown icon user => wishlist
     dropdowIconUser() {
        // const searchBox = document.querySelector(".search-box");
        const userDropdown = $('.user-dropdown');

        // Lắng nghe sự kiện focus vào input
        $(document).on('mouseenter', '.user-img_area-link', function () {
            userDropdown.addClass('show');
        });

        $(document).on('mouseleave', '.user-dropdown', function () {
            userDropdown.removeClass('show');
        });
    },

    autocompleteAjax() {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $("#keyword_search").keyup(function (e) {
            let query = $(this).val();
            let url = $(this).data("url");
            // console.log("click");
            if (query != "") {
                $.ajax({
                    method: "GET",
                    url: url,
                    // delay: 200,
                    dataType: "json",
                    data: {
                        query: query,
                        _token: $('meta[name="csrf-token"]').attr("content"),
                    },
                    success: function (data) {
                        $(".header-action_dropdown").css("padding", "10px");

                        // $(".header-action_dropdown").show();
                        $(".header-action_dropdown").fadeIn();
                        // $(".header-action_dropdown").css("display", "block");
                        console.log(data.product_component);
                        $(".wrapper_input-dropdown").html(
                            data.product_component
                        );
                        // Ngăn chặn sự kiện nổi bọt
                        // e.stopImmediatePropagation();
                    },
                    error: function (error) {
                        // alert("Có lỗi xảy ra. Vui lòng thử lại sau.");
                    },
                });
                return false;
            } else {
                // $(".header-action_dropdown").css("display", "none");
                $(".header-action_dropdown").fadeOut();
            }
        });

        $(document).on("click", ".cart-product-item_click", function (e) {
            let name = $(this).data("name");
            $("#keyword_search").val(name);
            // Ngăn chặn sự kiện nổi bọt
            // e.stopImmediatePropagation();
        });

        $(document).on("blur", ".search-box", function (e) {
            let query = $(this).val();
            // headerDropdown.removeClass("show");
            $(".search-box").val(query);
            $(".header-action_dropdown").fadeOut();
            // Ngăn chặn sự kiện nổi bọt
            // e.stopImmediatePropagation();
        });
    },

    scrollAnimation() {
        // Xử lý sự kiện cuộn trang
        window.addEventListener("scroll", () => {
            const scrollAnimationElements =
                document.querySelectorAll(".scroll-animation");
            scrollAnimationElements.forEach((element) => {
                const elementTop = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;
                // console.log("win" + windowHeight * 0.75);
                // console.log("e" + elementTop);

                // Kiểm tra khi nào phần tử nằm trong khung hiển thị
                if (elementTop < windowHeight * 0.85) {
                    element.classList.add("animate");
                }
            });
        });
    },

    beforeunload() {
        window.addEventListener("unload", function (event) {
            // Hiển thị modal banner ở đây
            // console.log("Bạn có muốn rời khỏi trang");
        });
    },

    subMenuCategory: function () {
        let items = document.querySelectorAll('.menu-item');
        let subs = document.querySelectorAll('.sub-menu-item');
        let menuContainer = document.querySelector('.sub-menu-category');
    
        items.forEach(function (item) {
            item.addEventListener('mouseenter', function (e) {
    
                let sub = this.querySelector('.sub-menu-item'); // Lấy sub của item được click
    
                items.forEach(function (otherItem) {
                    otherItem.classList.remove('active');
                });
    
                subs.forEach(function (subItem) {
                    subItem.classList.remove('active');
                });
    
                this.classList.add('active');
                if (sub != null) {
                    sub.classList.add('active');
                }
            });
        });
    
        menuContainer.addEventListener('mouseleave', function () {
            items.forEach(function (item) {
                item.classList.remove('active');
            });
            subs.forEach(function (subItem) {
                subItem.classList.remove('active');
            });
        });
        
    },
    

    run: function () {
        this.beforeunload();

        // app.typingAnimation();
        this.headerScroll();
        this.titleScroll();
        this.hiddenText();
        this.sideCart();
        this.autoplay();
        this.dropdowInput();
        this.autocompleteAjax();
        this.scrollAnimation();
        this.subMenuCategory();
        this.dropdowIconUser();
    },
};

app.run();

// console.log("Detail");

// document.addEventListener("click", function (event) {
//     if (event.target.classList.contains("mini-cart")) {
//         console.log("Đã click vào phần tử có class 'mini-cart'");
//     } else {
//         // console.log({ event } );
//         console.log("Không click vào phần tử có class 'mini-cart'");
//     }
// });

// document.addEventListener("keydown", function (event) {
//     if (event.keyCode === 116) {
//         // Thực hiện hành động khi F5 được nhấn
//         console.log("Bạn đã nhấn phím F5");
//     }
// });
