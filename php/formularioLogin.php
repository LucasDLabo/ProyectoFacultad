<?php

if (!empty($_POST["login"])){
    if (empty($_POST["name"]) and empty($_POST["password"])) {
        echo '<p class="completarLogin">Complete los campos</p>';
    } else {
        $username = mysqli_real_escape_string($conexion, $_POST['name']);
        $password = mysqli_real_escape_string($conexion, $_POST['password']);

        $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE username='$username' and password='$password'");
        if (mysqli_num_rows($validar_login)>0) {
            while($row=mysqli_fetch_array($validar_login)){
                session_start();
                // $_SESSION['usuario'] = $username;
                $_SESSION['usuario'] = $row['username'];
                $_SESSION['id_usuario'] = $row['id_usuario'];
                header("location: Catalogo.php");
            }
        } else {
            echo '<p class="errorLogin">Los datos ingresados son incorrectos</p>';
        }
        
    }
    
}

?>