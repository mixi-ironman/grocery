@foreach($products as $product)
<div class="col-lg-{{ $itemsPerRow }} col-md-{{ $itemsPerRow }} scroll-animation">
    <div class="product-cart ">
        <div class="product-img-action">
            <div class="product-cart-img">
                <a href="{{ route('view-product',['id' => $product->id, 'slug' => Str::slug($product->name)]) }}">
                    <img
                        class="default-img"
                        src="{{ asset('uploads/') }}/{{ $product->image }}"
                        alt=""
                    />
                    {{-- <img class="hover-img" src="{{ url('client') }}/assets/img/product-mg.jpg" alt="" /> --}}
                </a>
                <div class="product-action">
                    <a href={{ route('view-product',['id' => $product->id, 'slug' => Str::slug($product->name)]) }} class="product-action-icon">
                        <img
                            width="35"
                            height="35"
                            class="translatex" 
                            src="https://img.icons8.com/external-ddara-fill-ddara/64/external-eye-eye-ddara-fill-ddara.png"
                            alt="external-eye-eye-ddara-fill-ddara"
                        />
                    </a> 
                    <a href="#" class="product-action-icon btn_add_to_favorites btn_add_to_favorites-quick" data-url="{{ route('add-to-favorites',['id' => $product->id]) }}">
                        <i class="fa-solid fa-heart-circle-plus"></i>
                    </a>
                    <a href="#" class="product-action-icon btn_add_to_cart btn_add_to_cart-quick" data-url="{{ route('add-to-cart',['id' => $product->id]) }}">
                        <img
                            class="translatex"
                            width="35"
                            height="35"
                            src="https://img.icons8.com/doodle/48/shopping-cart--v1.png"
                            alt="shopping-cart--v1"
                        />
                    </a>
                </div>
            </div>
            
            <!-- button hiển thị giá trị gảim giá của 1 cart là bao nhiêu -->
            <div class="product-badges"></div>
        </div>
        <div class="product-content">
            <div class="product-category" style="opacity:0.5">{{ $product->category->name }}</div>
            <h2 class="product-name">
                {{-- <a href="/san-pham/{{ $product->id }}-{{ Str::slug($product->name) }}">{{ $product->name }}</a> --}}
                <a href="{{ route('view-product',['id' => $product->id, 'slug' => Str::slug($product->name)]) }}">{{ $product->name }}</a>

            </h2>
            <div class="product-rate-cover">
                <div class="product-rate">
                    {{-- <ul style="display:flex;margin:0;padding:0">
                        @foreach($rating as $rate)
                            @php
                                $averageRating = round($rate->average_rating);
                            @endphp
                            @for($count = 1; $count <= 5; $count++)
                                @php
                                    if ($count <= $averageRating) {
                                        $color = 'color:#ffcc00;';
                                    } else {
                                        $color = 'color:#ccc;';
                                    }
                                @endphp
                                <li class="rating_" style="cursor:pointer;{{ $color }}; font-size:30px;">&#9733</li>
                            @endfor
                        @endforeach
                    </ul> --}}
                </div>
                <div class="product-jubge" style="display: none"></div>
            </div>
            <div class="product-cart-bottom">
                {{-- <p>1000$</p>
                <p class="old-price">2000đ</p> --}}
                <div class="product-price">
                    {!! \App\Helpers\Helper::price( $product->price) !!}
                    {!! \App\Helpers\Helper::oldPrice( $product->old_price) !!}
                </div>
                <div class="add-cart">
                    <a href="#">
                        <i class="me-2 fa-solid fa-cart-shopping"></i><span>Add</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach

{{-- @push('custom-script')
<!-- Khai báo HTML -->
<script>
    // Khai báo headers cho AJAX request
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function () {
        // Sử dụng event delegation để xử lý sự kiện click cho nút "btn-load_product"
        $(document).on("click", "#btn-load_product", function () {
            const url = $(this).data('url');
            console.log('load')
            // loadMore(url);
        });
@endpush --}}

