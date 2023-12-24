@extends('layouts.in')
@section('content')
<div class="index-page">
    <h1 class="page-title"></h1>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Добро пожаловать!
                    </div>
                    <div class="card-body">
                        @if($createdRooms->isNotEmpty())
                            @foreach($createdRooms as $createdRoom)
                                <div class="room-info">
                                    <p><strong>Номер комнаты:</strong> {{ $createdRoom->room_number }}</p>
                                    <p><strong>Тип комнаты:</strong> {{ $createdRoom->type }}</p>
                                    <p><strong>Описание:</strong> {{ $createdRoom->description }}</p>
                                    <p><strong>Цена:</strong> {{ $createdRoom->price }}</p>
                                    @if($createdRoom->image)
                                        <img src="{{ asset($createdRoom->image) }}" alt="Room Image" style="max-width: 200px;">
                                    @else
                                        <p>Изображение не найдено</p>
                                    @endif
                                </div>
                                <hr>
                            @endforeach
                        @else
                            <p>Номеры отеля не найдены</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
