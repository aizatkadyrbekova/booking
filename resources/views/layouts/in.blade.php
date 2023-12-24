<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking.com</title>
    <link href="{{ asset('css/app-style.css') }}" rel="stylesheet">
</head>
<body>
    <header class="main-header">
        <div class="logo">
            <h1>booking.com</h1>
        </div>
        <div class="auth-buttons">
            <!-- Кнопки "Регистрация" и "Войти" -->
            <button>Регистрация</button>
            <button>Войти</button>
        </div>
    </header>

    <!-- Форма после header -->
    <div class="filter-section">
        <form id="filterForm">
            <div class="filter-row">
                <label for="city">Город:</label>
                <input type="text" id="city" name="city">
            </div>
            <div class="filter-row">
                <label for="date">Дата:</label>
                <input type="date" id="date" name="date">
            </div>
            <div class="filter-row">
                <label for="guests">Гости:</label>
                <input type="number" id="guests" name="guests">
                <label for="children">Дети:</label>
                <input type="number" id="children" name="children">
                <label for="rooms">Номера:</label>
                <input type="number" id="rooms" name="rooms">
            </div>
            <button type="submit">Искать номера</button>
        </form>
    </div>

    <div class="background">
        <!-- Фон с изображением -->
    </div>

    <div class="content">
        <!-- Остальное содержимое страницы -->
        @yield('content')
    </div>

    <!-- Ваши скрипты -->
</body>
</html>
