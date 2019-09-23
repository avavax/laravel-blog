@extends('app')

<!-- Секция, содержимое которой обычный текст. -->
@section('title', 'Главная')

@section('header', 'Главная')

@section('content')

{{Form::open(['url' => route('articles.index')])}}
    {{Form::select('size', ['L' => 'Large', 'S' => 'Small'])}}
    {{Form::text('username')}}
    {{Form::submit('Click Me!')}}
{{Form::close()}}

@endsection