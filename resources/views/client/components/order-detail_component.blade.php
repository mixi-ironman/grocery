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