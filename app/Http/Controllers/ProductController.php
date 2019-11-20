<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    //all
    public function index(Request $request){
        if($request->wantsJson()){
            return Product::all();
        }else{
            $data['product'] = Product::limit(100)->offset(0)->get();
            // return  (new Response($data))->header('Content-Type','Application/Json');
            return view('templates.product',$data);
        }
    }

    // get specific product by id
    public function show(Product $product){
        // return Product::find($id);
        return $product;
    }

    public function store(Request $request)
    {
        $newproduct = Product::create($request->toArray());
        return response()->json($request->toArray(), 201);
    }

    public function update(Request $request,Product $product)
    {
        $product->update($request->all());
        return response()->json($product, 200);
    }
}
