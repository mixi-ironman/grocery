$(document).ready(function () {
    function remove_background(product_id) {
        for (var count = 1; count <= 5; count++) {
            $("#" + product_id + "-" + count).css("color", "#ccc");
        }
    }

    let selectedIndex = 0;
    // Kiểm tra xem sự kiện "mouseenter" đã được đăng ký cho phần tử ".rating" hay chưa
    if (!$(document).data("hover_event_registered")) {
        // Nếu chưa đăng ký, thực hiện đăng ký sự kiện "mouseenter"
        $(document).on("click", ".rate", function () {
            var $this = $(this);
            var index = $this.data("index");
            var product_id = $this.data("product_id");
            selectedIndex = index;
            // $("#submit-cmt").data("count", index);

            remove_background(product_id);

            for (var count = 1; count <= index; count++) {
                $("#" + product_id + "-" + count).css("color", "#ffcc00");
            }
        });
        // Đánh dấu đã đăng ký sự kiện "mouseenter" để tránh lặp lại đăng ký
        $(document).data("hover_event_registered", true);
    }

    // Khai báo headers cho AJAX request
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    loadloadComment();
    //get comment
    function loadloadComment() {
        let product_id = $(".review-comment").data("id");
        let url = $("#view-comment").data("url");
        $.ajax({
            method: "GET",
            url: url,
            data: {
                product_id: product_id,
                // Gửi CSRF token kèm theo dữ liệu
                _token: $('meta[name="csrf-token"]').attr("content"),
            },

            success: function (data) {
                if (data && data !== "") {
                    // Hiển thị bình luận
                    $("#view-comment").html(data);
                } else {
                    // Hiển thị thông báo khi không có bình luận
                    $("#view-comment").css("text-align", "center");
                    $("#view-comment").html(
                        '<p style="text-align:center;vertical-align:middle;font-size:20px;font-weight:bold;margin:auto">Không có bình luận nào</p>'
                    );
                }
            },

            error: function (error) {
                alert("Có lỗi xảy ra. Vui lòng thử lại sau");
            },
        });
    }

    //send-comment
    if (!$(document).data("sub_cmt")) {
        $(document).on("click", ".button-contactForm", function () {
            let product_id = $(".review-comment").data("id");
            let url_cmt = $("#send-comment").data("url");
            var login_url = $("#send-comment").data("login");
            let name = $("#cmt-name").val();
            let content = $("#cmt-content").val();
            let email = $("#cmt-email").val();
            $.ajax({
                method: "POST",
                url: url_cmt,
                data: {
                    product_id: product_id,
                    name: name,
                    content: content,
                    selectedIndex: selectedIndex,
                    email: email,
                    // Gửi CSRF token kèm theo dữ liệu
                    _token: $('meta[name="csrf-token"]').attr("content"),
                },

                success: function (data) {
                    if (data.code == '200') {
                        $(".cmt-notification").html('<p style="color:green;font-size:15px;font-weight:600">Thêm bình luận thành công</p>');
                        $(".cmt-notification").fadeOut(1500);
                        $("#cmt-name").val("");
                        $("#cmt-content").val("");
                        $("#cmt-email").val("");
                        loadloadComment();
                    }
                
                    if (data.code == '500') {
                        alert('Bạn phải Login để sử dụng chức năng này');
                        window.location.replace(login_url);
                    }
                },

                error: function (error) {
                    alert("Có lỗi xảy ra. Vui lòng thử lại sau");
                },
            });
        });

        $(document).data("sub_cmt", true);
    }
});

//nhả chuột không đánh giá sao
// $(document).on('mouseleave', '.rating', function(){
//     var index = $(this).data('index');
//     var product_id = $(this).data("product_id");
//     var rating = $(this).data("rating");

//     remove_background(product_id);

//     for(var count = 1; count <= rating; count++)
//     {
//         $('#'+product_id+'-'+count).css('color','#ffcc00');
//     }
// });
