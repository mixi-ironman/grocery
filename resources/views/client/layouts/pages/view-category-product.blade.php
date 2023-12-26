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
                {{-- <form name="product-filter" class="product-filter" method="POST"> --}}
                    <!-- filer product category -->
                    <div class="filter-category-name">
                        <h4>Danh mục</h4>
                        <div class="product-category">
                            <ul class="product-category-list" data-name="category" data-columns="2">
                                @foreach($categoryList as $index => $categoryParent)
                                
                                <div class="tab-wrap" style="margin-bottom:10px;box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.05);">
                                    <li class="product-category-item">
                                        <a
                                            href="{{ route('category-product',['id' => $categoryParent?->id, 'slug' => Str::slug($categoryParent->name),'category_type' => 'parent']) }}"
                                            class="product-category-link"
                                            data-id="1"
                                            data-value="Adidas"
                                            style="font-size:18px;font-weight: 500;"
                                            >{{ $categoryParent->name }} 
                                            {{-- <span class="quantity-product" style="opacity:0;">30</span> --}}
                                            
                                        </a>
                                        @if($categoryParent->childrentCategory->count())
                                            <span style="font-size:13px;font-weight:bold;color:black;margin-left:10px"><i class="fa-brands fa-airbnb icon-category open"></i></span>
                                        @endif
                                    </li>
                                    @if($categoryParent->childrentCategory->count())
                                    <ul class="menu-list_ menu-sub-list" style="width:100% !important;box-shadow:none !important">
                                        @foreach($categoryParent->childrentCategory as $index => $categoryChild)
                                        <li class="menu-sub-item_" >
                                            <a href="{{ route('category-product',['id' => $categoryChild?->id, 'slug' => Str::slug($categoryChild->name),'category_type' => 'child']) }}" class="menu-sub-item_link translatex_" style="font-size:16px;font-weight:500;color:gray">{{ $categoryChild->name }}</a>
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
                    <div class="price-slider sidebar-widget" >
                    `    <form id="filterForm" class="product-filter">
                            <div class="price-ranger">
                                <h4>Tìm kiếm theo giá</h4>
                                <div
                                    id="price-slider"
                                    style="border: 1px solid #ccc; border-radius: 4px"
                                ></div>
                                <form>
                                    <div style="display: flex; flex-direction: column;margin:10px 0">
                                        
                                        <div style="display: flex;text-align:center;"><label for="currency-range">Từ: &nbsp</label><span id="selected-currency" class="value_ranger">0</span>&nbsp<span id="price">đ</span></div>
                                        <input class="vnd currency-range" type="range" value = "0" min="0" max="1000000" step="10000" require/>
                                    </div>
                        
                                    <div style="display: flex; flex-direction: column">
                                        <div style="display: flex;text-align:center;"><label for="currency-range">Đến: &nbsp</label><span id="selected-currency_" class="value_ranger_">0</span>&nbsp<span id="price_">đ</span></div>
                                        <input class="vnd currency-range_" type="range" value = "0" min="0" max="2000000" step="10000" require/>
                                    </div>
                                    <button style="margin:20px 0 0 0px;" class="btn-filter-price translatex" data-url="{{ route('filter-price') }}"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                        </form>
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
                {{-- </form> --}}
            </div>
        </div>

        <div class="col-md-9">
            <div class="product-content-area">
                <div class="row" style="opacity:0;">
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
                <div id="products_filter" class="product-grid row product-filter g-3">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
<script>
        function acordion(e) {
            // $(this).find
            var parent = $(this).parent();
            if (parent.next().hasClass('menu-list_')) {
                parent.next('.menu-list_').css('display', 'block');
            }

            // $('.open').css('display', 'none');
            // $('.close').css('display', 'block');

        }
        $(document).on("mouseenter", ".product-category-link",acordion)

        // function accordion_(e) {
        //     $('.menu-list_').css('display', 'none');
        // }

        // $(document).on('click', function(e) {
        //     // Kiểm tra xem phần tử được click có class 'product-category-item' không
        //     if (!$(e.target).hasClass('product-category-item')) {
        //         // Nếu không có class 'product-category-item', ẩn '.menu-list_'
        //         $('.menu-list_').css('display', 'none');
        //     }
        // });

        function activeTab(e) {
            let listItem = $(this).closest('li.product-category-item');

            // Tìm phần tử cha của listItem có class tab-wrap
            let tabWrap = listItem.closest('.tab-wrap');
            let secondChild = tabWrap.children().eq(1);
                secondChild.css('display', 'none');
        }
        $(document).on("click", ".icon-category",activeTab)

        //handle input type ranger
        $('.currency-range').on('input', function () {
            var valueRanger = $(this).val();
            if (valueRanger == 1000000) {
                $('.currency-range_').attr('min', 1100000);
            }

            $('#selected-currency').text(valueRanger);
        });

        $('.currency-range_').on('input', function () {
            var valueRanger = $(this).val();
            $('#selected-currency_').text(valueRanger);
        });

        function countOccurrences(str, target) {
            // Sử dụng split để chuyển chuỗi thành một mảng các ký tự
            // Sử dụng filter để giữ lại các ký tự bằng với target
            // Sử dụng length để đếm số lượng ký tự bằng với target
            // return str.split('').filter(char => char === target).length;
            let count = 0;
            for (let i = 0; i < str.length; i++) {
                if (str[i] === target) {
                    count++;
                }
            }

            return count;
        }

        $('.vnd').on('input', function () {
            var vl = $(this).val();

            var unformattedValue = vl.replace(/[^0-9]/g, ''); // Lấy giá trị chỉ chứa số
            var formattedValue = numeral(unformattedValue).format('0,0'); // Định dạng theo định dạng tiền tệ
            if ($(this).hasClass('currency-range')) {
                $('#selected-currency').text(formattedValue);
            } else {
                $('#selected-currency_').text(formattedValue);
            }
        });

        function filterProduct(even) 
        {
            event.preventDefault();
            // var formData = $(this).serialize();
            let urlFilterByPrice = $('.btn-filter-price').data('url');
            let vl = $('.value_ranger').text().replaceAll(',', '');
            let vl_ = $('.value_ranger_').text().replaceAll(',', '');

            $.ajax({
                type: 'GET',
                url: urlFilterByPrice,
                data: {
                    vl,
                    vl_
                },
                success: function (data) {
                    if (data.code === 200) {
                        $("#products_filter").html(data.products_filter_by_price)
                    }else{
                        alert("Không có sản phẩm nào!")
                        location.reload();
                    }
                },
                error: function (error) {
                    console.error('Error:', error);
                }
            });
        }
        
        $(document).on('submit','#filterForm', filterProduct);
        // $('#filterForm').submit(function (event) {
        //         event.preventDefault();
        //         var formData = $(this).serialize();
        // });

</script>
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
