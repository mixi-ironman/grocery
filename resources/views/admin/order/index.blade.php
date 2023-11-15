@extends('admin.layouts.layout')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Danh sách đơn hàng</h4>
            </div>
            <div class="card-body">
                <table class="table" id="myTable_Order">
                    <thead>
                    <tr>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Stt</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Tên KH</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Sdt</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Địa chỉ</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Tổng tiền</th></th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Trạng thái</th></th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Ghi chú</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Ngày đặt</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Action</th>
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
                                <a href="{{ route('order-detail.view', ['id' => $order->id]) }}">
                                    {{ $order->name }}
                                </a>
                            </td>
                            <td style="text-align: center;vertical-align:middle;">{{ $order?->phone }}</td>
                            <td style="text-align: center;vertical-align:middle;">{{ $order?->shipping_address }}</td>
                            <td style="text-align: center;vertical-align:middle;">{{ number_format($order?->total_amount) }}</td>
                            <td style="text-align: center;vertical-align:middle;">
                                <span class="btn btn-xs display:inline-block text-wrap-status" style="position:relative;margin:0;background-color:rgb(173, 222, 205);color:red;font-size:14px;font-weight:bold">
                                    <strong id="text-status">{{ $order?->status}}</strong>
                                    <ul class="list-group" style="margin-top:5px;">
                                        <li class="list-group-item"><a href="{{ route('order.update-order-status',['id' => $order->id]) }}" class="btn-update-order" data-statusorder = "Hủy đơn">Hủy đơn</a></li>
                                        <li class="list-group-item"><a href="{{ route('order.update-order-status',['id' => $order->id]) }}" class="btn-update-order" data-statusorder = "Đang xử lý">Đang xử lý</a></li>
                                        <li class="list-group-item"><a href="{{ route('order.update-order-status',['id' => $order->id]) }}" class="btn-update-order" data-statusorder = "Đang vận chuyển">Đang vận chuyển</a></li>
                                        <li class="list-group-item"><a href="{{ route('order.update-order-status',['id' => $order->id]) }}" class="btn-update-order" data-statusorder = "Đã giao">Đã giao</a></li>
                                    </ul>
                                </span>
                            </td>
                            <td style="text-align: center;vertical-align:middle;">{{ $order?->order_note }}</td>
                            <td style="text-align: center;vertical-align:middle;">{{ $order->created_at->format('d/m/Y h:i:s') }}</td>
                           
                            <td style="text-align:center;vertical-align:middle">
                                <form action="{{ route('order-detail.destroy',['id'=>$order->id]) }}" method="post" style="display:block;padding:10px">
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

@push('custom-script')
    <script>
        $(document).ready(function () {
            

        function updateOrderStatus(even) {
            even.preventDefault();
            let url = $(this).attr('href');
            let status = $(this).data('statusorder');
            let this_ = $(this);
            $.ajax({
                type: 'PUT',
                url: url,
                data: {
                    _token: '{{ csrf_token() }}',
                    'status' : status
                },
                dataType: 'json',
                success: function (response) {
                    if(response['code'] == 200){
                        alert('Cập nhật trạng thái thành công');
                        this_.closest('.text-wrap-status').find('#text-status').text(response['status']);
                        // $('a').parent('li').parent('ul').find('strong');
                    }
                }
            });
        }

        $(document).on("click", ".btn-update-order",updateOrderStatus)
    })

    </script>
@endpush

