<?php 
include "conSQL.php"; 
if (isset($_POST['transaksi'])) 
{
    $id = $_POST['id'];
    $id_produk = $_POST['id_produk'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];
    $bayar = $_POST['bayar'];

    $bayar = $jumlah * $bayar;

    $query = "UPDATE transaksi SET jumlah = $jumlah, bayar = $bayar WHERE id_transaksi = $id";

    if(mysqli_query($con,$query)) 
    {
        echo "<script>document.location.href = '../checkout.php';</script>";
    } else{

        echo "<script>alert('Input tidak valid');document.location.href = '../landingUser.php';</script>";
    }
}
?>