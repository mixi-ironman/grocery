<div class="cart">
    <div class="container mb-5 mt-3">
        <div class="row">
            <div class="col-lg-8 mb-4">
                <h1 class="mb-3">Your Cart</h1>
                {{-- <div class="d-flex justify-content-between" style="display:none">
                    <h6 class="text-muted">There are <span class="text-primary">3</span> products in your cart</h6>
                    <h6 class="text-muted"><a href="#" class="text-muted"><i class="bi bi-trash me-2"></i>Clear Cart</a></h6>
                </div> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="table-responsive shopping-summery delete_cart_url" data-url="{{ route('delete-cart') }}">
                  <table class="table update_cart_url" data-url="{{ route('update-cart') }}">
                <thead>
                   
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th style="text-align:center" scope="col">Quantity</th>
                        <th style="text-align:center" scope="col">Price</th>
                        <th style="text-align:center" scope="col">Total Price</th>
                        <th style="text-align:center" scope="col">Action</th>
    
                    </tr>
                </thead>
                <tbody>
                @php
                    $total = 0
                @endphp
                @foreach($carts as $id => $cart)
                    <tr>
                        <th style="text-align:center;vertical-align:middle" scope="row">{{ $id }}</th>
                        <td  style="text-align:center;vertical-align:middle">{{ $cart['name'] }}</td>
                        <td  style="text-align:center;vertical-align:middle"><img style="width:160px;height:100px;line-height:100px;object-fit: cover;border-radius:5px;border:1px solid rgb(247, 181, 181);box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);object-position: center;" src="{{ asset('uploads/') }}/{{ $cart['image'] }}" ></td>
                        <td style="text-align:center;vertical-align:middle;" ><input type = "number" class="quantity" value="{{ $cart['quantity'] }}" style="width:60px;border-top-left-radius: 12px;border-bottom-right-radius: 12px;border:2px solid green;text-align:center;outline:none" min="1" max="10"></td>
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
                <p>Tổng: {{ number_format($total) }}</p>
                </div>
                <div class="divider-2 mb-3"></div>
                
                <div class="cart-action d-flex justify-content-between">
                    {{-- <a href={{route('home')}} class="btn"><i class="bi bi-arrow-left me-2" style="width:150px;height:50px;background-color:red;"></i>Continue Shopping</a>
                    <a class="btn  me-2 mb-sm-2"><i class="bi bi-arrow-clockwise me-2"></i>Update Cart</a> --}}
                    <a href={{route('home')}} class="translate hover_"  style="background-color:rgb(93,168,138,0.8);display:inline-block; padding:10px 15px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);border-top-left-radius: 12px;border-bottom-right-radius: 12px;color:black;font-weight:600;font-size:16px;position:relative"><i class="bi bi-arrow-left me-2"></i>Continue Shopping</a>

                </div>
                {{-- <div class="row mt-4">
                    <div class="col-lg-7">
                        <div class="calculate-shipping p-4 border border-radius-15">
                            <h4 class="mb-3">Calculate Shipping</h4>
                            <p class="mb-3"><span class="font-lg text-muted">Flat rate:</span><strong class="text-primary">5%</strong></p>
                            <form class="field_form shipping_calculator">
                                <div class="form-row">
                                    <div class="form-group col-lg-12">
                                        <div class="custom_select">
                                            <select class="form-control select-active w-100">
                                                <option value="VN">Vietnam</option>
                                                <option value="WF">Wallis and Futuna</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="WS">Western Samoa</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row row">
                                    <div class="form-group col-lg-6">
                                        <input required="required" placeholder="State / Country" name="name" type="text">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input required="required" placeholder="PostCode / ZIP" name="name" type="text">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="p-4">
                            <h4 class="mb-3">Apply Coupon</h4>
                            <p class="mb-3"><span class="font-lg text-muted">Using A Promo Code?</span></p>
                            <form action="#">
                                <div class="d-flex justify-content-between">
                                    <input class="font-medium me-2 coupon" name="Coupon" placeholder="Enter Your Coupon">
                                    <button class="btn"><i class="bi bi-tag me-2"></i>Apply</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> --}}
            </div>
    
            {{-- <div class="col-lg-4">
                <div class="border p-md-4 cart-totals ml-3">
                    <div class="table-responsive">
                        <table class="table no-border">
                            <tbody>
                                <tr>
                                    <td class="cart_total_label">
                                        <h6 class="text-muted">Subtotal</h6>
                                    </td>
                                    <td class="cart_total_amount">
                                        <h4 class="text-primary text-end">$12.31</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="col" colspan="2">
                                        <div class="divider-2 mt-3 mb-3"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart_total_label">
                                        <h6 class="text-muted">Shipping</h6>
                                    </td>
                                    <td class="cart_total_amount">
                                        <h5 class="text-heading text-end">Free</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart_total_label">
                                        <h6 class="text-muted">Estimate for</h6>
                                    </td>
                                    <td class="cart_total_amount">
                                        <h5 class="text-heading text-end">United Kingdom</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="col" colspan="2">
                                        <div class="divider-2 mt-3 mb-3"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart_total_label">
                                        <h6 class="text-muted">Total</h6>
                                    </td>
                                    <td class="cart_total_amount">
                                        <h4 class="text-primary text-end">$12.31</h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="#" class="btn mb-2 w-100">Proceed To CheckOut<i class="bi bi-box-arrow-right ms-2"></i></a>
                </div>
            </div> --}}
        </div>
    </div>
</div>

@push('custom-script')
<script>
$(document).ready(function () {
// Sự kiện click đã bị xóa đi: Trong quá trình thực hiện Ajax và cập nhật lại nội dung, có thể có mã JavaScript hoặc thư viện khác đã xóa đi hoặc gắn lại các sự kiện cho các phần tử. Điều này dẫn đến việc sự kiện click trước đó không còn tồn tại nữa.
// Thay đổi cấu trúc DOM: Khi thực hiện Ajax và cập nhật lại nội dung, có thể cấu trúc DOM đã thay đổi, làm cho các phần tử chứa nút update không còn tồn tại trong DOM nữa.
// Để giải quyết vấn đề này, bạn nên sử dụng sự kiện delegate hoặc on cho các phần tử có sẵn trong DOM và không thay đổi trong quá trình Ajax.
    // $('.cart_update').on('click',updateCart);
    $(document).on('click', '.cart_update', updateCart);
    $(document).on('click', '.cart_delete', deleteCart);


    function updateCart(even) {
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
                alert('Load product thành công');

                if(data.code === 200){
                    $(".cart_wrapper").html(data.cart_component);
                }
            },
            error: function(error) {
                // Xử lý lỗi (nếu có)
                alert('Có lỗi xảy ra. Vui lòng thử lại sau');
            }
        });
    }

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
                    $(".cart_wrapper").html(data.cart_component);
                }
                alert('Xóa product thành công');

            },
            error: function(error) {
                // Xử lý lỗi (nếu có)
                alert('Có lỗi xảy ra. Vui lòng thử lại sau');
            }
        });
    }
});

</script>
@endpush

