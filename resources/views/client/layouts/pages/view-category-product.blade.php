@extends('client.layouts.master_layout')

@section('content')

<!-- Filter Product -->
<div class="filter-product">
    <!-- Banner-header -->
    <div class="banner-product-header">
        <div class="row">
            <div class="col-md-12">
                <div class="bgr-banner-shop"></div>
            </div>
        </div>
    </div>

    <!-- Content-filter -->
    <div class="row filter-product">
        <div class="col-md-3">
            <div class="sidebar-area-wrap">
                <form name="product-filter" class="product-filter" method="POST">
                    <!-- filer product category -->
                    <div class="filter-category-name">
                        <h4>Category</h4>
                        <div class="product-category">
                            <ul class="product-category-list" data-name="category" data-columns="2">
                                @foreach($categoryList as $index => $categoryParent)
                                
                                <div style="margin-bottom:10px;box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.05);">
                                    <li class="product-category-item">
                                        <a
                                            href="{{ route('category-product',['id' => $categoryParent?->id, 'slug' => Str::slug($categoryParent->name),'category_type' => 'parent']) }}"
                                            class="product-category-link"
                                            data-id="1"
                                            data-value="Adidas"
                                            
                                            >{{ $categoryParent->name }} 
                                            {{-- <span class="quantity-product" style="opacity:0;">30</span> --}}
                                            
                                        </a>
                                        @if($categoryParent->childrentCategory->count())
                                            <span style="font-size:16px;font-weight:bold;color:black;margin-left:10px"><i class="fa-solid fa-water"></i></span>
                                        @endif
                                    </li>
                                    @if($categoryParent->childrentCategory->count())
                                    <ul class="menu-list menu-sub-list" style="width:100% !important;box-shadow:none !important">
                                        @foreach($categoryParent->childrentCategory as $index => $categoryChild)
                                        <li class="menu-sub-item_" >
                                            <a href="{{ route('category-product',['id' => $categoryChild?->id, 'slug' => Str::slug($categoryChild->name),'category_type' => 'child']) }}" class="menu-sub-item_link" style="font-size:14px;font-weight:400">{{ $categoryChild->name }}</a>
                                        </li>
                                        @endforeach
                                       
                                    </ul>
                                    @endif
                                </div>

                                @endforeach
                                
                            </ul>
                        </div>
                    </div>
                    <!-- filter product frice -->
                    <div class="price-slider sidebar-widget">
                        <div class="price-ranger">
                            <h4>Filter By Price</h4>
                            <div
                                id="price-slider"
                                style="border: 1px solid #ccc; border-radius: 4px"
                            ></div>
                            <div class="filter-price">
                                <div class="show-value-range">
                                    Price: $<span class="min_">0</span> - $<span class="max_">100</span>
                                </div>
                                <button class="btn-filter-price translate" type="submit">Filter</button>
                            </div>
                        </div>
                    </div>
                    <!-- filter brand name -->
                    <div class="filter-brand-wrap" style="opacity: 0">
                        <h4>Brand</h4>
                        <div class="brand-name">
                            <ul class="list-brand">
                                <li class="brand-name-item">
                                    <input type="checkbox" name="" id="" value="adidas" />
                                    <label for=""> Adidas</label>
                                </li>
                                <li class="brand-name-item">
                                    <input type="checkbox" name="" id="" value="adidas" />
                                    <label for=""> Adidas</label>
                                </li>
                                <li class="brand-name-item">
                                    <input type="checkbox" name="" id="" value="adidas" />
                                    <label for=""> Adidas</label>
                                </li>
                                <li class="brand-name-item">
                                    <input type="checkbox" name="" id="" value="adidas" />
                                    <label for=""> Adidas</label>
                                </li>
                                <li class="brand-name-item">
                                    <input type="checkbox" name="" id="" value="adidas" />
                                    <label for=""> Adidas</label>
                                </li>
                                <li class="brand-name-item">
                                    <input type="checkbox" name="" id="" value="adidas" />
                                    <label for=""> Adidas</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-9">
            <div class="product-content-area">
                <div class="row">
                    <div class="shop-product-filter">
                        <div class="total-product">
                            <p style="opacity: 0">We found <strong>29</strong> items</p>
                        </div>

                        <div class="sort-by-product-area">
                            <div class="sort-by-cover sort-by-cover_left" style="opacity:0">
                                <div class="sort-by">
                                    <img
                                        width="25"
                                        height="25"
                                        src="https://img.icons8.com/fluency/48/sorting-answers.png"
                                        alt="sorting-answers"
                                    />
                                    <span>Show: </span><span>50</span
                                    ><span
                                        ><i
                                            class="fa-solid fa-layer-group"
                                            style="margin-left: 10px"
                                        ></i
                                    ></span>
                                </div>

                                <div class="sort-by-dropdown-quantity" >
                                    <ul>
                                        <li><a href="#">50</a></li>
                                        <li><a href="#">60</a></li>
                                        <li><a href="#">70</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sort-by-cover sort-by-cover_right">
                                <div class="sort-by-product-atribute">
                                    <div class="sort-by">
                                        <img
                                            width="25"
                                            height="25"
                                            src="https://img.icons8.com/fluency/48/sort-by.png"
                                            alt="sort-by"
                                        /><span>Sort by:</span><span>Featured</span>
                                    </div>
                                </div>
                                <div class="sort-by-dropdown-atribute">
                                    <ul class="atribute-list">
                                        <li class="atribute-item">
                                            <a href="#">Featured</a>
                                        </li>
                                        <li class="atribute-item">
                                            <a href="#">Price: Low to High</a>
                                        </li>
                                        <li class="atribute-item">
                                            <a href="#">Price: High to Low </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-grid row product-filter g-3">
                    @include('client.components.product_cart_item', ['products'=>$products,'itemsPerRow' =>'3'])
                </div>
                {{-- <div >
                    {{$products->links()}}
                </div> --}}
            </div>
        </div>
    </div>
</div>        
@endsection
@push('custom-script')
    <script>
        const app = {
            
            inputRange() {
                const $ = document.querySelector.bind(document);
                const $$ = document.querySelectorAll.bind(document);
                const priceSlider = document.getElementById('price-slider');
                const start_ = $('.min_');
                const end_ = $('.max_');
                noUiSlider.create(priceSlider, {
                    start: [0, 100],
                    connect: true,
                    range: {
                        min: 0,
                        max: 100,
                    },
                });

                priceSlider.noUiSlider.on('update', function (values, handle) {
                    start_.innerText = Math.round(values[0]);
                    end_.innerText = Math.round(values[1]);

                    // Gọi hàm filter sản phẩm dựa trên giá trị tối thiểu và tối đa
                    filterProductsByPriceRange(values[0], values[1]);
                });

                function filterProductsByPriceRange(minPrice, maxPrice) {
                    // Thực hiện các thao tác filter sản phẩm với giá trị tối thiểu và tối đa đã chọn
                }
            },

            run() {
                this.inputRange();
            },
        };

        app.run();
    </script>
@endpush
