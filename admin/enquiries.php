<?php 
$pageTitle = "Consultas";
include('includes/header.php'); 
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">

                <div class="row">
                    <div class="col-md-3">
                        <h4>Consultas</h4>
                    </div>
                    <div class="col-md-8">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="date" name="date" required value="<?= isset($_GET['date']) == true ? $_GET['date'] : ''; ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <select name="status" required class="form-select">
                                        <option value="">Seleccione un estado</option>
                                        <option value="Pendiente" <?= isset($_GET['status']) == true ? ($_GET['status'] == 'Pendiente' ? 'selected' : '') : ''; ?> >Pendiente</option>
                                        <option value="Completado" <?= isset($_GET['status']) == true ? ($_GET['status'] == 'Completado' ? 'selected' : '') : ''; ?> >Completado</option>
                                        <option value="Cancelado" <?= isset($_GET['status']) == true ? ($_GET['status'] == 'Cancelado' ? 'selected' : '') : ''; ?> >Cancelado</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Buscar</button>
                                    <a href="enquiries.php" class="btn btn-secondary">Limpiar</a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                
            </div>
            <div class="card-body">

                <?php alertMessage(); ?>

                <?php

                // $enquires = getAll('enquires');

                if(isset($_GET['date']) && $_GET['date'] != '' && isset($_GET['status']) && $_GET['status'] != '') {

                    /* VAMOS A OBTENER LA CONSULTA FILTRADA POR ID DESC */
                    // $date = $_GET['date'] . ' ' . '00:00:00';
                    $date = validate($_GET['date']);
                    $status = validate($_GET['status']);

                    // En esta cadena el formato DATE() recupera solo la fecha sin la hora, para agregarlo al atributo created_at que es tipo datetime el cual contiene fecha y hora. 
                    $enquires = mysqli_query($conn, "SELECT * FROM enquires WHERE DATE(created_at)='$date' AND status='$status' ORDER BY id DESC");

                } else {

                    $enquires = mysqli_query($conn, "SELECT * FROM enquires ORDER BY id DESC");

                }

                if($enquires) {
                    if(mysqli_num_rows($enquires) > 0) {

                        ?>

                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Fecha</th>
                                    <th>Nombre</th>
                                    <th>Telefono</th>
                                    <th>Servicio</th>
                                    <th>Estado</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                        
                            <?php
                            
                            foreach($enquires as $item) {
                                ?>
                                
                                <tr>
                                    <td class="text-center"><?= $item['id']; ?></td>
                                    <td><?= $item['created_at']; ?></td>
                                    <td><?= $item['name']; ?></td>
                                    <td><?= $item['phone']; ?></td>
                                    <td><?= $item['service']; ?></td>
                                    
                                    <td><?php 
                                    
                                        /* $item['status'] == 1 ? 'Privado' : 'Activo' ; */ 
                                        if($item['status'] == 'Pendiente') {
                                            echo '<span class="badge bg-warning text-white">Pendiente</span>';
                                        } elseif($item['status'] == 'Completado') {
                                            echo '<span class="badge badge-pill bg-info text-white">Completado</span>';
                                        } else {
                                            echo '<span class="badge badge-pill bg-secondary text-white">Cancelado</span>';
                                        }
                                    
                                    ?></td>
                                    <td>
                                        <a href="enquires-view.php?id=<?= $item['id']; ?>" class="btn btn-success btn-sm">Ver</a>
                                        <a href="services-delete.php?id=<?= $item['id']; ?>" 
                                            class="btn btn-danger btn-sm mx-2" 
                                            onclick="return confirm('Esta seguro de eliminar este registro?')"
                                            >
                                            Eliminar
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                        <?php
    
                    } else {
                        echo "<h5>Registros no encontrados.</h5>";
                    }
                } else {
                    echo "<h5>Algo salio mal!</h5>";
                }

                ?>


            </div>
        </div>
    </div>
</div>



<?php include('includes/footer.php'); ?>