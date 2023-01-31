<?php
include 'connect.php';

if(isset($_POST['submit']))
{    
     $firstname = $_POST['firstName'];
     $lastname = $_POST['lastName'];
     $mobile = $_POST['phone'];
     $email = $_POST['email'];
     $sql = "INSERT INTO details (firstName,lastName,phone,email)
     VALUES ('$firstname','$lastname','$mobile','$email')";

     if (mysqli_query($conn, $sql)) {
        header('Location:viewAll.php');
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>