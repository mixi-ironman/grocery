<!-- Filter Product -->
<div class="container filter-product">
    <!-- Banner-header -->
    <div class="banner-product-header">
        <div class="row">
            <div class="bgr-banner-shop"></div>
        </div>
    </div>

    <!-- Content-filter -->
    <div class="filter-product">
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar-area-wrap">
                    <form name="product-filter" class="product-filter" method="POST">
                        <!-- filer product category -->
                        <div class="filter-category-name">
                            <h4>Category</h4>
                            <div class="product-category">
                                <ul class="product-category-list" data-name="category" data-columns="2">
                                    <li class="product-category-item">
                                        <a
                                            href="#"
                                            class="product-category-link"
                                            data-id="1"
                                            data-value="Adidas"
                                            >Milks & Dairies <span class="quantity-product" style="opacity:0;">30</span></a
                                        >
                                    </li>
                                    <li class="product-category-item">
                                        <a
                                            href="#"
                                            class="product-category-link"
                                            data-id="1"
                                            data-value="Adidas"
                                            >Vegetables <span class="quantity-product" style="opacity:0;">30</span></a
                                        >
                                    </li>
                                    <li class="product-category-item">
                                        <a
                                            href="#"
                                            class="product-category-link"
                                            data-id="1"
                                            data-value="Adidas"
                                            >Means <span class="quantity-product" style="opacity:0;">30</span></a
                                        >
                                    </li>
                                    <li class="product-category-item">
                                        <a
                                            href="#"
                                            class="product-category-link"
                                            data-id="1"
                                            data-value="Adidas"
                                            >Means <span class="quantity-product" style="opacity:0;">30</span></a
                                        >
                                    </li>
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
                        <div class="col-md-3">
                            <div class="product-cart">
                                <div class="product-img-action">
                                    <div class="product-cart-img">
                                        <a href="#">
                                            <img
                                                class="default-img"
                                                src="{{ url('client') }}/assets/img/product-1-1.jpg"
                                                alt=""
                                            />
                                            <!-- <img class="hover-img" src="{{ url('client') }}/assets/img/product-1-2.jpg" alt="" /> -->
                                        </a>
                                        <div class="product-action">
                                            <a href="#" class="product-action-icon">
                                                <img
                                                    width="35"
                                                    height="35"
                                                    class="translatex"
                                                    src="https://img.icons8.com/external-ddara-fill-ddara/64/external-eye-eye-ddara-fill-ddara.png"
                                                    alt="external-eye-eye-ddara-fill-ddara"
                                                />
                                            </a>
                                            <a href="#" class="product-action-icon">
                                                <img
                                                    class="translatex"
                                                    width="37"
                                                    height="37"
                                                    src="https://img.icons8.com/bubbles/50/half-heart.png"
                                                    alt="half-heart"
                                                />
                                            </a>
                                            <a href="#" class="product-action-icon">
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
                                    <!-- sao cho ở ngoài position lại ăn theo body -->
                                    <!-- <div class="product-action">
                                    <p>a</p>
                                    <p>b</p>
                                </div> -->
                                    <!-- button hiển thị giá trị gảim giá của 1 cart là bao nhiêu -->
                                    <div class="product-badges"></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-category">Snack</div>
                                    <h2 class="product-name">
                                        <a href="#"> Seeds of Change Organic Quinoa, Brown </a>
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
                                            <p>1000$</p>
                                            <p class="old-price">2000đ</p>
                                        </div>
                                        <div class="add-cart">
                                            <a href="#">
                                                <i class="me-2 fa-solid fa-cart-shopping"></i
                                                ><span>Add</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>