@extends('layout')
@section('content')
<div class="container-1">
<img src="https://media.glamour.com/photos/604c5ed239888c13465831a0/3:2/w_1800,h_1200,c_limit/LuxuryMakeup-River.jpg" alt="Norway" style="width:100%;">
  <div class="text-block">
    <h2>SunShine Cosmestics</h2>
    <h4>Glow every day</h4>
  </div>
</div> 


<div class="container-2">
  <div class="container" >

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  <div class="carousel-item">
  <div class="carousel-caption d-none d-md-block">
    <h5>SunShine Cosmestics</h5>
    <p>Glow every day</p>
  </div>
</div>
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://i.pinimg.com/564x/88/ac/f4/88acf4b76bb577b6a94c13575ac53e43.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>SunShine Cosmestics</h5>
    <p>Glow every day</p>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

</div>
</div>

<div class="container">
  <h1 >Find your best products</h1>
</div>

<div class="container">

<div class="card-deck">
  <div class="card">
    <img class="img-size" src="https://i.pinimg.com/564x/88/ac/f4/88acf4b76bb577b6a94c13575ac53e43.jpg" class="card-img-top" alt="Image not found">
    
 
    <div class="card-body">
      <h5 class="card-title">Perfume</h5>
      <p class="card-text"> 
      "​Perfume is like a new dress, it makes you quite simply marvellous."<br>&nbsp;- Estee Lauder
     </p>
      <a href="" >learn more</a>
    </div>
  </div>
  <div class="card">
        
             <img class="img-size" src="http://p.favim.com/orig/2018/09/21/lipstick-beauty-products-makeup-Favim.com-6359311.png" class="card-img-top" alt="Image not found">
         
    <div class="card-body">
      <h5 class="card-title">Make up</h5>
      <p class="card-text">
      “The most beautiful makeup of a woman is passion. But cosmetics are easier to buy.”<br>&nbsp;- Yves Saint Laurent
      </p>
      <a href="" >learn more</a>
    </div>
  </div>
  <div class="card">
  <img class="img-size" src="https://i.pinimg.com/originals/e5/1b/f4/e51bf42a420454517db741d9eaa76dcf.jpg" class="card-img-top" alt="Image not found">
    <div class="card-body">
      <h5 class="card-title">Skin care</h5>
      <p class="card-text">
      "Nature gives you the face you have at twenty; it is up to you to merit the face you have at fifty."&nbsp; &nbsp;&nbsp;<br>&nbsp;- Coco Chanel.
      </p>
      <a href="" >learn more</a>
    </div>
  </div>
</div>
</div>








@endsection
