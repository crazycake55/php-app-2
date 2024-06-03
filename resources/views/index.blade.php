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

        .h2-titles {
            text-shadow:
            -2px -2px 0 #ffffff,
            2px -2px 0 #ffffff,
            -2px 2px 0 #ffffff,
            2px 2px 0 #ffffff,
            -2px 0 0 #ffffff,
            2px 0 0 #ffffff,
            0 -2px 0 #ffffff,
            0 2px 0 #ffffff,
            -3px -3px 0 #ffffff,
            3px -3px 0 #ffffff,
            -3px 3px 0 #ffffff,
            3px 3px 0 #ffffff,
            -3px 0 0 #ffffff,
            3px 0 0 #ffffff,
            0 -3px 0 #ffffff,
            0 3px 0 #ffffff;
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

            h1 {
                font-size: 250%;
            }

            h2 {
                font-size: 250%;
            }

            h3 {
                font-size: 250%;
            }

            h4 {
                font-size: 250%;
            }

            a {
                font-size: 250%;
            }

            button {
                font-size: 200%;
            }

            .header-container{
                display: grid;
                grid-template-areas:
                'button text' ;
                grid-template-columns: 15% 85%;
                align-items: center;
            }
        }
    </style>
@endsection

@section('header')
    Вітаємо на сайті Amai party!
@endsection

@section('content')
    <div class="content-container">
        <div style="text-align: center; background-color: rgb(229, 251, 251); grid-area: header; border-radius: 25px; padding: 5px;">
            <h3>На цій сторінці ви можете ознайомитись з досьє наших учасників</h3>
        </div>

        <div style="grid-area: cosplay;">
            <h2 class="h2-titles">Косплей</h2>
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
            <h2 class="h2-titles">кпоп</h>
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
