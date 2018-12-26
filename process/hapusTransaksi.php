<?php
include 'conSQL.php';

$id_transaksi = $_GET["id"];

$query = "UPDATE transaksi 
    SET flag = 0
    WHERE id = $id_transaksi";
    
if (mysqli_query($con, $query)) {
    header("Location:../landingAdmin.php");
} else {
    $error = urldecode("Data tidak berhasil di delete" . mysqli_error($con));
    header("Location:../landingAdmin.php?error=$error");
}
	
mysqli_close($con); 
?>