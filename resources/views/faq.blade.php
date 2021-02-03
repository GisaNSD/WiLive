<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WiLive</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b1ccc03917.js" crossorigin="anonymous"></script>
</head>

<body>

<header class="homeHeaderFaq">

    <a href= "{{route('home')}}">
        <img class="logoFaq" src="/imagenes/Logo.svg" alt="wilive logo">
    </a>

    <p class="sloganMobile">Preguntas Frecuentes MOBILE</p>
    <p class="descriptiveTextMobile">Pregunta 1 mobile</p>


        <p class="sloganDesktop">Preguntas Frecuentes DESKTOP</p>
        <p class="descriptiveTextDesktop">Pregunta 1 desktop</p>






</header>



<footer>

    <p class="copyRight">Design with <span class="heart">❤</span> by echoteam</p>

    <nav class="mainMenu">
        <ul class="iconMenu">
            <a href="{{ route('home') }}">
                <li class="liMainMenu">
                    <i class="fas fa-home iconNav"></i>
                    <p class="iconText">Inicio</p>
                </li>
            </a>

            <a href="{{ route('perfil') }}">   
                <li class="liMainMenu">
                    <i class="fas fa-user iconNav"></i>
                    <p class="iconText">Perfil</p>
                </li>
            </a>
        </ul>
    </nav>
</footer>

</body>
</html>
