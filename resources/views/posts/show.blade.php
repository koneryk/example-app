@extends('layouts.main')

@section('header-title')
    Все посты сайта
@endsection
@section('content')
    <div class="wrapper-content">
        <div class="main-container">
            <div class="main-block">
                <h1>{{$post->title}}</h1>
                <p>{{$post->text}}</p>
                <a href="{{route('posts.one.edit', $post->id)}}">Редактировать</a>
                <a href="{{route('posts.one.delete', $post->id)}}">Удалить</a>

            </div>
        </div>
        @include('includes.aside')
    </div>
@endsection
