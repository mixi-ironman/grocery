@foreach($addresses as $key => $address)
<div class="address-item translatey_">
    <div class="address-item_content-left">
        <div class="address-user_name">
            <p class="user_name" data-default="{{ isset($address) && $address->is_default ? $address->is_default : 0 }}">{{ $address->name }}</p>
            @if($address->is_default == true)
            <span class="title_" style="margin-left: 4px; color:red;">(Mặc định)</span>
            @endif
        </div>
        <div class="address-user">
            <span class="title_">Địa chỉ: </span>
            <div style="display: flex;flex-direction:column">
                <p class="address-user_detail" style="font-weight: 600;color: rgba(0,0,0,.54);">{{ $address->address_details }}</p>
                <div style="display: flex;"> 
                    <p style="margin-right:5px"><i class="fa-solid fa-map-location-dot text-warning"></i></p>
                    <p class="" style="display:block; font-weight: 600;color: rgba(0,0,0,.54);">{{ $address->province ?? ''  }}, {{ $address->district ?? '' }}, {{ $address->ward }}</p>
                </div>
            </div>
        </div>
        <p class="address-user_phone" style="color: rgba(0,0,0,.54);"><span class="title_">Sđt: </span>{{ $address->phone ?? '' }}</p>
        <p class="address-user_email" style="color: rgba(0,0,0,.54);">
            <span class="title_">Email: </span>{{ $address->email ?? '' }}
        </p>
    </div>
    <div class="address-item_action">
        @if(!$address->is_default)
        <a class="change-address-default" data-id="{{ $address->id ?? '' }}" href="#" style="background-color:white; display:inline-block;padding:6px 15px;color:red;border-radius:5px;margin-right:5px;border:1px solid rgb(247, 207, 207);box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);font-weight:600">Chọn</a>
        @endif
        {{-- <a><i class="fa-solid fa-pen"></i></a> --}}
        <a class="delete-address" href="{{ route('customer.destroy',['id' => $address->id ]) }}" data-id="{{ $address->id }}" style="padding: 10px"><i class="fa-solid fa-trash"></i></a>
    </div>
</div>
@endforeach
