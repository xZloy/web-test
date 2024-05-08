<?php

    include('conn.php');

    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $sexo = $_POST['sexo'];
    $estado_civil = $_POST['estado_civil'];
    $password = $_POST['password'];
    $sql = mysqli_query($conn,"INSERT INTO usuarios(id_user,usuario, correo, sexo, estado_civil,password) VALUES(0,'$usuario', '$correo', '$sexo', '$estado_civil', '$password')");
    //$result = mysqli_fetch_assoc($conn,$sql);

    header("Location: index.php");
?>