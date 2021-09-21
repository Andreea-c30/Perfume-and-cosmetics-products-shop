@extends('layout')
@section('content')
<link rel="stylesheet" type="text/css" href="/products.css" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<div class="margin" >
<div class="container bootdey">
<div class="col-md-12">
<section class="panel">
      <div class="panel-body">
          <div class="col-md-6">
              <div class="pro-img-details">
                  <img src="{{$product->image_url}}" alt="">
              </div>
          </div>
          <div class="col-md-6">
              <h4 class="pro-d-title">
                  {{$product->name}} 
              </h4>
              <p>
              {{$product->description}} 
            </p>
              <div class="product_meta">
                  <span class="posted_in"> 
                      <strong>Categories:</strong> </span>
               </div>
              <div class="m-bot15"> <strong>Price : </strong>
              {{$product->price}} $
            </div>
              <div class="form-group">
                  <label>Quantity</label>
                  <input type="quantiy" placeholder="1" class="form-control quantity">
              </div>
              <p>
                  <button class="btn btn-round btn-danger" type="button"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
              </p>
          </div>
      </div>
  </section>
  </div>
  </div>
  </div>
@endsection

