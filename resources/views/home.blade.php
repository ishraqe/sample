@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h1>My Articles</h1>
            <ul>
                @foreach($myArticle as $a)
                    <li>{{$a->article_title}}</li>
                    <li>{{$a->article_body}}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
