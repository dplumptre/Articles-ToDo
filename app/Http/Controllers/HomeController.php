<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Article;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }



    public function articles(){
        $articles = Article::all();
        return view('admin-area.articles',compact('articles'));
    }



    public function articleCreate(){

        return view('admin-area.article-create');
    }


    public function articlePost(Request $request){

        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
			]);


      $article = auth()->user()->articles()->create([
          'title' =>$request->title,
          'title_slug' => Str::slug($request->title),
          'content' => $request->content,
      ]);

      $request->Session()->flash('message.content', ' successfully submitted!');
      $request->session()->flash('message.level', 'success');

      return redirect('admin-area/articles');
    }

    public function articleEdit(Article $article){
        return view('admin-area.article-edit',compact('article'));
    }

    public function articleUpdate(Request $request,Article $article){

        $article = Article::where('id',$article->id)->update([

                'title' =>$request->title,
                'title_slug' => Str::slug($request->title),
                'content' => $request->content,


        ]);


        $request->Session()->flash('message.content', ' successfully submitted!');
        $request->session()->flash('message.level', 'success');

        return redirect('admin-area/articles');
    }



    public function articleDelete(Request $request,Article $article){

        $article->delete();
        return redirect('admin-area/articles');
    }












}
