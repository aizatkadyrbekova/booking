<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function create()
    {
        // Ваш код для отображения формы создания комнаты
        return view('rooms.admin'); // Замените 'rooms.create' на имя вашего представления
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'room_number' => 'required',
        'type' => 'required',
        'price' => 'required|numeric',
        'description' => 'nullable',
        'image' => 'required|image', // Валидация для изображения
    ]);

    // Обработка загружаемого изображения
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        // Сохраните путь к изображению в вашу базу данных
        $validatedData['image'] = '/images/' . $imageName;
    }

    $createdRoom = Room::create($validatedData);

    // Перенаправление на страницу списка созданных номеров
    return redirect()->route('rooms.index')->with('success', 'Комната успешно добавлена');
}
     public function index()
    {
        $createdRooms = Room::all(); // Получение всех созданных номеров из базы данных

        return view('rooms.index', compact('createdRooms'));
        // Передача переменной $createdRooms в представление для использования данных созданных номеров
    }

}
