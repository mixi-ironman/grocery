@extends('admin.layouts.layout')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Coupons</h4>
            </div>
            <div class="card-body">
                <a class="btn btn-outline-primary" href="{{ route('coupons.create') }}"><i class="fa-brands fa-openid"></i> Add coupon</a>
                <table class="table" id="myTable_Coupon">
                    <thead>
                    <tr>
                        <th scope="col"style="text-align: center;vertical-align:middle;">#</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Name</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Type</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Value</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Giới hạn</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Lượt dùng</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Ngày hết hạn</th>
                        <td style="text-align: center;vertical-align:middle;">Action</td>
                    </tr>
                    </thead>
                    <tbody>     
                    
                    @foreach($coupons as $key => $coupon)
                        <tr>
                            {{-- @if($expirationDate > $currentDate ) --}}
                            <td scope="row" style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $coupon->id }}</td>
                            <td style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $coupon->name }}</td>
                            <td style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $coupon->type }}</td>
                            @if($coupon->type == 'money')
                            <td style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ number_format($coupon->value) }} VND</td>
                            @elseif($coupon->type == 'percent')
                            <td style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $coupon->value }}%</td>
                            @endif
                            {{-- ->format('d/m/Y h:i:s') --}}
                            {{-- @endif --}}
                            <td style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $coupon->usage_limit }}</td>
                            <td style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $coupon->usage_count }}</td>
                            <td style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{  $coupon->expery_date }}</td>
                            <td style="text-align:center;vertical-align:middle" >
                                {{-- <form action="{{ route('coupons.destroy',['id'=>$coupon->id]) }}" method="post" style="display:block;padding:10px">
                                    @csrf
                                    @method('DELETE') --}}
                                    <a class="btn btn-primary" href="{{ route('coupons.edit',['id'=>$coupon->id]) }}" style="margin:0 5px 0 0;"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a class="btn btn-primary delete-coupon" href="{{ route('coupons.destroy',['id'=>$coupon->id]) }}" style="margin:0 5px 0 0;" onclick="return confirm('Bạn có chắc muốn xóa?')"><i class="fa-solid fa-trash"></i></a>
                                    {{-- <button type="submit" class="btn btn-info" style="margin:0;"><i class="fa-solid fa-trash"></i></button> --}}
                                    
                                {{-- </form> --}}
                            </td>
                        </tr>
                    @endforeach
                    
                    </tbody>
                </table>
            </div>
            {{-- <div class="card-footer">
                {{ $coupons->links() }}
            </div> --}}
        </div>
    </div>
@endsection

@push('custom-script')
    <script>
        function deleteCoupon(e) {
            e.preventDefault();
            // let addressId = $(this).attr('data-id');
            let url = $(this).attr('href');
            $.ajax({
                type: 'DELETE',
                url: url,
                data: {
                    _token: '{{ csrf_token() }}',
                    // addressId : addressId,
                },
                dataType: 'json',
                success: function (response) {
                    if(response['code'] == 200){
                        alert(response['msg']);
                        window.location.replace('{{ route('coupons.index') }}');
                    }
                }
            });
        }

        $(document).on("click", ".delete-coupon",deleteCoupon)
    </script>
@endpush