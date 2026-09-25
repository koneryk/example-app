@extends('layouts.main')

@section('header-title')
    Все посты сайта
@endsection
@section('content')
    <div class="wrapper-content">
        <div class="main-container">
            <div class="main-block">
                <h1>Все посты сайта</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.  maiores, nihil nostrum praesentium qui quis rem rerum suscipit, ullam.</p>
            </div>
        </div>
        @include('includes.aside')
    </div>
@endsection
