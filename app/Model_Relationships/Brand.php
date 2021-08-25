<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $attributes=[
        'name'=>' Local brand',
    ];
    protected $fillable=[
        'name',
    ];
    public function product()
    {
        return $this->hasMany(Products::class);
    }
    //Country-one2many
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
