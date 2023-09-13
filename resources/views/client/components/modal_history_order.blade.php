<div class="history-overlay overlay-common_">
    <div class="content-wraper-common history-content-wraper">
        <div class="card">
            <div class="card-header" style="display:flex;justify-content:space-between;align-items: center;">
                <h4 class="card-title">Danh sách đơn hàng</h4>
                <p style="font-size:20px;"><i style="color:red;cursor: pointer;" class="fa-solid fa-circle-xmark icon-close-overlay"></i></p>
            </div>
        
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Sản phẩm</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Ảnh</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Giá</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Số lượng</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Tổng tiền</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orderDetails as $key => $orderDetail)
                        <tr>
                          
                            <td style="text-align: center;vertical-align:middle;text-overflow: ellipsis;overflow: hidden;max-width:200px; -webkit-line-clamp: 2;line-height: 1.2em;max-height: 2.4em;">{{ $orderDetail?->product?->name }}</td>
                            <td style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">
                                <img style="width:120px;height:120px;line-height:120px;object-fit: cover;border-radius:5px;border:1px solid rgb(247, 181, 181);box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);object-position: center;" src="{{ asset('uploads/') }}/{{ $orderDetail?->image }}" >
                            </td>
                            <td style="text-align: center;vertical-align:middle;">{{ number_format($orderDetail?->price) }}</td>
                            <td style="text-align: center;vertical-align:middle;">{{ $orderDetail?->quantity }}</td>
                            <td style="text-align: center;vertical-align:middle;">{{ number_format($orderDetail?->total_price) }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div>
                </div>
            </div>
           
        </div>
    </div>
</div>