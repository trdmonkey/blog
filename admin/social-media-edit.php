<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Editar Social Media
                    <a href="social-media.php" class="btn btn-danger float-end">Regresar</a>
                </h4>
            </div>
            <div class="card-body">

                <?php alertMessage(); ?>

                <form action="code.php" method="POST">

                    <?php
                    $paramResult = checkParamId('id');
                    if(!is_numeric($paramResult)) {
                        echo "<h5>".$paramResult."</h5>";
                        return false;
                    }

                    $socialMedia = getById('social_medias',$paramResult);
                    if($socialMedia) {

                        if($socialMedia['status'] == 200) {
                            ?>

                            <input type="hidden" name="socialMediaId" value="<?= $socialMedia['data']['id'] ?>">
                            <div class="mb-3">
                                <label>Nombre del Medio</label>
                                <input type="text" name="name" value="<?= $socialMedia['data']['name'] ?>" required class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Nombre del URL/Link</label>
                                <input type="text" name="url" value="<?= $socialMedia['data']['url'] ?>" required class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Privado</label><br/>
                                <input type="checkbox" name="status" <?= $socialMedia['data']['status'] == 1 ? 'checked' : ''; ?> style="width: 30px; height: 30px;" />
                            </div>
                            <div class="mb-3 text-end">
                                <button type="submit" name="updateSocialMedia" class="btn btn-outline-primary">Actualizar</button>
                            </div>
                            <?php
                        } else {
                            echo "<h5>".$socialMedia['message']."</h5>";
                        }

                    } else {
                        echo "<h5>Algo salio mal!</h5>";
                    }



                    ?>
                    
                    
                </form>

            </div>
        </div>
    </div>
</div>



<?php include('includes/footer.php'); ?>