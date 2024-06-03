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

        .content-container {
            display: grid;
            grid-template-areas:
                'form1 form2';
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            justify-items: center;
            align-items: start;
        }

        @media (orientation: portrait){
            .content-container{
                display: grid;
                grid-template-areas:
                    'form1'
                    'form2';
                grid-template-columns: 1fr;
                justify-items: center;
                align-items: start;
            }

            .form-container {
                width: 90%;
                padding: 40px;
            }

            .form-title {
                font-size: 200%;
            }

            form {
                font-size: 150%;
            }

            select {
                font-size: 100%;
                padding: 10px; /* увеличиваем размер селекта */
            }

            button {
                font-size: 150%;
                padding: 10px 20px; /* увеличиваем размер кнопки */
            }
        }

    </style>
@endsection

@section('header')
        Голосуйте зараз!
@endsection

@section('content')
    <div class="content-container">
        <div class="form-container" style="grid-area: 'form1'">
            <div class="form-title">Форма 1</div>
            <form action="{{route('submit-form1')}}" method="POST">
                @csrf
                <label for="option1">Выберите вариант:</label>
                    <select name="option1">
                        @foreach($participants as $participant)
                            <option value="{{ $participant->id }}">{{ $participant->name }}</option>
                        @endforeach
                    </select>
                <button type="submit">Отправить</button>
            </form>
        </div>

        <div class="form-container">
            <div class="form-title">Форма 2</div>
            <form action="{{route('submit-form2')}}" method="POST">
                @csrf
                <label for="option2">Выберите вариант:</label>
                    <select name="option2">
                        @foreach($participantskpop as $participantkpop)
                            <option value="{{ $participantkpop->id }}">{{ $participantkpop->name }}</option>
                        @endforeach
                    </select>
                <button type="submit">Отправить</button>
            </form>
        </div>
    </div>
@endsection

