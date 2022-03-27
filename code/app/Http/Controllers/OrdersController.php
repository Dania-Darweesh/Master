<?php
namespace App\Http\Controllers;
use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Orders::all();
        return view('admin.orders.index', compact('orders'));
    }

    public function create()
    {
        return view('admin.orders.create');
    }

    public function store(Request $request)
    {
        Orders::create([
            "order_details"  => $request->order_details,
            "order_location"  => $request->order_location,
            "order_mobile" => $request->order_mobile,
            "order_user_name"=>$request->order_user_name,
            "order_date"=>$request->order_date,
            "order_total" => $request->order_total,
            "order_status" => $request->order_status,
            "order_user_id" => $request->order_user_id,
        ]);
        return redirect()->route('orders.index');
    }

    public function show(Orders $orders)
    {
        
    }

    public function edit($id)
    {
        $ordersEdit = Orders::find($id);
        return view('admin.orders.edit', compact('ordersEdit'));
    }

    public function update(Request $request, $id)
    {
        $ordersEdit = Orders::find($id);
        $ordersEdit->order_details = $request->order_details;
        $ordersEdit->order_location = $request->order_location;
        $ordersEdit->order_mobile = $request->order_mobile;
        $ordersEdit->order_user_name = $request->order_user_name;
        $ordersEdit->order_date = $request->order_date;
        $ordersEdit->order_total = $request->order_total;
        $ordersEdit->order_status = $request->order_status;
        $ordersEdit->order_user_id = $request->order_user_id;
        $ordersEdit->update();
        return redirect()->route('orders.index');
    }

    public function destroy($id)
    {
        $ordersDestroy = Orders::find($id);
        $ordersDestroy->destroy($id);
        return redirect()->route('orders.index');
    }
}
