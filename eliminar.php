<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: acceso.php');
}
?>

<?php
//including the database connection file
include("conexion.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result=mysqli_query($mysqli, "DELETE FROM inventario WHERE id=$id");

//redirecting to the display page (vista.php in our case)
header("Location:vista.php");
?>

