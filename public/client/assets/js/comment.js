$(document).ready(function () {
    function remove_background(product_id) {
        for (var count = 1; count <= 5; count++) {
            $("#" + product_id + "-" + count).css("color", "#ccc");
        }
    }
    let selectedIndex = 0;
    // hover chuột đánh giá sao
    $(document).on("mouseenter", ".rating", function () {
        var $this = $(this);
        var index = $this.data("index");
        var product_id = $this.data("product_id");
        console.log("--" + index);
        // Gán giá trị index vào biến trung gian selectedIndex
        selectedIndex = index;
        // $("#submit-cmt").data("count", index);

        remove_background(product_id);

        for (var count = 1; count <= index; count++) {
            $("#" + product_id + "-" + count).css("color", "#ffcc00");
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
    $(document).on("click", ".button-contactForm", function () {
        let product_id = $(".review-comment").data("id");
        let url_cmt = $("#send-comment").data("url");
        let name = $("#cmt-name").val();
        let content = $("#cmt-content").val();

        $.ajax({
            method: "POST",
            url: url_cmt,
            data: {
                product_id: product_id,
                name: name,
                content: content,
                selectedIndex: selectedIndex,
                // Gửi CSRF token kèm theo dữ liệu
                _token: $('meta[name="csrf-token"]').attr("content"),
            },

            success: function (data) {
                $(".cmt-notification").html(
                    '<p style="color:green;font-size:15px;font-weight:600">Thêm bình luận thành công</p>'
                );
                $(".cmt-notification").fadeOut(1500);
                $("#cmt-name").val("");
                $("#cmt-content").val("");

                loadloadComment();
            },

            error: function (error) {
                alert("Có lỗi xảy ra. Vui lòng thử lại sau");
            },
        });
    });
});

// // Sử dụng event delegation để xử lý sự kiện click cho nút "btn-load_product"
// $(document).on("click", "#btn-load_product", function () {
//     const url = $(this).data("url");
//     // console.log("load");
//     loadMore(url);
// });
