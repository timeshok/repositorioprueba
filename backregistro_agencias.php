<?php


if(isset($_POST["registrar"]))
{
    $agencias= $_POST["agencias"];
    $codigo= $_POST["cod"];
    $direccion= $_POST["dir"]; 
}

if(strlen($agencias)>0 && strlen($codigo)>0 && strlen($direccion)>0)
{
    echo "todos los campos tienen valores validos <br>";
}

$con=mysqli_connect("localhost","root","","cardenas");
$sql="insert into agencias values ('','$agencias','$codigo','$direccion')";
echo $sql;
mysqli_query($con,$sql);
header("location:registro_agencias.php");
?>