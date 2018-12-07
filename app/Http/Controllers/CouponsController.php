<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\User;
use App\UserCoupon;
use Illuminate\Http\Request;

class CouponsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon::orderby('created_at','asc')->paginate(10);
        $data =[
            'coupons' => $coupons,
        ];
        return view('coupons.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coupons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request$request)
    {
        $this->validate(
            $request,
            [
                'code' => 'required|size:10',
                'description'=>'required'
            ]
        );
        Coupon::create($request->all());


        return redirect()->route('coupon.index');
    }
    public function store_userCoupon(Request $request)
    {
        $user_coupons = UserCoupon::all();
        $data = [
            'id' => $request->coupon_id,
            'user_coupons' => $user_coupons
        ];

        UserCoupon::create([
            'user_id' => $request->user_id,
            'coupon_id' => $request->coupon_id,
            'is_used' => false
        ]);
        return redirect()->route('coupon.show',$data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user_coupons = UserCoupon::where('coupon_id','=',$id)->where('is_used',false)->get();
        $users = User::all();
        foreach ($user_coupons as $user_coupon)
        {
            $users = $users->where('id','<>',$user_coupon->user_id);
        }
        $data = [
            'user_coupons' => UserCoupon::where('coupon_id','=',$id)->paginate(10),
            'id' =>$id,
            'users'=>$users
        ];
        return View('coupons.show',$data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
