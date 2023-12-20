<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

use App\Models\Category;
use App\Models\Location;
use App\Models\Address;
use App\Models\Order;
use App\Services\OrderDetailService;
use App\Services\Client\UserService;
class UserController extends Controller
{
    public function __construct(
            readonly UserService $userService,
            readonly OrderDetailService $orderDetailService,
        ){
    }

    public function index()
    {
        $carts = session()->get('cart',[]);
        $provinces = Location::where('parent_id',0)->get();
        $districts = Location::where('parent_id',1)->get();
        $categoryList = Category::where('parent_id', 0)->get();
        $addresses = [];
        $orders = [];
        if (Auth::check()) {
            $user = Auth::user();
            $addresses = Address::where('user_id', $user->id)->get() ?? [];
            $orders = $this->orderDetailService->getOrderByUserId($user->id) ?? [];

            // foreach ($orders as $key => $order) {
            //     $orderDetails = $order->with(['orderDetails'])->get();
            // }
        }
        $orderDetails = $this->orderDetailService->getOrderDetailById(5);
        $user = $user ?? (object)['id' => 7];
        return view('client.layouts.pages.account-detail',
                [
                    'provinces' => $provinces, 
                    'districts' => $districts, 
                    'carts' => $carts, 
                    'categoryList'=>$categoryList,
                    'addresses' => $addresses,
                    'user' => $user,
                    'orders' => $orders,
                    'orderDetails' => $orderDetails
                ]); 
    }

    public function store(Request $request)
    {
        return $this->userService->store($request);
    }

    public function update(Request $request, string $id)
    {
        return $this->userService->update($request, $id);
    }

    public function destroy(string $id)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $address = Address::find($id);
            if ($address) {
                $address->delete();
                $addresses = Address::where('user_id', $user->id)->get();
                $result = view('client.components.address_item_component', ['addresses' => $addresses])->render();
                return response()->json([
                    'code' => 200,
                    'msg' => 'Xóa địa chỉ thành công',
                    'address_item' => $result,
                ]);
            } 
        }
    }

    public function setDefaultAddress(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $addressStatus = [
                '0' => false, 
                '1' => true, 
            ];
            // Lấy danh sách địa chỉ của người dùng
            // $addresses = Address::where('user_id', $user->id)->get();
            // $sql = $addresses->toSql();
            // dd($sql);
            // Đặt tất cả địa chỉ của người dùng về false trước khi đặt địa chỉ mặc định.
            // foreach ($addresses as $address) {
            //     $address->is_default = $addressStatus['0'];
            //     $address->save();
            // }

            // Đặt tất cả địa chỉ của người dùng về false trước khi đặt địa chỉ mặc định.
            Address::where('user_id', $user->id)->update(['is_default' => $addressStatus['0']]);
            
            // Đặt địa chỉ được chọn thành mặc định.
            $selectedAddress = Address::find($request->addressId);
            if ($selectedAddress) {
                $selectedAddress->is_default = $addressStatus['1'];
                $selectedAddress->save();

                $addresses_ = Address::where('user_id', $user->id)->get();
                $result = view('client.components.address_item_component', ['addresses' => $addresses_])->render();

                return response()->json([
                    'code' => 200,
                    'msg' => 'Cập nhật thành công',
                    'address_item' => $result,
                ]);
            } else {
                return response()->json([
                    'code' => 404,
                    'msg' => 'Không tìm thấy địa chỉ',
                ]);
            }
        } else {
            return response()->json([
                'code' => 401,
                'msg' => 'Bạn chưa đăng nhập',
            ]);
        }
    }
       
    public function viewOrder(Request $request, string $id)
    {
        $orderDetails = $this->orderDetailService->getOrderDetailById($id);
        $result = view('client.components.modal_history_order', ['orderDetails' => $orderDetails])->render();

        return response()->json([
            'code' => 200,
            'msg' => 'Lấy data thành công',
            'order_item' => $result,

        ]);

    }

    public function orderSearch(Request $request)
    {
        $textStatusOrder = $request->textStatusOrder;
        $orders = [];
    
        if ($textStatusOrder == 'Tất cả') {
            if (Auth::check()) {
                $user = Auth::user();
                $orders = $this->orderDetailService->getOrderByUserId($user->id) ?? [];
            }
        } else {
            if (Auth::check()) {
                $user = Auth::user();
                $orders = Order::where('status', $textStatusOrder)->where('user_id',$user->id)->get();
            }
            // Nếu tình trạng không phải là 'Tất cả', thì tìm kiếm theo tình trạng
        }
    
        if(count($orders) != 0){
            $result = view('client.components.order-detail_component',['orders' => $orders,])->render();
            return response()->json([
                    'code'=>200,
                    'msg'=>'Load số lượng sản phẩm thành công!',
                    'ordersFilter' => $result,
                    '$orders' => $orders,
            ]);
        }else{
            return response()->json([
                'code'=> 'error',
                'msg'=>'Không có đơn hàng nào',
            ]);
        }
    }
}
