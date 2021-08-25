@extends('layout')
@section('content')
<link rel="stylesheet" type="text/css" href="/blog.css" />
<link rel="stylesheet" type="text/css" href="/text.css" />

   

<div>
  <h1>Blog article list</h1>
</div>
@foreach($articles as $article)
<div class="row">

  <div class="leftcolumn">

    <div class="card">
    
     <h3>   <a href="{{route('article.show',['articleId'=>$article['id']])}} ">
       {{$article['name']}}
       </a>
      </h3>
      <h5>The Best Lip Products with Skin Care Benefits, Aug 16, 2021</h5>
      <div >
   <img  class="imgstyle"
   src="https://www.dior.com/couture/var/dior/storage/images/folder-media/folder-videos/folder-makeup/dioparfums_rouge_star_edition_film/23924650-2-fre-FR/dioparfums_rouge_star_edition_film_1440_1200.jpg"
      alt="Not found">
     <p>When it comes to skin care, your lips don’t often get the pampering they deserve. While you might stay on top of the latest lipstick shades and formulas, that doesn’t mean you’re giving your lips all the TLC they need. Sure, there may be a lip balm or two tucked inside your purse or lying around in your bathroom shelf, but if you really want to get serious about maintaining a perfect pout, it’s time to take a closer look at your lip products.</p> 
<p> <a href="/blog/article">Read more>></a></p>

   </div>
   </div>
  
   <div class="card">
      <h2> Skin care </h2>
      <h5>Body Lotions and Treatments for Tighter Skin , Aug 16, 2021</h5>
      <div >
   <img  class="imgstyle"
   src="https://www.alkaskinlasers.com/wp-content/uploads/2020/12/loton.png"
      alt="Not found">
     <p>
     Skin care doesn’t stop at the neck, and a well-rounded body regimen should be part of every self-care routine. Creams, lotions and treatments that go beyond the face to help firm, tighten and improve the skin on the body are a big focus right now. (Perhaps it’s because we’ve been showing our faces on Zooms for the past year and it’s time to give our bodies the treatment they deserve.) But are they the real deal? Here, everything you can (and can’t) expect skin-firming creams to do.
     </p> 
<p> <a href="https://www.dermstore.com/blog/top_ten/best-cellulite-body-firming-lotions/">Read more>></a></p>

   </div>
   </div>
 
   <div class="card">
      <h2>Sunscreen for You</h2>
      <h5>How to Pick the Right suncream, Aug 15, 2021</h5>
      <div >
   <img  class="imgstyle"
   src="http://www.cinddie.com/wp-content/uploads/2017/05/laneige-sun-care-line.jpg"
      alt="Not found">
     <p>
     With its clean ingredients, feel-good textures and innovative formats, it’s no wonder that the brand has quickly achieved cult-favorite status among consumers and dermatologists (looking at you, Unseen Sunscreen!). Another reason why people can’t get enough of the SPF brand? With over 40 groundbreaking formulas to pick from, Supergoop! offers a wide assortment of products designed to make wearing sunscreen easier than ever.
   </p> 
      <p> <a href="https://www.dermstore.com/blog/best-supergoop-sunscreen/">Read more>></a></p>

   </div>
   </div>
   
   <div class="card">
      <h2> Sunburns </h2>
      <h5>How to Cool Down Sunburned Skin, Aug 10, 2021</h5>
      <div >
   <img  class="imgstyle"
   src="https://i2.wp.com/adunniorganics.com/wp-content/uploads/2021/01/8-2.png?resize=1080%2C800&ssl=1"
      alt="Not found">
     <p>
     Sunburns sometimes happen, even to the most diligent of sunscreen wearers. Fortunately, there are a variety of different ways to nurse a burn at home, using ingredients you may already have in your kitchen or on your bathroom shelves. To find out the best at-home remedies, we asked two top New York City dermatologists for their recommendations.
   </p> 
<p> <a href="https://www.dermstore.com/blog/top_ten/home-remedies-sunburn/">Read more>></a></p>

   </div>
   </div>
     <br>
   <div class="card">
      <h2> Hair Care </h2>
      <h5>Hair Tips & Styling Ideass, Aug 09, 2021</h5>
      <div >
   <img  class="imgstyle"
   src="https://www.lakme-academy.com/blog/wp-content/uploads/2020/01/n-Winter-care.jpg"
      alt="Not found">
     <p>
     Hair loss can be a life-altering experience, especially for women who identify with luscious hair as a symbol of youth and vitality. If you’re one of the more than 80 million men and women in the United States struggling with hair loss and thinning strands, we’re here to help.
     </p> 
<p> <a href="https://www.dermstore.com/blog/category/hair-care-tips/">Read more>></a></p>

   </div>
   </div>


   </div>
   @endforeach
  <div class="rightcolumn">
   
    <div class="card">
      <h2>Popular Post</h2>
      <div class="temp">
         <img class="type"
          src="https://mediashower.com/img/46FA0526-336A-11EA-8644-F1E25FD40999/bigstock-Young-beautiful-woman-with-cur-296482276_600x.jpg" alt="">
       <a href="https://www.dermstore.com/blog/category/self-care/">
          <p>Self Care & Wellness Ideas</p>
       </a>
      </div><br>
      <div class="temp">
         <img class="type"
          src="https://i.pinimg.com/originals/b5/9d/db/b59ddb77203211ef494ac56f607ec564.jpg" alt="">
       <a href="https://www.dermstore.com/blog/category/natural-skin-care/">
          <p>Natural Skin Care and Beauty</p>
       </a>
      </div><br>
      <div class="temp">
         <img class="type"
          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJp10xctSa7YVc0A891M6LZCYk8Bw-2ovT8JPY6PbsLr4NzKpGI6vqbdkgYj9PDAsWDaE&usqp=CAU" alt="">
       <a href="https://www.dermstore.com/blog/simple-skin-care-routine/">
          <p>Boost Your Confidence</p>
       </a>
      </div><br>

      </div>
    </div>
   
  </div>
</div>


@endsection