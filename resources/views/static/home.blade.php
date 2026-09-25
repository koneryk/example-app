@extends('layouts.main')

@section('header-title')
    Главная страница
@endsection
@section('content')
    <div class="hero">
        <div class="hero-overlay">
            <h1>Добро пожаловать в itProger App</h1>
            <p>Учитесь программировать легко и удобно вместе с нами</p>
            <a href="#" class="hero-btn">Начать</a>
        </div>
    </div>
    <div class="wrapper-content">
        <div class="main-container">
            <div class="main-block">
                <h1>Home page</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.  maiores, nihil nostrum praesentium qui quis rem rerum suscipit, ullam.</p>
            </div>
        </div>
        @include('includes.aside')
    </div>
@endsection
