<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $productsSoldByDay = Order::join('order_details', 'orders.id', '=', 'order_details.order_id')
                            ->where('orders.status', 'Đã giao')
                            ->select(DB::raw('DATE(orders.created_at) as date'), DB::raw('SUM(order_details.quantity) as total'))
                            ->groupBy('date')
                            ->get();

        $productsSoldByMonth = OrderDetail::join('orders', 'order_details.order_id', '=', 'orders.id')
                            ->where('orders.status', 'Đã giao')
                            ->select(DB::raw('MONTH(order_details.created_at) as month'), DB::raw('SUM(order_details.quantity) as total'))
                            ->groupBy('month')
                            ->get();
                  
        // $productsSoldByMonth = OrderDetail::select(DB::raw('MONTH(created_at) as month'), DB::raw('sum(quantity) as total'))
        //                   ->groupBy('month')
        //                   ->get();

        // $productsSoldByDay = Order::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as total'))
        //                 ->groupBy('date')
        //                 ->get();
        
        // $productsSoldByDay = OrderDetail::select(DB::raw('DATE(created_at) as date'), DB::raw('sum(quantity) as total'))
        // ->groupBy('date')
        // ->get();

        // $revenueByDay = Order::select(DB::raw('DATE(created_at) as date'), DB::raw('sum(total_amount) as total'))
        //              ->groupBy('date')
        //              ->get();

        // $revenueByMonth = Order::select(DB::raw('MONTH(created_at) as month'), DB::raw('sum(total_amount) as total'))
        //                ->groupBy('month')
        //                ->get();
        //Doanh thu theo ngày

        $revenueByDay = Order::where('status', 'Đã giao')
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('SUM(total_amount) as total'))
            ->groupBy('date')
            ->get();

        //Doanh thu theo tháng
        $revenueByMonth = Order::where('status', 'Đã giao')
        ->select(DB::raw('MONTH(created_at) as month'), DB::raw('SUM(total_amount) as total'))
        ->groupBy('month')
        ->get();

        $revenueByYear = Order::select(DB::raw('YEAR(created_at) as year'), DB::raw('sum(total_amount) as total'))
                      ->groupBy('year')
                      ->get();

        $dataOrderChart = $data = Order::selectRaw('status, COUNT(*) as count')
                    ->groupBy('status')
                    ->get();

        $soldProducts = Product::sum('product_sold');
        $stockProducts = Product::sum('stock');
        $sumProduct = Product::count();
        $revenue = Order::where('status', 'Đã giao')->sum('total_amount');
        $orderNew = Order::where('status', 'Chờ xử lý')->count();
        $totalUser = User::whereNotIn('status', ['0'])->count();
        return view('admin.welcome',[
            'productsSoldByMonth' => $productsSoldByMonth,
            'productsSoldByDay' => $productsSoldByDay,
            'revenueByDay' => $revenueByDay,
            'revenueByMonth' => $revenueByMonth,
            'dataOrderChart' => $dataOrderChart,
            'soldProducts' => $soldProducts,
            'stockProducts' => $stockProducts,
            'sumProduct' => $sumProduct,
            'revenue' => $revenue,
            'orderNew' => $orderNew,
            'totalUser' => $totalUser
        ]);
    }
    // public function index()
    // {
    //     $revenueByDay = Order::where('status', 'đã giao')
    //         ->select(DB::raw('DATE(created_at) as date'), DB::raw('SUM(total_amount) as total'))
    //         ->groupBy('date')
    //         ->get();


    //     $revenueByMonth = Order::where('status', 'đã giao')
    //     ->select(DB::raw('MONTH(created_at) as month'), DB::raw('SUM(total_amount) as total'))
    //     ->groupBy('month')
    //     ->get();

        
    //     // $revenueByDay = Order::select(DB::raw('DATE(created_at) as date'), DB::raw('sum(total_amount) as total'))
    //     //              ->groupBy('date')
    //     //              ->get();

    //     $revenueByMonth = Order::select(DB::raw('MONTH(created_at) as month'), DB::raw('sum(total_amount) as total'))
    //                    ->groupBy('month')
    //                    ->get();

    //     // $productsSoldByMonth = OrderDetail::join('orders', 'order_details.order_id', '=', 'orders.id')
    //     // ->where('orders.status', 'đã giao')
    //     // ->select(DB::raw('MONTH(order_details.created_at) as month'), DB::raw('SUM(order_details.quantity) as total'))
    //     // ->groupBy('month')
    //     // ->get();
                  
    //     $productsSoldByMonth = OrderDetail::select(DB::raw('MONTH(created_at) as month'), DB::raw('sum(quantity) as total'))
    //                       ->groupBy('month')
    //                       ->get();

    //     // $productsSoldByDay = Order::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as total'))
    //     //                 ->groupBy('date')
    //     //                 ->get();
        
    //     // $productsSoldByDay = OrderDetail::select(DB::raw('DATE(created_at) as date'), DB::raw('sum(quantity) as total'))
    //     // ->groupBy('date')
    //     // ->get();

    //     $productsSoldByDay = Order::join('order_details', 'orders.id', '=', 'order_details.order_id')
    //                         ->select(DB::raw('DATE(orders.created_at) as date'), DB::raw('SUM(order_details.quantity) as total'))
    //                         ->groupBy('date')
    //                         ->get();

    //     $revenueByYear = Order::select(DB::raw('YEAR(created_at) as year'), DB::raw('sum(total_amount) as total'))
    //                   ->groupBy('year')
    //                   ->get();

    //     $dataOrderChart = $data = Order::selectRaw('status, COUNT(*) as count')
    //                 ->groupBy('status')
    //                 ->get();

    //     $soldProducts = Product::sum('product_sold');
    //     $stockProducts = Product::sum('stock');
    //     $sumProduct = Product::count();
    //     // $excludedStatus = ['Chờ xử lý', 'Hủy đơn'];
    //     // $revenue = Order::whereNotIn('status', $excludedStatus)->sum('total_amount');
    //     $revenue = Order::where('status', ['Đã giao'])->sum('total_amount');
    //     $orderNew = Order::where('status', 'Chờ xử lý')->count();
    //     $totalUser = User::whereNotIn('status', ['0'])->count();
    //     return view('admin.welcome',[
    //         'productsSoldByMonth' => $productsSoldByMonth,
    //         'productsSoldByDay' => $productsSoldByDay,
    //         'revenueByDay' => $revenueByDay,
    //         'revenueByMonth' => $revenueByMonth,
    //         'dataOrderChart' => $dataOrderChart,
    //         'soldProducts' => $soldProducts,
    //         'stockProducts' => $stockProducts,
    //         'sumProduct' => $sumProduct,
    //         'revenue' => $revenue,
    //         'orderNew' => $orderNew,
    //         'totalUser' => $totalUser
    //     ]);
    // }
   
}
