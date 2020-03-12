@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Articles</div>

                <div class="card-body">


 @foreach($articles as $key =>$article)
 <div class="card" style="margin-bottom:10px">
      <div class="card-body">
        <h5 class="card-title">{{ $article->title }}</h5>
        <p class="card-text">{{ substr($article->content,0,120)}}</p>
        <a href="{{ asset('article/'.$article->title_slug)}}" class="btn btn-primary">Read more >></a>
      </div>
    </div>

    @endforeach


    {{ $articles->links() }}

            </div>
        </div>
    </div>
</div>
@endsection
