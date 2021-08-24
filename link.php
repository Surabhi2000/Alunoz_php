<?php
include "connection.php"; // Using database connection file here

if(isset($_POST['submit']))
{		
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['message'];

    $insert = mysqli_query($conn,"INSERT INTO `contact_info`(`Name`, `Email`, `Message`) VALUES ('$name','$email','$message')");
    
    if(!$insert)
    {
        echo mysqli_error($conn);
    }
    else
    {
        echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
    }
}

mysqli_close($conn); // Close connection
?>