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


    if(isset($_POST['login'])){
        $username = mysqli_real_escape_string($conexion, $_POST['name']);
        $password = mysqli_real_escape_string($conexion, $_POST['password']);


        $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE username='$username' and password='$password'");
        if(mysqli_num_rows($validar_login)>0){
            // $_SESSION['usuario'] = $username;
            // echo ("Entraste");
            header("location: Catalogo.php");
        }else{
            echo '<script>
                    alert("EL usuario no existe");
                    window.location = "index.php";
                </script>';
            }
        }

    else{
    
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
                    <a href="index.html" title="Volver"><img src="img/LoginPage/back.png" alt=""></a>
                    <div class="texto">
                        <p>POR FAVOR, INGRESE SUS DATOS</p>
                    </div>
                </div>
                
                <div class="boxUser">
                    <img src="img/LoginPage/iconUser.png" alt="" title="Usuario">
                    <input type="text" name="name" >
                </div>
                <div class="boxUser">
                    <img src="img/LoginPage/iconPassword.png" alt="" title="Contraseña">
                    <input type="password" name="password" id="" >
                </div>
                <div class="formBotones">
                    <a href="RegisterPage.php">¿NO TIENES UNA CUENTA? CREA UNA</a>
                    <input type="submit" name="login" value="INICIAR SESIÓN" style="cursor: pointer;">
                </div>
    </main>
    <?php
    }
    ?>
</body>
</html>