@foreach($products as $product)
<div class="col-lg-{{ $itemsPerRow }}">
    <div class="product-cart scroll-animation">
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
                    <button style="display:none" class="product-action-icon">
                        <img  class="translatex"
                            width="37"
                            height="37" src="https://img.icons8.com/external-creatype-glyph-colourcreatype/64/external-eye-essential-ui-v2-creatype-glyph-colourcreatype-2.png" alt="external-eye-essential-ui-v2-creatype-glyph-colourcreatype-2"/>
                    </button>
                    <a href="#" class="product-action-icon btn_add_to_cart" data-url="{{ route('add-to-cart',['id' => $product->id]) }}">
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
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
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

        function loadMore(url) {
            let page = $('#page').val();
            $.ajax({
                method: 'GET',
                dataType: 'JSON',
                data: {
                    page: page,
                    // Gửi CSRF token kèm theo dữ liệu
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                url: url,

                success: function(data) {
                    if (data.product_cart_item != '') {
                        $("#list-product").append(data.product_cart_item);
                         $('#page').val(data.page + 1);
                    } else {
                        $('.btn_load-more').hide();
                    }
                },
                error: function(error) {
                    alert('Có lỗi xảy ra. Vui lòng thử lại sau');
                }
            });
        }
    });
</script>

@endpush --}}

