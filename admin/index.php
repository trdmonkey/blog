<?php 
$pageTitle = "Inicio • Panel";
include('includes/header.php'); 
?>

<div class="row">

    <div class="col-md-12">
        <?= alertMessage(); ?>
    </div>

    <div class="card-header">
        <h4>
            Gestión General
        </h4>
    </div>
    <div class="col-md-3 mb-4 text-center">
        <div class="card card-body p-3">
            <p class="text-sm mb-0 text-capitalize font-weight-bold">Usuarios Totales</p>
            <h5 class="font-weight-bolder mb-0">
                <?= getCount('users'); ?>
            </h5>
            <!-- <i class="fas fa-users fa-3x mt-3"></i> --> <!-- Icono de usuarios -->
            <i class="fa fa-street-view fa-3x mt-3" aria-hidden="true"></i>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card card-body p-3 text-center">
            <p class="text-sm mb-0 text-capitalize font-weight-bold">Servicios Totales</p>
            <h5 class="font-weight-bolder mb-0">
                <?= getCount('services'); ?>
            </h5>
            <i class="fa fa-shopping-bag fa-3x mt-3" aria-hidden="true"></i>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card card-body p-3 text-center">
            <p class="text-sm mb-0 text-capitalize font-weight-bold">Servicios Ocultos</p>
            <h5 class="font-weight-bolder mb-0">
                <?php
                $query = "SELECT * FROM services WHERE status='1'";
                $result = mysqli_query($conn, $query);
                $totalCount = mysqli_num_rows($result);
                echo $totalCount;
                ?>
            </h5>
            <i class="fa fa-eye-slash fa-3x mt-3" aria-hidden="true"></i>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card card-body p-3 text-center">
            <p class="text-sm mb-0 text-capitalize font-weight-bold">Redes Sociales Totales</p>
            <h5 class="font-weight-bolder mb-0">
                <?= getCount('social_medias'); ?>
            </h5>
            <i class="fa fa-thumbs-o-up fa-3x mt-3" aria-hidden="true"></i>
        </div>
    </div>
</div>

<div class="row">
    <div class="card-header">
        <h4>
            Gestión De Consultas
        </h4>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card card-body p-3 text-center">
            <p class="text-sm mb-0 text-capitalize font-weight-bold">Consultas Totales</p>
            <h5 class="font-weight-bolder mb-0">
                <?= getCount('enquires'); ?>
            </h5>
            <i class="fa fa-calendar fa-3x mt-3" aria-hidden="true"></i>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card card-body p-3 text-center">
            <p class="text-sm mb-0 text-capitalize font-weight-bold">Consultas Hoy</p>
            <h5 class="font-weight-bolder mb-0">
                <?php
                $todayDate = date('Y-m-d');
                // $today = DATE($todayDate);
                $query = "SELECT * FROM enquires WHERE DATE(created_at)='$todayDate'";
                $result = mysqli_query($conn, $query);
                $totalCount = mysqli_num_rows($result);
                echo $totalCount;
                ?>
            </h5>
            <i class="fa fa-calendar-plus-o fa-3x mt-3" aria-hidden="true"></i>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card card-body p-3 text-center">
            <p class="text-sm mb-0 text-capitalize font-weight-bold">Consultas Gestionadas</p>
            <h5 class="font-weight-bolder mb-0">
                <?php
                $todayDate = date('Y-m-d');
                // $today = DATE($todayDate);
                $query = "SELECT * FROM enquires WHERE status='Completado'";
                $result = mysqli_query($conn, $query);
                $totalCount = mysqli_num_rows($result);
                echo $totalCount;
                ?>
            </h5>
            <i class="fa fa-calendar-check-o fa-3x mt-3" aria-hidden="true"></i>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card card-body p-3 text-center">
            <p class="text-sm mb-0 text-capitalize font-weight-bold">Consultas Canceladas</p>
            <h5 class="font-weight-bolder mb-0">
                <?php
                $todayDate = date('Y-m-d');
                // $today = DATE($todayDate);
                $query = "SELECT * FROM enquires WHERE status='Cancelado'";
                $result = mysqli_query($conn, $query);
                $totalCount = mysqli_num_rows($result);
                echo $totalCount;
                ?>
            </h5>
            <i class="fa fa-calendar-times-o fa-3x mt-3" aria-hidden="true"></i>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>