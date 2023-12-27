<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Agregar Social Media
                    <a href="social-media.php" class="btn btn-danger float-end">Regresar</a>
                </h4>
            </div>
            <div class="card-body">

                <?php alertMessage(); ?>

                <form action="code.php" method="POST">
                    <div class="mb-3">
                        <label>Nombre del Medio</label>
                        <input type="text" name="name" required class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label>Nombre del URL/Link</label>
                        <input type="text" name="url" required class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label>Privado</label><br/>
                        <input type="checkbox" name="status" style="width: 30px; height: 30px;" />
                    </div>
                    <div class="mb-3 text-end">
                        <button type="submit" name="saveSocialMedia" class="btn btn-outline-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php include('includes/footer.php'); ?>