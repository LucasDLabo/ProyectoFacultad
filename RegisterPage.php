<!-- Commit "elimine index.HTML de la branch 
    + 
    Cambie el archivo RegisterPage.HTML por .PHP
    +
    Se creo una nueva carpeta php que contiene la conexion a la base
    +
    Se creo la función de registrarse en la página" -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Bienvenido! | Registrate en AlbumPicker</title>
</head>
<body>
    <?php
    
        include ("php/conexion.php");

        if(isset($_POST['registrar'])){
            $username = $_POST['name'];
            $email = $_POST['mail'];
            $pass = $_POST['password'];
        
            // Verificar que el email y el usuario sean unicos
            $verif_mail = mysqli_query($conexion,"SELECT email FROM usuarios WHERE email='$email'");
            $verif_users = mysqli_query($conexion,"SELECT username FROM usuarios WHERE username='$username'");
            if(mysqli_num_rows($verif_mail) !=0){
                echo "<p> Este Email ya esta en uso! </p>";
                echo "<a href='javascript:self.history.back()'><button>Volver</button></a>";
            }
            else{
                mysqli_query($conexion,"INSERT INTO usuarios(username,email,password) VALUES ('$username','$email','$pass')") or die("Ocurrio un error!");
                echo "<p> Se registro correctamente! </p>";
                header("location: Catalogo.php");
    
            }
        }
        else{

    ?>
    <header>
        <nav>
            <div class="dibujo2"></div>
            <div class="dibujo1"></div>
            <h2>BIENVENIDO!</h2>
        </nav>
    </header>

    <main>
        <div class="boxForm">
            <form action="" method="post" class="formulario" style="height: auto;">
                <div class="goback">
                    <a href="index.php" title="Volver"><img src="img/LoginPage/back.png" alt=""></a>
                    <div class="texto">
                        <p>POR FAVOR, INGRESE SUS DATOS</p>
                    </div>
                </div> 
                <div class="boxUser">
                    <img src="img/LoginPage/iconUser.png" alt="" title="Usuario">
                    <input type="text" name="name" >
                </div>
                <div class="boxUser">
                    <img src="img/LoginPage/iconMail.png" alt="" title="Correo Electrónico">
                    <input type="email" name="mail" id="">
                </div>
                <div class="boxUser">
                    <img src="img/LoginPage/iconPassword.png" alt="" title="Contraseña">
                    <input type="password" name="password" id="" >
                </div>
                <div class="formBotones">
                    <a href="LoginPage.php">¿YA TIENES UNA CUENTA? INICIA SESIÓN</a>
                    <input type="submit" name="registrar" value="REGISTRARME!" style="cursor: pointer;">
                </div>
            </form>
        </div>
    </main>
    <?php } ?>
</body>
</html>