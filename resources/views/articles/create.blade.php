@extends('articles.layout')
 
@section('content')
<div class="container">
    <form action="/articles" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="tittle">Title: </label>
            <input type="text" class="form-control" required="required" name="tittle"></br>
            <label for="content">Content: </label>
            <textarea type="text" class="form-control" required="required" name="content"></textarea></br>
            <label for="image">Feature Image: </label>
            <input type="file" class="form-control" required="required" name="image"></br>
            <button type="submit" name="submit" class="btn btn-primary float-right">Simpan</button>Page 4 of 11
        </div>
    </form>
</div>
@endsection