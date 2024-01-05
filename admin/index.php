<?php include('includes/header.php'); ?>

<div class="row">

    <div class="col-md-12">
        <?= alertMessage(); ?>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card card-body p-3">
            <p class="text-sm mb-0 text-capitalize font-weight-bold">Usuarios Totales</p>
            <h5 class="font-weight-bolder mb-0">
                <?= getCount('users'); ?>
            </h5>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card card-body p-3">
            <p class="text-sm mb-0 text-capitalize font-weight-bold">Servicios Totales</p>
            <h5 class="font-weight-bolder mb-0">
                <?= getCount('services'); ?>
            </h5>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card card-body p-3">
            <p class="text-sm mb-0 text-capitalize font-weight-bold">Redes Sociales Totales</p>
            <h5 class="font-weight-bolder mb-0">
                <?= getCount('social_medias'); ?>
            </h5>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3 mb-4">
        <div class="card card-body p-3">
            <p class="text-sm mb-0 text-capitalize font-weight-bold">Consultas Totales</p>
            <h5 class="font-weight-bolder mb-0">
                <?= getCount('enquires'); ?>
            </h5>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card card-body p-3">
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
        </div>
    </div>

    <div class="col-md-3 mb-4">
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
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>