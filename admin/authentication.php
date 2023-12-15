<?php

if(isset($_SESSION['auth'])) {

    if(isset($_SESSION['loggedInUserRole'])) {

        $role = validate($_SESSION['loggedInUserRole']);
        $email = validate($_SESSION['loggedInUser']['email']);

        $query = "SELECT * FROM users WHERE email='$email' AND role='$role' LIMIT 1";
        $result = mysqli_query($conn, $query);

        if($result) {

            if(mysqli_num_rows($result) == 0) {

                logoutSession();
                redirect('../login.php','Acceso Denegado.');

            } else {

                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                if($row['role'] != 'admin') {

                    logoutSession();
                    redirect('../login.php','Acceso Denegado.');

                }

                if($row['is_ban'] == 1) {
                    
                    logoutSession();
                    redirect('../login.php','Tu cuenta esta inactiva. Por favor contacta al administrador.');

                }

            }
        } else {

            logoutSession();
            redirect('../login.php','Algo Salio Mal.');

        }
    }
} else {

    redirect('../login.php','Inicie Sesión para continuar...');

}

?>