<?php
//CONEXION
$server = "localhost";
$user = "root";
$pass = "";
$db = "plantilla";
$conn = mysqli_connect($server,$user,$pass,$db);
if(!$conn){
    die("La conexion fallo: ". mysqli_connect_error());
}else{
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $existencia = $_POST['existencia'];

    $sql = "INSERT INTO productos (nombre, descripcion,precio,existencia)
    VALUE ('". $nombre ."','". $descripcion ."', '". $precio ."',
    '". $existencia ."')";

    if(mysqli_query($conn, $sql)){
        header("Location: ../index.php");
    }else{
        echo "Error: " . mysqli_error($conn);
    }
}
?>