<?php 
$pageTitle = "Social Media";
include('includes/header.php'); 
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Social Media
                    <a href="social-media-create.php" class="btn btn-primary float-end">Agregar Medios</a>
                </h4>
            </div>
            <div class="card-body">

                <?php alertMessage(); ?>

                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>URL</th>
                            <th>Estado</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        $socialMedias = getAll('social_medias');

                        if($socialMedias) {
                            if(mysqli_num_rows($socialMedias) > 0) {

                                foreach($socialMedias as $item) {
                                    ?>
                                    <tr>
                                        <td><?= $item['id']; ?></td>
                                        <td><?= $item['name']; ?></td>
                                        <td><?= $item['url']; ?></td>
                                        <td><?= $item['status'] == 1 ? 'Privado' : 'Activo' ; ?></td>
                                        <td>
                                            <a href="social-media-edit.php?id=<?= $item['id']; ?>" class="btn btn-success btn-sm">Editar</a>
                                            <a href="social-media-delete.php?id=<?= $item['id']; ?>" 
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
                                    <td colspan="5">Registros no encontrados.</td>
                                </tr>
                                <?php
    
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="5">Algo salio mal!</td>
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