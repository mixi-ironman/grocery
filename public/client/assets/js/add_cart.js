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
            // Xử lý phản hồi từ server (nếu cần)
            if (data.code === 200) {
                // if(parseInt(data.count_number) == 0)
                // {
                //     data.count_number = 1;
                // }

                $("#count_number").text(data.count_number)
                $("#cart_list_wrapper").html(data.cartList);

                // console.log(data.cartList);
                console.log(data.count_number);

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
