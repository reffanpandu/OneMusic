<?php 
include "conSQL.php"; 
if (isset($_POST['register'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nomor = $_POST['nomor'];
    $alamat = $_POST['alamat'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirm-password'];

	if(strlen($password) >= 6 && strlen($password) <= 15)
	{
		if($confirmPassword == $password)
		{
            $query = "INSERT INTO regist (nama_lengkap, email, no_telp, alamat , username) VALUES ('$nama','$email','$nomor','$alamat','$username')"; 
            $query2 = "INSERT INTO user (id_guest, username, password, level) values ((SELECT max(id) from regist),'$username', '$password',2)";

            if(mysqli_query($con, $query) AND mysqli_query($con, $query2))
            {
                echo "<script>document.location.href = '../index.php#login';</script>";
            }
			else
			{
                echo "<script>alert('Input not valid');document.location.href = '../register.php';</script>";
           	}
		}
		else
		{
			echo "<script>alert('Confirmation Password is Wrong');document.location.href = '../register.php';</script>";
		}
	}
	else
	{
		echo "<script>alert('Minimal Password Character is 6');document.location.href = '../register.php';</script>";
	}
} 
else {
	echo "<script>alert('Register $nama Failed.');document.location.href = '../register.php';</script>";
}
?>