<?php 
$pageTitle = "Servicios";
include('includes/header.php'); 
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Servicios
                    <a href="services-create.php" class="btn btn-primary float-end">Agregar Servicios</a>
                </h4>
            </div>
            <div class="card-body">

                <?php alertMessage(); ?>

                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Estado</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        $services = getAll('services');

                        if($services) {
                            if(mysqli_num_rows($services) > 0) {

                                foreach($services as $item) {
                                    ?>
                                    
                                    <tr>
                                        <td><?= $item['id']; ?></td>
                                        <td><?= $item['name']; ?></td>
                                        <td><?php 
                                        
                                            /* $item['status'] == 1 ? 'Privado' : 'Activo' ; */ 
                                            if($item['status'] == 1) {
                                                echo '<span class="badge bg-warning text-white">Privado</span>';
                                            } else {
                                                echo '<span class="badge badge-pill bg-info text-white">Visible</span>';
                                            }
                                        
                                        ?></td>
                                        <td>
                                            <a href="services-edit.php?id=<?= $item['id']; ?>" class="btn btn-success btn-sm">Editar</a>
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
    
                            } else {
    
                                ?>
                                <tr>
                                    <td colspan="4">Registros no encontrados.</td>
                                </tr>
                                <?php
    
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="4">Algo salio mal!</td>
                            </tr>
                            <?php
                        }

                        ?> 
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>



<?php include('includes/footer.php'); ?>