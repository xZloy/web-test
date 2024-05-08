<?php
    include 'conn.php';
    $email = $_POST['email'];
    $pswd = $_POST['pswd'];

    $query = "SELECT * FROM usuarios 
    WHERE 
    correo = '$email' AND password = '$pswd'";
    $result = mysqli_query($conn,$query);
    if($result){
        session_start();
        $_SESSION ['correo'] = $email;
        header("Location:index.php");
    }

?>