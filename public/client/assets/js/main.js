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
                document.querySelector(".slider-wraper").offsetTop;

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
            var scrollPosition_ = window.scrollY;
            var translateY_ = scrollPosition_ - 2800; // Thay đổi tỷ lệ theo ý muốn
            var scrollingText_ = document.querySelector(".scrolling-text_");
            var pos_ = scrollingText_.getBoundingClientRect();

            if (translateY_ > pos_.top) {
                scrollingText_.style.transform = "translateX(0)";
            } else {
                scrollingText_.style.transform = "translateX(120px)";
            }
            var scrollPosition = window.scrollY;
            var translateY = scrollPosition - 1700; // Thay đổi tỷ lệ theo ý muốn

            var scrollingText = document.querySelector(".scrolling-text");
            var pos = scrollingText.getBoundingClientRect();

            if (translateY > pos.top) {
                scrollingText.style.transform = "translateX(0)";
            } else {
                scrollingText.style.transform = "translateX(-120px)";
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
                    '<button type="button" class="slick-prev "><img class="translatey" width="30" height="30" src="https://img.icons8.com/bubbles/50/right.png" alt="right" /></button>',
                nextArrow:
                    '<button type="button" class="slick-next "><img class="translatey" width="30" height="30" src="https://img.icons8.com/bubbles/50/000000/long-arrow-left.png" alt="long-arrow-left" /></button>',
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

    autocompleteAjax() {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $("#keyword_search").keyup(function (e) {
            let query = $(this).val();
            let url = $(this).data("url");
            // alert(url);
            if (query != "") {
                $.ajax({
                    method: "GET",
                    url: url,
                    dataType: "json",
                    data: {
                        query: query,
                        _token: $('meta[name="csrf-token"]').attr("content"),
                    },
                    success: function (data) {
                        $(".header-action_dropdown").css(
                            "padding",
                            "15px 10px !important"
                        );
                        // $(".header-action_dropdown").show();
                        $(".header-action_dropdown").fadeIn();
                        // $(".header-action_dropdown").css("display", "block");
                        console.log(data.product_component);
                        $(".wrapper_input-dropdown").html(
                            data.product_component
                        );
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
            // Ngăn chặn sự kiện nổi bọt
            // e.stopImmediatePropagation();
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

    run: function () {
        // app.typingAnimation();
        this.headerScroll();
        this.titleScroll();
        this.hiddenText();
        this.sideCart();
        this.autoplay();
        // this.dropdowInput();
        this.autocompleteAjax();
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
