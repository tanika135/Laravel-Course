@extends('layouts.main')

@section('header-title')
    Контакты
@endsection

@section('content')
    <div class="main-container">
        <div class="main-block">
            <h1>Contact page</h1>
            <form action="{{ route('contact.post') }}" method="POST" class="contact-form">
                @csrf

                <label for="name">Имя</label>
                <input type="text" placeholder="Введите имя" name="name" id="name" value="{{ old('name') }}">

                <label for="email">Email</label>
                <input type="email" placeholder="Введите email" name="email" id="email"  value="{{ old('email') }}" required>

                <label for="subject">Тема сообщения</label>
                <input type="text" placeholder="Введите тему сообщения" name="subject" id="subject"  value="{{ old('subject') }}" required>

                <label for="message">Сообщение</label>
                <textarea placeholder="Введите сообщение" name="message" id="message" rows="5" required>{{ old('message') }}</textarea>

                <button type="submit">Отправить</button>
            </form>

        </div>
        @include('includes.aside')
    </div>

@endsection
