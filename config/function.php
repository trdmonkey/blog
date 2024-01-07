<?php

session_start();

require 'dbcon.php';

function validate($inputData) {

    global $conn;

    $validatedData = mysqli_real_escape_string($conn, $inputData);
    return trim($validatedData);

}

function webSetting($columnName) {

    $setting = getById('settings',1);
    if($setting['status'] == 200) {

        return $setting['data'][$columnName];

    }

}

function logoutSession() {
    unset($_SESSION['auth']);
    unset($_SESSION['loggedInUserRole']);
    unset($_SESSION['loggedInUser']);
}

function redirect($url, $status) {
    $_SESSION['status'] = $status;
    header('Location: '.$url);
    exit(0);
}

function getCount($tableName) {
    global $conn;

    $table = validate($tableName);
    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    $totalCount = mysqli_num_rows($result);

    return $totalCount;
}

function alertMessage() {

    if(isset($_SESSION['status'])) {
        echo '<div class="alert alert-success">
            <h6>'.$_SESSION['status'].'</h6>
        </div>';
        unset($_SESSION['status']);
    }

}

function checkParamId($paramType) {

    if(isset($_GET[$paramType])) {

        if($_GET[$paramType] != null) {

            return $_GET[$paramType];

        } else {
            return 'No hay datos en la base de datos.';
        }

    } else {
        return 'No hay datos.';
    }

}

function getAll($tableName) {
    global $conn;

    $table = validate($tableName);

    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    return $result;
}

function getById($tableName, $id) {

    global $conn;

    $table = validate($tableName);
    $id = validate($id);

    $query = "SELECT * FROM $table WHERE id='$id' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result) {

        if(mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $response = [
                'status' => 200,
                'message' => 'Datos Agregados.',
                'data' => $row
            ]; 
            return $response;

        } else {
        
            $response = [
                'status' => 404,
                'message' => 'Sin registro de datos.'
            ]; 
            return $response;

        }

    } else {

        $response = [
            'status' => 500,
            'message' => 'Algo salio mal!'
        ]; 
        return $response;

    }

}

function deleteQuery($tableName, $id) {

    global $conn;

    $table = validate($tableName);
    $id = validate($id);

    $query = "DELETE FROM $table WHERE id='$id' LIMIT 1";
    $result = mysqli_query($conn, $query);
    return $result;

}

/*  
    * funcion nueva para AGREGAR datos a la tabla USERS usando las funciones superglobales array_columns y array_values 
*/
function insert($tableName, $data) {

    global $conn;

    $table = validate($tableName);

    $columns = array_keys($data);
    $values = array_values($data);

    $finalColumns = implode(',',$columns);
    $finalValues = "'" . implode("','", $values) . "'";
    // return $finalValues;

    $query = "INSERT INTO $table ($finalColumns) VALUES ($finalValues)";
    $result = mysqli_query($conn, $query);
    return $result;

}

/*  
    * funcion nueva para ACTUALIZAR datos en la tabla USERS usando las funciones superglobales array_columns y array_values 
*/
function update($tableName, $id, $data) {

    global $conn;

    $table = validate($tableName);
    $id = validate($id);

    $updateColumnValuesData = "";
    foreach($data as $columns => $values) {

        $updateColumnValuesData .= $columns.'='."'$values', ";

    }

    $finalUpdateData = substr(trim($updateColumnValuesData),0,-1);

    $query = "UPDATE $table SET $finalUpdateData WHERE id='$id' LIMIT 1";
    $result = mysqli_query($conn, $query);
    return $result;

}






?> 