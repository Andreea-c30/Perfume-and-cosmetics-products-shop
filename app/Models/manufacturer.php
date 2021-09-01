<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manufacturer extends Model
{
    use HasFactory;
    protected $attributes=[
        'name'=>'Another default value',
        'description'=>' ',
        'active'=>true,
    ];
    protected $fillable=[
        'name',
        'description',
        'active',
    ];
    //company-one2many
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    //product-one2many
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    //location-one2one
    public function location()
    {
        return $this->hasOne(Location::class);
    }
    //sectior-many2many

    public function sectors()
    {
        return $this->belongsToMany(Location::class);
    }


}
