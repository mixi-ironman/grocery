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
                        <div class="star-rating">
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        {{-- <span>32 reviews</span> --}}
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
                    <div class="product-unit">
                        <p class="title">Unit :</p>
                        <p class="value">Pack</p>
                    </div>
                    <div class="product-vendor">
                        <p class="vendor-title">Vendor :</p>
                        <p class="vendor-name">Suite</p>
                    </div>
                    <div class="product-category">
                        <p class="category-title">Type :</p>
                        <p class="category-name">{{ $product->category->name }}</p>
                    </div>
                    <div class="product-availability">
                        <p class="availability-title">Availability :</p>
                        <p class="in-stock">72 in stock</p>
                    </div>

                    <div class="add-to-cart">
                        <form action="">
                            <div class="full-left">
                                <div class="quantity">
                                    <button type="button">
                                        <i class="fa-solid fa-minus icon-minus"></i>
                                    </button>
                                    <!-- <input type="number" name="quatity" id="" value="1" max-length="12" /> -->
                                    <input type="text" inputmode="numeric" name="quatity" id="" value="1" max-length="12" class="input-quantity">
                                    <button type="button">
                                        <i class="fa-solid fa-plus icon-flus"></i>
                                    </button>
                                </div>
                                <button type="button" name="add-to-cart" class="btn-add-cart btn_add_to_cart">
                                    <i class="fa-solid fa-cart-shopping"></i><span class="btn-add">ADD TO CART</span>
                                </button>
                            </div>
                        </form>
                    </div>
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
            <span> Description</span>
        </div>
        <div class="tab-item">
            <img width="25" height="25" src="https://img.icons8.com/fluency/48/feedback-hub.png" alt="feedback-hub">
            <span> Reviews</span>
        </div>

        <div class="line"></div>
    </div>

    <!-- Tab content -->

    <div class="tab-pane active">
        <h2>{{ $product->name }}</h2>
        <p>
           {{ $product->description }}
        </p>
      
    </div>

    <div class="tab-pane tab-review">
        <div class="row">
            <div class="col-md-6 review-comment">
                <ol class="comment-list">
                    <li class="comment-item">
                        <img class="comment-user-img" src="#" alt="">
                        <div class="comment-text">
                            <div class="star-cmt">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="comment-meta">
                                <span>Nam LS</span>
                                -
                                <span>30/04/2023</span>
                            </div>
                            <div class="comment-description">
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere quae
                                    doloribus modi praesentium saepe amet, nesciunt accusantium beatae,
                                    dicta sed ipsum rem at natus adipisci. Voluptate repellat vero tenetur
                                    quae.
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="comment-item">
                        <img class="comment-user-img" src="#" alt="">
                        <div class="comment-text">
                            <div class="star-cmt">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="comment-meta">
                                <span>Nam LS</span>
                                -
                                <span>30/04/2023</span>
                            </div>
                            <div class="comment-description">
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere quae
                                    doloribus modi praesentium saepe amet, nesciunt accusantium beatae,
                                    dicta sed ipsum rem at natus adipisci. Voluptate repellat vero tenetur
                                    quae.
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="comment-item">
                        <img class="comment-user-img" src="#" alt="">
                        <div class="comment-text">
                            <div class="star-cmt">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="comment-meta">
                                <span>Nam LS</span>
                                -
                                <span>30/04/2023</span>
                            </div>
                            <div class="comment-description">
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere quae
                                    doloribus modi praesentium saepe amet, nesciunt accusantium beatae,
                                    dicta sed ipsum rem at natus adipisci. Voluptate repellat vero tenetur
                                    quae.
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="comment-item">
                        <img class="comment-user-img" src="#" alt="">
                        <div class="comment-text">
                            <div class="star-cmt">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="comment-meta">
                                <span>Nam LS</span>
                                -
                                <span>30/04/2023</span>
                            </div>
                            <div class="comment-description">
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere quae
                                    doloribus modi praesentium saepe amet, nesciunt accusantium beatae,
                                    dicta sed ipsum rem at natus adipisci. Voluptate repellat vero tenetur
                                    quae.
                                </p>
                            </div>
                        </div>
                    </li>
                </ol>
            </div>
            <div class="col-md-6 review-form-wraper">
                <div class="review-form-res">
                    <h2>Add Review</h2>
                    <hr>

                    <form class="comment-form" action="" method="post">
                        <div class="comment-form-rating">
                            <label for="rating">Your rating &nbsp;</label>
                            <p class="stars">
                                <span>
                                    <a class="star-1" href="#">
                                        <i class="fa-regular fa-star"></i>
                                    </a>
                                    <a class="star-2" href="#">
                                        <i class="fa-regular fa-star"></i>
                                    </a>
                                    <a class="star-3" href="#">
                                        <i class="fa-regular fa-star"></i>
                                    </a>
                                    <a class="star-4" href="#">
                                        <i class="fa-regular fa-star"></i>
                                    </a>
                                    <a class="star-5" href="#">
                                        <i class="fa-regular fa-star"></i>
                                    </a>
                                </span>
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group comment-form-comment">
                                    <textarea class="form-control" name="comment" id="comment" cols="30" rows="6" placeholder="Write comment"></textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group comment-form-author">
                                    <input class="form-control" type="text" name="name" id="name " placeholder="Name...">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group comment-form-email">
                                    <input class="form-control" type="text" name="email" id="email " placeholder="Email...">
                                </div>
                            </div>

                            <div class="form-group btn-form-submit">
                                <button type="submit" class="button-contactForm">Submit Review</button>
                            </div>
                        </div>
                    </form>
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
                    <h4><span>Related Product</span></h4>
                    <div class="related-line"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="product-grid row g-3">
                    @foreach($categories as $index => $products)
                    <div class="col-md-3">
                        <div class="product-cart">
                            <div class="product-img-action">
                                <div class="product-cart-img">
                                    <a href="#">
                                        <img class="default-img" src="{{ asset('uploads/') }}/{{ $products->image }}" alt="">
                                        {{-- <img class="hover-img" src="{{ asset('uploads/') }}/{{ $products->image }}" alt=""> --}}
                                    </a>
                                    <div class="product-action">
                                        <a href={{ route('view-product',['id' => $products->id, 'slug' => Str::slug($product->name)]) }} class="product-action-icon">
                                            <img width="35" height="35" class="translatex" src="https://img.icons8.com/external-ddara-fill-ddara/64/external-eye-eye-ddara-fill-ddara.png" alt="external-eye-eye-ddara-fill-ddara">
                                        </a>
                                        <button  class="product-action-icon" style="display:none">
                                            <img class="translatex" width="37" height="37" src="https://img.icons8.com/bubbles/50/half-heart.png" alt="half-heart">
                                        </button>
                                        <button  class="product-action-icon btn_add_to_cart">
                                            <img class="translatex" width="35" height="35" src="https://img.icons8.com/doodle/48/shopping-cart--v1.png" alt="shopping-cart--v1">
                                        </button>
                                    </div>
                                </div>
                                <!-- button hiển thị giá trị giảm  giá của 1 cart là bao nhiêu -->
                                <div class="product-badges"></div>
                            </div>
                            <div class="product-content">
                                <div class="product-category">{{ $products->category->name }}</div>
                                <h2 class="product-name">
                                    <a href="#">{{ $products->name }}</a>
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
let app = {
     scrollHeader() {
                window.addEventListener('scroll', function () {
                    var stickyElement = document.querySelector('.nav-container');
                    var contentOffsetTop = document.querySelector('.product-view');

                    if (contentOffsetTop) {
                        // Kiểm tra xem phần tử có tồn tại hay không
                        const topPosition = contentOffsetTop.offsetTop;
                        if (window.scrollY >= topPosition) {
                            stickyElement.classList.add('sticky');
                        } else {
                            stickyElement.classList.remove('sticky');
                        }
                    }
                });
            },

    quantityInput() {
        const $ = document.querySelector.bind(document);
        const $$ = document.querySelectorAll.bind(document);

        const minusBtn = $('.icon-minus');
        const plusBtn = $('.icon-flus');
        const quantityInput_ = $('.input-quantity');

        minusBtn.addEventListener('click', function () {
            let quantity = parseInt(quantityInput_.value);
            if (quantity > 1) {
                quantity -= 1;
                quantityInput_.value = quantity;
            }
        });

        plusBtn.addEventListener('click', function () {
            let quantity = parseInt(quantityInput_.value);
            if (quantity < 10 || quantity < 0) {
                quantity += 1;
                quantityInput_.value = quantity;
            }
        });
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
     run() {
                this.scrollHeader();
                this.quantityInput();
                this.toggleTabUi();
            },
        };

        app.run();
</script>
@endpush