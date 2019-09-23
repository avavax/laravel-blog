@extends('app')

<!-- Секция, содержимое которой обычный текст. -->
@section('title', 'Добавить статью')

@section('header', 'Добавить статью')

@section('content')

{{ Form::model($article, ['url' => route('articles.store')]) }}
    @include('article.form')
    {{ Form::submit('Сохранить') }}
{{ Form::close() }}

@endsection