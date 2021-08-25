<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_details extends Model
{
    use HasFactory;
    protected $attributes=[
        'volume'=>'200',
        'flavor'=>'Honey',
        
        
    ];
    protected $fillable=[
        'volume',
        'flavor',
        'Directions_for_use',
        
    ];
    public function product()
    {
        return $this->belongsTo(Products::class);
    }
    //Ingredients-many2many
    public function ingredients()
    {
        return $this->belongsToMany(Ingredients::class);
    }
}
