<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    protected $attributes=[
        'name'=>'Perfume',
        'description'=>'Sweet flavour',
        'price'=>100,
        'available'=>false,
    ];
    protected $fillable=[
        'name',
        'description',
        'price',
        'available',
    ];
    //Product_details -one2one
    public function product_details()
    {
        return $this->hasOne(Product_details::class);
    }
     //Brand -one2Many
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
  //Categories -one2Many
  public function category()
  {
      return $this->belongsTo(Categories::class);
  }

}
