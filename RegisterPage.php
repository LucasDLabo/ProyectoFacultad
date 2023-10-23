<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Bienvenido! | Registrate en AlbumPicker</title>
</head>
<body>
    <header>
        <nav>
            <div class="dibujo2"></div>
            <div class="dibujo1"></div>
            <h2>BIENVENIDO!</h2>
        </nav>
    </header>

    <main>
        <div class="boxForm" style="margin-top:2rem;;">
            <form action="" method="post" class="formulario" style="height: auto;">
                <div class="goback">
                <a href="index.php"><img src="img/LoginPage/back.png" alt="" style="cursor: pointer;"></a>
                    <div class="texto">
                        <p>POR FAVOR, INGRESE SUS DATOS PARA REGISTRARSE</p>
                    </div>
                </div> 
                <div class="boxUser">
                    <img src="img/LoginPage/iconUser.png" alt="" title="Usuario">
                    <input type="text" name="name" placeholder="Ingrese un usuario..." title="Usuario">
                </div>
                <div class="boxUser">
                    <img src="img/LoginPage/iconMail.png" alt="" title="Correo Electrónico">
                    <input type="email" name="mail" id="" placeholder="Ingrese un correo electrónico..." title="Correo Electrónico">
                </div>
                <div class="boxUser">
                    <img src="img/LoginPage/iconPasswordR.png" alt="" title="Contraseña">
                    <input type="password" name="password" id="" placeholder="Ingrese una contraseña..." title="Contraseña">
                </div>
                <?php
                
                include("php/formularioRegister.php");
                
                ?>
                <div class="formBotones">
                    <a href="LoginPage.php">¿YA TIENES UNA CUENTA? INICIA SESIÓN</a>
                    <input type="submit" name="registrar" value="REGISTRARME!" style="cursor: pointer;">
                </div>
            </form>
        </div>
    </main>

</body>
</html>