<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function create()
    {
        /*
          $products=new Products();
          $products->name='Lipstick';
          $products->description='This is one of the most popular products for  lips';
          $products->price=10;
          $products->available=true;
          $products->save();


             $products=Products::create([
              'name'=>'Eyeliner',
              'description'=>'It is a Waterproof product',
              'price'=>30,
              'available'=>true,
          ]);
*/
//dd(request()->all);
  $products=Products::create(request()->all());
dd($products->toArray());
    }
    public function view(int $id)
    {
        
  $products=Products::findOrFail($id);
dd($products->toArray());
    }

    public function all()
    {
  $prod=Products::all();
dd($prod->toArray());
    }
    
    public function delete(int $id)
    {
        
  $products=Products::findOrFail($id);
  $products->delete();
  return redirect('/products');

    }
}
