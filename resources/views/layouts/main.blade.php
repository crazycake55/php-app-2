<!DOCTYPE html>

<head>
    <title>Amai party</title>
    @yield('styles')
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <style>
        .header {
            background-color: rgb(229, 251, 251);
            color: #09edc3;
            box-shadow: 10px 10px;
            margin: 12px;
            text-align: center;
            padding: 8px;
            grid-area: text;
        }

        .header-container{
            display: grid;
            grid-template-areas:
            'button text' ;
            grid-template-columns: 7% 93%;
            align-items: center;
        }

        .container-main{
            border: 4px solid #00ddc0;
            border-radius: 25px;
            padding: 20px;
            margin-top: 20px;
            align-self: center;
            background-image: url('https://ih0.redbubble.net/image.1762061035.8038/raf,360x360,075,t,fafafa:ca443f4786.jpg');
            background-repeat: repeat;
            animation: movePattern 200s linear infinite;
        }

        @keyframes movePattern {
            0% {
                background-position: 0 0;
            }
            100% {
                background-position: 100% 100%;
            }
        }

        a {
            color: black;
        }

        .menu-container {
            position: relative;
            grid-area: 'button';
        }

        .menu-button {
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            background-color: #09edc3;
            border-radius: 10px;
            font-family: 'Oswald', sans-serif;
        }

        .menu-items {
            position: fixed;
            top: 0;
            left: -250px;
            width: 250px;
            height: 100%;
            background-color: rgb(229, 251, 251);
            transition: left 0.3s ease;
        }

        .menu-items ul {
            list-style-type: none;
            padding: 0;
        }

        .menu-items ul li {
            padding: 10px;
        }

        .menu-items ul li a {
            color: black;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .menu-items ul li a:hover {
            color: #007bff;
        }

        .menu-items.show {
            left: 0;
        }

        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: transparent;
            border: none;
            color: black;
            cursor: pointer;
        }

        .fullscreen-message {
            display: none;
        }

        @media (orientation: portrait) {
            .fullscreen-message {
                display: flex;
                justify-content: center;
                align-items: center;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                font-size: 3rem;
                text-align: center;
                z-index: 1000;
                background-image: url('https://ih0.redbubble.net/image.1762061035.8038/raf,360x360,075,t,fafafa:ca443f4786.jpg');
                background-repeat: repeat;
                animation: movePattern 200s linear infinite;
            }
        }

        .success-message {
            position: fixed;
            top: 20px;
            right: -300px;
            width: 250px;
            padding: 15px;
            background-color: #28a745;
            color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: right 0.5s ease, opacity 0.5s ease;
            z-index: 1000;
        }

        .success-message.show {
            right: 20px;
        }

        .success-message.hide {
            opacity: 0;
        }
    </style>
</head>

<body style="font-family: 'Oswald', sans-serif;">
    <div class="fullscreen-message">
        <p style="text-align: center; background-color: rgb(229, 251, 251); border: 4px solid #00ddc0; border-radius: 25px; padding: 5px; margin-left: 20px; margin-right: 20px;">
            Будь ласка, змініть орієнтацію екрану на альбомну.
        </p>
    </div>
    <div class="header-container">
        <div class="menu-container">
            <button class="menu-button">Меню</button>
            <div class="menu-items">
                <button class="close-button">✖</button>
                <p></p>
                <nav>
                    <ul>
                        <li><a href="{{ route('main') }}">Головна</a></li>
                        <li><a href="{{ route('voting') }}">Голосування</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <h1 class="header">@yield('header')</h1>
    </div>

    @if (session()->has('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var button = document.querySelector('.menu-button');
            var menu = document.querySelector('.menu-items');
            var closeButton = document.querySelector('.close-button');

            button.addEventListener('click', function() {
                menu.classList.toggle('show');
            });

            closeButton.addEventListener('click', function() {
                menu.classList.remove('show');
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            var successMessage = document.querySelector('.success-message');
            if (successMessage) {
                successMessage.classList.add('show');

                setTimeout(function() {
                    successMessage.classList.add('hide');
                }, 3000);

                setTimeout(function() {
                    successMessage.classList.remove('show');
                }, 3500);
            }
        });
    </script>


    <div class="container-main">
        @yield('content')
    </div>
</body>
