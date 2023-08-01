 <div class="header-action_dropdown">
    <h5 style="margin-bottom: 10px; text-align:center; font-size:18px;font-weight:500">Kết quả tìm kiếm</h5>
    <ul class="cart-product-list">

        @foreach($products as $index => $product)
        <li class="cart-product-item translate">
            <div class="cart-product-image">
                <a href="#">
                    <img alt="" src="{{ asset('uploads/') }}/{{ $product['image'] }}" />
                </a>
            </div>
            <div class="cart-product-meta">
                <div class="cart-product-des">
                    <h3>
                        <a class="cart-product-des-link" href="#">{{ $product['name'] }}</a>
                    </h3>
                    <div class="product-quantity">
                        <span class="cart-product-price">{{ $product['price'] }}</span>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>