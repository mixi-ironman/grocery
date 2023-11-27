<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderSuccessMail;
use App\Models\Order;

class PaymentController extends Controller
{

    public function vnpay(Request $request)
    {
        // error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
        // date_default_timezone_set('Asia/Ho_Chi_Minh');
        // dd($request->all());
        $vnp_Url = config('payment.vnpay.url');
        $vnp_HashSecret = config('payment.vnpay.merchart_secret');

        $vnp_TxnRef = $request['order_id']; //Mã giao dịch thanh toán tham chiếu của merchant
        $vnp_Amount = $request['amount']; // Số tiền thanh toán
        $vnp_Locale = config('payment.vnpay.locate'); //Ngôn ngữ chuyển hướng thanh toán
        $vnp_BankCode = config('payment.vnpay.bankcode'); //Mã phương thức thanh toán
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR']; //IP Khách hàng thanh toán
        $inputData = array(
            "vnp_Version" => config('payment.vnpay.version'),
            "vnp_TmnCode" => config('payment.vnpay.merchart_id'),
            "vnp_Amount" => $vnp_Amount*100,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => config('payment.vnpay.currency'),
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => "Thanh toan GD:".$vnp_TxnRef,
            "vnp_OrderType" => "other",
            "vnp_ReturnUrl" => route('vnpay-return'),
            "vnp_TxnRef" => $vnp_TxnRef,
            "vnp_ExpireDate"=>Carbon::now()->addMinutes(30)->format('YmdHis'),
        );


        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }

        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        header('Location: ' . $vnp_Url);
        die();
    }

    public function vnpayReturn(Request $request)
    {
        if($request->vnp_TransactionStatus == 00)
        {
            $order = Order::find($request->vnp_TxnRef);
            if($order)
            {
                //gửi mail
                Mail::to($order->email)
                ->send(new OrderSuccessMail());
                }
            // dd($request->all());
            }

            session()->forget('cart');
            return redirect()->route('thanh-you');
        }
    }
