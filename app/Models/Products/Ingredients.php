<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=[
        'name',
    ];
    public function product_details()
    {
        return $this->belongsToMany(Product_details::class);
    }
}
