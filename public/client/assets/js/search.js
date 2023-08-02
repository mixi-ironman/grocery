// $.ajaxSetup({
//     headers: {
//         "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
//     },
// });

// $("#keyword").keyup(function () {
//     let query = $(this).val();
//     let url = $(this).data("url");
//     // alert(url);
//     if (query != "") {
//         $.ajax({
//             method: "GET",
//             url: url,
//             dataType: "json",
//             data: {
//                 query: query,
//                 _token: $('meta[name="csrf-token"]').attr("content"),
//             },
//             success: function (data) {
//                 $(".header-action_dropdown").css(
//                     "padding",
//                     "15px 10px !important"
//                 );
//                 // $(".header-action_dropdown").show();
//                 $(".header-action_dropdown").fadeIn();
//                 // $(".header-action_dropdown").css("display", "block");
//                 console.log(data.product_component);
//                 $(".wrapper_input-dropdown").html(data.product_component);
//             },
//             error: function (error) {
//                 alert("Có lỗi xảy ra. Vui lòng thử lại sau.");
//             },
//         });
//     } else {
//         // $(".header-action_dropdown").css("display", "none");
//         $(".header-action_dropdown").fadeOut();
//     }
// });

// $(document).on("click", ".cart-product-item_click", function () {
//     let name = $(this).data("name");
//     $("#keyword").val(name);
// });
