@extends('layout')
@section('content')
<link rel="stylesheet" type="text/css" href="/products.css" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<div>
    <h1>
        Try our best products
    </h1>
</div>

@foreach($products as $product)

   <div class="row">

<div class="first_column">

  <div class="card">
 

  <div>
       <ul>
           <li class="list_item">
  
           <img class="imgstyle" src="{{$product->image_url}} " alt="image not found">
    <h3>
        
    <a href="{{route('products.show',['productId'=>$product->id])}} "> 
          {{$product->name}} 
          </a> 
   </h3>
   <h4>
    Price : {{$product->price}} $
</h4>

      <p >
         {{$product->description}}
      </p>
         
   </li>
</ul> 

 </div>

 </div>
 </div>
<div class="second_column">
<div class="card">
 

 <div>
      <ul>
          <li class="list_item">
 
          <img class="imgstyle" src="{{$product->image_url}} " alt="image not found">
   <h3>
       
         <a href="{{route('products.show',['productId'=>$product->id])}} "> 
         {{$product->name}} 
         </a> 
  </h3>
  <h4>
   Price : {{$product->price}} $
</h4>

     <p >
        {{$product->description}}
    
     </p>
        
  </li>
</ul> 

</div>
</div>

    </div>
<div class="third_column">
<div class="card">
 

 <div>
      <ul>
          <li class="list_item">
 
          <img class="imgstyle" src="{{$product->image_url}} " alt="image not found">
   <h3>
       
   <a href="{{route('products.show',['productId'=>$product->id])}} "> 
         {{$product->name}} 
         </a> 
  </h3>
  <h4>
   Price : {{$product->price}} $
</h4>

     <p >
        {{$product->description}}
    
     </p>
        
  </li>
</ul> 

</div>
  </div>
 
</div>
</div>

@endforeach 
{{ $products->links() }}
@endsection