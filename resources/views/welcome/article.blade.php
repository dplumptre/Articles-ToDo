@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $article->title }}</div>

                <div class="card-body">


<p>{{ $article->content }}</p>
<a href="{{ route('welcome.articles') }}" class="btn btn-primary"> Back </a>
            </div>
        </div>
    </div>
</div>
@endsection
