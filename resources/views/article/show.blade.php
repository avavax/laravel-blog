@extends('app')

@section('content')
    <h1>{{$article->name}}</h1>
    <div>{{$article->body}}</div>
    <div><a href="/articles/{{$article->id}}/edit" rel="nofollow">Редактировать</a></div>
    <div><a href="/articles/{{$article->id}}" data-method="delete" rel="nofollow">Удалить</a></div>
    {{ Form::model($article, ['url' => route('articles.destroy', ['id' => $article->id]), 'method' => 'DELETE']) }}
        {{ Form::submit('Удалить') }}
    {{ Form::close() }}
@endsection

