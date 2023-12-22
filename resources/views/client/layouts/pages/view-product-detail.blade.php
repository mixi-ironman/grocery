@extends('client.layouts.master_layout')

@section('content')
{{-- @php 
    dd($products);
@endphp --}}
<div class="product-view">
    <div class="product-essential">
        <div class="row">
            <div class="col-12 col-xl-6 col-lg-6 col-md-6">
                <div class="product-img-box">
                    <div class="product-img-full">
                        <img src="{{ asset('uploads/') }}/{{ $product->image }}" alt="" class="product-img">
                    </div>
                    <hr>
                    <div class="more-view-list">
                        <div class="more-view-item">
                            <img class="more-view-img" src="{{ asset('uploads/') }}/{{ $product->image }}" alt="">
                        </div>

                        <div class="more-view-item">
                            <img class="more-view-img" src="{{ asset('uploads/') }}/{{ $product->image }}" alt="">
                        </div>

                        <div class="more-view-item">
                            <img class="more-view-img" src="{{ asset('uploads/') }}/{{ $product->image }}" alt="">
                        </div>

                        <div class="more-view-item">
                            <img class="more-view-img" src="{{ asset('uploads/') }}/{{ $product->image }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-6 col-lg-6 col-md-6">
                <div class="product-summary">
                    <div class="product-name">
                        <h1>{{ $product->name }}</h1>
                    </div>
                    <div class="product-rating">
                        <div class="star-rating" style="display:flex">
                            <ul style="display:flex;margin:0;padding:0">
                            @for($count=1; $count<=5; $count++)
                                    @php
                                        if($count<=$rating)
                                        {
                                            $color = 'color:#ffcc00;';
                                        }else{
                                            $color ='color:#ccc;';
                                        }
                                    @endphp
                               <li 
                                    class="rating_" 
                                    style="cursor:pointer;{{ $color }}; font-size:30px;"
                                >
                                    &#9733
                                </li>
                                
                                @endfor
                            </ul> 
                            <span ><strong style="color:red;display:inline-block;margin:5px 0 0 10px">{{ $rating }}/5</strong></span> 
                              
                        </div>
                        <span class = "product-sold">{{ $product->product_sold }} Đã bán</span>
                    </div>
                    <div class="product-price-current">
                        {{-- <p class="special-price">{{ number_format($product->price) }}</p>
                        <p class="old-price">{{ number_format($product->old_price) }}</p> --}}
                        {!! \App\Helpers\Helper::price( $product->price) !!}
                        {!! \App\Helpers\Helper::oldPrice( $product->old_price) !!}
                    </div>
                    <!-- <div class="product-detail-description" style="display: none">
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error saepe excepturi
                            beatae corporis quis tenetur debitis quod,
                        </p>
                    </div> -->
                    <div class="product-category">
                        <p class="category-title">Loại :</p>
                        <p class="category-name">{{ $product->category->name }}</p>
                    </div>

                    {{-- <div class="product-unit">
                        <p class="title">Đơn vị :</p>
                        <p class="value">1</p>
                    </div> --}}

                    <div class="product-vendor">
                        <p class="vendor-title">Xuất xứ :</p>
                        <p class="vendor-name">Việt Nam</p>
                    </div>

                    @if($product->brand?->name)
                    <div class="product-vendor">
                        <p class="vendor-title">Thương hiệu :</p>
                        <p class="vendor-name">{{ $product->brand?->name }}</p>
                    </div>
                    @endif
                    
                    <div class="product-availability">
                        <p class="availability-title">Tình trạng :</p>
                        <p class="in-stock" id="product-stock" data-quantity="{{ $product->stock }}">{{ $product->stock }} sản phẩm có sẵn</p>
                    </div>
                    @if($product->price != 0)
                    <div class="add-to-cart">
                        <form>
                            <div class="full-left">
                                <div class="quantity">
                                    <button type="button">
                                        <i class="fa-solid fa-minus icon-minus" style="color:white;border-top-left-radius: 12px;border-bottom-right-radius: 12px"></i>
                                    </button>
                                    <!-- <input type="number" name="quatity" id="" value="1" max-length="12" /> -->
                                    <input type="text" inputmode="numeric" name="quatity" id="input-quantity" value="1" max-length="12" class="input-quantity">
                                    <button type="button">
                                        <i class="fa-solid fa-plus icon-flus" style="color:white;border-top-left-radius: 12px;border-bottom-right-radius: 12px"></i>
                                    </button>
                                </div>
                                <button style="color:white;border-top-left-radius: 12px;border-bottom-right-radius: 12px" type="button" name="add-to-cart" class="btn-add-cart btn_add_to_cart btn_add_to_cart-detail translatex_" data-url="{{ route('add-to-cart',['id' => $product->id]) }}" data-product_id = "{{ $product->id }}">
                                    <i class="fa-solid fa-cart-shopping"></i><span class="btn-add">Thêm vào giỏ hàng</span>
                                </button>
                            </div>
                        </form>
                    </div>
                    @endif
                    <hr>
                    <!-- <hr
                        style="
                            border: 1px solid;
                            border-image: linear-gradient(to right, #81ffb1, #ff6fe0) 1;
                        "
                    /> -->
                    <div class="share-social">
                        <p>Share :</p>
                        <div class="share-social-icon">
                            <a href="#" class="share-social-link">
                                <img width="30" height="30" src="https://img.icons8.com/fluency/48/facebook-circled.png" alt="facebook-circled"></a>

                            <a href="#" class="share-social-link">
                                <img width="32" height="32" src="https://img.icons8.com/fluency/48/instagram-new.png" alt="instagram-new">
                            </a>

                            <a href="#" class="share-social-link"><img width="30" height="30" src="https://img.icons8.com/fluency/48/twitter.png" alt="twitter"></a>
                        </div>
                    </div>
                </div>

                <div class="product_tag" style="padding:0px 20px 20px;">
                    @if($productTags->isNotEmpty())
                    <p style="font-size:20px;font-weight:bold">Tags</p>
                        <i class="fa-solid fa-tags"></i>
                        @foreach($productTags as $tag)
                        <a href="{{ route('product-tags', ['product_tag' => $tag->name]) }}" class="product_item" style="display:inline-block;padding:3px 4px;background-color:rgb(172, 225, 172);margin:2px 2px ;border-radius:5px;">{{ $tag->name }}</a>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Product Info --}}
<div class="product-info">
    <!-- Tab items -->
    <div class="tabs">
        <div class="tab-item active">
            <img width="25" height="25" src="https://img.icons8.com/fluency/48/content.png" alt="content">
            <span> Mô tả chi tiết</span>
        </div>
        <div class="tab-item">
            <img width="25" height="25" src="https://img.icons8.com/fluency/48/feedback-hub.png" alt="feedback-hub">
            <span>Đánh giá sản phẩm</span>
        </div>

        <div class="line"></div>
    </div>

    <!-- Tab content -->

    <div class="tab-pane_desc tab-pane active">
        {{-- <h2>{{ $product->name }}</h2> --}}
        <p>
           {!! $product->content !!}
        </p>
      
    </div>

    <div class="tab-pane tab-review">
        <div class="row">
            <div class="col-md-6 review-comment" data-id="{{$product->id}}">
                <ol class="comment-list" id="view-comment" data-url="{{ route('load-comment') }}">
                    
                </ol>
            </div>
            <div class="col-md-6 review-form-wraper">
                <div class="review-form-res">
                    <h2>Viết đánh giá</h2>
                    <hr>
                    @php
                            if(Auth::check())
                            {
                                $user = Auth::user();
                                $email = $user->email;
                            }else{
                                $email = " ";
                            }
                    @endphp
                    {{-- <form action="#" id="comment-form">
                        @csrf --}}
                        <div class="comment-form-rating">
                            {{-- <label for="rating">Chọn sao để đánh giá sản phẩm&nbsp;</label> --}}
                            <p class="text-start">Chọn sao để đánh giá sản phẩm&nbsp;</p>
                            <ul class="list-line rating" title="Average Rating" style="display:flex;margin:0;padding:0">
                                @for($count=1; $count<=5; $count++)
                                    @php
                                        if($count<=$rating)
                                        {
                                            $color = 'color:#ffcc00;';
                                        }else{
                                            $color ='color:#ccc;';
                                        }
                                    @endphp
                               <li 
                                    title="star_rating" 
                                    id="{{ $product?->id }}-{{ $count }}"
                                    data-index="{{ $count }}"   
                                    data-product_id ="{{ $product?->id }}"
                                    data-rating="{{ $rating }}" 
                                    class="rate" 
                                    style="cursor:pointer;{{ $color }}; font-size:30px;"
                                >
                                    &#9733
                                </li>
                                @endfor
                            </ul>
                        </div>
                        <div class="row">
                            <div class="col-md-6" style="margin:20px 0;">
                                <div class="form-group comment-form-author">
                                    <input class="form-control" type="text" name="cmt-name" id="cmt-name" value="" placeholder="Tên...">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group comment-form-email">
                                    <input readonly class="form-control" type="email" name="cmt-email" id="cmt-email" value="{{ $email }}" placeholder="Email...">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group comment-form-comment">
                                    <textarea class="form-control" name="cmt-content" id="cmt-content" cols="30" rows="6" placeholder="Nội dung đánh giá..."></textarea>
                                </div>
                            </div>
                            <div class="cmt-notification" ></div>

                            <div class="form-group btn-form-submit" id="send-comment" data-url="{{ route('send-comment') }}">
                                <button class="button-contactForm translatex" data-count="0" id="submit-cmt" style="font-size:18px;font-weight:500">Gửi đánh giá</button>
                            </div>
                        </div>
                    {{-- </form> --}}

                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- Related Product  --}}
    <div class="container related-product">
        <div class="row">
            <div class="col-md-12">
                <div class="related-text-content">
                    <p>Produced</p>
                    <h4><span style="font-size:30px">Sản phẩm liên quan</span></h4>
                    <div class="related-line"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="product-grid row g-3">
                    @foreach($productRelated as $products)
                    <div class="col-lg-1-5">
                        <div class="product-cart">
                            <div class="product-img-action">
                                <div class="product-cart-img">
                                    <a href="{{ route('view-product',['id' => $products->id, 'slug' => Str::slug($products->name)]) }}">
                                        <img class="default-img" src="{{ asset('uploads/') }}/{{ $products->image }}" alt="">
                                        {{-- <img class="hover-img" src="{{ asset('uploads/') }}/{{ $products->image }}" alt=""> --}}
                                    </a>
                                   <div class="product-action">
                                        <a href={{ route('view-product',['id' => $products->id, 'slug' => Str::slug($products->name)]) }} class="product-action-icon">
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
                                        <a href="#" class="product-action-icon btn_add_to_cart btn_add_to_cart-quick " data-url="{{ route('add-to-cart',['id' => $products->id]) }}">
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
                                <!-- button hiển thị giá trị giảm  giá của 1 cart là bao nhiêu -->
                                <div class="product-badges"></div>
                            </div>
                            <div class="product-content">
                                <div class="product-category">{{ $product->category->name }}</div>
                                <h2 class="product-name">
                                    <a href={{ route('view-product',['id' => $products->id, 'slug' => Str::slug($product->name)]) }}>{{ $products->name }}</a>
                                </h2>
                                <div class="product-rate-cover" style="display:none">
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
                                   
                                    <div class="product-price">
                                        {!! \App\Helpers\Helper::price( $products->price) !!}
                                        {!! \App\Helpers\Helper::oldPrice( $products->old_price) !!}
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
                   
                </div>
            </div>
        </div>
    </div>

@endsection

@push('custom-script')

<script>
const app_ = {
  
    // quantityInput() {
    //     const $ = document.querySelector.bind(document);
    //     const $$ = document.querySelectorAll.bind(document);

    //     const minusBtn = $('.icon-minus');
    //     const plusBtn = $('.icon-flus');
    //     const quantityInput_ = $('.input-quantity');

    //     minusBtn.addEventListener('click', function () {
    //         let quantity = parseInt(quantityInput_.value);
    //         if (quantity > 1) {
    //             quantity -= 1;
    //             quantityInput_.value = quantity;
    //         }
    //     });

    //     plusBtn.addEventListener('click', function () {
            

    //         let quantity = parseInt(quantityInput_.value);
    //         if (quantity < 10 || quantity < 0) {
    //             quantity += 1;
    //             quantityInput_.value = quantity;
    //         }
            
    //     });
    // },
    quantityInput() {
        const minusBtn = $('.icon-minus');
        const plusBtn = $('.icon-flus');
        const quantityInput_ = $('.input-quantity');
        let stockProduct = $('#product-stock').attr('data-quantity');
        const addCartBtn = $('.btn-add-cart');
        let stock = $('#product-stock').data('quantity');

        minusBtn.on('click', function () {
            let quantity = parseInt(quantityInput_.val());
            // console.log(quantity)

            if (quantity > 1) {
                quantity -= 1;
                quantityInput_.val(quantity);

                if (quantity > stock) {
                    addCartBtn.prop('disabled', true);
                } else {
                    addCartBtn.prop('disabled', false);
                }
            }
        });

        plusBtn.on('click', function () {
            let quantity = parseInt(quantityInput_.val());
            // if (quantity < 10 || quantity < 0) {
                quantity += 1;
                quantityInput_.val(quantity);
                if (quantity > stock) {
                    addCartBtn.prop('disabled', true);
                } else {
                    addCartBtn.prop('disabled', false);
                }
            // }

        });

        if(stockProduct < 1)
        {
            addCartBtn.prop('disabled', true);
        }
    },

    toggleTabUi() {
        const $ = document.querySelector.bind(document);
        const $$ = document.querySelectorAll.bind(document);
        let tabItem = $$('.tab-item');
        const panes = $$('.tab-pane');
        // tabItem = [...tabItem];

        tabItem.forEach((item, index) => {
            item.addEventListener('click', function () {
                $('.tab-item.active').classList.remove('active');
                $('.tab-pane.active').classList.remove('active');

                $('.line').style.left = `${this.offsetLeft}px`;
                $('.line').style.width = `${this.offsetWidth}px`;
                this.classList.add('active');
                panes[index].classList.add('active');
            });
        });

        // tabItem.forEach((element) => {
        //     element.addEventListener('click', (event) => {
        //         const clickedTab = event.target;
        //         console.log(clickedTab);
        //     });
        // });
    },
    run() 
    {
        this.quantityInput();
        this.toggleTabUi();
    },
};
    app_.run();
 
</script>

<script>
     $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    function addToCart(event) {
        event.preventDefault();
        let urlCart = $(this).data("url");
        let inputValue = $('#input-quantity').val();
        // $('#product-stock').data('quantity', stock); //cách này lấy value thay đổi route

        // alert(urlCart);
        $.ajax({
            method: "GET",
            url: urlCart,
            dataType: "json",
            data: {
                quantity: inputValue,  
                _token: $('meta[name="csrf-token"]').attr("content"),
            },
            success: function (data) {
                let count = 0;
    
                if (data.code === 200) {
                    $("#count_number").text(data.count_number)
                    $("#cart_list_wrapper").html(data.cartList);
                    // console.log(data.cartList);
                }
            },
            error: function () {
                alert("Lỗi ở ajax");
            },
    });
}

$(document).ready(function () {
    $(document).on("click", ".btn_add_to_cart-detail", addToCart);
});
</script>
@endpush