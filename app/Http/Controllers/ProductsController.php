<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Webpatser\Uuid\Uuid;

class ProductsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::orderBy('created_at','desc')->paginate(6);
        $data = [
            'products' => $products,
        ];
        return View('products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'name'=>'required',
                'price'=>'required|numeric',
                'description'=>'required',
                'photo_path'=>'required|image',
            ]
        );

        $path = $request->file('photo_path')->store('images/shop');

        Product::create([
            'name'=> $request->name,
            'category_id'=> $request->category_id,
            'price'=>$request->price,
            'description'=>$request->description,
            'photo_path'=>$path,
            'is_deleted' => false
        ]);
        return redirect()->route('products.index');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $data = [
            'product' => $product,
        ];
        return View('products.edit',$data);
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
        $this->validate(
            $request,
            [
                'name'=>'required',
                'price'=>'required|numeric',
                'description'=>'required',
                'photo_path'=>'image',
            ]
        );

        $product = Product::find($id);
        $path = $product->photo_path;
        if($request->photo_path !=null)
            $path = $request->file('photo_path')->store('images/shop');
        $product->update([
            'name'=> $request->name,
            'category_id'=> $request->category_id,
            'price'=>$request->price,
            'description'=>$request->description,
            'photo_path'=>$path,
            'is_deleted' => false
        ]);
        $product->save();

        return redirect()->route('products.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->update([
            'is_deleted' => !$product->is_deleted,
        ]);
        $product->save();
        return redirect()->route('products.index');
    }
}
