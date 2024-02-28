<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Huy Tran Developer</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div id="menu">
            <div id="menu_content" class="container">
                <div id="logo">
                    <h3><a href="#">huy.dev</a></h3>
                </div>
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Me</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <!-- <div id="arrow_decoration">
                        <img src="{{ asset('imgs/arrow_decoration.png') }}" alt="arrow_decoration">
                    </div> -->
                </nav>
            </div>
        </div>
        <div id="hero_section">
            <div id="hero_content" class="container">
                <div id="avatar">
                    <img src="{{ asset('imgs/avatar.jpg') }}" alt="avatar">
                </div>
                <div id="intro">
                    <h2>
                        Hello, I'm <span>Huy Tran</span> 
                        <br /> 
                        A <span>Backend Developer</span>
                    </h2>
                    <div id="see_my_works">
                        <a href="#">See My Works</a>
                    </div>
                    <div id="highlight_decoration">
                        <img src="{{ asset('imgs/highlight_decoration.png') }}" alt="highlight decoration">
                    </div>
                    <div id="arrow_decoration">
                        <img src="{{ asset('imgs/arrow_decoration.png') }}" alt="arrow decoration">
                    </div>
                </div>
            </div>
            <div id="hero_wave">
                <img src="{{ asset('imgs/wave.png') }}" alt="hero wave">
            </div>
        </div>
        <div id="about_me">

        </div>
    </body>
</html>
