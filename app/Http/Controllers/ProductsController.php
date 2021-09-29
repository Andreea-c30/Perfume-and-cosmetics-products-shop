<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\Paginator;
use App\Services\Logging\ViewLogger;
use App\Models\Products\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
  public function __construct(){
    $this->products = [
        [
            'id'=>1,
            'name'=>'The Best Lip Products with Skin Care Benefits',
        ],
      
        ];
}

public function index()
{
Paginator::useBootstrap();
$products = Products::paginate(3);
return view('pages/products',['products'=>$products]);
}

public function show(int $productId,ViewLogger $viewLogger)
{
$product=Products::findOrFail($productId);

$viewLogger->logView($product);

return view('pages/product-article',['product'=>$product]);

} 

  /* public function create()
    {
       
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



 // $products=Products::create(request()->all());
//dd($products->toArray());
   // }

   /* public function index()
{
    
  return redirect('pages/products');
}*/

   /* public function view(int $id)
    {
        
  $products=Products::findOrFail($id);
//dd($products->toArray());
    }

    public function all()
    {
  $prod=Products::all();
//dd($prod->toArray());
    }
    
    public function delete(int $id)
    {
        
  $products=Products::findOrFail($id);
  $products->delete();
  return redirect('/products');

    }*/
}
