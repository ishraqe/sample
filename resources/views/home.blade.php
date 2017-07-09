@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('added_confirmation'))
        <div class="btn btn-success"  >{{Session::get('added_confirmation')}}
        </div>
    @endif
    <div class="row">
        <div class="col-md-8">
            <form action="{{route('user.article')}}" method="POST">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label for=""></label>
                    <input class="form-control" type="text" name="article_title" value="{{old('article_title')}}">
                </div>
                <div class="form-group">
                    <label for=""></label>
                    <input class="form-control" type="text" name="article_body" value="{{old('article_body')}}">
                </div>
                <button class="btn btn btn-default" type="submit">Submit</button>
            </form>
        </div>
        <div class="col-md-4">
            <h1>My Articles</h1>
            <ul>
                @foreach($myArticle as $a)
                    <li>
                        <h6>
                            {{$a->article_title}}<br>
                            <small> {{$a->article_body}}</small>
                        </h6>

                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
