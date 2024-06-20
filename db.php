<?php

//iniciar una sesión en la app que permite guardar un dato
session_start();

$conn = mysqli_connect(
    'localhost',//el servidor
    'root', //usuario
    '',//contraseña
    'php_crud_mysql'//nombre de la base de datos

);




?>