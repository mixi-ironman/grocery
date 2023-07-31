@extends('admin.layouts.layout')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Danh sách đơn hàng</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Mã Đơn</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Tên KH</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Sdt</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Địa chỉ</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Product name</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Giá</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Số lượng</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Tổng tiền</th></th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Ghi chú</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Ngày đặt</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orderDetail as $key => $orderDetail)
                        <tr>
                            <td scope="row" style="text-align: center;vertical-align:middle;">{{ $orderDetail?->order?->order_code }}</td>
                            <td style="text-align: center;vertical-align:middle;">{{ $orderDetail?->order?->name }}</td>
                            <td style="text-align: center;vertical-align:middle;">{{ $orderDetail?->order?->phone }}</td>
                            <td style="text-align: center;vertical-align:middle;">{{ $orderDetail?->order?->shipping_address }}</td>
                            <td style="text-align: center;vertical-align:middle;">{{ $orderDetail?->product?->name }}</td>
                            <td style="text-align: center;vertical-align:middle;">{{ number_format($orderDetail?->price) }}</td>

                            <td style="text-align: center;vertical-align:middle;">{{ $orderDetail?->quantity }}</td>
                            <td style="text-align: center;vertical-align:middle;">{{ number_format($orderDetail?->total_price) }}</td>
                            <td style="text-align: center;vertical-align:middle;">{{ $orderDetail?->order?->order_note }}</td>
                            <td style="text-align: center;vertical-align:middle;">{{ $orderDetail->created_at->format('d/m/Y h:i:s') }}</td>
                           
                            <td style="text-align:center;vertical-align:middle">
                                <form action="{{ route('order.destroy',['id'=>$orderDetail->id]) }}" method="post" style="display:block;padding:10px">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-primary" href="#" style="margin:0 5px 0 0;"><i class="fa-solid fa-pen-to-square"></i></a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{-- <div class="card-footer">
                {{ $categories->links() }}
            </div> --}}
        </div>
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

