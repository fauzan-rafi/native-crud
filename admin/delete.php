<?php 
session_start();

if(!isset($_SESSION['admin'])){

    header("Location: ../login.php");
}
include "../config.php";

$id = $_GET['id'];

mysqli_query($conn,
"DELETE FROM data WHERE id='$id' ");

header("Location: index.php");

?>