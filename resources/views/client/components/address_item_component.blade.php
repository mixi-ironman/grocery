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
            <p class="address-user_detail" style="font-weight: 600;">{{ $address->address_details }}</p>
            <p style="margin:0 5px 0 15px; ">  <i class="fa-solid fa-map-location-dot"></i>  </p>
            <p class="" style="display:block; font-weight: 600;">{{ $address->province  }}, {{ $address->district }}, {{ $address->ward }}</p>
        </div>
        <p class="address-user_phone"><span class="title_">Sđt: </span>{{ $address->phone }}</p>
        <p class="address-user_email">
            <span class="title_">Email: </span>{{ $address->email }}
        </p>
    </div>
    <div class="address-item_action">
        @if(!$address->is_default)
        <a class="change-address-default" data-id="{{ $address->id }}" href="#" style="display:inline-block;padding:6px 10px;background-color:pink;border-radius:5px;margin-right:5px;">Đặt làm mặc định</a>
        @endif
        {{-- <a><i class="fa-solid fa-pen"></i></a> --}}
        <a class="delete-address" href="{{ route('customer.destroy',['id' => $address->id ]) }}" data-id="{{ $address->id }}" style="margin-left: 10px"><i class="fa-solid fa-trash"></i></a>
    </div>
</div>
@endforeach
