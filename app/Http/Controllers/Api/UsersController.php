<?php

namespace App\Http\Controllers\Api;

use App\OrderProduct;
use App\ProductRating;
use App\User;
use App\Order;
use App\UserCoupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();

        return response()->json($users,200);
    }

    public  function storereatings(Request $request)
    {
        $product_ratings= new ProductRating();

        $product_ratings->user_id = auth('api')->user()->id;
        $product_ratings->product_id = $request->product_id;
        $product_ratings->rating = $request->rating;
        $product_ratings->description = $request->description;
        $product_ratings->is_buy = $request->is_buy;

        $product_ratings->save();

        return response()->json([
            'success' => true,
        ]);
    }

    public function allorders()
    {
        $products = Order::where('user_id',auth('api')->user()->id)->get();

        return response()->json($products);
    }

    public function allproducts($status)
    {
        $products = OrderProduct::join('products','product_id','products.id')
            ->join('orders','order_id','orders.id')
            ->where('orders.status',$status)
            ->where('orders.user_id',auth('api')->user()->id)
            ->orderby('orders.created_at','DESC')
            ->select(
                'products.id as product_id',
                'products.name',
                'products.price',
                'products.photo_path',
                'orders.created_at',
                'quantity',
                'discount')

            ->get();
        return response()->json($products);
    }

    public function allcoupons()
    {
        $coupons = UserCoupon::
        join('coupons','coupon_id','coupons.id')
            ->where('user_id',auth('api')->user()->id)
            ->where('is_used',false)
            ->select('coupons.*')
            ->get();

        return response()->json($coupons);
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
        //
        $user = User::find($id);
        if($user === null)
        {
            abort(404);
        }

        return response()->json($user,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        $user = User::find(auth('api')->user()->id);

        if($user === null)
        {
            abort(404);
        }
        $user->update($request->all());
        return response()->json($user,200);
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
    public function destroy($id)
    {
        //
    }
}
