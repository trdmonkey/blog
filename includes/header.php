<?php require 'config/function.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="admin/assets/img/logo-ct.png">

    <title>
        <?php if(isset($pageTitle)) { echo $pageTitle; }else{ echo 'Trdmonkey net'; } ?>
    </title>

    <!-- BOOTSTRAP CSS FILES -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- FONT AWESOME ICONS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


</head>
<body>

<?php include('navbar.php'); ?>
