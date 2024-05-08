<?php
    include 'conn.php';
    $email = $_POST['email'];
    $pswd = $_POST['pswd'];

    $query = "SELECT * FROM usuarios 
    WHERE 
    correo = '$email' AND password = '$pswd'";
    $result = mysqli_query($conn,$query);
    $consulta = mysqli_fetch_assoc($result);
    if($result){
        session_start();
        $_SESSION['user'] = $consulta['usuario'];
        $_SESSION ['correo'] = $email;
        header("Location:index.php");
    }

?>