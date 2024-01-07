<?php

require '../config/function.php';

if(isset($_POST['saveUser'])) {
    
    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $role = validate($_POST['role']);
    $is_ban = isset($_POST['is_ban']) == true ? 1:0;

    if($name != '' || $email != '' || $phone != '' || $password != '') {

        // Aqui vamos a HASHEAR la contraseña usando BIG CRIPT
        $hachedPassword = password_hash($password, PASSWORD_ARGON2I); // PASSWORD_BCRYPT = 60 bits | PASSWORD_ARGON2I = 96 bits 

        $data = [
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'password' => $hachedPassword,
            'is_ban' => $is_ban,
            'role' => $role
        ];

        $result = insert('users', $data);
        // echo $result;
        
        // $result = mysqli_query($conn, $query);
        if($result) {
            redirect('users.php','User/Admin Agregado Exitosamente.');
        } else {
            redirect('users-create.php','Algo salio mal.');
        } 



    } else {

        redirect('users-create.php','Por favor complete todos los campos de entrada.');

    }

}

/*  
    * FUNCION PARA ACTUALIZAR USUARIOS
*/
if(isset($_POST['updateUser'])) {

    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $role = validate($_POST['role']);
    $is_ban = isset($_POST['is_ban']) == true ? 1:0;

    $userId = validate($_POST['userId']);
    $user = getById('users',$userId);

    if($user['status'] != 200) {
        redirect('users-edit.php?id='.$userId,'No se encontro la identiricación.');
    }

    if($name != '' || $email != '' || $phone != '' || $password != '') {

        $hachedPassword = password_hash($password, PASSWORD_ARGON2I);

        $data = [
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'password' => $hachedPassword,
            'is_ban' => $is_ban,
            'role' => $role
        ];
        $result = update('users', $userId, $data);
        // echo $result;

        /* $query = "UPDATE users SET 
            name='$name',
            phone='$phone',
            email='$email',
            password='$hachedPassword',
            is_ban='$is_ban',
            role='$role' 
            WHERE id='$userId'";

        $result = mysqli_query($conn, $query); */
        
        if($result) {
            redirect('users.php','User/Admin Actualizado Exitosamente.');
        } else {
            redirect('users-edit.php?id='.$userId,'Algo salio mal.');
        }



    } else {

        redirect('users-create.php','Por favor complete todos los campos de entrada.');

    }

}

/*  
    * FUNCION PARA GUARDAR CONFIGURACION
*/
if(isset($_POST['saveSetting'])) {

    $title = validate($_POST['title']);
    $slug = validate($_POST['slug']);
    $small_description = validate($_POST['small_description']);

    $meta_description = validate($_POST['meta_description']);
    $meta_keyword = validate($_POST['meta_keyword']);

    $email1 = validate($_POST['email1']);
    $email2 = validate($_POST['email2']);
    $phone1 = validate($_POST['phone1']);
    $phone2 = validate($_POST['phone2']);
    $address = validate($_POST['address']);

    $settingId = validate($_POST['settingId']);

    if($settingId == 'insert') {

        $query = "INSERT INTO settings (title,slug,small_description,meta_description,meta_keyword,email1,email2,phone1,phone2,address) 
            VALUES ('$title','$slug','$small_description','$meta_description','$meta_keyword','$email1','$email2','$phone1','$phone2','$address')";

        $result = mysqli_query($conn, $query);

    }

    if(is_numeric($settingId)) {

        $query = "UPDATE settings SET 
            title='$title', 
            slug='$slug', 
            small_description='$small_description', 
            meta_description='$meta_description', 
            meta_keyword='$meta_keyword', 
            email1='$email1', 
            email2='$email2', 
            phone1='$phone1', 
            phone2='$phone2', 
            address='$address' 
            WHERE id='$settingId'            
        ";
        $result = mysqli_query($conn, $query);
    }

    if($result) {
        redirect('settings.php','Ajustes guardados.');
    } else {
        redirect('settings.php','Algo salio mal!');
    }

}

/*  
    * FUNCION PARA GUARDAR REDES SOCIALES
*/
if(isset($_POST['saveSocialMedia'])) {
    
    $name = validate($_POST['name']);
    $url = validate($_POST['url']);
    $status = validate($_POST['status']) == true ? 1:0;

    if($name != '' || $url != '') {

        $query = "INSERT INTO social_medias (name,url,status) VALUES ('$name','$url','$status')";

        $result = mysqli_query($conn, $query);
        if($result) {
            redirect('social-media.php','Social Media Agregado Exitosamente.');
        } else {
            redirect('social-media-create.php','Algo salio mal.');
        }



    } else {

        redirect('social-media-create.php','Por favor complete todos los campos de entrada.');

    }

}

/*  
    * FUNCION PARA ACTULIZAR REDES SOCIALES
*/
if(isset($_POST['updateSocialMedia'])) {

    $name = validate($_POST['name']);
    $url = validate($_POST['url']);
    $status = validate($_POST['status']) == true ? 1:0;

    $socialMediaId = validate($_POST['socialMediaId']);
    if($name != '' || $url != '') {

        $query = "UPDATE social_medias SET name='$name', url='$url', status='$status' WHERE id='$socialMediaId' LIMIT 1";

        $result = mysqli_query($conn, $query);
        if($result) {
            redirect('social-media.php','Social Media Actualizado Exitosamente.');
        } else {
            redirect('social-media-edit.php?id='.$socialMediaId,'Algo salio mal!');
        }



    } else {

        redirect('social-media-edit.php?id='.$socialMediaId,'Por favor complete todos los campos de entrada.');

    }

}

if(isset($_POST['saveService'])) {
    $name = validate($_POST['name']);

    $slug = str_replace(' ', '-', strtolower($name));
    $small_description = validate($_POST['small_description']);
    $long_description = validate($_POST['long_description']);

    if($_FILES['image']['size'] > 0) {

        $image = $_FILES['image']['name'];

        $imgFileTypes = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        if($imgFileTypes != 'jpg' && $imgFileTypes != 'jpeg' && $imgFileTypes != 'png') {

            redirect('services.php','Lo sentimos, solo imagenes en formato .jpg o .jpeg o .png');

        }

        $path = "../assets/uploads/services/";
        $imgExt = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().'.'.$imgExt;

        $finalImage = 'assets/uploads/services/'.$filename;

    } else {
        $finalImage = NULL;
    }

    $meta_title = validate($_POST['meta_title']);
    $meta_description = validate($_POST['meta_description']);
    $meta_keyword = validate($_POST['meta_keyword']);

    $status = validate($_POST['status']) == true ? '1' : '0';

    $query = "INSERT INTO services (name, slug, small_description, long_description, image, meta_title, meta_description, meta_keyword, status) 
        VALUES ('$name','$slug','$small_description','$long_description','$finalImage','$meta_title','$meta_description','$meta_keyword','$status')";

    $result = mysqli_query($conn, $query);
    if($result) {

        if($_FILES['image']['size'] > 0) {
            move_uploaded_file($_FILES['image']['tmp_name'], $path.$filename);
        }
        redirect('services.php','Servicios Agregadoss Satisfactoriamente.');

    } else {
        redirect('services.php','Algo salio mal!');
    }
    
}

if(isset($_POST['updateService'])) {

    $serviceId = validate($_POST['serviceId']);
    $name = validate($_POST['name']);

    $slug = str_replace(' ', '-', strtolower($name));
    $small_description = validate($_POST['small_description']);
    $long_description = validate($_POST['long_description']);

    $service =getById('services',$serviceId);

    if($_FILES['image']['size'] > 0) {

        $image = $_FILES['image']['name'];

        $imgFileTypes = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        if($imgFileTypes != 'jpg' && $imgFileTypes != 'jpeg' && $imgFileTypes != 'png') {

            redirect('services.php','Lo sentimos, solo imagenes en formato .jpg o .jpeg o .png');

        }

        $path = "../assets/uploads/services/";
        $deleteImage = "../".$service['data']['image'];
        if(file_exists($deleteImage)) {
            unlink($deleteImage);
        }

        $imgExt = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().'.'.$imgExt;

        $finalImage = 'assets/uploads/services/'.$filename;

    } else {
        $finalImage = $service['data']['image'];
    }

    $meta_title = validate($_POST['meta_title']);
    $meta_description = validate($_POST['meta_description']);
    $meta_keyword = validate($_POST['meta_keyword']);

    $status = validate($_POST['status']) == true ? '1' : '0';

    $query = "UPDATE services SET 
        name='$name', 
        slug='$slug', 
        small_description='$small_description', 
        long_description='$long_description', 
        image='$finalImage', 
        meta_title='$meta_title', 
        meta_description='$meta_description', 
        meta_keyword='$meta_keyword', 
        status='$status' 
        WHERE id='$serviceId'";

    $result = mysqli_query($conn, $query);

    if($result) {

        if($_FILES['image']['size'] > 0) {
            move_uploaded_file($_FILES['image']['tmp_name'], $path.$filename);
        }
        redirect('services.php','Servicios Actualizados Satisfactoriamente.');

    } else {
        redirect('services-edit.php?id='.$serviceId,'Algo salio mal!');
    }

}

if(isset($_POST['updateEnquiryStatus'])) {

    $enquiryId = validate($_POST['enquiryId']);
    $status = validate($_POST['status']);

    $query = "UPDATE enquires SET status='$status' WHERE id='$enquiryId'";
    $result = mysqli_query($conn, $query);

    if($result){
        redirect('enquires-view.php?id='.$enquiryId,'Estado Actualizado!');
    } else {
        redirect('enquires-view.php?id='.$enquiryId,'Algo salio mal!');
    }


}




?>