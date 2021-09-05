@extends('layout')
@section('content')
<link rel="stylesheet" type="text/css" href="/blog_style.css" />


   

<div>
  <h1>Blog article list</h1>
</div>
@foreach($articles as $article)
<ul>
   <li>
   
       
<div class="back">
    <h2>
          <a href="{{route('article.show',['articleId'=>$article->id])}} ">
       {{$article->title}}
       </a> 
      </h2>
      <p >
         <img class="imgstyle" src="{{$article->image}} " alt="image not found">
        {{$article->description}}
    
      </p>
       
<p class="subtext">
   {{$article->published_at}} 
</p>
       
       
      
   
</div>
       
   </li>
</ul>
  

   
    
     
     
      @endforeach
  
   
 

@endsection