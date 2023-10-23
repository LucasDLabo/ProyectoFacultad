<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Hola! | Inicia sesión en AlbumPicker</title>
</head>
<body>
    <?php
    
    include("php/conexion.php");         

    ?>
    <header>
        <nav>
            <div class="dibujo2"></div>
            <div class="dibujo1"></div>
            <h2>HOLA DE VUELTA!</h2>
        </nav>
    </header>
    <main>
        <div class="boxForm">
            <form action="" method="post" class="formulario">
                <div class="goback">
                <!-- onclick="history.back()" -->
                    <a href="index.php "><img src="img/LoginPage/back.png" alt=""  style="cursor: pointer;"></a>
                    <div class="texto">
                        <p>POR FAVOR, INGRESE SUS DATOS PARA INICIAR SESIÓN</p>
                    </div>
                </div>
                
                <div class="boxUser">
                    <img src="img/LoginPage/iconUser.png" alt="" title="Usuario">
                    <input type="text" name="name" placeholder="Ingrese su usuario..." title="Usuario">
                </div>
                <div class="boxUser">
                    <img src="img/LoginPage/iconPasswordR.png" alt="" title="Contraseña" >
                    <input type="password" name="password" id="" placeholder="Ingrese su contraseña..." title="Contraseña">
                </div>
                
                <?php
                
                include("php/formularioLogin.php");
                
                ?>

                <div class="formBotones">
                    <a href="RegisterPage.php">¿NO TIENES UNA CUENTA? CREA UNA</a>
                    <input type="submit" name="login" value="INICIAR SESIÓN" style="cursor: pointer;">
                </div>
    </main>
    <?php
    
    // }
    
    ?>
</body>
</html>