<?php 
namespace App\Http\Controllers;
class BlogController extends Controller
{
    public function __construct(){
        $this->articles = [
            [
                'id'=>1,
                'name'=>'The Best Lip Products with Skin Care Benefits',
            ],
          
            ];
    }
    
public function index()
{
    
    return view('pages/blog-list',['articles'=>$this->articles]);
}

public function show(int $articleId)
{
    $article=null;
foreach($this->articles as $articleItem){
    if($articleItem['id']===$articleId)
    {
        $article=$articleItem;
    }
}
if(!$article){
    abort(404);
}
    return view('pages/blog-article',['article'=>$article]);
}
}