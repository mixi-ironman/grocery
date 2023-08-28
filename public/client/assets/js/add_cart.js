function addToCart(event) {
    event.preventDefault();
    let urlCart = $(this).data("url");
    // alert(urlCart);
    $.ajax({
        method: "GET",
        url: urlCart,
        dataType: "json",
        success: function (data) {
            let count = 0;
            if (data.code === 200) {
                //update lại sỗ lượng icon header
                $("#count_number").text(data.count_number)
                //updale lại slide list cart detail trên header
                $("#cart_list_wrapper").html(data.cartList);
            }
        },
        error: function () {
            alert("Lỗi ở ajax");
        },
    });
}
$(document).ready(function () {
    $(document).on("click", ".btn_add_to_cart-quick", addToCart);
});

// $(".btn_add_to_cart").on("click", addToCart);

// $(".btn_add_to_cart").on("click", function (e) {
// e.preventDefault();
// let = url = $(this).attr('href');
// let is_active = $(this).data('status');
// console.log('is_active');
// $.ajax({
//     method: 'PUT',
//     url : url,
//     data : {
//         _tocken: '{{ csrf_tocken}}'
//         is_active: is_active == 1 ? '0' : '1'
//     },
//     dataType:'json',
//     success: function(data) {
//     // Xử lý phản hồi từ server (nếu cần)
//     alert('Load product thành công');
//     },
// })
// });
