@extends('layout')
@section('content')


<div class="container" >
<h1 >{{$article->title}}</h1>
</div>
<div class="container-3">
<img class="article-img" src="{{$article->image_url}}" alt="{{$article->title}}" >
<p class="text-center">
{{$article->description}}
</p>

  <h2 class="text-center">{{$article->title}}</h2>
  <hr>
<p> {{$article->body}}</p>
<h2 class="text-center">
How to Choose the Right Lip Products
</h2>
  <hr>
<p>
Luckily, your lip care options are no longer limited to the glitter glosses and chapsticks of your tween years. Whether you’re eyeing a tint, balm or stain, it’s best to choose multitasking products that add natural-looking color with a healthy dose of moisture and protection.
   </p>
<p>
As far as ingredients are concerned, Anna H. Chacon, a board-certified dermatologist in Weston, Fla., says SPF should be your priority. “A lip balm with sun protection is the ideal product. A lip conditioner is also helpful at keeping [lips] supple,” she adds.
</p>
<p>


When it comes to adding and locking in moisture to your lips, look for the usual hydrating ingredients that you typically find in your skin care products. These include hyaluronic acid, vitamins A, C and E, aloe vera and nourishing oils.
</p>

<h2 class="text-center">
Best Lip Care Products to Try
</h2>
  <hr>
<p>
Ready for softer, healthier lips? We’ve compiled our favorite multitasking lip color products below.
   </p>
<h6>1. ILIA Balmy Tint Hydrating Lip Balm 0.15 oz.</h6>
<p>Ultra-nourishing and moisturizing, this tinted lip balm is infused with rosehip seed oil, shea butter and salicornia (sea succulent) that all work together to hydrate, condition and protect your lips from the elements. Plus, its buildable formula lets you create different looks—whether you want to go subtle or bold—without having to worry about bleeding or settling into lines.</p>
<h6>2. Wander Beauty Lip Retreat Oil (10 ml.)</h6>
<p>You’ll never have to worry about dry, chapped or flaky lips again with this moisturizing lip treatment that helps calm, repair and moisturize while leaving your pout with a gloss-like shine and pigment. It’s infused with apricot kernel, avocado and rosa canina fruit oils, which are loaded with nourishing vitamin E, fatty acids and antioxidants.</p>
<h6>3. By Terry Baume de Rose Lip Care (10 g.)</h6>
<p>Featuring rose wax, floral oils, vitamin E and bio-ceramides, its highly concentrated formula repairs, replenishes and rejuvenates dry, chapped and cracked lips. Use it at night so you can wake up to a softer and healthier-looking pout, or during the day to complete your naturally glowing, barely-there look.</p>




</div>
@endsection

