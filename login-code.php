<?php

require 'config/function.php';

if(isset($_POST['loginBtn'])) {

    $emailInput = validate($_POST['email']);
    $passwordInput = validate($_POST['password']);

    $email = filter_var($emailInput, FILTER_SANITIZE_EMAIL);
    $password = filter_var($passwordInput, FILTER_SANITIZE_STRING);

    if($email != '' && $password != '') {

        // $query = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
        $query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
        $result = mysqli_query($conn, $query);

        if($result) {

            if(mysqli_num_rows($result) == 1) {

                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                $hashedPassword = $row['password'];
                if(!password_verify($password, $hashedPassword)) {

                    redirect('login.php','Contraseña incorrecta.');

                }

                if($row['role'] == 'admin') {

                    if($row['is_ban'] == 1) {

                        redirect('login.php','Tu cuenta esta inactiva. Por favor contacta al administrador.');

                    }

                    $_SESSION['auth'] = true;
                    $_SESSION['loggedInUserRole'] = $row['role'];
                    $_SESSION['loggedInUser'] = [
                        'name' => $row['name'],
                        'email' => $row['email']
                    ];

                    redirect('admin/index.php','Inicio de sesión exitoso.');

                } else {

                    if($row['is_ban'] == 1) {

                        redirect('login.php','Tu cuenta esta inactiva. Por favor contacta al administrador.');

                    }

                    $_SESSION['auth'] = true;
                    $_SESSION['loggedInUserRole'] = $row['role'];
                    $_SESSION['loggedInUser'] = [
                        'name' => $row['name'],
                        'email' => $row['email']
                    ];

                    redirect('index.php','Inicio de sesión exitoso.');

                }
            } else {

                redirect('login.php','Email incorrecto.');

            }
        } else {

            redirect('login.php','Algo salio mal.');

        }
    } else {

        redirect('login.php','Todos los campos son obligatorios.');

    }
 
}

?>