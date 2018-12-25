<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderProduct;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders = Order::orderBy('created_at','desc')->paginate(10);
        $data = [
            'orders'=>$orders,
        ];
        //
        return View('orders.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        $order_products = OrderProduct::where('order_id','=',$id)->paginate(10);
        $data =[
            'order' => $order,
            'order_products' => $order_products
        ];
        return View('orders.show',$data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Order::find($id)->status == 'pay'){
            Order::find($id)->update(['status'=>'stock']);
        }
        elseif (Order::find($id)->status == 'stock'){
            Order::find($id)->update(['status'=>'finish']);
        }
        //for testing
        elseif ((Order::find($id)->status == 'finish')){
            Order::find($id)->update(['status'=>'finish']);
        }
        return redirect()->route('order.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->update(['status'=>'cancel']);
        return redirect()->route('order.index');
    }
}
