<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_connect');

// get the post records

$Matricula = $_POST['Matricula'];
$Nom = $_POST['Nom'];
$ape = $_POST['ape'];
$Grup = $_POST['Grup'];
$email = $_POST['email'];
$pass = $_POST['pass'];

// database insert SQL code
$sql = "INSERT INTO `regis` (`Matricula`, `Nom`, `ape`, `Grup`, `email`, `pass`) VALUES ('$Matricula', '$Nom', '$ape', '$Grup', '$email', '$pass')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Gracias!";
}
}
else
{
	echo "No se registro nada";
	
}
?>