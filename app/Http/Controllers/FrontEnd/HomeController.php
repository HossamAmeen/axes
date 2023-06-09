<?php

namespace App\Http\Controllers\FrontEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Article;
use App\Models\Service;
use App\Models\Configration;
use Mail;
class HomeController extends Controller
{
    protected $lang;  
    protected $phone; 
    protected $phone2; 
    public function __construct()
    {
        $config = Configration::find(1);
        $this->phone = $config->phone;
        $this->phone2 = $config->phone2;
       
    }
  
    public function home()
    {
        
        $articles = Article::all()->sortByDesc("id");
        $services = Service::all()->sortByDesc("id");

        $phone = $this->phone  ; 
        $phone2 = $this->phone2  ; 
        $type = "all";
        if( $this->lang  == "en" ){
            $pageTitle  = "Home";
        }
        else
        {
            $pageTitle = "الرئيسيه";
        }
      
        return view("front-end.index" , compact('pageTitle'  ,'articles', 'services' ,'type', 'phone' , 'phone2'));
    }
    public function article($id){
        $article = Article::find($id);
        if( strlen($article->title)> 50 )
        $pageTitle  = $article->title;
        else
        $pageTitle  = substr($article->title , 0 , 50 );     
   
        $type =  $article->type;
        
        $phone = $article->phone  ; 
       
        return view('front-end.article', compact('pageTitle' ,'type', 'article' , 'phone'));
    }
    public function articles($type){
        $articles = Article::where('type',$type)->get(); 
        if($type =="عزل")
        $phone = $this->phone2  ; 
        else
        $phone = $this->phone;
        return view('front-end.articles', compact('type' ,'phone', 'articles'));
    }
  
}
