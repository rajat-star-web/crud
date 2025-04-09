<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class ProductController extends Controller
{
  public function index(){
    return view('products.list');
  }

  public function create(){
    return view('products.create');
  }

  public function store(Request $request){
    $rules =[
        'name' => 'required|min:5',
        'sku' => 'required|min:3',
        'price' => 'required|numeric'
    ];
    $validator = Validator::make($request->all(),$rules);
    if($validator ->fails()){
    return redirect()->route('products.create')->withInput()->withErrors($validator);
    }
    
    $product = new Product();
    $product->name = $request->name;
    $product->sku = $request->sku;
    $product->price = $request->price;
    $product->description = $request->description;
    $product->save();

    return redirect()->route('products.index')->with('success', 'Product added successfully.');
  } 

  public function edit(){
    
  }

  public function update(){
    
  }

  public function destroy(){
    
  }
}
