<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return 
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {   
        $form_data = $request->validated();
        $form_data = $request->all();
        $new_product = new Product();
        $new_product->thumb=$form_data['thumb'];
        $new_product->price=$form_data['price'];
        $new_product->series=$form_data['series'];
        $new_product->type=$form_data['type'];
        $new_product->save();
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return
     */
    public function show(Product $product)
    {
        
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return 
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return 
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $form_data = $request->validated();
        $form_data =$request->all();
        $product = Product::find($id);
        $form_data = $request->all();
        $product->thumb=$form_data['thumb'];
        $product->price=$form_data['price'];
        $product->series=$form_data['series'];
        $product->type=$form_data['type'];
        $product->update();
        return redirect()->route('products.show', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return 
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
        
    }

    // public function validation($data){

    //     $validator = Validator::make($data,[
    //         'thumb'=>'max:255|nullable',
    //         'series'=>'max:255|min:3|required',
    //         'type'=>'max:255|required',
    //         'price'=>'required|integer|min:1',
    //     ],[
    //         'thumb.max'=>'Lunghezza massima 255 caratteri',
    //         'series.required'=>'Campo obbligatorio',
    //         'series.max'=>'Lunghezza massima 255 caratteri',
    //         'series.min'=>'Lunghezza minima 3 caratteri',
    //         'type.required'=>'Campo obbligatorio',
    //         'type.max'=>'Lunghezza massima 255 caratteri',
    //         'price.required'=>'Campo obbligatorio',
    //         'price.min'=>'Valore minimo 1',
    //         'price.integer'=>'Valore numerico',

    //     ])->validate();

    //     return $validator;

    // }
}
