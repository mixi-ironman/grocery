<div class="cart">
    <div class="container mb-5 mt-3" >
        <div class="row">
            <div class="col-lg-8 mb-2">
                <h1 class="mb-3">Giỏ hàng</h1>
                {{-- <div class="d-flex justify-content-between" style="display:none">
                    <h6 class="text-muted">There are <span class="text-primary">3</span> products in your cart</h6>
                    <h6 class="text-muted"><a href="#" class="text-muted"><i class="bi bi-trash me-2"></i>Clear Cart</a></h6>
                </div> --}}
            </div>
        </div>
        <div class="row">
            @if(count($carts) > 0)
            <div class="col-lg-8" style="box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); padding:15px 2px 15px 15px;border-radius:4px">
                <div class="table-responsive shopping-summery delete_cart_url" data-url="{{ route('delete-cart') }}" style="height:633px;overflow: auto;scroll-behavior: smooth;">
                <table class="table update_cart_url" data-url="{{ route('update-cart') }}">
                    <thead>
                    
                        <tr>
                            <th style="text-align:center" scope="col">#</th>
                            <th style="text-align:center;width:250px;" scope="col">Tên SP</th>
                            <th style="text-align:center" scope="col">Hình Ảnh</th>
                            <th style="text-align:center" scope="col">Số lượng</th>
                            <th style="text-align:center" scope="col">Giá</th>
                            <th style="text-align:center" scope="col">Thành Tiền</th>
                            <th style="opacity:0;text-align:center" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php
                    // dd($carts);
                        $total = 0;
                        $i = 1;
                    @endphp
                    @foreach($carts as $id => $cart)
                        <tr>
                            <th style="text-align:center;vertical-align:middle" scope="row">{{ $i++ }}</th>
                            <td  style="text-align:center;vertical-align:middle"><a href="{{ route('view-product',['id'=>$id,'slug' => Str::slug($cart['name'])]) }}" style="color:rgb(179, 126, 210)">{{ $cart['name'] }}</a></td>
                            {{-- <td  style="text-align:center;vertical-align:middle"><img style="width:160px;height:100px;line-height:100px;object-fit: cover;border-radius:5px;border:1px solid rgb(247, 181, 181);box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);object-position: center;" src="{{ asset('uploads/') }}/{{ $cart['image'] }}" ></td> --}}
                            <td  style="text-align:center;vertical-align:middle"><img style="height:130px !important;border-radius:5px;border:1px solid rgb(247, 181, 181);box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);" src="{{ asset('uploads/') }}/{{ $cart['image'] }}" ></td>

                            {{-- <td style="text-align:center;vertical-align:middle;" ><input type = "number" class="quantity" value="{{ $cart['quantity'] }}" style="width:60px;border-top-left-radius: 12px;border-bottom-right-radius: 12px;border:2px solid green;text-align:center;outline:none" min="1" max="100"></td> --}}
                            <td style="text-align:center;vertical-align:middle;" ><input type = "number" class="quantity" value="{{ $cart['quantity'] }}" min = "1" max = "10" style="width:60px;border-top-left-radius: 12px;border-bottom-right-radius: 12px;border:2px solid green;text-align:center;outline:none"></td>

                            {{-- <td>
                                <div class="detail-extralink mr-15">
                                    <div class="detail-qty border radius">
                                        <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                        <span class="qty-val">1</span>
                                        <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                </div>
                            </td> --}}
                            <td style="text-align:center;vertical-align:middle">{{ number_format($cart['price']) }}đ</td>
                            <td style="text-align:center;vertical-align:middle">{{ number_format($cart['price'] * $cart['quantity']) }}đ</td>
                            <td style="text-align:center;vertical-align:middle">
                                <a href = "#" class="cart_update" data-id="{{ $id }}" style="margin-right:5px; display:inline-block"><i class="fa-solid fa-rotate-right"></i></a>
                                <a href = "#" class="cart_delete" data-id="{{ $id }}" style="margin-left:5px;display:inline-block"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        
                    @php
                    $total += $cart['price'] * $cart['quantity']
                    @endphp
                    @endforeach
                    </tbody>
                </table>
                </div>
                <div class="divider-2 mb-3"></div>
                
                <div class="cart-action d-flex justify-content-between align-items-center mt-4">
                    <a href="{{route('home')}}" class="translatex hover-top"  style="background-color:rgb(93,168,138,0.8);display:inline-block; padding:10px 15px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);border-top-left-radius: 12px;border-bottom-right-radius: 12px;color:black;font-weight:600;font-size:16px;position:relative"><i class="bi bi-arrow-left me-2"></i>Quay lại trang chủ</a>
                    <div class="wraper-btn-cart  d-flex justify-content-between align-items-center" style="padding: 0 15px">
                        <a href="{{route('home')}}" class="translatex hover-top " id = "btn-destroy-cart"  style="background-color:rgb(93,168,138,0.8);display:inline-block; padding:7px 15px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);border-top-right-radius: 12px;border-bottom-left-radius: 12px;color:black;font-weight:600;font-size:16px;position:relative"><i class="bi bi-arrow-left me-2"></i>Xóa giỏ hàng</a>
                        <p style="margin-left:20px;text-align: right;font-size:20px;"><strong style="box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);border-top-left-radius: 12px;border-bottom-right-radius: 12px;padding:5px 20px;border:4px solid rgb(93,168,138);">Tổng: {{ number_format($total).' đ' }}</strong></p>
                    </div>
                </div>
           
            </div>
    
            <div class="col-lg-4" >
                <div class="border p-md-4 cart-totals ml-3" >
                    <div class="table-responsive" >
                        <p style="font-size: 20px"><strong>Thông tin đơn hàng</strong></p>
                        <table class="table no-border">
                            <tbody>
                                <tr>
                                    <td class="cart_total_label" style="width: 120px">
                                        <h6 class="text-muted">Giá tạm tính</h6>
                                    </td>
                                    <td class="cart_total_amount">
                                        <h4 class="text-primary text-end">{{ number_format($total)}}đ</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="col" colspan="2">
                                        <div class="divider-2 mt-3 mb-3"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart_total_label" style="width: 100%">
                                       {{-- <h6 class="text-muted">Coupons</h6> --}}
                                        <div class="mb-3" style="width:150px;">
                                            <label for="exampleFormControlInput1" class="form-label">Voucher</label>
                                            <input style="width: 200px;" type="text" name="coupon_code" class="form-control" id="discount_code" placeholder="Nhập mã giảm giá">
                                            <p style="width:300px" id="notification_coupon"></p>
                                        </div>
                                        <a href="{{route('apply-coupon')}}" id="apply_discount_btn" class="translatex hover-top"  style="background-color:rgb(93,168,138,0.8);display:inline-block; padding:5px 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);border-top-left-radius: 12px;border-bottom-right-radius: 12px;color:black;font-weight:600;font-size:14px;position:relative">Áp dụng mã</a>
                                    </td>
                                   
                                </tr>
                            
                                
                                <tr>
                                    <td class="cart_total_label" >
                                        <h6 class="text-muted">Giá tạm tính</h6>
                                    </td>
                                    <td class="cart_total_amount" >
                                        <h4 style="width:165px" class="text-primary text-end" id="temporary-price">{{ number_format($total)}} đ</h4>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="cart_total_label" >
                                        <h6 class="text-muted">Khuyến mãi</h6>
                                    </td>
                                    <td class="cart_total_amount">
                                        <h4 style="width:165px" class="text-primary text-end" id="discount_cart">0 đ</h4>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="cart_total_label" >
                                        <h6 class="text-muted">Giá phải trả</h6>
                                    </td>
                                    <td class="cart_total_amount" >
                                        <h4 style="width:165px" class="text-primary text-end" id="price-to-pay">{{ number_format($total)}} đ</h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    {{-- <a href="#" class="btn mb-2 w-100">Proceed To CheckOut<i class="bi bi-box-arrow-right ms-2"></i></a> --}}
                    <a href="{{ route('check-out') }}" class="translatex" id="checkout_button"  style="background-color:rgba(221, 131, 229, 0.8);display:inline-block; padding:10px 15px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);border-top-left-radius: 12px;border-bottom-right-radius: 12px;color:black;font-weight:600;font-size:16px;position:relative"><i class="bi bi-arrow-left me-2"></i>Thanh Toán</a>
                </div>
            </div>
            @else 
                <div class="row" >
                    <div class="col-md-12" style="height:200px;width:100%; d-flex justify-content-between align-items-center">
                        <h3 style="height:100%;width:100% ;text-align:center;vertical-align:middle">Giỏ hàng của bạn đang trống</h3>
                        <a href="{{route('home')}}" class="translatex hover-top "  style="background-color:rgb(93,168,138,0.8);display:inline-block; padding:10px 15px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);border-top-right-radius: 12px;border-bottom-left-radius: 12px;color:black;font-weight:600;font-size:16px;position:relative"><i class="bi bi-arrow-left me-2"></i>Quay lại trang chủ</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

@push('custom-script')
<script>
$(document).ready(function () {

    function updateCart(even) 
    {
        even.preventDefault();
        let id = $(this).data('id');
        let urlUpdateCart = $('.update_cart_url').data('url');
        let quantity = $(this).parents('tr').find('input.quantity').val();
        $.ajax({
            method: 'GET',
            dataType: 'JSON',

            data: {
                'id': id,
                'quantity':quantity
            },
            url: urlUpdateCart,


            success: function(data) {
                // Xử lý phản hồi từ server (nếu cần)
                alert('update product thành công');

                if(data.code === 200){
                    $(".cart_wrapper").html(data.cart_component);
                    $("#cart_list_wrapper").html(data.cartList);
                }
            },
            error: function(error) {
                // Xử lý lỗi (nếu có)
                alert('Có lỗi xảy ra. Vui lòng thử lại sau');
            }
        });
    }
    $(document).on('click', '.cart_update', updateCart);

    function deleteCart(even) 
    {
        even.preventDefault();
        let id = $(this).data('id');
        let urlDeleteCart = $('.delete_cart_url').data('url');
        $.ajax({
            method: 'GET',
            dataType: 'JSON',
            data: {
                'id': id
            },
            url: urlDeleteCart,

            success: function(data) {
                // Xử lý phản hồi từ server (nếu cần)
                if(data.code === 200){
                    $("#count_number").text(data.count_number)
                    $(".cart_wrapper").html(data.cart_component);
                    $("#cart_list_wrapper").html(data.cartList);
                }
                alert('Xóa product thành công');

            },
            error: function(error) {
                // Xử lý lỗi (nếu có)
                alert('Có lỗi xảy ra. Vui lòng thử lại sau');
            }
        });
    }
    $(document).on('click', '.cart_delete', deleteCart);


    function destroyCart(even) 
    {
        $.ajax({
            method: 'POST',
            url: '{{ route('clear-cart') }}',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'json',
            success: function (response) {
                if (response.code == 200) {
                    window.location.replace('{{ route('home') }}');
                    // location.reload();
                }
            },
            error: function (error) {
                console.error('Đã có lỗi xảy ra khi xóa giỏ hàng', error);
                window.location.replace('{{ route('home') }}');
            }
        });
    }
    $(document).on('click', '#btn-destroy-cart', destroyCart);


    // $('#checkout_button').on('click', function() {
    //     // Kiểm tra giỏ hàng có sản phẩm hay không
    //     if ($('.cart-item').length === 0) {
    //         alert('Giỏ hàng của bạn đang trống. Vui lòng thêm sản phẩm vào giỏ hàng trước khi thanh toán.');
    //         return;
    //     }

    //     // Tiếp tục xử lý thanh toán
    //     // ... (Thêm mã ajax xử lý thanh toán ở đây)
    // });

    function number_format(number) {
        return new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(number);
    }

    //apply coupon
    function applyCoupon(even) 
    {
        even.preventDefault();
        let coupon_code = $('#discount_code').val();
        let url = $('#apply_discount_btn').attr('href');
        $.ajax({
            method: 'POST',
            url: url,
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                'coupon_code' : coupon_code
            },
            dataType: 'json',
            success: function (response) {
            if (response['code'] === 200) {
                $('#checkout_button').attr("href", "{{ route('check-out') }}?total=" + response['discount']);

                $('#notification_coupon').html('<p style="color: green;">' + response['msg'] + '</p>');
                $('#discount_cart').html('<p style="color: rgb(13,110,253);">-' + number_format(response['percentAmount']) + '</p>');
                $('#price-to-pay').html('<p style="color: rgb(13,110,253);">' + number_format(response['discount']) + '</p>');
            } else if (response['code'] === 500) {
                $('#notification_coupon').html('<p style="color: red;">' + response['msg'] + '</p>');
            }
            },
            error: function (error) {
                console.error('Đã có lỗi xảy ra ', error);
                // window.location.replace('{{ route('home') }}');
            }
        });
    }

    $(document).on('click', '#apply_discount_btn', applyCoupon);

});

</script>
@endpush

{{-- // Sự kiện click đã bị xóa đi: Trong quá trình thực hiện Ajax và cập nhật lại nội dung, có thể có mã JavaScript hoặc thư viện khác đã xóa đi hoặc gắn lại các sự kiện cho các phần tử. Điều này dẫn đến việc sự kiện click trước đó không còn tồn tại nữa.
// Thay đổi cấu trúc DOM: Khi thực hiện Ajax và cập nhật lại nội dung, có thể cấu trúc DOM đã thay đổi, làm cho các phần tử chứa nút update không còn tồn tại trong DOM nữa.
// Để giải quyết vấn đề này, bạn nên sử dụng sự kiện delegate hoặc on cho các phần tử có sẵn trong DOM và không thay đổi trong quá trình Ajax.
    // $('.cart_update').on('click',updateCart); --}}

