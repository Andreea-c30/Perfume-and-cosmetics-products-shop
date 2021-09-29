<?php 
namespace App\Http\Controllers;
use App\Models\Blog\Article;
use Illuminate\Pagination\Paginator;
use App\Services\Logging\ViewLogger;
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
    Paginator::useBootstrap();
    $articles = Article::paginate(3);
    return view('pages/blog-list',['articles'=>$articles]);
}

public function show(int $articleId, ViewLogger $viewLogger)
{
    $article=Article::findOrFail($articleId);

    $viewLogger->logView($article);

    return view('pages/blog-article',['article'=>$article]);
  
}
}