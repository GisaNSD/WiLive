<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <title>WiLive</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://kit.fontawesome.com/b1ccc03917.js" crossorigin="anonymous"></script>
</head>
<body>

    <header class="categoryHeader" >
        <a href="{{route('home')}}">
            <i class="fas fa-arrow-circle-left downArrow"></i>
        </a>
        <h1 class="categoryTitle">APRENDE</h1>
    </header>


    <section class="options eventCard">
        
        <h5 class="eventTitle">Título evento</h5>
        <p class="numberCapacity">2/5<p>
        <button class="enterButton">Entrar</button>
    
    </section>
    
    <button class="buttonStyle">Crear Sala</button>
    <footer>
    <button id="help">TE AYUDAMOS</button>
    <p class="copyRight">Design with ❤ by echoteams</p>

<footer>
    <nav class="mainMenu">
        <ul class="iconMenu">
            <li>
            <a href="{{ route('home') }}">
                    <i class="fas fa-home iconNav"></i>
            </a>
            </li>
            <a href="{{ route('perfil') }}">
            <li>
                <i class="fas fa-user iconNav"></i>
            </li>
            </a>
        </ul>
    </nav> 
</footer>
    
</body>
</html>