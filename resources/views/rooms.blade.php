<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WiLive</title>
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
    <script src="https://kit.fontawesome.com/b1ccc03917.js" crossorigin="anonymous"></script>

    <!-- update the version number as needed -->
    <script defer src="/__/firebase/7.13.1/firebase-app.js"></script>
    <!-- include only the Firebase features as you need -->
    <script defer src="/__/firebase/7.13.1/firebase-firestore.js"></script>
    <!-- initialize the SDK after all desired features are loaded -->
    <script defer src="/__/firebase/init.js"></script>

    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<h1 class="categoryTitle">SALA</h1>

<div class="buttons" id="buttons">
    <button class="mdc-button mdc-button--raised" id="cameraBtn">
        <span class="botonEntrarLlamada">Encender cámara</span>
    </button>
</div>
<div class="videosContainer" id="videos">
    <video class="localVideo" id="localVideo" muted autoplay playsinline></video>
    <video id="remoteVideo" autoplay playsinline></video>
</div>
<div class="mdc-dialog"
     id="room-dialog"
     role="alertdialog"
     aria-modal="true"
     aria-labelledby="my-dialog-title"
     aria-describedby="my-dialog-content">

<footer>
    <a href="{{'te-ayudamos'}}">
        <button id="help">Te ayudamos</button>
    </a>

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
<script src="js/app.js"></script>
</body>
</html>