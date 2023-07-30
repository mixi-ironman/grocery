
@foreach($products as $product)
<div class="col-lg-{{ $itemsPerRow }}">
        <div class="product-cart">
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
                <div class="product-category">{{ $product->category->name }}</div>
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

@if(count($products) >= 10 && $itemsPerRow == '1-5')
<div class="product-grid row g-3">
    <input type="hidden" value="1" id ="page" name = "page">
    <div class="col-md-12" >
        <button type="button" data-url = {{ route('loadproduct') }} class="btn-load_product translatex" style="opacity:0;display:block;padding: 10px 30px; outline:none;border:none;background-color:rgb(232, 131, 131);font-weight:bold;border-top-left-radius: 12px;border-bottom-right-radius: 12px;box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.05)" >Load more</button>
    </div>
</div>
@endif

{{-- @push('custom-script')
<script>
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});

$(document).ready(function () {
    $('.btn-load_product').on('click', function () {
        const index = $(this).index();
        let url = $(this).data('url');

        loadMore(url);
    });

    function loadMore(url) {
        console.log(url);
        let page = $('#page').val();
        console.log(page);

        $.ajax({
            method: 'GET',
            dataType: 'JSON',

            data: {
                page: page,
                // Gửi CSRF token kèm theo dữ liệu
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            // url: "{{ route('loadproduct') }}",
            url: url,


            success: function(response) {
                // Xử lý phản hồi từ server (nếu cần)
                alert('Load product thành công');
                if(response.html){
                    // console.log(response.html)
                    $("#list-product").append(response.html);
                    $('#page').val(response.page+1)
                }
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
 --}}
