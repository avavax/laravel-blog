@extends('app')

<!-- Секция, содержимое которой обычный текст. -->
@section('title', 'Добавить статью')

@section('header', 'Добавить статью')

@section('content')

{{ Form::model($article, ['url' => route('articles.update', ['id' => $article->id]), 'method' => 'PATCH']) }}
    @include('article.form')
    {{ Form::submit('Обновить') }}
{{ Form::close() }}

@endsection
