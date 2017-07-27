@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('article.makeEdit',['id'=>$SingleArticle->id])}}" method="post">
      <div class="form-group">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <label>Title</label>
        <input class="form-control" value="{{$SingleArticle->article_title}}" name="article_title"/>
      </div>
      <div class="form-group">
        <label>Description</label>
        <input class="form-control" value="{{$SingleArticle->article_body}}" name="article_body"/>
      </div>
      <button class="btn btn-primary" type="Submit">Submit</button>
    </form>
</div>
@endsection