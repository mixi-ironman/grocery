// $("#checkout_button").on("click", function () {
//     // Lấy giá trị của radio button được chọn
//     var paymentMethod = $('input[name="payment_method"]:checked').val();

//     // Kiểm tra xem đã chọn phương thức thanh toán chưa
//     if (!paymentMethod) {
//         alert("Vui lòng chọn phương thức thanh toán.");
//         return;
//     }

//     // Xử lý tùy thuộc vào phương thức thanh toán đã chọn
//     if (paymentMethod === "cash") {
//         // Xử lý khi chọn thanh toán bằng tiền mặt
//         // Ví dụ: gửi dữ liệu về server, chuyển hướng trang, ...
//         $.ajax({
//             method: "POST",
//             url: "/checkout", // Đường dẫn tới route xử lý checkout trên server
//             data: {
//                 payment_method: paymentMethod,
//             },
//             dataType: "json",
//             success: function (response) {
//                 // Xử lý phản hồi từ server (nếu cần)
//                 $("#response_message").text(response.message);
//             },
//             error: function (error) {
//                 // Xử lý lỗi (nếu có)
//                 alert("Có lỗi xảy ra. Vui lòng thử lại sau.");
//             },
//         });
//     } else if (paymentMethod === "online") {
//         // Xử lý khi chọn thanh toán online
//         // Ví dụ: gửi dữ liệu về server, chuyển hướng trang, ...
//         $.ajax({
//             method: "POST",
//             url: "/checkout", // Đường dẫn tới route xử lý checkout trên server
//             data: {
//                 payment_method: paymentMethod,
//             },
//             dataType: "json",
//             success: function (response) {
//                 // Xử lý phản hồi từ server (nếu cần)
//                 $("#response_message").text(response.message);
//             },
//             error: function (error) {
//                 // Xử lý lỗi (nếu có)
//                 alert("Có lỗi xảy ra. Vui lòng thử lại sau.");
//             },
//         });
//     } else {
//         // Xử lý khi không chọn phương thức thanh toán nào
//         // Ví dụ: hiển thị thông báo lỗi, yêu cầu người dùng chọn phương thức thanh toán, ...
//     }
//     // Gửi dữ liệu lên server bằng Ajax
// });
