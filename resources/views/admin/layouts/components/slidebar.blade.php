    <aside
      class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4"
      id="sidenav-main"
    >
      <div class="sidenav-header">
        <i
          class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
          aria-hidden="true"
          id="iconSidenav"
        ></i>
        <a class="navbar-brand m-0" href="./index.html" target="_blank">
          <img
            width="40"
            height="40"
            src="https://img.icons8.com/fluency/100/waterfox.png"
            alt="waterfox"
          />
          <!-- <img
            src="{{ url('./mixi') }}/assets/img/logo-ct-dark.png"
            class="navbar-brand-img h-100"
            alt="main_logo"
          /> -->
          <span class="ms-1 font-weight-bold">Mixi Grocery</span>
        </a>
      </div>
      <hr class="horizontal dark mt-0" />
      <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('dashboard.index') }}">
              <div
                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Thống kê</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('categories.index') }}">
              <div
                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i
                  class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"
                ></i>
              </div>
              <span class="nav-link-text ms-1">Danh mục</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('products.index') }}">
              <div
                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i
                  class="ni ni-credit-card text-success text-sm opacity-10"
                ></i>
              </div>
              <span class="nav-link-text ms-1">Sản Phẩm</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('brand.index') }}">
              <div
                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i
                  class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"
                ></i>
              </div>
              <span class="nav-link-text ms-1">Thương hiệu</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('sliders.index') }}">
              <div
                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i
                  class="ni ni-credit-card text-success text-sm opacity-10"
                ></i>
              </div>
              <span class="nav-link-text ms-1">Banner</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('user.index') }}">
              <div
                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Người Dùng</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('coupons.index') }}">
              <div
                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i
                  class="ni ni-single-copy-04 text-warning text-sm opacity-10"
                ></i>
              </div>
              <span class="nav-link-text ms-1">Mã giảm giá</span>
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="{{ route('order-detail.index') }}">
              <div
                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i class="ni ni-collection text-info text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Đơn Hàng</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('product.images.index') }}">
              <div
                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i class="ni ni-collection text-info text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Product Images</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('comment.index') }}">
              <div
                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i
                  class="ni ni-single-copy-04 text-warning text-sm opacity-10"
                ></i>
              </div>
              <span class="nav-link-text ms-1">Đánh giá</span>
            </a>
          </li> 

          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact.index') }}">
              <div
                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i
                  class="ni ni-single-copy-04 text-warning text-sm opacity-10"
                ></i>
              </div>
              <span class="nav-link-text ms-1">Phản hồi KH</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="sidenav-footer mx-3" style="display: none">
        <div class="card card-plain shadow-none" id="sidenavCard">
          <img
            class="w-50 mx-auto"
            src="{{ url('./mixi') }}/assets/img/illustrations/icon-documentation.svg"
            alt="sidebar_illustration"
          />
          <div class="card-body text-center p-3 w-100 pt-0">
            <div class="docs-info">
              <h6 class="mb-0">Need help?</h6>
              <p class="text-xs font-weight-bold mb-0">Please check our docs</p>
            </div>
          </div>
        </div>
        <a
          href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard"
          target="_blank"
          class="btn btn-dark btn-sm w-100 mb-3"
          >Documentation</a
        >
        <a
          class="btn btn-primary btn-sm mb-0 w-100"
          href="https://www.creative-tim.com/product/argon-dashboard-pro?ref=sidebarfree"
          type="button"
          >Upgrade to pro</a
        >
      </div>
    </aside>