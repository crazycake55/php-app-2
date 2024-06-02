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
        }
    </style>
</head>

<body>
    <h1 class="header">@yield('header')</h1>
    <div class="container-main">
        @yield('content')
    </div>
</body>
