// Khai báo headers cho AJAX request
$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

$(document).ready(function () {
    // Sử dụng event delegation để xử lý sự kiện click cho nút "btn-load_product"
    $(document).on("click", "#btn-load_product", function () {
        const url = $(this).data("url");
        // console.log("load");
        loadMore(url);
    });

    function loadMore(url) {
        let page = $("#page").val();
        $.ajax({
            method: "GET",
            dataType: "JSON",
            data: {
                page: page,
                // Gửi CSRF token kèm theo dữ liệu
                _token: $('meta[name="csrf-token"]').attr("content"),
            },
            url: url,

            success: function (data) {
                if (data && data.product_cart_item != "") {
                    $("#list-product").append(data.product_cart_item);
                    $("#page").val(data.page + 1);
                } else {
                    // alert("load xong dữ liệu");
                    $(".btn_load-more").hide();
                }
            },

            error: function (error) {
                alert("Có lỗi xảy ra. Vui lòng thử lại sau");
            },
        });
    }
});
