// $(document).ready(function () {
//     // Khai báo headers cho AJAX request
//     $.ajaxSetup({
//         headers: {
//             "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
//         },
//     });
    

//     function loadMore(url) {
//         var page = $("#page").val();
//         $.ajax({
//             method: "GET",
//             dataType: "JSON",
//             data: {
//                 page,
//                 _token: $('meta[name="csrf-token"]').attr("content"),
//             },
//             url: url,

//             success: function (data) {
//                 if (data && data.product_cart_item != "") {
//                     $("#list-product").append(data.product_cart_item);
//                     let page_ = parseInt(data.page);
//                     $("#page").val(page_ + 1);
//                     // $('#btn-load_product').prop('disabled', true);
                
//                     // setTimeout(function () {
//                     //     $('#btn-load_product').prop('disabled', false);
//                     // }, 1000);
//                 } else {
//                     $(".btn_load-more").hide();
//                 }
                
//             },

//             error: function (error) {
//                 alert("Có lỗi xảy ra. Vui lòng thử lại sau");
//             },
//         });
//     }

//     // Sử dụng event delegation để xử lý sự kiện click cho nút "btn-load_product"
//     $(document).on("click", "#btn-load_product", function () {
//         const url = $(this).data("url");
//         console.log(url);
//         loadMore(url);
//         $('#btn-load_product').prop('disable',true);
//         setTimeOut(()=>$('#btn-load_product').prop('disable',false),1000)
//     });
// });

$(document).ready(function () {
    // Khai báo headers cho AJAX request
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    

    function loadMore(url) {
        var page = $("#page").val();
        $.ajax({
            method: "GET",
            dataType: "JSON",
            data: {
                page,
                _token: $('meta[name="csrf-token"]').attr("content"),
            },
            url: url,

            success: function (data) {
                if (data && data.product_cart_item != "") {
                    $("#list-product").append(data.product_cart_item);
                    let page_ = parseInt(data.page);
                    $("#page").val(page_ + 1);
                    // $('#btn-load_product').prop('disabled', true);
                
                    // setTimeout(function () {
                    //     $('#btn-load_product').prop('disabled', false);
                    // }, 1000);
                } else {
                    $(".btn_load-more").hide();
                }
                
            },

            error: function (error) {
                alert("Có lỗi xảy ra. Vui lòng thử lại sau");
            },
        });
    }

    // Sử dụng event delegation để xử lý sự kiện click cho nút "btn-load_product"
    $(document).on("click", "#btn-load_product", function () {
        const url = $(this).data("url");
        console.log(url);
        $('#btn-load_product').prop('disabled', true);
        loadMore(url);
        setTimeout(function () {
            $('#btn-load_product').prop('disabled', false);
        }, 1000);
    });
});
