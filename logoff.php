<?php

//Cerrar sesion
session_start();
session_destroy();
header("Location:login.php");
?>