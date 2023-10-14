<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Catalogo</title>
</head>
<body>
    <header>
        <nav>
            <div class="boxNav" style="background-color: black;">
                <a href="index.php"><h1>AlbumPicker</h1></a>
                <div class="rutas">
                    <ul>
                        <li><a href="" style="background-color: #015A76;">CATALOGO</a></li>
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
                        <!-- <li><a href="LoginPage.php">Iniciar Sesión</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <main>
        <div class="boxPages">
            <button id="back"><</button>
            <button>1</button>
            <button>2</button>
            <button>3</button>
            <button id="next">></button>
        </div>
        <!-- Toda la pagina 1 -->
        <section class="contenido_page1">
            <!-- Box Album -->
            <div class="boxAlbums">
                <h3 class="boxAlbumsTitles">Artic Monkeys</h3>
                <!-- Tarjeta Individual (AM) -->
                <div class="tarjeta" >
                    <!-- 1ra Seccion de la tarjeta -->
                    <div class="tarjetaPortada" >
                        <img src="img/Catalogo/album am.jpg" alt="">
                        <h4>AM</h4>
                        <button>▼</button>
                        <hr>
                        <!-- Descripción de la tarjeta -->
                        <div class="tarjetaDescrip">
                            <p id="slide1">
                                Es el quinto álbum de estudio de la banda inglesa de Indie Rock, Arctic Monkeys. 
                                Fue lanzado el 9 de septiembre de 2013, bajo el sello Domino Records.
                            </p>
                            <p>
                                Comercialmente, AM se ha convertido en el álbum más exitoso de Arctic Monkeys hasta la fecha, 
                                encabezó las listas en varios países, y llegó a las diez primeras posiciones en muchos más.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta con Links y Like -->
                <div class="tarjetaLike" style="grid-column-start: 1; grid-row-start: 3;">
                    <iframe 
                        style="border-radius:12px " 
                        src="https://open.spotify.com/embed/track/5FVd6KXrgO9B3JPmC8OPst?utm_source=generator&theme=0" 
                        width="100%" 
                        height="160" 
                        frameBorder="0" 
                        allowfullscreen="" 
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" 
                        loading="lazy">
                    </iframe>
                    <hr>
                    <div class="albumLinks">
                        <p>Escucha este album tambien en:</p>
                        <a href="" title="Youtube Music"><img src="img/Catalogo/Links/ytmusiclightbold.png" alt=""></a>
                        <a href="" title="Apple Music"><img src="img/Catalogo/Links/applemusiclightbold.png" alt=""></a>
                        <a href="" title="Deezer"><img src="img/Catalogo/Links/deezerlight.png" alt=""></a>
                        <a href="" title="Tidal"><img src="img/Catalogo/Links/tidallightbold.png" alt=""></a>
                    </div>
                    <hr>
                    <button><3</button>
                </div>

                <!-- Tarjeta Individual (Favourite Worst Nightmare) -->
                <div class="tarjeta" >
                    <!-- 1ra Seccion de la tarjeta -->
                    <div class="tarjetaPortada" >
                        <img src="img/Catalogo/album fav.jpg" alt="">
                        <h4>Favourite Worst Nightmare</h4>
                        <button>▼</button>
                        <hr>
                        <!-- Descripción de la tarjeta -->
                        <div class="tarjetaDescrip">
                            <p id="slide1">
                                Es el segundo álbum de estudio de Arctic Monkeys. 
                                Fue lanzado por primera vez en Japón el 18 de abril de 2007
                                y grabado en Miloco Studios con productores como James Ford y Mike Crossey.
                            </p>
                            <p>
                                En su primera semana, el álbum vendió más de 200.000 copias.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta con Links y Like -->
                <div class="tarjetaLike" style="grid-column-start: 2; grid-row-start: 3;">
                    <iframe 
                        style="border-radius:12px " 
                        src="https://open.spotify.com/embed/track/0BxE4FqsDD1Ot4YuBXwAPp?utm_source=generator&theme=0" 
                        width="100%" 
                        height="160" 
                        frameBorder="0" 
                        allowfullscreen="" 
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" 
                        loading="lazy">
                    </iframe>
                    <hr>
                    <div class="albumLinks">
                        <p>Escucha este album tambien en:</p>
                        <a href="" title="Youtube Music"><img src="img/Catalogo/Links/ytmusiclightbold.png" alt=""></a>
                        <a href="" title="Apple Music"><img src="img/Catalogo/Links/applemusiclightbold.png" alt=""></a>
                        <a href="" title="Deezer"><img src="img/Catalogo/Links/deezerlight.png" alt=""></a>
                        <a href="" title="Tidal"><img src="img/Catalogo/Links/tidallightbold.png" alt=""></a>
                    </div>
                    <hr>
                    <button><3</button>
                </div>

                <!-- Tarjeta Individual (Tranquility Base Hotel & Casino) -->
                <div class="tarjeta" >
                    <!-- 1ra Seccion de la tarjeta -->
                    <div class="tarjetaPortada" >
                        <img src="img/Catalogo/album tranq.jpg" alt="">
                        <h4>Tranquility Base Hotel & Casino</h4>
                        <button>▼</button>
                        <hr>
                        <!-- Descripción de la tarjeta -->
                        <div class="tarjetaDescrip">
                            <p id="slide1">
                                Es el sexto álbum de estudio de la banda de rock inglesa Arctic Monkeys, 
                                lanzado el 11 de mayo de 2018 por Domino Records.
                            </p>
                            <p>
                                El disco sería completamente compuesto en 2016 por el vocalista de la banda, 
                                Alex Turner, en un piano Steinway Vertegrand en su casa de Los Ángeles, 
                                siendo producido un año más tarde por él mismo y James Ford, 
                                entre las ciudades de Los Ángeles, París y Londres.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta con Links y Like -->
                <div class="tarjetaLike" style="grid-column-start: 3; grid-row-start: 3;">
                    <iframe 
                        style="border-radius:12px " 
                        src="https://open.spotify.com/embed/track/5Z5nbOXhsSbySVC7WUc6y9?utm_source=generator&theme=0" 
                        width="100%" 
                        height="160" 
                        frameBorder="0" 
                        allowfullscreen="" 
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" 
                        loading="lazy">
                    </iframe>
                    <hr>
                    <div class="albumLinks">
                        <p>Escucha este album tambien en:</p>
                        <a href="" title="Youtube Music"><img src="img/Catalogo/Links/ytmusiclightbold.png" alt=""></a>
                        <a href="" title="Apple Music"><img src="img/Catalogo/Links/applemusiclightbold.png" alt=""></a>
                        <a href="" title="Deezer"><img src="img/Catalogo/Links/deezerlight.png" alt=""></a>
                        <a href="" title="Tidal"><img src="img/Catalogo/Links/tidallightbold.png" alt=""></a>
                    </div>
                    <hr>
                    <button><3</button>
                </div>

                <!-- Tarjeta Individual (Humbug) -->
                <div class="tarjeta" >
                    <!-- 1ra Seccion de la tarjeta -->
                    <div class="tarjetaPortada" >
                        <img src="img/Catalogo/album humbug.jpg" alt="">
                        <h4>Humbug</h4>
                        <button>▼</button>
                        <hr>
                        <!-- Descripción de la tarjeta -->
                        <div class="tarjetaDescrip">
                            <p id="slide1">
                                Es el tercer álbum de estudio de la banda inglesa de indie rock Arctic Monkeys 
                                lanzado el 19 de agosto de 2009 por Domino Records.
                            </p>
                            <p>
                                La banda comenzó a escribir canciones para el álbum a partir del verano de 2008, 
                                y lo terminó completamente en primavera del 2009.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta con Links y Like -->
                <div class="tarjetaLike" style="grid-column-start: 4; grid-row-start: 3;">
                    <iframe 
                        style="border-radius:12px " 
                        src="https://open.spotify.com/embed/track/6wVWJl64yoTzU27EI8ep20?utm_source=generator&theme=0" 
                        width="100%" 
                        height="160" 
                        frameBorder="0" 
                        allowfullscreen="" 
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" 
                        loading="lazy">
                    </iframe>
                    <hr>
                    <div class="albumLinks">
                        <p>Escucha este album tambien en:</p>
                        <a href="" title="Youtube Music"><img src="img/Catalogo/Links/ytmusiclightbold.png" alt=""></a>
                        <a href="" title="Apple Music"><img src="img/Catalogo/Links/applemusiclightbold.png" alt=""></a>
                        <a href="" title="Deezer"><img src="img/Catalogo/Links/deezerlight.png" alt=""></a>
                        <a href="" title="Tidal"><img src="img/Catalogo/Links/tidallightbold.png" alt=""></a>
                    </div>
                    <hr>
                    <button><3</button>
                </div>
            </div>
        </section>
        <div class="boxPages">
            <button id="back"><</button>
            <button>1</button>
            <button>2</button>
            <button>3</button>
            <button id="next">></button>
        </div>
    </main>
</body>
</html>