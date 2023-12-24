@extends('layouts.app')
@section('content')
<div class="admin-page">
    <h1 class="page-title">Админская страница</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Создать новый номер отеля
                    </div>
                    <div class="card-body">
                        <form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="room_number">Номер комнаты:</label>
                                <input type="text" name="room_number" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="type">Тип комнаты:</label>
                                <input type="text" name="type" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Описание:</label>
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="price">Цена:</label>
                                <input type="number" name="price" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="image">Выберите изображение:</label>
                                <input type="file" name="image" accept="image/*" class="form-control-file">
                            </div>
                            <button type="submit" class="btn btn-primary">Добавить номер отеля</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
