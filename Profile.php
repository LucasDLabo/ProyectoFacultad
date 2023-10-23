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
        <?php
            echo "<p>ID de usuario: {$_SESSION['id_usuario']} </p>"; 
            echo "<p>Nombre de Usuario: {$_SESSION['usuario']} </p>"; 
        ?>
    </main>
</body>
</html>