@extends('layouts.main')

@section('header-title')
    Главная страница
@endsection

@section('content')
    <div class="hero">
        <div class="hero-overlay">
            <h1>Добро пожаловать в itProger App</h1>
            <p>Учитесь программированию легко и удобно вместе с нами</p>
        </div>
        <a href="#home-content" class="hero-btn">Начать</a>
    </div>
    <div class="main-container">
        <div class="main-block" id="home-content">
            <h1>Home page</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At excepturi facilis quibusdam. A aperiam culpa dolorem eos facere laudantium, natus non perferendis quasi quidem recusandae repellat sed vel veniam vitae!</p>
        </div>
        @include('includes.aside')
    </div>
@endsection
