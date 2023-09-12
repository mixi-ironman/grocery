<!-- --Cart-sidebar -->
    <div class="cart-sidebar">
        <div class="header-cart-sidebar">
            <h3>Giỏ hàng</h3>
            <p class="icon-close-cart">
                <img
                    width="25"
                    height="25"
                    src="https://img.icons8.com/fluency/48/multiply.png"
                    alt="multiply"
                />
            </p>
        </div>
        <hr />
        <div class="body-cart-main">
            <div class="body-cart-sidebar">
                <ul class="cart-product-list">
                    @php
                        $total = 0
                    @endphp
                    @foreach($carts as $index => $cart)
                    
                        <li class="cart-product-item translate">
                            <div class="cart-product-image">
                                <a href="#">
                                    <img  src="{{ asset('uploads/') }}/{{ $cart['image'] }}" >
                                    {{-- <img style="width:160px;height:100px;line-height:100px;object-fit: cover;border-radius:5px;border:1px solid rgb(247, 181, 181);box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);object-position: center;" src="{{ asset('uploads/') }}/{{ $cart['image'] }}" > --}}
                                </a>
                            </div>
                            <div class="cart-product-meta">
                                <div class="cart-product-des">
                                    <h3>
                                        <a class="cart-product-des-link" href="#">{{ $cart['name'] }}</a
                                        >
                                    </h3>
                                    <div class="product-quantity">
                                        <span class="cart-product-price">{{ $cart['quantity'] }} x {{ number_format($cart['price']) }}đ</span>
                                        <div class="cart-product-quantity" style="display:none">
                                            <!-- <div class="quantity-button cart-minus">-</div> -->
                                            <input
                                                type="text"
                                                class="cart-product-quantity-input"
                                                value="1"
                                                min="0"
                                                max="10"
                                                inputmode="numeric"
                                                onchange="()=>{
                                                    saveInputValue(this)
                                                }"
                                            />
                                            <!-- <div class="quantity-button cart-flus">+</div> -->
                                        </div>
                                    </div>
                                </div>
                                <a style="display:none" href="#"><i class="fa-solid fa-trash"></i></a>
                            </div>
                        </li>
                        @php
                        $total += $cart['price'] * $cart['quantity']
                       @endphp
                    @endforeach

                </ul>
            </div>
            @if(count($carts) > 0)
            <div class="footer-cart-sidebar">
                <p class="cart-total">Tổng: <span class="cart-product-price-total">{{ number_format($total) }}đ</span></p>
                <p class="btn-cart">
                    <a href="{{ route('show-cart') }}" class="btn-view-cart">Xem chi tiết</a>
                    <a href="{{  route('check-out') }}" class="btn-check-out translate">Thanh Toán</a>
                </p>
            </div>
            @else
                <p style="font-size:25px;"><i style="margin-right:10px;color:red;" class="fa-solid fa-ghost"></i>Giỏ hàng đang trống...</p>
            @endif
        </div>
    </div>