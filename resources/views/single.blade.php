@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-condensed">
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$SingleArticle->article_title}}</td>
        <td>{{$SingleArticle->article_body}}</td>
        <td>
            <a class="btn btn-success" href="{{route('article.edit',['id'=> $SingleArticle->id])}}">Edit</a>
            <a href="{{route('article.delete',['id'=> $SingleArticle->id])}}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
    </tbody>
  </table>
</div>
@endsection