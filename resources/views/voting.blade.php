@extends('layouts.main')

@section('styles')
    <style>
        .form-container {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
            width: 300px;
        }

        .form-title {
            margin-bottom: 15px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
        }
    </style>
@endsection

@section('content')
    <div class="form-container">
        <div class="form-title">Форма 1</div>
        <form action="/submit-form1" method="POST">
            @csrf
            <label for="option1">Выберите вариант:</label>
            <select name="option1" id="option1">
                <option value="option1_1">Вариант 1</option>
                <option value="option1_2">Вариант 2</option>
                <option value="option1_3">Вариант 3</option>
            </select>
            <button type="submit">Отправить</button>
        </form>
    </div>

    <div class="form-container">
        <div class="form-title">Форма 2</div>
        <form action="/submit-form2" method="POST">
            @csrf
            <label for="option2">Выберите вариант:</label>
            <select name="option2" id="option2">
                <option value="option2_1">Вариант 1</option>
                <option value="option2_2">Вариант 2</option>
                <option value="option2_3">Вариант 3</option>
            </select>
            <button type="submit">Отправить</button>
        </form>
    </div>
@endsection

