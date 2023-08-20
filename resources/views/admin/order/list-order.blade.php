@extends('admin.layouts.layout')

@section('content')
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Danh sách đơn hàng</h4>
            </div>
            

            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Mã Đơn</th>
                        {{-- <th scope="col"style="text-align: center;vertical-align:middle;">Tên KH</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Sdt</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Địa chỉ</th> --}}
                        <th scope="col"style="text-align: center;vertical-align:middle;">Product name</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Ảnh</th>

                        <th scope="col"style="text-align: center;vertical-align:middle;">Giá</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Số lượng</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Tổng tiền</th></th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Ghi chú</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Ngày đặt</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orderDetail as $key => $orderDetail)
                        <tr>
                            <td scope="row" style="text-align: center;vertical-align:middle;">{{ $orderDetail?->order?->order_code }}</td>
                            {{-- <td style="text-align: center;vertical-align:middle;">{{ $orderDetail?->order?->name }}</td>
                            <td style="text-align: center;vertical-align:middle;">{{ $orderDetail?->order?->phone }}</td>
                            <td style="text-align: center;vertical-align:middle;">{{ $orderDetail?->order?->shipping_address }}</td> --}}
                            <td style="text-align: center;vertical-align:middle;text-overflow: ellipsis;overflow: hidden;max-width:200px; -webkit-line-clamp: 2;line-height: 1.2em;max-height: 2.4em;">{{ $orderDetail?->product?->name }}</td>

                             <td style="text-align: justify;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">
                                <img style="width:120px;height:120px;line-height:120px;object-fit: cover;border-radius:5px;border:1px solid rgb(247, 181, 181);box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);object-position: center;" src="{{ asset('uploads/') }}/{{ $orderDetail?->image }}" >
                            </td>
                            <td style="text-align: center;vertical-align:middle;">{{ number_format($orderDetail?->price) }}</td>

                            <td style="text-align: center;vertical-align:middle;">{{ $orderDetail?->quantity }}</td>
                            <td style="text-align: center;vertical-align:middle;">{{ number_format($orderDetail?->total_price) }}</td>
                            <td style="text-align: center;vertical-align:middle;">{{ $orderDetail?->order?->order_note }}</td>
                            <td style="text-align: center;vertical-align:middle;">{{ $orderDetail->created_at->format('d/m/Y h:i:s') }}</td>
                           
                            
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
           
        </div>
    </div>
        <div class="col-md-3">
        <table class="table" style="background-color:white; border-radius:5px;">
            <thead>
                <tr >
                    <th scope="col">Tên</th>
                    <td style="text-align: left;vertical-align:middle;">{{ $orderDetail?->order?->name }}</td>
                </tr>
                <tr >
                    <th scope="col">Sdt</th>
                    <td style="text-align: left;vertical-align:middle;">{{ $orderDetail?->order?->phone }}</td>
                </tr>
                <tr >
                    <th scope="col">Địa chỉ</th>
                    <td style="text-align: left;vertical-align:middle;">{{ $orderDetail?->order?->shipping_address }}</td>
                </tr>
            </thead>
            {{-- <tbody>
                <tr>
                    <td style="text-align: center;vertical-align:middle;">{{ $orderDetail?->order?->name }}</td>
                </tr>
            </tbody> --}}
            </table>
    </div>
   
@endsection

{{-- @push('custom-script')
    <script>
        $(document).ready(function () {
            $('#change-status').on('click', function(e){
                e.preventDefault();
                let = url = $(this).attr('href');
                let is_active = $(this).data('status');
                console.log('is_active');
                $.ajax({
                    method: 'PUT',
                    url : url,
                    data : {
                        _tocken: '{{ csrf_tocken}}'
                        is_active: is_active == 1 ? '0' : '1'
                    },
                    dataType:'json',
                    success: function(data) {
                    // Xử lý phản hồi từ server (nếu cần)
                    alert('Load product thành công');
                    
                    },
                })
            })
        })
    </script>
@endpush --}}

