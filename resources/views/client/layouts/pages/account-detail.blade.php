@extends('client.layouts.master_layout')

@section('content')
<!-- Detail-Profile -->
@if(Auth::check())
<div class="container">
    <div class="row menu-account-wraper">
        <div class="col-md-3">
            <div class="account-sidebar">
                <h2 class="account-sidebar__title">Thông tin</h2>
                <ul class="account-sidebar__menu">
                    <!-- sidebar-menu__child -->
                    <li class="sidebar-menu__item">
                        <a href="#" class="sidebar-menu__link translatex_ tab-item-common active">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 16 16"
                                width="1em"
                                height="1em"
                                fill="currentColor"
                                style="font-size: 20px"
                            >
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"
                                ></path>
                            </svg>
                            <span>Tài khoản</span>
                        </a>
                    </li>

                    <li class="sidebar-menu__item">
                        <a href="#" class="sidebar-menu__link translatex_ tab-item-common">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 16 16"
                                width="1em"
                                height="1em"
                                fill="currentColor"
                                style="font-size: 20px"
                            >
                                <path
                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"
                                ></path>
                                <path
                                    d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"
                                ></path>
                            </svg>
                            <span>Sổ địa chỉ</span>
                        </a>
                    </li>

                    <li class="sidebar-menu__item">
                        <a href="#" class="sidebar-menu__link translatex_ tab-item-common">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 16 16"
                                width="1em"
                                height="1em"
                                fill="currentColor"
                                style="font-size: 20px"
                            >
                                <path
                                    d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"
                                ></path>
                            </svg>
                            <span>Lịch sử mua hàng</span>
                        </a>
                    </li>

                    <li class="sidebar-menu__item">
                        <a href="{{ route('customer.logout') }}" class="sidebar-menu__link translatex_ tab-item-common">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 16 16"
                                width="1em"
                                height="1em"
                                fill="currentColor"
                                style="font-size: 20px"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"
                                ></path>
                                <path
                                    fill-rule="evenodd"
                                    d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"
                                ></path>
                            </svg>
                            <span> Đăng xuất</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-9">
            {{-- Account --}}
            <div class="tab-pane-account tab-pane-common active" >
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Thông tin cá nhân</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('customer.update',['id' => $user->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Họ tên<span style="color: red">*</span></label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="user_name"
                                    aria-describedby="emailHelp"
                                    value="{{ $user->name }}"
                                />
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email<span style="color: red">*</span></label>
                                <input
                                    type="email"
                                    class="form-control"
                                    readonly
                                    name="email"
                                    style="color: rgb(164, 160, 160)"
                                    aria-describedby="emailHelp"
                                    value="{{ $user->email }}"
                                />
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Số điện thoại<span style="color: red">*</span></label>
                                <input
                                    type="number"
                                    class="form-control"
                                    name="phone"
                                    readonly
                                    value="{{ $user->phone }}"
                                    style="color: rgb(164, 160, 160)"
                                />
                            </div>

                            {{-- Select2 --}}

                            <div class="mb-3">
                                <label class="form-label">Địa chỉ chi tiết</label>
                                <textarea class="form-control" name="address" rows="3">{{ $user->address }}</textarea>
                            </div>

                            {{-- <a href="#" class="translatex " id="btn-destroy-cart" style="background-color:rgb(93,168,138,0.8);display:inline-block; padding:7px 20px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);border-top-right-radius: 12px;border-bottom-left-radius: 12px;color:black;font-weight:600;font-size:16px;position:relative; margin-top:10px"><i class="bi bi-arrow-left me-2"></i>Cập nhật</a> --}}
                            <button type="submit" class="translatex" style="background-color:rgb(93,168,138,0.8);display:inline-block; padding:7px 20px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);border-top-right-radius: 12px;border-bottom-left-radius: 12px;color:black;font-weight:600;font-size:16px;position:relative; margin-top:10px"><i class="bi bi-arrow-left me-2">Cập nhật</button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- Address --}}
            <div class="tab-pane-address tab-pane-common">
                <div class="address-title">
                    <h3>Danh sách địa chỉ</h3>
                    {{-- id="new-address" thêm vào thẻ a dưới để hiện modal --}}
                    <a href="#" class="add-address icon-overlay add-address" >
                        <i
                            class="fa-solid fa-map-location"
                            style="font-size: 29px; font-weight: 800; color: rgb(207, 90, 231)"
                        ></i>
                        {{-- <i class="fa-solid fa-circle-plus" style="font-size: 29px; font-weight: 800; color: rgb(160, 7, 81)"></i> --}}
                    </a>
                </div>
                <div class="address-create_content address-list">
                    {{-- address-item --}}
                    <div id="wraper_address-item"> 
                        @include('client.components.address_item_component',['addresses' => $addresses])
                    </div>

                    {{-- Modal --}}
                    {{-- <div class="address-overlay overlay-common">
                        <div class="content-wraper-common address-content-wraper">
                            <div class="card">
                                <div class="card-header" style="display:flex;justify-content:space-between;align-items: center;">
                                    <h4 class="card-title">Tạo địa chỉ</h4>
                                    <p style="font-size:20px;"><i class="fa-solid fa-circle-xmark icon-close-overlay"></i></p>
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <div class="mb-3">
                                            <label class="form-label">Họ tên</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="name_user"
                                                aria-describedby="emailHelp"
                                            />
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="email"
                                                aria-describedby="emailHelp"
                                            />
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Phone</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="phone"
                                                aria-describedby="emailHelp"
                                            />
                                        </div>

                                        <div class="mb-3">
                                            <label for="parent_id" class="form-label">Tỉnh/Thành phố</label>
                                            <select class="form-select select2" id="parent_id" name="parent_id" aria-label="Default select example">
                                                <option value="0">---Chọn---</option>
                                                @foreach($provinces as $province)
                                                    <option value="{{ $province->parent_id }}">{{ $province->name }}</option>
                                                @endforeach
                                                </select>
                                        </div>
                    
                                        <div class="mb-3">
                                            <label for="district" class="form-label">Quận/Huyện</label>
                                            <select class="form-select select2" id="district" name="district" aria-label="Default select example">
                                                <option value="0">---Chọn---</option>
                                                @foreach($districts as $district)
                                                <option value="{{ $district->id }}">{{ $district->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                    
                                        <div class="mb-3">
                                            <label for="ward" class="form-label">Phường Xã</label>
                                            <select class="form-select select2" id="ward" name="ward" aria-label="Default select example">
                                                <option value="0">---Chọn---</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Số nhà / Tên đường</label>
                                            <textarea class="form-control" name="address" rows="3"></textarea>
                                        </div>

                                        <p>Đặt làm địa chỉ mặc định</p>
                                        <div class="form-check">
                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="status"
                                                checked
                                                value="1"
                                            />
                                            <label class="form-check-label"> Có </label>
                                        </div>
                                        <div class="form-check">
                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="status"
                                                value="0"
                                            />
                                            <label class="form-check-label"> Không </label>
                                        </div>

                                        <a href="#" class="translatex " id="btn-destroy-cart" style="background-color:rgb(93,168,138,0.8);display:inline-block; padding:7px 20px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);border-top-right-radius: 12px;border-bottom-left-radius: 12px;color:black;font-weight:600;font-size:16px;position:relative; margin-top:10px"><i class="bi bi-arrow-left me-2"></i>Cập nhật</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- Modal thay thế model ở trên --}}
                   <div class="address-wraper">
                        <div class="card">
                            <div class="card-header" style="display:flex;justify-content:space-between;align-items: center;">
                                <h4 class="card-title">Tạo địa chỉ</h4>
                                <p style="font-size:20px; "><i style="color:red;cursor: pointer;" class="fa-solid fa-circle-xmark icon-close-overlay"></i></p>
                            </div>
                            <div class="card-body">
                                {{-- {{ isset($category) ? route('categories.update', $category->id) : route('categories.store') }} --}}
                                <form action="{{ route('customer.store') }}" method="POST">
                                    @csrf
                                    {{-- @if(isset($category))
                                        @method('put')
                                    @endif --}}
                                    <div class="mb-3">
                                        <label class="form-label url_"  >Họ tên</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="name_user"
                                            aria-describedby="emailHelp"
                                        />
                                    </div>
    
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="email"
                                            aria-describedby="emailHelp"
                                        />
                                    </div>
    
                                    <div class="mb-3">
                                        <label class="form-label">Phone</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="phone"
                                            aria-describedby="emailHelp"
                                        />
                                    </div>
    
                                    <div class="mb-3">
                                        <label for="parent_id" class="form-label">Tỉnh/Thành phố</label>
                                        <select style="width:100%" class="form-select select2" id="parent_id" name="parent_id" aria-label="Default select example">
                                            <option value="0">---Chọn---</option>
                                            @foreach($provinces as $province)
                                                <option value="{{ $province->parent_id }}">{{ $province->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                
                                    <div class="mb-3">
                                        <label for="district" class="form-label">Quận/Huyện</label>
                                        <select style="width:100%" class="form-select select2" id="district_" name="district" aria-label="Default select example">
                                            <option value="0">---Chọn---</option>
                                            @foreach($districts as $district)
                                                <option value="{{ $district->id }}">{{ $district->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                
                                    <div class="mb-3">
                                        <label for="ward" class="form-label">Phường Xã</label>
                                        <select style="width:100%" class="form-select select2" id="ward_" name="ward" aria-label="Default select example">
                                            <option value="0">---Chọn---</option>
                                        </select>
                                    </div>
    
                                    <div class="mb-3">
                                        <label class="form-label">Số nhà / Tên đường</label>
                                        <textarea class="form-control" name="address" rows="3"></textarea>
                                    </div>
    
                                    <p>Đặt làm địa chỉ mặc định</p>
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="status"
                                            value="1"
                                        />
                                        <label class="form-check-label"> Có </label>
                                    </div>
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="status"
                                            checked
                                            value="0"
                                        />
                                        <label class="form-check-label"> Không </label>
                                    </div>
    
                                    {{-- <a href="#" class="translatex " id="btn-destroy-cart" style="background-color:rgb(93,168,138,0.8);display:inline-block; padding:7px 20px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);border-top-right-radius: 12px;border-bottom-left-radius: 12px;color:black;font-weight:600;font-size:16px;position:relative; margin-top:10px"><i class="bi bi-arrow-left me-2"></i>Cập nhật</a> --}}
                                    <button type="submit" class="translatex" style="background-color:rgb(93,168,138,0.8);display:inline-block; padding:7px 20px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);border-top-right-radius: 12px;border-bottom-left-radius: 12px;color:black;font-weight:600;font-size:16px;position:relative; margin-top:10px"><i class="bi bi-arrow-left me-2">Cập nhật</button>
                                </form>
                            </div>
                        </div>
                   </div>
                </div>
            </div>

            {{-- History order --}}
            <div class="tab-pane-history tab-pane-common">
                <div class="header-view-order">
                    <ul class="tab-title-list">
                        <li class="tab-title-item">
                            <a href="#" class="tab-title-link">Tất cả</a>
                        </li>
                        <li class="tab-title-item">
                            <a href="#" class="tab-title-link">Chờ xử lý</a>
                        </li>
                        <li class="tab-title-item">
                            <a href="#" class="tab-title-link">Vận Chuyển</a>
                        </li>
                        <li class="tab-title-item active">
                            <a href="#" class="tab-title-link">Hoàn Thành</a>
                        </li>
                    </ul>

                    <div class="order-detail">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Danh sách đơn hàng</h4>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col"style="text-align: center;vertical-align:middle;">Stt</th>
                                        <th scope="col"style="text-align: center;vertical-align:middle;">Tên người nhận</th>
                                        <th scope="col"style="text-align: center;vertical-align:middle;">Trạng thái</th></th>
                                        <th scope="col"style="text-align: center;vertical-align:middle;">Địa chỉ</th>
                                        <th scope="col"style="text-align: center;vertical-align:middle;">Tổng tiền</th></th>
                                        <th scope="col"style="text-align: center;vertical-align:middle;">Ngày đặt</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $index = 1;
                                    @endphp
                                    @foreach($orders as $key => $order)
                                        <tr>
                                            <td scope="row" style="text-align: center;vertical-align:middle;">{{ $index++ }}</td>
                                            <td style="text-align: center; vertical-align: middle;">
                                                {{-- {{ route('order.view', ['id' => $order->id]) }} --}}
                                                <a class="icon-overlay" id="view-order" href="{{ route('customer.view-order',['id' => $order->id]) }}">
                                                    {{ $order->name ?? '' }}
                                                </a>
                                            </td>
                                            <td style="text-align: center;vertical-align:middle;"><span class=" display:inline-block" style="margin:0">{{ $order?->status}}</span></td>
                                            <td style="text-align: center;vertical-align:middle;">{{ $order?->shipping_address }}</td>
                                            <td style="text-align: center;vertical-align:middle;">{{ number_format($order?->total_amount) }}</td>
                                            <td style="text-align: center;vertical-align:middle;">{{ $order->created_at->format('d/m/Y h:i:s') }}</td>
                                           
                                            {{-- <td style="text-align:center;vertical-align:middle;">
                                                <form action="{{ route('order-detail.destroy',['id'=>$order->id]) }}" method="post" style="display:block;padding:10px">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a class="btn btn-primary" href="#" style="margin:0 5px 0 0;"><i class="fa-solid fa-pen-to-square"></i></a>
                                                </form>
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>

                {{-- Modal --}}
                <div class="modal-wrapper-history">
                    @include('client.components.modal_history_order',['orderDetails' => $orderDetails])
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection

@push('custom-script')

<script>
    $(document).ready(function () {
        $('.select2').select2({
            theme: 'bootstrap-5'
        });

        $('#ward_').select2({
            theme: 'bootstrap-5',
            ajax: {
                type: 'GET',
                url: '{{ route('user.get-ward') }}',
                dataType: 'json',

                data: function (params) {
                    var query = {
                        parent_id: $('#district_').val(),
                        _token: '{{ csrf_token() }}'
                    }
                    return query;
                },
                processResults: function (res, params) {
                    return {
                        results: res,
                    }
                },
                // cache: true,
                // placeholder: 'Chọn quận/huyện',
            },
        })

        function overlayActive(event) {
            var addOverlay = $('.overlay-common');

            // Kiểm tra xem phần tử overlay đang có class "active" hay không
            if (addOverlay.hasClass('active')) {
                addOverlay.removeClass('active');
            } else {
                addOverlay.addClass('active');
            }

            $(document).on("click", ".icon-close-overlay", function () {
                $(".overlay-common").removeClass("active");
            });
        }
         $(document).on("click", ".icon-overlay", overlayActive);

        //function thay cho function do select2 trong modal lỗi ko hiển thị
        function iconActive(event) {
            var addAdderss = $('.address-wraper');

            // Kiểm tra xem phần tử overlay đang có class "active" hay không
            if (addAdderss.hasClass('active')) {
                // Nếu có, thì loại bỏ class "active"
                addAdderss.removeClass('active');
            } else {
                // Nếu không, thêm class "active"
                addAdderss.addClass('active');
            }

            $(document).on("click", ".icon-close-overlay", function () {
                $(".address-wraper").removeClass("active");
            });
        }
        $(document).on("click", ".add-address", iconActive);

        //set địa chỉ mặc định
        function setDefaultAddress(e) {
            e.preventDefault();
            let addressId = $(this).attr('data-id');
            let is_default = $('.user_name').attr('data-default');
            // Gửi yêu cầu AJAX để đặt địa chỉ mặc định.
            $.ajax({
                type: 'PUT',
                url: '{{ route('customer.address-default') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    addressId : addressId,
                    is_default: is_default == 1 ? 0 : 1,
                },
                dataType: 'json',
                success: function (response) {
                    if(response['code'] == 200){
                        alert(response['msg']);
                        // window.location.replace('{{ route('customer.profile') }}');
                        console.log(response['address_item']);
                        
                        // Xóa dữ liệu cũ trong #wraper_address-item
                        // $("#wraper_address-item").empty();
                        // Thêm dữ liệu mới vào #wraper_address-item
                        // $("#wraper_address-item").append(response['address_item']);
                        $("#wraper_address-item").html(response['address_item']);
                    }
                }
            });
        }
        $(document).on("click", ".change-address-default",setDefaultAddress)
       
        //Xem chi tiết đơn hàng
        function viewOrder(even) {
            even.preventDefault();
            let url = $(this).attr('href');
            $.ajax({
                type: 'GET',
                url: url,
                data: {
                    _token: '{{ csrf_token() }}',
                },
                dataType: 'json',
                success: function (response) {
                    if(response['code'] == 200){
                        $(".modal-wrapper-history").html(response['order_item']);
                        var addOverlay = $('.overlay-common_');

                        // Kiểm tra xem phần tử overlay đang có class "active" hay không
                        if (addOverlay.hasClass('active')) {
                            addOverlay.removeClass('active');
                        } else {
                            addOverlay.addClass('active');
                        }

                        $(document).on("click", ".icon-close-overlay", function () {
                            $(".overlay-common_").removeClass("active");
                        });
                        // $('#view-order')addClass('icon-overlay');
                        // alert(response['msg']);
                        // window.location.replace('{{ route('customer.profile') }}');
                    }
                }
            });
        }
        $(document).on("click", "#view-order",viewOrder)

            //toas modal
        function toastModal(e) 
        {
            e.preventDefault();
            $('.modal-toast').addClass('active')  
            let addressId = $(this).attr('data-id');
            let url = $(this).attr('href');

            //Xóa địa chỉ
            function deleteAddress(e) {
                e.preventDefault();
                
                $.ajax({
                    type: 'Delete',
                    url: url,
                    data: {
                        _token: '{{ csrf_token() }}',
                        addressId : addressId,
                    },
                    dataType: 'json',
                    success: function (response) {
                        if(response['code'] == 200){
                            // alert(response['msg']);
                            $('.modal-toast').removeClass('active')
                            // window.location.replace('{{ route('customer.profile') }}');
                            $("#wraper_address-item").html(response['address_item']);
                        }
                    }
                });

            }
            $(document).on("click", ".btn-yes",deleteAddress)

            function hideModal(e) 
            {
                $('.modal-toast').removeClass('active')
            }
            $(document).on("click", ".btn-no",hideModal)

            $(document).on("click", ".modal-toast", function (event) {
            // Kiểm tra xem phần tử click có chứa cart-sidebar hay không
            if (!$(event.target).closest(".content-toast-wrap").length) {
                // Nếu không chứa, ẩn cart-sidebar
                $(".modal-toast").removeClass("active");
            }
        });
        }
        $(document).on("click", ".delete-address",toastModal) 
    })
    
</script>

@endpush
