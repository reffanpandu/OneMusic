<?php

    include "conSQL.php";

    $id = $_GET["id"];

    // $query = "DELETE FROM tb_barang WHERE id_barang = $idBarang";

    $query = "UPDATE komen SET flag = 0 WHERE id = $id";

    if (mysqli_query($con, $query)) {
        header("Location:../landingAdmin.php");
    } else {
        $error = urldecode("Data tidak berhasil di delete");
        header("Location:../landingAdmin.php?error=$error");
    }

    mysqli_close($con);

?>