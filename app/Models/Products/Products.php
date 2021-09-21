<?php

namespace App\Models\Products;
use App\Models\LoggableInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model implements LoggableInterface
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=[
        'name',
        'image',
        'description',
        'product_details_id',
        'type_id',
        'brand_id',
        'price',
        'available',
    ];
    
    public function getImageUrlAttribute()
    {
    return \Illuminate\Support\Facades\Storage::url($this->image);
     }
     

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

  public function toArray(): array
  {
      return parent::toArray();
  }

  public function toString(): string
  {
     return 'Product with'.$this->id;
  }
}
