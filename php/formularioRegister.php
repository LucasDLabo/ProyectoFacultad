<?php
include ("php/conexion.php");

if(!empty($_POST['registrar'])){
    if (empty($_POST["name"]) and empty($_POST["mail"]) and empty($_POST["password"])) {
        echo '<p class="completarLogin2">Complete los campos</p>';
    } else {
        $username = $_POST['name'];
        $email = $_POST['mail'];
        $pass = $_POST['password'];
            // Verificar que el email y el usuario sean unicos
        $verif_mail = mysqli_query($conexion,"SELECT email FROM usuarios WHERE email='$email'");
        $verif_users = mysqli_query($conexion,"SELECT username FROM usuarios WHERE username='$username'");
            if(mysqli_num_rows($verif_mail) !=0){
                echo '<p class="errorLogin2"> Este correo ya esta en uso! </p>';
            }
            else{
                mysqli_query($conexion,"INSERT INTO usuarios(username,email,password) VALUES ('$username','$email','$pass')") or die("Ocurrio un error!");
                
                $username = mysqli_real_escape_string($conexion, $_POST['name']);
                $password = mysqli_real_escape_string($conexion, $_POST['password']);

                $validar_mail = mysqli_query($conexion, "SELECT * FROM usuarios WHERE username='$username' and password='$password'");
                if (mysqli_num_rows($validar_mail)>0) {
                    while($row=mysqli_fetch_array($validar_mail)){
                        session_start();
                        $_SESSION['usuario'] = $row['username'];
                        $_SESSION['id_usuario'] = $row['id_usuario'];
                        echo "<script>alert('Registrado Correctamente!'); window.location.href='\catalogo.php';</script>";
                    }
                }

            }
    }
    
}

?>