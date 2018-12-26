<?php 
include "conSQL.php"; 
if (isset($_POST['send'])) 
{
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $query = "INSERT INTO komen (nama, email, subject, message) VALUES ('$nama','$email','$subject','$message')";
        if(mysqli_query($con, $query))
        {
            echo "<script>document.location.href = '../landingUser.php';</script>";
        }
        else
        {
            echo "<script>alert('Input not valid');document.location.href = '../register.php';</script>";
        }
}
?>