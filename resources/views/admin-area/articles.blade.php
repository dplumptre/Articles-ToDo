@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Articles</div>

                <div class="card-body">
                @include('partials.errors')
<table class="table table-border">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th><a href="{{ route('article.create') }}" class="btn btn-primary"> Add  </a></th>
    </tr>
    @foreach($articles as $key =>$article)
    <tr>
        <td>{{ $key+1}}</td>
        <td>{{ $article->title }}</td>
        <td>
        <a href="{{ route('article.edit',$article->id) }}" class="btn btn-warning"> edit  </a>
        <a href="{{ route('article.delete',$article->id) }}" class="btn btn-danger"> delete  </a>
         </td>
    </tr>
    @endforeach
</table>




            </div>
        </div>
    </div>
</div>
@endsection
