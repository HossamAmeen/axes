<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Article;
use App\Models\Gallery;
use App\Models\Question;
use App\Models\Clinic;
use App\Models\Service;
use App\Models\Drug;
use App\Models\Operation;
use Mail;
class HomeController extends Controller
{
    protected $lang;  
    public function __construct()
    {
        if(  request()->segment(1) === null ) {
            $this->lang = "ar";
        }
        else
        $this->lang = request()->segment(1);
       
    }
    public  function  change_language($lang){
      
        $prefUrl = url()->previous() ; 
         if($lang == "en")
 
             $rout =   str_replace("ar/","en/",url()->previous());
 
         else
             $rout =   str_replace("en/","ar/",url()->previous());
        
         if(  request()->segment(2) === null ) {
             
            if(  request()->segment(1) === "ar" ) {
                return redirect()->route('en.index');
            }
         }
        //  return $prefUrl;
         if( $rout == url()->previous()){
             $rout = $rout . $lang;
             //return $rout;
         }
        //  return strripos($prefUrl , '/') ;
        // return $rout;
        //  return strlen($rout);
        // if(strripos($rout , '/')+3 == strlen($rout)){
        //     $rout = $rout .'/index';
        // }
        //  if($rout == )
    
         return redirect($rout);
     }
     public function index()
     {
        return redirect()->route('home');
     }
     
    public function home()
    {
        
      
        if( $this->lang  == "en" ){

            $pageTitle  = "Home";
            $news = News::all()->sortByDesc("id")->where('en_title','!=',null)->take(3);
            $articals = Article::all()->sortByDesc("id")->where('en_title','!=',null)->take(4);
            $articals1 = $articals->slice(0,2);
            $articals2 = $articals->slice(2,2);
           
            $questions = Question::all()->sortByDesc("id")->where('en_question','!=',null)->take(2);
            $drugs = Drug::all()->sortByDesc("id")->where('en_title','!=',null)->take(10);
            $firstOperation = Operation::all()->sortByDesc("id")->where('en_title','!=',null)->first();
            $operations = Operation::all()->sortByDesc("id")->where('en_title','!=',null)->take(9);
           
            $indexOperation = 1 ; 
            $indexDrugs = 1 ;
            foreach($operations as $operation){
                if ($indexOperation < 3) {

                    $operation1[] = $operation ;
                }  elseif ($indexOperation < 6) {
                    $operation2[] = $operation ;
                }
                else{
                    $operation3[] = $operation ;
                }
                $indexOperation++;               
            }
                
            foreach($drugs as $drug){
                if ($indexDrugs % 2 == 0) {

                    $drugs1[] = $drug ;
                } else {
                    $drugs2[] = $drug ;
                }
                $indexDrugs++;               
            }
        //    return drugs2
        }
        else
        {
            $pageTitle = "الرئيسيه";

            $news = News::all()->sortByDesc("id")->take(3);
            $articals = Article::orderBy('id', 'desc')->paginate(4);
            $articals1 = $articals->slice(0,2);
            $articals2 = $articals->slice(2,2);
            $questions = Question::all()->sortByDesc("id")->take(2);
            $drugs = Drug::all()->sortByDesc("id")->take(10);
            
            $operations = Operation::all()->sortByDesc("id")->take(9);

            $indexOperation = 1 ; 
            $indexDrugs = 1 ;
            foreach($operations as $operation){
                if ($indexOperation < 3) {

                    $operation1[] = $operation ;
                }  elseif ($indexOperation < 6) {
                    $operation2[] = $operation ;
                }
                else{
                    $operation3[] = $operation ;
                }
                $indexOperation++;               
            }

            foreach($drugs as $drug){
                if ($indexDrugs % 2 == 0) {

                    $drugs1[] = $drug ;
                } else {
                    $drugs2[] = $drug ;
                }
                $indexDrugs++;               
            }
        }
        
        $clinics =  Clinic::all()->sortByDesc("id")->take(3);
        $gallery =  Gallery::all()->sortByDesc("id")->first();
        $galleries = Gallery::where('id' , '!=' ,$gallery->id )->orderBy('id', 'DESC')->get();
        
        return view("front-end.$this->lang.index" , compact('pageTitle' , 'news' ,'articals1','articals2', 'gallery' , 
        'galleries' , 'questions'  , 'drugs1' ,'drugs2','operations' , 'operation1' ,'operation2' ,'operation3', 'clinics'));
    }
    public function articles()
    {
        
        $articals = Article::orderBy('id', 'desc')->paginate(6);
        $pageTitle  = "المقالات";
        return view('front-end.'.$this->lang.'.articles', compact('pageTitle'  , 'articals'));
    }
   
    public function services()
    {
        $pageTitle  = "الخدمات";
        $services = Service::all()->sortByDesc("id")->take(8);
        if(  request()->segment(1) == "en" ){
            $pageTitle  = "services";
            $services = Service::all()->sortByDesc("id")->where('en_title','!=',null)->take(6);
        }
        return view('front-end.'.$this->lang.'.services' , compact('pageTitle' , 'services'));
    }

  


  
}
