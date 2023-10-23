<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Mi perfil | AlbumPicker</title>
</head>
<body>
    <?php
    session_start();
    include "php/conexion.php";
    ?>
    <header>
        <nav>
            <div class="boxNav">
                <a href="index.php"><h1>AlbumPicker</h1></a>
                <?php
                echo "<div class=user>
                        <p >
                        Bienvenido a tu perfil, {$_SESSION['usuario']} 
                        </p>
                    </div>";
                ?>
                <div class="rutas">
                    <ul>
                        <li><a href="catalogo.php">CATALOGO</a></li>
                        <li><a href="php/cerrarSesion.php">Cerrar Sesión</a></li>
                    </ul>
                    
                </div>
            </div>
            
        </nav>
    </header>
    <main>
        <div class="build">
            <h2>Disculpe las molestias!</h2>
            <img src="img/Catalogo/Profile/SITIO-EN-CONSTRUCCION.jpg" alt="">
        </div>
        <?php
            // echo "<p>ID de usuario: {$_SESSION['id_usuario']} </p>"; 
            // echo "<p>Nombre de Usuario: {$_SESSION['usuario']} </p>"; 
        ?>
    </main>
    <footer class="boxSpam">
            <p>CREADO POR: <mark class="highlight2"><a href="https://github.com/LucasDLabo" target="_blank">LUCASDLABO</a></mark> - SIGUEME EN: <mark class="highlight2" ><a href="https://open.spotify.com/user/thelucksplaying?si=b8ae76c284314dd2" target="_blank">SPOTIFY</a></mark> 
                <br>
                LOS DATOS Y AUDIOS PROVIENEN DE SPOTIFY
            </p>
            <p>
                Explora las otras plataformas como: <br>
                <mark class="highlight2"><a href="https://tidal.com/" target="_blank">Tidal</a> </mark>
                /
                <mark class="highlight2"><a href="https://music.apple.com/us/listen-now?l=en-US" target="_blank">Apple Music</a>  </mark>
                /
                <mark class="highlight2"><a href="https://www.deezer.com/es/channels/explore/" target="_blank">DeeZEr </a> </mark>
                /
                <mark class="highlight2"><a href="https://music.youtube.com/" target="_blank">Youtube Music</a> </mark>
            </p>
        </footer>
</body>
</html>