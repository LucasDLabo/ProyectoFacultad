<!-- Pasos para GIT
Git add .
Git Status
Git commit -m "comentario"
Git push -u origin master -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Home Page</title>
</head>
<body>
    <header class="header">
        <img src="img/HomePage/FondoHomePage.jpg" alt="" class="ImagenFondo">
        <nav style="height: auto;">
            <div class="boxNav">
                <!-- <h1 style="padding-left: 0.625rem;">AlbumPicker</h1> -->
                <div class="rutas">
                    <ul>
                        <li><a href="#bodyinfo">¿QUÉ ES ALBUMPICKER?</a></li>
                        <li><a href="Catalogo.php">CATALOGO</a></li>
                        <?php
                        include("php/conexion.php");
                        session_start();
                        // Si existe una sesion entonces...
                        if(isset($_SESSION['usuario'])){
                            echo '<li><a href="Profile.php">Mi perfil</a></li>';
                        }else{ 
                        // Si no existe...
                            echo '<li><a href="LoginPage.php">Iniciar Sesión</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="boxTitulos">
            <h2 class="title">ALBUMPICKER</h2>
            <h3 class="subtitle">ENCUENTRA TU PROXIMO ALBÚM FAVORITO</h3>
        </div>
        <div class="boxScroll">
            <a href="#bodyinfo"><img src="img/HomePage/iconScroll.png" alt=""></a>
            <p>SCROLL PARA VER</p>
        </div>
    </header>

    <main id="bodyinfo"> 
        <section class="mainWidth" >
            <div class="boxContent">
                <p class="bodyTitle">¿QUÉ ES <mark class="highlight">ALBUMPICKER</mark>?</p>
                <p class="descripcion">Es un pequeño proyecto orientado a la música y los albumes en general, en donde te permitimos mostrarte diferentes géneros musicales y respectivos albums para que puedas ESCUCHARLOS.</p>
            </div>
            <div class="separador">
                <hr>
                <div></div>
                <hr>
            </div>
            <div class="boxContent" >
                <p class="bodyTitle">NUESTRO <mark class="highlight">CATÁLOGO</mark></p>
                <p class="descripcion">Echa un vistazo al catálogo que tenemos para ofrecerte y descubre cual sera tu proximo albúm que no podras parar de escuchar</p>
                <a href="Catalogo.php">VER CATÁLOGO</a>
            </div>
            <div class="separador">
                <hr>
                <div></div>
                <hr>
            </div>     
        </section>

        <section class="boxRegister">
            <div class="registerText">
                <p>CREA TU CUENTA <br> Y GUARDA TUS <mark class="highlight2">ÁLBUMES ELEGIDOS!</mark></p>
                <?php
                        include("php/conexion.php");
                        // Si existe una sesion entonces...
                        if(isset($_SESSION['usuario'])){
                            echo '<a href="Catalogo.php">REGISTRATE AHORA</a>';
                        }else{ 
                        // Si no existe...
                            echo '<a href="RegisterPage.php">REGISTRATE AHORA</a>';
                        }
                        ?>
                <!-- <a href="RegisterPage.php">REGISTRATE AHORA</a> -->
            </div>
            <div class="registerImg">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="-15 6 15 15"><g transform="rotate(30 12 12)"><g fill="none"><circle cx="6" cy="18" r="3" fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/><circle cx="18" cy="17" r="3" fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/><path fill="currentColor" d="M21 3L9 6v4l12-3V3z"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 18v-8m12 7V7M9 10V6l12-3v4M9 10l12-3"/></g></g></svg>
            </div>
        </section>


        <footer class="boxSpam">
            <p>CREADO POR: <mark class="highlight2"><a href="https://www.instagram.com/lucas_del_labo/" target="_blank">@LUCAS.DELLABO</a></mark> - SIGUEME EN: <mark class="highlight2" ><a href="https://open.spotify.com/user/thelucksplaying?si=b8ae76c284314dd2" target="_blank">SPOTIFY</a></mark> 
                <br>
                LOS DATOS Y AUDIOS PROVIENEN DE SPOTIFY
            </p>
            <p>
                Explora las otras plataformas como: <br>
                <mark class="highlight2">Tidal </mark>
                /
                <mark class="highlight2">Apple Music </mark>
                /
                <mark class="highlight2">DeeZEr </mark>
                /
                <mark class="highlight2">Youtube Music</mark>
            </p>
        </footer>
    </main>
</body>
</html>