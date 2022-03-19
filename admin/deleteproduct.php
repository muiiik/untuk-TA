<?php 
include '../dbconnect.php';
$idproduk = $_GET['idproduk'];
mysqli_query($conn, "DELETE FROM produk WHERE idproduk = $idproduk") or die(mysqli_error());
header('location:produk.php');
?>