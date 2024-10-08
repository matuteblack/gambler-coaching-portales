<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> {{ $title }} | Gambler Coaching</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ url('/css/styles.css') }}">
</head>
<body>
    <div class="layout">
        <header class="section">
            <nav class="container-row">
                <div class="logo">
                    <img src="{{ url('./assets/icon/favicon.jfif') }}" alt="coach gambler logo">
                    <a href="{{ url('/') }}">
                        <span>GAMBLER</span>
                    </a>
                </div>
                <ul class="links container-row">
                    <li class="link"><a href="">Sobre mi</a></li>
                    <li class="link"><a href="{{ url('/paquetes') }}">Paquetes</a></li>
                    <li class="link"><a href="#membresias">Membresías</a></li>
                    <li class="link"><a href="#testimonios">Testimonios</a></li>
                    <li class="link"><a href="#faqs">FAQs</a></li>
                </ul>
                <ul class="redes container-row">
                    <li><a href="https://www.twitch.tv/gamblercoach" target="_blank"><img src="{{ url('/assets/icon/twitch_icon.png') }}" alt="twitch icon" class="icon"></a></li>
                    <li><a href="https://www.youtube.com/@Gamblerlol" target="_blank"><img src="{{ url('./assets/icon/youtube_icon.png') }}" alt="youtube icon" class="icon"></a></li>
                    <li><a href="https://www.tiktok.com/@gambler_lol" target="_blank"><img src="{{ url('./assets/icon/tiktok_icon.png') }}" alt="tiktok icon" class="icon"></a></li>
                    <li><a href="https://discord.com/invite/nvG2UynZ3Q" target="_blank"><img src="{{ url('./assets/icon/discord_icon.png') }}" alt="discord icon" class="icon"></a></li>
                </ul>
            </nav>
        </header>
        
        <main>
            {{ $slot }}
        </main>

        <footer>
            <div class="section container-row">
                <div class="footer-links">
                    <div class="logo">
                        <img src="{{ url('./assets/icon/favicon.jfif') }}" alt="coach gambler icon">
                        <span>GAMBLER</span>
                    </div>
                    <ul class="links">
                        <li class="link"><a href="">Sobre mi</a></li>
                        <li class="link"><a href="">Paquetes</a></li>
                        <li class="link"><a href="">Membresías</a></li>
                        <li class="link"><a href="">Testimonios</a></li>
                        <li class="link"><a href="">FAQs</a></li>
                    </ul>
                </div>
                <div class="footer-redes">
                    <ul class="redes container-row">
                        <li><a href="https://www.twitch.tv/gamblercoach" target="_blank"><img src="{{ url('./assets/icon/twitch_icon.png') }}" alt="twitch icon" class="icon"></a></li>
                        <li><a href="https://www.youtube.com/@Gamblerlol" target="_blank"><img src="{{ url('./assets/icon/youtube_icon.png') }}" alt="youtube icon" class="icon"></a></li>
                        <li><a href="https://www.tiktok.com/@gambler_lol" target="_blank"><img src="{{ url('./assets/icon/tiktok_icon.png') }}" alt="tiktok icon" class="icon"></a></li>
                        <li><a href="https://discord.com/invite/nvG2UynZ3Q" target="_blank"><img src="{{ url('./assets/icon/discord_icon.png') }}" alt="discord icon" class="icon"></a></li>
                    </ul>
                    <div class="signature">
                        <a href="" target="_blank">
                            <p>Diseño web</p>
                            <img src="{{ url('./assets/icon/mb_signature.png') }}" alt="firma del desarrollador matías black">
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>