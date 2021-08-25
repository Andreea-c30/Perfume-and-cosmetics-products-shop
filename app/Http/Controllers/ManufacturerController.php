<?php
namespace App\Http\Controllers;
use App\Models\manufacturer;
class ManufacturerController extends Controller{
    public function Manufacturer(){

    
    $manufacturer = new Manufacturer();
$manufacturer->name = 'Test';
$manufacturer->description = 'Test description';
$manufacturer->active = true;
$manufacturer->save();
dd($manufacturer);
}
}