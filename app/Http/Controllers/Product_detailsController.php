<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product_details;
class Product_detailsController extends Controller
{
    public function create()
    {
  $details=Product_details::create(request()->all());
dd($details->toArray());
    }
    public function view(int $id)
    {
        
  $details=Product_details::findOrFail($id);
dd($details->toArray());
    }

    public function all()
    {
  $details=Product_details::all();
dd($details->toArray());
    }
    
    public function delete(int $id)
    {
        
  $details=Product_details::findOrFail($id);
  $details->delete();
  return redirect('/details');

    }




}
