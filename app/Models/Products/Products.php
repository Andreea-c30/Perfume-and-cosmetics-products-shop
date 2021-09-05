<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=[
        'name',
        'description',
        'product_details_id',
        'type_id',
        'brand_id',
        'price',
        'available',
    ];
    
    public function product_detail()
    {
        return $this->hasOne(Product_details::class);
    }
   
    public function brands()
    {
        return $this->belongsTo(Brand::class);
    }
 
  public function types()
  {
      return $this->belongsTo(Type::class);
  }

}
