@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Article</div>

                <div class="card-body">
                @include('partials.errors')
                <form method="post" action="{{ asset('admin-area/article-update/'.$article->id) }}">
{{ csrf_field() }}{{ method_field('PUT') }}
<label for="">Title</label>

<label for="">Title</label>
<input type="text" name="title" value="{{ $article->title }}"  class="form-control">
<label for="">Content</label>
<textarea name="content" class="form-control">{{ $article->content }}</textarea>

<br>
<input type="submit" value="submit" class="btn btn-primary">
</form>










            </div>
        </div>
    </div>
</div>
@endsection
