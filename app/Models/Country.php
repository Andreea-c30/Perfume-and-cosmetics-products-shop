<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    const UPDATED_AT = 'last_update';
    
    protected $attributes=[
        'name'=>'Unknown',
    ];
    protected $fillable=[
        'name',
    ];
    public function brand()
    {
        return $this->hasMany(Brand::class);
    }
}
