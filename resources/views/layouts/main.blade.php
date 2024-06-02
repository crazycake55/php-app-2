<!DOCTYPE html>

<head>
    <title>Amai party</title>
    @yield('styles')
    <style>
        .header {
            background-color: rgb(229, 251, 251);
            color: #09edc3;
            box-shadow: 10px 10px;
            margin: 12px;
            text-align: center;
            padding: 8px;
        }
        .container-main{
            /* background-color: rgb(229, 251, 251); */
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
        }

        .menu-button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
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

        @media (orientation: portrait) {
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
                font-size: 250%;
            }
        }
    </style>
</head>

<body>
    <h1 class="header">@yield('header')</h1>

    <div class="menu-container">
        <button class="menu-button">Меню</button>
        <div class="menu-items">
            <button class="close-button">✖</button>
            <nav>
                <ul>
                    <li><a href="{{ route('main') }}">Головна</a></li>
                    <li><a href="{{ route('voting') }}">Голосування</a></li>
                </ul>
            </nav>
        </div>
    </div>

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
    </script>


    <div class="container-main">
        @yield('content')
    </div>
</body>