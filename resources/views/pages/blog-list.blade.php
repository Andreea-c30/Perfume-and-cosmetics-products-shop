@extends('layout')
@section('content')
<link rel="stylesheet" type="text/css" href="/blog_style.css" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

   

<div>
  <h1>Blog article list</h1>
</div>
   @foreach($articles as $article)

   <div class="row">

<div class="leftcolumn">

  <div class="card">
 

  <div>
       <ul>
           <li class="list_item">
  
    <h2>
          <a href="{{route('article.show',['articleId'=>$article->id])}} "> 
             {{$article->title}} 
          </a> 
   </h2>
      <p >
         <img class="imgstyle" src="{{$article->image_url}} " alt="image not found">
       
         {{$article->description}}
     
      </p>
       
<p class="subtext">
   {{$article->published_at}} 
</p>
         
   </li>
</ul> 

 </div>

 </div>
 </div>
<div class="rightcolumn">
  <div class="card">
   
    
    <div>
       <ul>
           <li class="list_item">
  
    <h2>
          <a href="{{route('article.show',['articleId'=>$article->id])}} "> 
             {{$article->title}} 
          </a> 
   </h2>
      <p >
         
         {{$article->description}}
     
      </p>
       
<p class="subtext">
   {{$article->published_at}} 
</p>
         
   </li>
</ul> 

</div>
 </div>

    </div>
  </div>
 
</div>
</div>

@endforeach 

 {{ $articles->links() }}


  
@endsection