<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Article;

class WelcomeController extends Controller
{




    public function getArticles(){
        $articles = Article::paginate(5);
        return view('welcome.index',compact('articles'));
    }


    public function getSingleArticles( $title_slug){

        $article = Article::where('title_slug',$title_slug)->first();

        return view('welcome.article',compact('article'));
    }



}
