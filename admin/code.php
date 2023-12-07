<?php

require '../config/function.php';

if(isset($_POST['saveUser'])) {
    
    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $role = validate($_POST['role']);
    $is_ban = validate($_POST['is_ban']) == true ? 1:0;

    if($name != '' || $email != '' || $phone != '' || $password != '') {

        $query = "INSERT INTO users (name,phone,email,password,is_ban,role) VALUES ('$name','$phone','$email','$password','$is_ban','$role')";

        $result = mysqli_query($conn, $query);
        if($result) {
            redirect('users.php','User/Admin Agregado Exitosamente.');
        } else {
            redirect('users-create.php','Algo salio mal.');
        }



    } else {

        redirect('users-create.php','Por favor complete todos los campos de entrada.');

    }




}

?>