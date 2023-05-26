<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function addProduct(Request $request, Product $products) 
    {
        $products->fill(['name' => $request->name,
                     'price' => $request->price,
                     'description' => $request->description,
                     'image' => $request->image]);
        $products->save();
        return redirect()->route('products.list');
    }
}
