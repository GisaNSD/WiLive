<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WiLive</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://kit.fontawesome.com/b1ccc03917.js" crossorigin="anonymous"></script>
</head>
<body>

<header class="homeHeader">

    <a href= "{{route('home')}}">
        <img class="logo" src="/imagenes/Logo.png" alt="fondo">
    </a>

    <p>Desliza para ver el contenido</p>
    
    <a href="#vidaOnline">
        <i class="fas fa-arrow-circle-down downArrow"></i>
    </a>

</header>

<section id="vidaOnline">
    <h2>¿Qué quieres hacer?</h2>

    <ul>
        <a href="{{route('aprende')}}">
            <li class="options">APRENDE</li>
        </a>
        <a href="{{route('viaja')}}">
            <li class="options">VIAJA</li>
        </a>
        <a href="{{route('debate')}}">
            <li class="options">DEBATE</li>
        </a>
        <a href="{{route('come')}}">
            <li class="options">COME</li>
        </a>
    </ul>

</section>

<footer>
    <button id="help">TE AYUDAMOS</button>
    <p>Design with ❤ by echoteams</p>

    <nav class="mainMenu">
        <ul class="iconMenu">
            <a href="{{ route('home') }}"> 
                <li>
                    <i class="fas fa-home iconNav"></i>
                </li>
            </a>
            
            <li>
                <i class="fas fa-user"></i>
            </li>
        </ul>
    </nav> 
</footer>

</body>
</html>