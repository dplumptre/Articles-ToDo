<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Article;

class ApiController extends Controller
{



    public function test(){

//  $a = 'ade is a boy';

//  $b = "lion";

// $arr = str_split($b);
// $count = count($arr);
// $word = [];

//  for($i=$count-1;$i> -1;$i--){
//      $word[]= $arr[$i];
//  }

 //$word = strrev($a);

// $arr = explode(" ",$a);
// $count= count($arr);
// $word = [];
// for($i=3;$i> -1; $i--){
//     $word[]=$arr[$i];
// }


// $data = implode(" ",$word);




// $words = array(10,90,30,40,70);
// $min = $words[0];

// foreach($words as $w){
//     if($min < $w){
//         $min = $w;
//     }
// }
// $data = $min;



return response()->json(['data'=>$data],201);
    }





    public function articles(){
        $articles = Article::all();
        return response()->json(['result'=>$articles ],201);
    }


    public function getApiArticle( $title_slug){

        $article = Article::where('title_slug',$title_slug)->first();

        return response()->json(['result'=>$article ],201);
    }

}
