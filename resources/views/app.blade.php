<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        background-color: black;
    }

    .font {
        font-family: "Inter", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
    }

    .commonContainer {
        max-width: 1512px;
        margin-left: auto;
        margin-right: auto;
        padding-left: 117px;
        padding-right: 117px;
    }


    @media screen and (max-width: 1280px) {
        .commonContainer {
            padding-left: 80px;
            padding-right: 80px;
        }
    }

    @media screen and (max-width: 1024px) {
        .commonContainer {
            padding-left: 50px;
            padding-right: 50px;
        }
    }

    @media screen and (max-width: 600px) {
        .commonContainer {
            padding-left: 20px;
            padding-right: 20px;
        }
    }

    @media screen and (max-width: 400px) {}

    @media screen and (max-width: 340px) {
        .commonContainer {
            padding-left: 16px;
            padding-right: 16px;
        }
    }


    /* .bg-header {
        height: 100%;
        width: 100%;
        position: absolute;
        background: radial-gradient(#333, #000);
    } */
</style>

<body>
    <div class="commonContainer">
        @include('shared.navbar')
        @yield('home')
    </div>

</body>

</html>