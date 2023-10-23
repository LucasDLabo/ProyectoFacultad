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
            <button id="p1">1</button>
            <button id="p2">2</button>
            <button id="p3">3</button>
            <button id="next">></button>
        </div>
        <!-- Toda la pagina 1 -->
        <section id="contenido-page1">
            
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

            <div class="separador">
                <hr>
                <div></div>
                <hr>
            </div>

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

            <!-- ######### Tan Bionica ######### -->
            <div class="boxAlbums" style="background-color: none; color:none;">
                <h3 class="boxAlbumsTitles" style="background-color: #0d314b;">Tan Bionica</h3>
                <!-- #### 1er Tarjeta ####  -->
                <div class="tarjeta" style="background-color: #0d314b; grid-column-start:2;">
                    <!-- Portada -->
                    <div class="tarjetaPortada" >
                        <img style="border-color:rgb(236, 236, 236);" src="img/Catalogo/artistas/tanbionica/destinologia.jpeg" alt="" onclick="abrirImagen(this.src)">
                        <h4>Destinología</h4>
                        <button style="color:none;" >▼</button>
                        <hr>
                        <!-- Descripción -->
                        <div class="tarjetaDescrip">
                            <p>
                            Destinología es el tercer álbum de estudio del grupo musical argentino Tan Biónica. 
                            Fue lanzado a la venta el 20 de mayo de 2013. 
                            Fue grabado entre 2012 y 2013, siendo masterizado por Sterling Sounds 
                            en la ciudad de Nueva York.
                            </p>
                            <p>
                            Para la promoción de Destinología, Tan Biónica llevó adelante el Tour Destinológico, una gira de alrededor de sesenta conciertos que fue llevando a la banda a diversos puntos de la República Argentina y Uruguay.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- Tarjeta con Links y Like -->
                <div class="tarjetaLike" style="grid-column-start: 2; grid-row-start: 3; background-color:#0d314b;">
                    <iframe 
                        style="border-radius:12px " 
                        src="https://open.spotify.com/embed/track/29Bjl63rfik8188v8J08hQ?utm_source=generator&theme=0" 
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
                        <a href="https://music.youtube.com/playlist?list=OLAK5uy_nj9CV9skUd9GHTY2krCscnSQ0RdWgqDSI&si=K8Yhf78-lynLkttr" target="_blank" title="Youtube Music"><img src="img/Catalogo/Links/ytmusiclightbold.png" alt=""></a>
                        <a href="https://music.apple.com/us/album/destinologia/1600329146" target="_blank" title="Apple Music"><img src="img/Catalogo/Links/applemusiclightbold.png" alt=""></a>
                        <a href="https://deezer.page.link/6p8Utgz39Q16omKq5" target="_blank" title="Deezer"><img src="img/Catalogo/Links/deezerlight.png" alt=""></a>
                        <a href="https://tidal.com/browse/album/209155763" target="_blank" title="Tidal"><img src="img/Catalogo/Links/tidallightbold.png" alt=""></a>
                    </div>
                    <hr>

                    <button>Like</button>
                </div>

                <!-- #### 2da Tarjeta ####  -->
                <div class="tarjeta" style="background-color: #0d314b;">
                    <!-- Portada -->
                    <div class="tarjetaPortada" >
                        <img style="border-color:rgb(236, 236, 236);" src="img/Catalogo/artistas/tanbionica/obsesionario.jpeg" alt="" onclick="abrirImagen(this.src)">
                        <h4>Obsesionario</h4>
                        <button style="color:none;">▼</button>
                        <hr>
                        <!-- Descripción -->
                        <div class="tarjetaDescrip">
                            <p>
                            Obsesionario es el segundo álbum de estudio del grupo musical argentino Tan Biónica, 
                            publicado en el año 2010.
                            </p>
                            <p>
                            Con los éxitos, el grupo musical llegó nuevamente a las listas de las radios más importantes del país, y alcanzó una fuerte rotación en los canales de música nacionales e internacionales.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta con Links y Like -->
                <div class="tarjetaLike" style="grid-column-start: 3; grid-row-start: 3; background-color:#0d314b;">
                    <iframe 
                        style="border-radius:12px "
                        src="https://open.spotify.com/embed/track/0oH7QF9L9fzDy6EFWlivCC?utm_source=generator&theme=0" 
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
                        <a href="https://music.youtube.com/playlist?list=OLAK5uy_m-t27BHBznS93UM1j1RVMeeSR4rO3ieAs&si=eWqABP5hYnuqSnho" target="_blank" title="Youtube Music"><img src="img/Catalogo/Links/ytmusiclightbold.png" alt=""></a>
                        <a href="https://music.apple.com/us/album/obsesionario/1600323788" target="_blank" title="Apple Music"><img src="img/Catalogo/Links/applemusiclightbold.png" alt=""></a>
                        <a href="https://deezer.page.link/JV6f4wn1CuqBWcTPA" target="_blank" title="Deezer"><img src="img/Catalogo/Links/deezerlight.png" alt=""></a>
                        <a href="https://tidal.com/browse/album/209155814" target="_blank" title="Tidal"><img src="img/Catalogo/Links/tidallightbold.png" alt=""></a>
                    </div>
                    <hr>
                    <button>Like</button>
                </div>

            </div>
            
        </section>
        <!-- Toda la pagina 2 -->
        <section id="contenido-page2" style="display: none;">
        <!-- ######### Cuarteto de Nos ######### -->
        <div class="boxAlbums" style="background-color: none; color:none; grid-template-columns: 1fr 1fr 1fr ;">
            <h3 class="boxAlbumsTitles" style="background-color: #00A9FF;">Cuarteto de Nos</h3>
            <!-- #### 1er Tarjeta ####  -->
            <div class="tarjeta" style="background-color: #00A9FF; width:270px; justify-self: center; ">
                <!-- Portada -->
                <div class="tarjetaPortada" >
                    <img style="border-color:white;" src="img/Catalogo/artistas/cuartetodenos/raro.jpeg" alt="" onclick="abrirImagen(this.src)">
                    <h4>Raro</h4>
                    <button style="color:none;" >▼</button>
                    <hr>
                    <!-- Descripción -->
                    <div class="tarjetaDescrip">
                        <p>
                            Raro es el undécimo álbum de la banda de rock uruguaya El Cuarteto de Nos. Fue producido por Juan Campodónico y lanzado a la venta el 20 de mayo de 2006 por Bizarro Records.
                        </p>
                        <p>
                            En este disco El Cuarteto de Nos muestra una faceta diferente de los discos anteriores. Se aleja de la predominancia de los chistes sexuales y personajes bizarros para experimentar con canciones con rimas complejas y con un sonido más roquero.
                        </p>
                    </div>
                </div>
            </div>
                <!-- Tarjeta con Links y Like -->
                <div class="tarjetaLike" style="grid-column-start: 1; grid-row-start: 3; background-color:#00A9FF; width:290px; justify-self: center;">
                    <iframe 
                        style="border-radius:12px " 
                        src="https://open.spotify.com/embed/track/3tUk2PzTp8KCIU4cxstJq1?utm_source=generator&theme=0" 
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
                        <a href="" target="_blank" title="Youtube Music"><img src="img/Catalogo/Links/ytmusiclightbold.png" alt=""></a>
                        <a href="" target="_blank" title="Apple Music"><img src="img/Catalogo/Links/applemusiclightbold.png" alt=""></a>
                        <a href="" target="_blank" title="Deezer"><img src="img/Catalogo/Links/deezerlight.png" alt=""></a>
                        <a href="" target="_blank" title="Tidal"><img src="img/Catalogo/Links/tidallightbold.png" alt=""></a>
                    </div>
                    <hr>

                    <button>Like</button>
                </div>

                <!-- #### 2da Tarjeta ####  -->
                <div class="tarjeta" style="background-color: #00A9FF;  width:270px; justify-self: center;">
                    <!-- Portada -->
                    <div class="tarjetaPortada" >
                        <img style="border-color:white;" src="img/Catalogo/artistas/cuartetodenos/porfiado.jpeg" alt="" onclick="abrirImagen(this.src)">
                        <h4>Porfiado</h4>
                        <button style="color:none;" >▼</button>
                        <hr>
                        <!-- Descripción -->
                        <div class="tarjetaDescrip">
                            <p>
                            Porfiado es el decimotercer álbum de estudio de la banda de rock uruguaya . Contiene doce canciones inéditas. Fue lanzado el 25 de abril de 2012 bajo el sello Warner Music.
                            </p>
                            <p>
                            El álbum se caracteriza por contener una amplia variedad de estilos y géneros musicales, al punto de que la revista Rolling Stone no pudo definirlo como un disco de género. Se destaca, sin embargo, la influencia general del hip hop en todo el disco.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- Tarjeta con Links y Like -->
                <div class="tarjetaLike" style="grid-column-start: 2; grid-row-start: 3; background-color:#00A9FF; width:290px; justify-self: center;">
                    <iframe 
                        style="border-radius:12px " 
                        src="https://open.spotify.com/embed/track/7xB3hSztVbX6xFvQqEGKud?utm_source=generator&theme=0" 
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
                        <a href="" target="_blank" title="Youtube Music"><img src="img/Catalogo/Links/ytmusiclightbold.png" alt=""></a>
                        <a href="" target="_blank" title="Apple Music"><img src="img/Catalogo/Links/applemusiclightbold.png" alt=""></a>
                        <a href="" target="_blank" title="Deezer"><img src="img/Catalogo/Links/deezerlight.png" alt=""></a>
                        <a href="" target="_blank" title="Tidal"><img src="img/Catalogo/Links/tidallightbold.png" alt=""></a>
                    </div>
                    <hr>

                    <button>Like</button>
                </div>

                <!-- #### 3er Tarjeta ####  -->
                <div class="tarjeta" style="background-color: #00A9FF;  width:270px; justify-self: center;">
                    <!-- Portada -->
                    <div class="tarjetaPortada" >
                        <img style="border-color:white;" src="img/Catalogo/artistas/cuartetodenos/jueves.jpeg" alt="" onclick="abrirImagen(this.src)">
                        <h4>Jueves</h4>
                        <button style="color:none;" >▼</button>
                        <hr>
                        <!-- Descripción -->
                        <div class="tarjetaDescrip">
                            <p>
                            Jueves es el decimosexto álbum de estudio de la banda, publicado el 16 de agosto de 2019 vía plataformas digitales, bajo el sello de Sony Music Argentina.
                            </p>
                            <p>
                            En el día del lanzamiento del álbum fue lanzado el sencillo y videoclip de "Mario Neta". El álbum fue presentado en Buenos Aires el 20 de septiembre del mismo año en el Luna Park, iniciando una gira por Latinoamérica.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- Tarjeta con Links y Like -->
                <div class="tarjetaLike" style="grid-column-start: 3; grid-row-start: 3; background-color:#00A9FF; width:290px; justify-self: center;">
                    <iframe 
                        style="border-radius:12px " 
                        src="https://open.spotify.com/embed/track/40va05AmHQ9G5cVVe1jxAc?utm_source=generator&theme=0" 
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
                        <a href="" target="_blank" title="Youtube Music"><img src="img/Catalogo/Links/ytmusiclightbold.png" alt=""></a>
                        <a href="" target="_blank" title="Apple Music"><img src="img/Catalogo/Links/applemusiclightbold.png" alt=""></a>
                        <a href="" target="_blank" title="Deezer"><img src="img/Catalogo/Links/deezerlight.png" alt=""></a>
                        <a href="" target="_blank" title="Tidal"><img src="img/Catalogo/Links/tidallightbold.png" alt=""></a>
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
        
        <!-- ######### Gustavo Cerati ######### -->
        <div class="boxAlbums" style="background-color: none; color:none;">
                <h3 class="boxAlbumsTitles" style="background-color: #005B41;">Gustavo Cerati</h3>
                <!-- #### 1er Tarjeta ####  -->
                <div class="tarjeta" style="background-color: #005B41;">
                    <!-- Portada -->
                    <div class="tarjetaPortada" >
                        <img style="border-color:#321E1E;" src="img/Catalogo/artistas/cerati/amoramarillo.jpeg" alt="" onclick="abrirImagen(this.src)">
                        <h4>Amor Amarillo</h4>
                        <button style="color:none;" >▼</button>
                        <hr>
                        <!-- Descripción -->
                        <div class="tarjetaDescrip">
                            <p>
                            Amor amarillo es el primer álbum de estudio solista de la carrera de Gustavo Cerati, realizado en el año 1993 (en plena etapa de fricción con Soda Stereo).
                            </p>
                            <p>
                            El álbum fue una sorpresa para los fanáticos del grupo musical por el hecho que era algo totalmente diferente a lo que venía haciendo y por el hecho de haberse ido a vivir fuera del país poniendo en pausa así la actividad del grupo que en ese momento no se encontraba disuelta.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- Tarjeta con Links y Like -->
                <div class="tarjetaLike" style="grid-column-start: 1; grid-row-start: 3; background-color:#005B41;">
                    <iframe 
                        style="border-radius:12px " 
                        src="https://open.spotify.com/embed/track/0HX8RMVq75HxkY29P0mfWn?utm_source=generator&theme=0" 
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
                        <a href="" target="_blank" title="Youtube Music"><img src="img/Catalogo/Links/ytmusiclightbold.png" alt=""></a>
                        <a href="" target="_blank" title="Apple Music"><img src="img/Catalogo/Links/applemusiclightbold.png" alt=""></a>
                        <a href="" target="_blank" title="Deezer"><img src="img/Catalogo/Links/deezerlight.png" alt=""></a>
                        <a href="" target="_blank" title="Tidal"><img src="img/Catalogo/Links/tidallightbold.png" alt=""></a>
                    </div>
                    <hr>
                    <button>Like</button>
                </div>

                <!-- #### 2da Tarjeta ####  -->
                <div class="tarjeta" style="background-color: #005B41;">
                    <!-- Portada -->
                    <div class="tarjetaPortada" >
                        <img style="border-color:#321E1E;" src="img/Catalogo/artistas/cerati/bocanada.jpeg" alt="" onclick="abrirImagen(this.src)">
                        <h4>Bocanada</h4>
                        <button style="color:none;" >▼</button>
                        <hr>
                        <!-- Descripción -->
                        <div class="tarjetaDescrip">
                            <p>
                            Bocanada es el segundo álbum de estudio solista del músico argentino Gustavo Cerati, el primero luego de la disolución del grupo musical Soda Stereo.
                            </p>
                            <p>
                            Bocanada recibió elogios por la crítica especializada. David Cortés Arce describe el legado del álbum como "un álbum fundamental en la historia del rock iberoamericano, en general de todos los países de habla de hispana".
                            </p>

                        </div>
                    </div>
                </div>
                <!-- Tarjeta con Links y Like -->
                <div class="tarjetaLike" style="grid-column-start: 2; grid-row-start: 3; background-color:#005B41;">
                    <iframe 
                        style="border-radius:12px " 
                        src="https://open.spotify.com/embed/track/6gwaa6ElIixNTvu6RwkMyo?utm_source=generator&theme=0" 
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
                        <a href="" target="_blank" title="Youtube Music"><img src="img/Catalogo/Links/ytmusiclightbold.png" alt=""></a>
                        <a href="" target="_blank" title="Apple Music"><img src="img/Catalogo/Links/applemusiclightbold.png" alt=""></a>
                        <a href="" target="_blank" title="Deezer"><img src="img/Catalogo/Links/deezerlight.png" alt=""></a>
                        <a href="" target="_blank" title="Tidal"><img src="img/Catalogo/Links/tidallightbold.png" alt=""></a>
                    </div>
                    <hr>
                    <button>Like</button>
                </div>

                <!-- #### 3er Tarjeta ####  -->
                <div class="tarjeta" style="background-color: #005B41;">
                    <!-- Portada -->
                    <div class="tarjetaPortada" >
                        <img style="border-color:#321E1E;" src="img/Catalogo/artistas/cerati/ahivamos.jpeg" alt="" onclick="abrirImagen(this.src)">
                        <h4>Ahí Vamos</h4>
                        <button style="color:none;" >▼</button>
                        <hr>
                        <!-- Descripción -->
                        <div class="tarjetaDescrip">
                            <p>
                            Ahí vamos es el cuarto álbum de estudio como solista del músico artístico de Argentina Gustavo Cerati lanzado el 4 de abril de 2006 por Sony Music.
                            </p>
                            <p>
                            El disco fue certificado como platino en Argentina solo con las ventas anticipadas, y alcanzó el disco de oro en México. En este álbum, Cerati vuelve al estilo roquero y crudo que lo caracterizaba.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- Tarjeta con Links y Like -->
                <div class="tarjetaLike" style="grid-column-start: 3; grid-row-start: 3; background-color:#005B41;">
                    <iframe 
                        style="border-radius:12px " 
                        src="https://open.spotify.com/embed/track/3oqWr0jDWNXxWufNogGREp?utm_source=generator&theme=0" 
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
                        <a href="" target="_blank" title="Youtube Music"><img src="img/Catalogo/Links/ytmusiclightbold.png" alt=""></a>
                        <a href="" target="_blank" title="Apple Music"><img src="img/Catalogo/Links/applemusiclightbold.png" alt=""></a>
                        <a href="" target="_blank" title="Deezer"><img src="img/Catalogo/Links/deezerlight.png" alt=""></a>
                        <a href="" target="_blank" title="Tidal"><img src="img/Catalogo/Links/tidallightbold.png" alt=""></a>
                    </div>
                    <hr>
                    <button>Like</button>
                </div>

                <!-- #### 4ta Tarjeta ####  -->
                <div class="tarjeta" style="background-color: #005B41;">
                    <!-- Portada -->
                    <div class="tarjetaPortada" >
                        <img style="border-color:#321E1E;" src="img/Catalogo/artistas/cerati/fuerzanatural.jpg" alt="" onclick="abrirImagen(this.src)">
                        <h4>Fuerza Natural</h4>
                        <button style="color:none;" >▼</button>
                        <hr>
                        <!-- Descripción -->
                        <div class="tarjetaDescrip">
                            <p>
                            Fuerza natural es el quinto y último álbum de estudio de Gustavo Cerati en su etapa como solista, lanzado el 1 de septiembre de 2009.
                            </p>
                            <p>
                            El disco se caracteriza por un sonido folk con presencia de guitarras acústicas y mandolinas. Fue certificado con disco de oro en Argentina por vender más de 20 000 copias en su primera semana de lanzamiento, luego alcanzó el disco de platino.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- Tarjeta con Links y Like -->
                <div class="tarjetaLike" style="grid-column-start: 4; grid-row-start: 3; background-color:#005B41;">
                    <iframe 
                        style="border-radius:12px " 
                        src="https://open.spotify.com/embed/track/6WgUNHiMwJazeG4kWPAH1m?utm_source=generator&theme=0" 
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
                        <a href="" target="_blank" title="Youtube Music"><img src="img/Catalogo/Links/ytmusiclightbold.png" alt=""></a>
                        <a href="" target="_blank" title="Apple Music"><img src="img/Catalogo/Links/applemusiclightbold.png" alt=""></a>
                        <a href="" target="_blank" title="Deezer"><img src="img/Catalogo/Links/deezerlight.png" alt=""></a>
                        <a href="" target="_blank" title="Tidal"><img src="img/Catalogo/Links/tidallightbold.png" alt=""></a>
                    </div>
                    <hr>
                    <button>Like</button>
                </div>
        </div>

        
        </section>
        <!-- Toda la pagina 3 -->
        <section id="contenido-page3" style="display: none;">
            <p>pagina3</p>
        </section>
        
        <div class="boxPages">
            <button id="back"><</button>
            <button id="p1">1</button>
            <button id="p2">2</button>
            <button id="p3">3</button>
            <button id="next">></button>
        </div>
        
    </main>
    <script type="text/javascript" src="code.js"></script>
</body>


</html>