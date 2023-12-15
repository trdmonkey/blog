<?php

require '../config/function.php';

if(isset($_SESSION['auth'])) {

    logoutSession();
    redirect('../login.php','Cierre de Sesión exitoso.');

}




?>