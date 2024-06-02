@extends('layouts.main')

@section('styles')
    <style>
        .container-participant{
            background-color: rgb(229, 251, 251);
            border: 4px solid #00ddc0;
            border-radius: 25px;
            padding: 20px;
            margin-top: 20px;
        }

        .content-container{
            display: grid;
            grid-template-areas:
                'header header'
                'cosplay cosplay'
                'participant1 participant2'
                'kpop kpop'
                'participantkpop1 participantkpop2';
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            justify-items: center;
            align-items: start;
        }

        .responsive-image {
            max-width: 40vw;
        }

        @media (orientation: portrait) {

            .content-container{
                display: grid;
                grid-template-areas:
                    'header'
                    'cosplay'
                    'participant1'
                    'participant2'
                    'kpop'
                    'participantkpop1'
                    'participantkpop2';
                grid-template-columns: 1fr;
                justify-items: center;
                align-items: start;
            }

            .responsive-image {
                max-width: 80vw;
            }
        }
    </style>
@endsection

@section('header')
    Вітаємо на сайті Amai party!
@endsection

@section('content')
    <div class="content-container">
        <div style="text-align: center; background-color: rgb(229, 251, 251); grid-area: header;">
            <h3>На цій сторінці ви можете ознайомитись з досьє наших учасників</h3>
        </div>

        <div style="grid-area: cosplay;">
            <h3>Косплей</h3>
        </div>

        <div class="container-participant" style="grid-area: participant1;">
            <h4>1. Яйца болят</h4>
            <img class='responsive-image' src="{{ asset('img/pic.jpg') }}">
        </div>

        <div class="container-participant" style="grid-area: participant2;">
            <h4>2. Стая котят</h4>
            <img class='responsive-image' src="{{ asset('img/pic.jpg') }}">
        </div>

        <div style="grid-area: kpop;">
            <h3>кпоп</h3>
        </div>

        <div class="container-participant" style="grid-area: participantkpop1;">
            <h4>1. Яйца болят</h4>
            <img class='responsive-image' src="{{ asset('img/pic.jpg') }}">
        </div>

        <div class="container-participant" style="grid-area: participantkpop2;">
            <h4>2. Стая котят</h4>
            <img class='responsive-image' src="{{ asset('img/pic.jpg') }}">
        </div>
    </div>
@endsection
