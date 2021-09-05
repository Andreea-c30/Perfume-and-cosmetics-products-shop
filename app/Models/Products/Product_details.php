<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_details extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=[
        'volume',
        'flavor',
        'Directions_for_use',
        
    ];
    
    public function product()
    {
        return $this->belongsTo(Products::class);
    }
   
    public function ingredients()
    {
        return $this->belongsToMany(Ingredients::class);
    }
}
