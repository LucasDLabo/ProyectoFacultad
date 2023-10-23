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
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="FullImagen" id="ImagenCompleta">
            <img src="img/album am.jpg" alt="" id="ImagenSeleccionada">
            <div onclick="cerrarImagen()">X</div>
        </div>
        <div class="boxPages">
            <button id="back"><</button>
            <button>1</button>
            <button>2</button>
            <button>3</button>
            <button id="next">></button>
        </div>
        <!-- Toda la pagina 1 -->
        <section class="contenido_page1">
            <!-- ######### Artic Monkeys ######### -->
            <div class="boxAlbums">
                <h3 class="boxAlbumsTitles">Artic Monkeys</h3>
                <!-- Tarjeta Individual (AM) -->
                <div class="tarjeta" >
                    <!-- 1ra Seccion de la tarjeta -->
                    <div class="tarjetaPortada" >
                        <img src="img/Catalogo/album am.jpg" alt="" onclick="abrirImagen(this.src)">
                        <h4>AM</h4>
                        <button >▼</button>
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
                        <a href="https://music.youtube.com/playlist?list=OLAK5uy_nw2f8Y7rbxFKNaDHwD7LRi0nvPNcT_bB8&si=DQriS1u7Oqni-Tgx" target="_blank" title="Youtube Music"><img src="img/Catalogo/Links/ytmusiclightbold.png" alt=""></a>
                        <a href="https://music.apple.com/us/album/am/663097964" target="_blank" title="Apple Music"><img src="img/Catalogo/Links/applemusiclightbold.png" alt=""></a>
                        <a href="https://deezer.page.link/MdnKB2bwgkteXRBH9" target="_blank" title="Deezer"><img src="img/Catalogo/Links/deezerlight.png" alt=""></a>
                        <a href="https://tidal.com/browse/album/22248417" target="_blank" title="Tidal"><img src="img/Catalogo/Links/tidallightbold.png" alt=""></a>
                    </div>
                    <hr>

                    <button>Like</button>
                </div>

                <!-- Tarjeta Individual (Favourite Worst Nightmare) -->
                <div class="tarjeta" >
                    <!-- 1ra Seccion de la tarjeta -->
                    <div class="tarjetaPortada" >
                        <img src="img/Catalogo/album fav.jpg" alt="" onclick="abrirImagen(this.src)">
                        <h4>Favourite Worst Nightmare</h4>
                        <button>▼</button>
                        <hr>
                        <!-- Descripción de la tarjeta -->
                        <div class="tarjetaDescrip">
                            <p id="slide2">
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
                        <a href="https://music.youtube.com/playlist?list=OLAK5uy_nA-26T5qczv0yg9mBER9O-0hr5jMgwA6U&si=9QHbuaphHi-obpkI" target="_blank" title="Youtube Music"><img src="img/Catalogo/Links/ytmusiclightbold.png" alt=""></a>
                        <a href="https://music.apple.com/us/album/favourite-worst-nightmare/251499221" target="_blank" title="Apple Music"><img src="img/Catalogo/Links/applemusiclightbold.png" alt=""></a>
                        <a href="https://deezer.page.link/fY85TmqRVqZsbvF79" target="_blank" title="Deezer"><img src="img/Catalogo/Links/deezerlight.png" alt=""></a>
                        <a href="https://tidal.com/browse/album/14831202" target="_blank" title="Tidal"><img src="img/Catalogo/Links/tidallightbold.png" alt=""></a>
                    </div>
                    <hr>
                    <button>Like</button>
                </div>

                <!-- Tarjeta Individual (Tranquility Base Hotel & Casino) -->
                <div class="tarjeta" >
                    <!-- 1ra Seccion de la tarjeta -->
                    <div class="tarjetaPortada" >
                        <img src="img/Catalogo/album tranq.jpg" alt="" onclick="abrirImagen(this.src)">
                        <h4>Tranquility Base Hotel & Casino</h4>
                        <button>▼</button>
                        <hr>
                        <!-- Descripción de la tarjeta -->
                        <div class="tarjetaDescrip">
                            <p id="slide3">
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
                        <a href="https://music.youtube.com/playlist?list=OLAK5uy_kEN7-JfdfM-5WKhy67kHqJGsjJ29-_HaA&si=oGYqPOhvgvka_4c3" target="_blank" title="Youtube Music"><img src="img/Catalogo/Links/ytmusiclightbold.png" alt=""></a>
                        <a href="https://music.apple.com/us/album/tranquility-base-hotel-casino/1367926252" target="_blank" title="Apple Music"><img src="img/Catalogo/Links/applemusiclightbold.png" alt=""></a>
                        <a href="https://deezer.page.link/RTXh1hqASrQ86q4L6" target="_blank" title="Deezer"><img src="img/Catalogo/Links/deezerlight.png" alt=""></a>
                        <a href="https://tidal.com/browse/album/88607399" target="_blank" title="Tidal"><img src="img/Catalogo/Links/tidallightbold.png" alt=""></a>
                    </div>
                    <hr>
                    <button>Like</button>
                </div>

                <!-- Tarjeta Individual (Humbug) -->
                <div class="tarjeta" >
                    <!-- 1ra Seccion de la tarjeta -->
                    <div class="tarjetaPortada" >
                        <img src="img/Catalogo/album humbug.jpg" alt="" onclick="abrirImagen(this.src)">
                        <h4>Humbug</h4>
                        <button>▼</button>
                        <hr>
                        <!-- Descripción de la tarjeta -->
                        <div class="tarjetaDescrip">
                            <p id="slide4">
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
                        <a href="https://music.youtube.com/playlist?list=OLAK5uy_klGxXrtV_v6JUroDbTMcLf_Iy-Tlq1klI&si=J5Xp8Q15O0cw99Xn" target="_blank" title="Youtube Music"><img src="img/Catalogo/Links/ytmusiclightbold.png" alt=""></a>
                        <a href="https://music.apple.com/us/album/humbug-bonus-track-version/330283015" target="_blank" title="Apple Music"><img src="img/Catalogo/Links/applemusiclightbold.png" alt=""></a>
                        <a href="https://deezer.page.link/5qdF1rhkMnvbUtP58" target="_blank" title="Deezer"><img src="img/Catalogo/Links/deezerlight.png" alt=""></a>
                        <a href="https://tidal.com/browse/album/3745920" target="_blank" title="Tidal"><img src="img/Catalogo/Links/tidallightbold.png" alt=""></a>
                    </div>
                    <hr>
                    <button>Like</button>
                </div>
            </div>

            <div class="separador">
                <hr>
                <div></div>
                <hr>
            </div>

            <!-- ######### Daft Punk ######### -->
            <div class="boxAlbums" style="background-color: black; color:black;">
                <h3 class="boxAlbumsTitles" style="background-color: #ceccc8;">Daft Punk</h3>
                <!-- Tarjeta Individual  -->
                <div class="tarjeta" style="background-color: #ceccc8;">
                    <!-- 1ra Seccion de la tarjeta -->
                    <div class="tarjetaPortada" >
                        <img style="border-color:#fed42d;" src="img/Catalogo/artistas/daftpunk/homework.jpeg" alt="" onclick="abrirImagen(this.src)">
                        <h4>Homework</h4>
                        <button style="color:black;" >▼</button>
                        <hr>
                        <!-- Descripción de la tarjeta -->
                        <div class="tarjetaDescrip">
                            <p>
                                Homework es el álbum debut de estudio del dúo francés de música electrónica Daft Punk, 
                                lanzado el 20 de enero de 1997 por Virgin Records y Soma Quality Recordings. 
                            </p>
                            <p>
                                Como el primer proyecto del dúo en un sello importante, 
                                produjeron las pistas del álbum sin planes de lanzarlas, 
                                pero después de considerar inicialmente lanzarlas como sencillos separados, 
                                consideraron que el material era lo suficientemente bueno para un álbum.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta con Links y Like -->
                <div class="tarjetaLike" style="grid-column-start: 1; grid-row-start: 3; background-color:#ceccc8;">
                    <iframe 
                        style="border-radius:12px " 
                        src="https://open.spotify.com/embed/track/1pKYYY0dkg23sQQXi0Q5zN?utm_source=generator&theme=0" 
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
                        <a href="https://music.youtube.com/playlist?list=OLAK5uy_mfg6NA2Q6rWf2THgxCy4kLKAu7gSy0OrA&si=wvXeLgUHDDVl2oDZ" target="_blank" title="Youtube Music"><img src="img/Catalogo/Links/ytmusicbold.png" alt=""></a>
                        <a href="https://music.apple.com/us/album/homework/696884422" target="_blank" title="Apple Music"><img src="img/Catalogo/Links/applemusicbold.png" alt=""></a>
                        <a href="https://deezer.page.link/d8dCYakLzyXCkQuc7" target="_blank" title="Deezer"><img src="img/Catalogo/Links/deezerbold.png" alt=""></a>
                        <a href="https://tidal.com/browse/album/161010" target="_blank" title="Tidal"><img src="img/Catalogo/Links/tidalbold.png" alt=""></a>
                    </div>
                    <hr>

                    <button>Like</button>
                </div>

                <!-- Tarjeta Individual  -->
                <div class="tarjeta" style="background-color: #ceccc8;">
                    <!-- 1ra Seccion de la tarjeta -->
                    <div class="tarjetaPortada" >
                        <img style="border-color:#fed42d;" src="img/Catalogo/artistas/daftpunk/discovery.jpeg" alt="" onclick="abrirImagen(this.src)">
                        <h4>Discovery</h4>
                        <button style="color:black;">▼</button>
                        <hr>
                        <!-- Descripción de la tarjeta -->
                        <div class="tarjetaDescrip">
                            <p>
                                Discovery es el segundo álbum de estudio del dúo francés de música house Daft Punk, 
                                lanzado en marzo de 2001.
                            </p>
                            <p>
                                Marcó un cambio en el sonido desde el Chicago house, 
                                género por el que eran conocidos, al disco, post-disco y house inspirado en el synthpop.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta con Links y Like -->
                <div class="tarjetaLike" style="grid-column-start: 2; grid-row-start: 3; background-color:#ceccc8;">
                    <iframe 
                        style="border-radius:12px "
                        src="https://open.spotify.com/embed/track/1NeLwFETswx8Fzxl2AFl91?utm_source=generator&theme=0" 
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
                        <a href="https://music.youtube.com/playlist?list=OLAK5uy_mz6eafmqdRHSaR4IwG0ll6J6rgv0_ZpGw&si=HR_Ja22uNl2lR8FQ" target="_blank" title="Youtube Music"><img src="img/Catalogo/Links/ytmusicbold.png" alt=""></a>
                        <a href="https://music.apple.com/us/album/discovery/697194953" target="_blank" title="Apple Music"><img src="img/Catalogo/Links/applemusicbold.png" alt=""></a>
                        <a href="https://deezer.page.link/g573vab6RDKpmMQ6A" target="_blank" title="Deezer"><img src="img/Catalogo/Links/deezerbold.png" alt=""></a>
                        <a href="https://tidal.com/browse/album/1550545" target="_blank" title="Tidal"><img src="img/Catalogo/Links/tidalbold.png" alt=""></a>
                    </div>
                    <hr>
                    <button>Like</button>
                </div>

                <!-- Tarjeta Individual -->
                <div class="tarjeta" style="background-color: #ceccc8;">
                    <!-- 1ra Seccion de la tarjeta -->
                    <div class="tarjetaPortada" >
                        <img style="border-color:#fed42d;" src="img/Catalogo/artistas/daftpunk/human.jpeg" alt="" onclick="abrirImagen(this.src)">
                        <h4>Human After All</h4>
                        <button style="color:black;">▼</button>
                        <hr>
                        <!-- Descripción de la tarjeta -->
                        <div class="tarjetaDescrip">
                            <p>
                            Human After All es el tercer álbum de estudio del dúo francés de música electrónica Daft Punk,
                            lanzado el 14 de marzo de 2005. 
                            </p>
                            <p>
                            Con este álbum, Daft Punk aplica minimalismo y rock a su estilo musical de French house. 
                            Recibió críticas mixtas, resaltando su seis semanas de creación, 
                            que es particularmente corto comparado con sus álbumes anteriores Discovery y Homework.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- Tarjeta con Links y Like -->
                <div class="tarjetaLike" style="grid-column-start: 3; grid-row-start: 3;background-color:#ceccc8;">
                    <iframe 
                        style="border-radius:12px " 
                        src="https://open.spotify.com/embed/track/7LL40F6YdZgeiQ6en1c7Lk?utm_source=generator&theme=0" 
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
                        <a href="https://music.youtube.com/playlist?list=OLAK5uy_kyBLbpI5BRf2wHsxpI8MM_WwF3epmn7U0&si=5VngTBIqiG8zvG-i" title="Youtube Music"><img src="img/Catalogo/Links/ytmusicbold.png" alt=""></a>
                        <a href="https://music.apple.com/us/album/human-after-all/693748807" title="Apple Music"><img src="img/Catalogo/Links/applemusicbold.png" alt=""></a>
                        <a href="https://deezer.page.link/Kf9aEz8YMQLkY1kw5" title="Deezer"><img src="img/Catalogo/Links/deezerbold.png" alt=""></a>
                        <a href="https://tidal.com/browse/album/154502" title="Tidal"><img src="img/Catalogo/Links/tidalbold.png" alt=""></a>
                    </div>
                    <hr>
                    <button>Like</button>
                </div>

                <!-- Tarjeta Individual -->
                <div class="tarjeta" style="background-color: #ceccc8;">
                    <!-- 1ra Seccion de la tarjeta -->
                    <div class="tarjetaPortada" >
                        <img style="border-color:#fed42d;" src="img/Catalogo/artistas/daftpunk/ram.jpeg" alt="" onclick="abrirImagen(this.src)">
                        <h4>Random Access Memories</h4>
                        <button style="color:black;">▼</button>
                        <hr>
                        <!-- Descripción de la tarjeta -->
                        <div class="tarjetaDescrip">
                            <p >
                            Random Access Memories es el cuarto y último álbum de estudio del dúo francés Daft Punk. 
                            Se publicó oficialmente el 17 de mayo en Australia, el 20 de mayo en Reino Unido y el 21 de mayo de 2013 en Estados Unidos, bajo licencia de Daft Life.
                            </p>
                            <p>
                            Considerado su trabajo más exitoso, Random Access Memories rinde homenaje a la música estadounidense de la década de 1970 
                            y la primera parte de los 80s, particularmente al sonido de Los Ángeles durante esa época.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta con Links y Like -->
                <div class="tarjetaLike" style="grid-column-start: 4; grid-row-start: 3;background-color:#ceccc8;">
                    <iframe 
                        style="border-radius:12px " 
                        src="https://open.spotify.com/embed/track/69kOkLUCkxIZYexIgSG8rq?utm_source=generator&theme=0" 
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
                        <a href="https://music.youtube.com/playlist?list=OLAK5uy_kNhM2yaBTOVwrcZJepB1C9P3-n5_Sfy5c&si=74oqZgQus0LuzEIH" target="_blank" title="Youtube Music"><img src="img/Catalogo/Links/ytmusicbold.png" alt=""></a>
                        <a href="https://music.apple.com/us/album/random-access-memories/617154241" target="_blank" title="Apple Music"><img src="img/Catalogo/Links/applemusicbold.png" alt=""></a>
                        <a href="https://deezer.page.link/1ekN2KyiC65QTcDG6" target="_blank" title="Deezer"><img src="img/Catalogo/Links/deezerbold.png" alt=""></a>
                        <a href="https://tidal.com/browse/album/20115556" target="_blank" title="Tidal"><img src="img/Catalogo/Links/tidalbold.png" alt=""></a>
                    </div>
                    <hr>
                    <button>Like</button>
                </div>
            </div>

            
        </section>
        <!-- Toda la pagina 2 -->
        <section class="contenido_page2">
        
        </section>
        <!-- Toda la pagina 3 -->
        <section class="contenido_page3">

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
<script type="text/javascript" src="code.js"></script>

</html>