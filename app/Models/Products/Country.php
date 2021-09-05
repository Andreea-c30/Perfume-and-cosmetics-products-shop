<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=[
        'name',
    ];

    public function brands()
    {
        return $this->hasMany(Brand::class);
    }
}
