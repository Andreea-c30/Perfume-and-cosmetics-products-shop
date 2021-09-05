<?php 
namespace App\Http\Controllers;
use App\Models\Blog\Article;
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
    
    return view('pages/blog-list',['articles'=>Article::all()]);
}

public function show(int $articleId)
{
    $article=Article::findOrFail($articleId);
    return view('pages/blog-article',['article'=>$article]);
   /* $article=null;
foreach($this->articles as $articleItem){
    if($articleItem['id']===$articleId)
    {
        $article=$articleItem;
    }
}
if(!$article){
    abort(404);
}
    return view('pages/blog-article',['article'=>$article]);*/
}
}