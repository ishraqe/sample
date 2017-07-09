@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <h1>My first Article</h1>
                    <ul>
                        @foreach($article as $a)
                        <li>{{$a->article_title}}</li>
                        <li>{{$a->article_body}}</li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
@endsection
