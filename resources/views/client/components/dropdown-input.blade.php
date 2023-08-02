 <div class="header-action_dropdown">
    {{-- <h5 style="margin-bottom: 10px; text-align:center; font-size:18px;font-weight:500">Kết quả tìm kiếm</h5> --}}
    <ul class="cart-product-list">
        @php
            $products_search = $products_search ?? [];
            // dd( $products)
        @endphp
        @foreach($products_search as $index => $product)
        <li class="cart-product-item cart-product-item_click translate" data-name="{{ $product?->name }}">
            <div class="cart-product-image">
                <a href="{{ route('view-product',['id' => $product?->id, 'slug' => Str::slug($product->name)]) }}">
                    <img alt="" src="{{ asset('uploads/') }}/{{ $product?->image }}" />
                </a>
            </div>
            <div class="cart-product-meta">
                <div class="cart-product-des">
                    <h3>
                        <a class="cart-product-des-link" href="#">{{ $product?->name }}</a>
                    </h3>
                    <div class="product-quantity">
                        <span class="cart-product-price">{{ $product?->price }}</span>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>