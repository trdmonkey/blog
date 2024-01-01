<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Consultas
                </h4>
            </div>
            <div class="card-body">

                <?php alertMessage(); ?>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Servicio</th>
                            <th>Estado</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        $enquires = getAll('enquires');

                        if($enquires) {
                            if(mysqli_num_rows($enquires) > 0) {

                                foreach($enquires as $item) {
                                    ?>
                                    
                                    <tr>
                                        <td><?= $item['id']; ?></td>
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