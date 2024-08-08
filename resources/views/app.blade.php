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
        <script src="https://kit.fontawesome.com/d703802588.js" crossorigin="anonymous"></script>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        overflow-x: hidden;
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

    .lineUp {
        opacity: 0;
        transform: translateY(80%);
        transition: opacity 1s ease-out, transform 1s ease-out
    }

    .lineUp.show {
        opacity: 1;
        transform: translateY(0%);
    }

    .slideLeft {
        opacity: 0;
        transform: translateX(-100%);
        transition: opacity 1s ease-out, transform 1s ease-out;
        overflow-x: hidden;
    }

    .slideLeft.show {
        opacity: 1;
        transform: translateX(0%);
    }

    .slideRight {
        opacity: 0;
        transform: translateX(100%);
        transition: opacity 1s ease-out, transform 1s ease-out;
        overflow-x: hidden;
    }

    .slideRight.show {
        opacity: 1;
        transform: translateX(0%);
    }

     .bg-header {
        background: radial-gradient(#333, #000);
    }
</style>

<body>
    <div class="">
        @include('shared.navbar')
        @yield('home')
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const elements = document.querySelectorAll('.lineUp');

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('show');
                    } else {
                        entry.target.classList.remove('show');
                    }
                });
            });

            elements.forEach(element => {
                observer.observe(element);
            });
        });

        document.addEventListener("DOMContentLoaded", function () {
            const elements = document.querySelectorAll('.slideLeft');

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('show');
                    } else {
                        entry.target.classList.remove('show');
                    }
                });
            });

            elements.forEach(element => {
                observer.observe(element);
            });
        });


        document.addEventListener("DOMContentLoaded", function () {
            const elements = document.querySelectorAll('.slideRight');

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('show');
                    } else {
                        entry.target.classList.remove('show');
                    }
                });
            });

            elements.forEach(element => {
                observer.observe(element);
            });
        });

    </script>
</body>

</html>