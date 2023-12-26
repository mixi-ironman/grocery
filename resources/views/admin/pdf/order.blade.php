<!-- resources/views/invoices/invoice.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .invoice {
            width: 80%;
            margin: auto;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .invoice-details {
            margin-bottom: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table, .table th, .table td {
            border: 1px solid #ddd;
        }

        .table th, .table td {
            padding: 10px;
            text-align: left;
        }

        .total {
            text-align: right;
        }
    </style>
</head>
<body>

    <div class="invoice">
        <div class="header">
            <h1>ORDER BILL</h1>
        </div>

        <div class="invoice-details">
            {{-- <p>Mã đơn: {{ $orderDetail?->order?->order_code }}</p> --}}
            {{-- <p>Customer Name: {{ $customer_name }}</p>
            <p>Invoice Date: {{ now()->format('Y-m-d') }}</p> --}}
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($items as $item)
                    <tr>
                        <td>{{ $item['description'] }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>${{ number_format($item['unit_price'], 2) }}</td>
                        <td>${{ number_format($item['total'], 2) }}</td>
                    </tr>
                @endforeach --}}
            </tbody>
        </table>

        <div class="total">
            {{-- <p>Total: ${{ number_format($total, 2) }}</p> --}}
        </div>
    </div>

</body>
</html>
