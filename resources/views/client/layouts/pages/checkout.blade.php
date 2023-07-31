@extends('client.layouts.master_layout')

@section('content')
<div class="container mt-5">
        <div class="row ">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Checkout</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Họ và tên</label>
                                <input type="text" class="form-control fullname" id="name" name="name" placeholder="full name..." value="">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email </label>
                                <input type="email" class="form-control email" id="email" name="email" placeholder="email..." value="">
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Điện thoại</label>
                                <input type="text" class="form-control phone" id="phone" name="phone" placeholder="phone..." value="">
                            </div>

                            {{-- <div class="mb-3">
                                <label for="order_date" class="form-label">Order Date</label>
                                <input type="date" class="form-control" id="order_date" />
                            </div> --}}

                            <div class="mb-3">
                                <label for="shipping_address" class="form-label">Địa chỉ</label>
                                <input type="text" class="form-control shipping_address" id="shipping_address" name="shipping_address" placeholder="address..." value="">
                            </div>

                            <div class="mb-3">
                                <input type="radio" data-url="{{ route('confirm-check-out') }}" class="payment_method cash" name="payment_method" value="cash" id="cash_radio">
                                <label for="cash_radio">Thanh toán bằng tiền mặt</label>
                            </div>

                            <div class="mb-3">
                                <input type="radio"  class="payment_method online" name="payment_method" value="online" id="online_radio">
                                <label for="online_radio">Thanh toán online</label>
                            </div>

                            <div class="mb-3">
                                <label for="order_note" class="form-label">Note</label>
                                <textarea class="form-control" id="order_note"  name="order_note" rows="3"></textarea>
                            </div>

                            <div class="d-grid gap-2" style="display:flex !important;justify-content:space-between">
                                {{-- <button type="submit" class="btn btn-primary">Place Order</button> --}}
                                <a href="{{ route('show-cart') }}" class="translatex"  style="width:200px;background-color:rgba(221, 131, 229, 0.8);display:block; padding:10px 15px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);border-top-left-radius: 12px;border-bottom-right-radius: 12px;color:black;font-weight:600;font-size:16px;position:relative"><i class="bi bi-arrow-left me-2"></i>Giỏ hàng</a>
                                <a href="#" class="translatex btn-checkout"  style="width:200px;background-color:rgba(221, 131, 229, 0.8);display:block; padding:10px 15px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);border-top-left-radius: 12px;border-bottom-right-radius: 12px;color:black;font-weight:600;font-size:16px;position:relative"><i class="bi bi-arrow-left me-2"></i>Thanh Toán</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-5" >
                <div style="height:626px; overflow: auto;scroll-behavior: smooth;">
                   <table class="table update_cart_url" data-url="{{ route('update-cart') }}" >
                        <thead>
                        
                            <tr>
                                <th style="text-align:center" scope="col">Tên SP</th>
                                <th style="text-align:center" scope="col">Hình Ảnh</th>
                                <th style="text-align:center" scope="col">Số lượng</th>
                                <th style="text-align:center" scope="col">Giá</th>
            
                            </tr>
                        </thead>
                        <tbody>
                        @php
                            $total = 0
                        @endphp
                        @foreach($carts as $id => $cart)
                            <tr>
                                <td  style="text-align:center;vertical-align:middle">{{ $cart['name'] }}</td>
                                <td  style="text-align:center;vertical-align:middle"><img style="width:160px;height:100px;line-height:100px;object-fit: cover;border-radius:5px;border:1px solid rgb(247, 181, 181);box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);object-position: center;" src="{{ asset('uploads/') }}/{{ $cart['image'] }}" ></td>
                                <td style="text-align:center;vertical-align:middle;" ><input readonly type = "number" class="quantity" value="{{ $cart['quantity'] }}" style="width:60px;border-top-left-radius: 12px;border-bottom-right-radius: 12px;border:2px solid green;text-align:center;outline:none" min="1" max="100"></td>
                                {{-- <td style="text-align:center;vertical-align:middle">{{ number_format($cart['price']) }}đ</td> --}}
                                <td style="text-align:center;vertical-align:middle">{{ number_format($cart['price'] * $cart['quantity']) }}đ</td>
                               
                            </tr>
                            
                        @php
                        $total += $cart['price'] * $cart['quantity']
                        @endphp
                        @endforeach
                        <tr>
                            <td scope="col" colspan="2">
                                <div class="divider-2 mt-3 mb-3"></div>
                            </td>
                        </tr>
                        
                        </tbody>
                    </table>
                </div>
                <div style="display:flex;align-content: center;vertical-align:middle;margin-top:15px;">
                    <h6 class="text-muted" style="margin:0; font-weight:bold;font-size:20px; width:130px">Giá phải trả</h6>
                    <p class="cart_total_amount"  style="text-align:center;vertical-align:middle">
                        <input readonly type = "hidden" name="total_amount" class="total_amount" value="{{ $total}}" style="max-width:160px; letter-spacing:2px;font-weight:600;font-size:17px;border-top-left-radius: 12px;border-bottom-right-radius: 12px;border:2px solid green;text-align:center;outline:none;padding:5px">
                        <input readonly type = "text" name="total_amount_" class="total_amount_" value="{{ number_format($total)}} đ" style="max-width:160px; letter-spacing:2px;font-weight:600;font-size:17px;border-top-left-radius: 12px;border-bottom-right-radius: 12px;border:2px solid green;text-align:center;outline:none;padding:5px">
                    </p>
                </div>    
            </div>
        </div>
    </div>
@endsection

@push('custom-script')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function addOrder(event) {
        event.preventDefault();
        let urlCash = $('.cash').data('url');
        let fullname = $('#name').val();
        let email = $('#email').val();
        let phone = $('#phone').val();
        let shipping_address = $('#shipping_address').val();
        let payment_method = $('input[name="payment_method"]:checked').val();
        let order_note = $('#order_note').val();
        let total_amount = $('.total_amount').val();


        // Kiểm tra xem đã chọn phương thức thanh toán chưa
        if (!payment_method) {
            alert('Vui lòng chọn phương thức thanh toán.');
            return;
        }
        if (payment_method === 'cash') {
            $.ajax({
                method: 'POST',
                url: urlCash,
                dataType: 'json',
                data: {
                    name: fullname,
                    email: email,
                    phone: phone,
                    shipping_address: shipping_address,
                    payment_method: payment_method,
                    order_note: order_note,
                    total_amount: total_amount,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    if (data.status === 'success') {
                        alert(data.msg); 
                    } else {
                        alert(data.msg); 
                    }
                },
                error: function(error) {
                    alert('Có lỗi xảy ra. Vui lòng thử lại sau.');
                }
            });

        } else if (payment_method === 'online') {
               alert('Hiện chức năng thành toán đang phát triển')
        }
    }

    $(document).ready(function () {
        $(document).on("click", ".btn-checkout", addOrder);
    });
</script>

@endpush