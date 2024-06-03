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
                'header header'
                'form1 form2';
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            justify-items: center;
            align-items: start;
        }

        .form-btn {
            background-color: #09edc3;
            border-radius: 10px;
        }

        @media (orientation: portrait){
            .content-container{
                display: grid;
                grid-template-areas:
                    'header'
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
        <div style="text-align: center; background-color: rgb(229, 251, 251); grid-area: header; border-radius: 25px; padding: 5px;">
            <h3>Категорії</h3>
        </div>
        <div class="form-container" style="grid-area: 'form1'">
            <div class="form-title">Косплей</div>
            <form action="{{route('submit-form1')}}" method="POST">
                @csrf
                <label for="option1">Виберіть учасника:</label>
                    <select name="option1">
                        @foreach($participants as $participant)
                            <option value="{{ $participant->id }}">{{ $participant->name }}</option>
                        @endforeach
                    </select>
                <p></p>
                <button type="submit" class="form-btn">Проголосувати</button>
            </form>
        </div>

        <div class="form-container">
            <div class="form-title">Кавер-денс</div>
            <form action="{{route('submit-form2')}}" method="POST">
                @csrf
                <label for="option2">Вибрати гурт:</label>
                    <select name="option2">
                        @foreach($participantskpop as $participantkpop)
                            <option value="{{ $participantkpop->id }}">{{ $participantkpop->name }}</option>
                        @endforeach
                    </select>
                <p></p>
                <button type="submit" class="form-btn">Проголосувати</button>
            </form>
        </div>
    </div>
@endsection

