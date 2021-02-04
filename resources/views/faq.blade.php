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


    <p class="sloganMobileFaq">Preguntas Frecuentes</p>
    <p class="descriptiveTextMobileFaq"><b>¿Cómo puedo acceder a una sala?</b> <br>
    Tan solo accede a una de las categorías disponibles en la Home de WiLive y accede a la sala que quieras. Recuerda que tendrás que crearte una cuenta antes de acceder.
</p>

<p class="descriptiveTextMobileFaq"><b>¿Puedo crear yo una sala?</b> <br>
    Sí! Una vez dentro de la categoría que te interese, clicka en el botón 'Crear Sala', podrás crear tus propios streamings temáticos!
</p>

<p class="descriptiveTextMobileFaq"><b>¿Tengo que tener cuenta para poder acceder a las salas?</b> <br>
    Si, debes crearte una cuenta para poder acceder y crear salas.
</p><br>


</header>



<footer>

    <p class="copyRightFaq">Design with <span class="heart">❤</span> by echoteam</p>
    <nav class="mainMenu">
        <ul class="iconMenu">
            <a href="{{ route('home') }}">
                <li class="liMainMenu">
                    <i class="fas fa-home iconNav"></i>
                    <p class="iconText">Inicio</p>
                </li>
            </a>

        @if(auth()->user() == null)
            <a href="{{ route('login') }}">   
                <li class="liMainMenu">
                    <i class="fas fa-user iconNav"></i>
                    <p class="iconText">Login</p>
                </li>
            </a> 
        @else
        <a href="{{ route('user.show', auth()->user() )}}">   
                <li class="liMainMenu">
                    <i class="fas fa-user iconNav"></i>
                    <p class="iconText">Perfil</p>
                </li>
            </a>
        @endif
        </ul>
    </nav>
</footer>

</body>
</html>
