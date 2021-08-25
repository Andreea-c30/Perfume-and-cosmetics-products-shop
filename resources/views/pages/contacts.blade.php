@extends('layout')
@section('content')

<section class="jumbotron text-center">
    <div class="container">

   
<p >Send us a feedback</p>
<h1 class="jumbotron-heading">Contact us</h1>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contacts</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> Contact us.
                </div>
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


                <div class="card-body">
     
                    <form  method="POST" action="/store-contact-info" >
                   
                        <div class="form-group">

                            <label for="name">Name</label>
                            <input name="name" required="required" type="text" class="form-control" id="name" placeholder="Enter name" >
                      
                            @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input name="email" required="required"  class="form-control" id="email"  placeholder="Enter email" >
                            <small id="emailHelp" class="form-text text-muted">Your email is safe with us</small>
                           
                            @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                        <label for="department">What department do you want to contact:</label>

                          <select name="Department" required="required">
 <option value= "Option" name="Option">Select a department</option>
<option value= "Secretariat" name=" Secretariat">Secretariat</option>
<option value= "Accountancy" name=" Accountancy">Accountancy</option>
<option value= "Marketing" name=" Marketing">Marketing</option>
<option value= "Social media" name=" Social media">Social media</option> 
</select> 
@error('Department')
    <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea required="required" name="message" class="form-control" id="message" rows="6" ></textarea>
                            @error('message')
    <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div>
  <input  type="checkbox" id="scales" name="readTerms" value="1">
  <label for="readTerms">Accept the terms</label>
  @error('readTerms')
    <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
</div>
                        <div class="mx-auto">
                            @csrf
                        <button type="submit" class="btn btn-primary text-right">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            
                <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-map"></i> We are here</div>
                <div id="map" class="card-body">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2722.200576737609!2d28.85757551576983!3d46.977394879148065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c9793790ea9b57%3A0xe0a4bf526ee63f6!2zU3RyYWRhIEluZGVwZW5kZW7Im2VpIDQwLCBDaGnImWluxIN1LCBNb2xkb3Zh!5e0!3m2!1sen!2s!4v1629126113872!5m2!1sen!2s"
                    class="border-0"  width="100%" height="530" allowfullscreen="" loading="lazy"></iframe>
                </div>

          
        </div>
    </div>
</div>

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-4 col-xl-3">
                <h5>About</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <p class="mb-0">
                    On our website you will find all the products you need to feel confident and beautiful in your own skin.
                </p>
            </div>

                       <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
                <h5>Others links</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><a href="/">Homepage</a></li>
                    <li><a href="pages/About">About</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="pages/Products">Products</a></li>
                </ul>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3">
                <h5>Contact</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><i class="fa fa-home mr-2"></i> SunShine Cosmetics</li>
                    <li><i class="fa fa-envelope mr-2"></i> c.1andreea874@gmail.com<</li>
                    <li><i class="fa fa-phone mr-2"></i> + 373 67 40 34 39</li>
                </ul>
            </div>
        </div>
    </div>
   

@endsection