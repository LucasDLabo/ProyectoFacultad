<?php
session_start();
include "php/conexion.php";

$album_id = mysqli_real_escape_string($conexion, $_POST['album_id']);
?>      