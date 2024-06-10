@extends('layouts.main')

@section('styles')
    <style>
        .container-participants{
            background-color: rgb(229, 251, 251);
            border: 4px solid #00ddc0;
            border-radius: 25px;
            padding-left: 20px;
            padding-right: 20px;
            margin-top: 20px;
        }
        .participant {
            transition: transform 0.5s ease-in-out;
        }
    </style>
@endsection

@section('header')
    Поточний ТОП учасників
@endsection

@section('content')
    <div id="participants-list">
        <div class="container-participants">
            <h2 style="text-align: center;">Косплей</h2>

            @foreach ($participants as $index => $participant)
                <h3 class="participant" data-id="{{ $participant->id }}">{{ $index + 1 }}. "{{$participant->name}}"   —   Голосів: {{$participant->votes}}</h3>
            @endforeach
        </div>
        <div class="container-participants">
            <h2 style="text-align: center;">Кавер-денс</h2>

            @foreach ($participantskpop as $index => $participant)
                <h3 class="participant" data-id="{{ $participant->id }}">{{ $index + 1 }}. "{{$participant->name}}"   —   Голосів: {{$participant->votes}}</h3>
            @endforeach
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            setInterval(function() {
                fetch('{{ route('top') }}')
                    .then(response => response.text())
                    .then(data => {
                        const parser = new DOMParser();
                        const htmlDoc = parser.parseFromString(data, 'text/html');
                        const newList = htmlDoc.querySelector('#participants-list');
                        document.querySelector('#participants-list').innerHTML = newList.innerHTML;
                    });
            }, 15000);
        });
    </script>

@endsection
