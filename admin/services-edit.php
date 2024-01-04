<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Editar Servicios
                    <a href="services.php" class="btn btn-danger float-end">Regresar</a>
                </h4>
            </div>
            <div class="card-body">

                <?php alertMessage(); ?>

                <form action="code.php" method="POST" enctype="multipart/form-data">

                    <?php
                    $paramResult = checkParamId('id');
                    if(!is_numeric($paramResult)) {
                        echo "<h5>".$paramResult."</h5>";
                        return false;
                    }

                    $service = getById('services',$paramResult);
                    if($service) {

                        if($service['status'] == 200) {
                            ?> 
                            
                            <input type="hidden" name="serviceId" value="<?= $service['data']['id'] ?>">
                            <div class="mb-3">
                                <label>Nombre del servicio</label>
                                <input type="text" name="name" value="<?= $service['data']['name']; ?>" required class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Observación</label>
                                <textarea name="small_description" required class="form-control" rows="3"><?= $service['data']['small_description']; ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label>Descripción</label>
                                <textarea name="long_description" class="form-control mySummernote" rows="3"><?= $service['data']['long_description']; ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label>Imagen</label>
                                <input type="file" name="image" class="form-control">
                                <img src="<?= '../'.$service['data']['image'] ?>" style="width: 70px; height: 70px;" alt="Img"/>
                            </div>

                            <h5>Etiquetas SEO</h5>
                            <div class="mb-3">
                                <label>Titulo META</label>
                                <input type="text" name="meta_title" value="<?= $service['data']['meta_title']; ?>" required class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Descripción META</label>
                                <textarea name="meta_description" class="form-control" rows="3"><?= $service['data']['meta_description']; ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label>Palabra Clave META</label>
                                <textarea name="meta_keyword" class="form-control" rows="3"><?= $service['data']['meta_keyword']; ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label>Estado (activo/privado)</label><br/>
                                <input type="checkbox" name="status" <?= $service['data']['status'] == 1 ? 'checked' : '' ; ?> style="width: 30px; height: 30px;">
                            </div>


                            <div class="mb-3 text-end">
                                <button type="submit" name="updateService" class="btn btn-primary">Actualizar Servicio</button>
                            </div>

                            <?php
                        } else {
                            echo "<h5>No se encontro información!</h5>";    
                        }

                    } else {
                        echo "<h5>Algo Salio Mal!</h5>";
                    }
                    ?>

                </form>

            </div>
        </div>
    </div>
</div>



<?php include('includes/footer.php'); ?>