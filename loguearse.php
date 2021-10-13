<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

$data = $_POST;

$enlace = mysqli_connect("localhost", "root", "root", "backpotrero");

if (!$enlace) {

    echo "Error: No se pudo conectar a MySQL." .PHP_EOL;
    echo "error de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " .mysqli_connect_error() . PHP_EOL;
    exit;

}

$user = $data ['dni'];
$password = $data['password'];

$sql = "SELECT password FROM usuario WHERE dni = '$user'";
$result = mysqli_query($enlace,$sql);
$passwordEncoded = mysqli_fetch_row($result);

//$count = mysqli_num_rows($result);

if(password_verify($password, $passwordEncoded[0] )) {
    
    header( "refresh:0;url=bienvenido.php");

 }else{
    header("location: login.php?fallo=true");
  }



?>