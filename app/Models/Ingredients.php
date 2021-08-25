<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    use HasFactory;
    protected $attributes=[
        'name'=>'water',
        'quantity'=>0,

    ];
    protected $fillable=[
        'name',
        'quantity',
    ];
    public function product_details()
    {
        return $this->belongsToMany(Product_details::class);
    }
}
