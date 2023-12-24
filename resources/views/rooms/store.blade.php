@extends('layouts.app') <!-- Подставьте ваш шаблон -->
@section('content')
    <h1>Успешно добавлен</h1>
@endsection

resources/views/layouts/app.blade
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking.com</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index-style.css') }}" rel="stylesheet">
</head>
<body>

    <header class="booking-header">
        <div class="container text-center">
            <div class="auth-buttons">
                <a href="#" class="btn btn-primary">Регистрация</a>
                <a href="#" class="btn btn-outline-primary">Войти</a>
            </div>
        </div>
    </header>

    <section class="booking-section">
        <img src="{{ asset('images/1702634195.jpg') }}" alt="Booking.com" class="booking-logo">
        <h1>Booking.com</h1>
    </section>

    <main class="main-content">
        <div class="container mt-5">
            <div class="row room-cards">
                <!-- Карточки с информацией о номерах -->
                <!-- Каждая карточка будет содержать информацию о номере -->
            </div>
        </div>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>