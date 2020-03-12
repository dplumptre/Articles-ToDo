@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Article Create</div>

                <div class="card-body">
                @include('partials.errors')
<form action="{{ route('article.post')}}" method="post">
{{ csrf_field() }}
<label for="">Title</label>
<input type="text" name="title" class="form-control">
<label for="">Content</label>
<textarea name="content" class="form-control"></textarea>
<br>
<input type="submit" value="submit" class="btn btn-primary">
</form>




            </div>
        </div>
    </div>
</div>
@endsection
