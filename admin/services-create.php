<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Agregar Servicios
                    <a href="services.php" class="btn btn-danger float-end">Regresar</a>
                </h4>
            </div>
            <div class="card-body">

                <?php alertMessage(); ?>

                <form action="code.php" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label>Nombre del servicio</label>
                        <input type="text" name="name" required class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Observación</label>
                        <textarea name="small_description" required class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Descripción</label>
                        <textarea name="long_description" class="form-control mySummernote" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Imagen</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <h5>Etiquetas SEO</h5>
                    <div class="mb-3">
                        <label>Titulo META</label>
                        <input type="text" name="meta_title" required class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Descripción META</label>
                        <textarea name="meta_description" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Palabra Clave META</label>
                        <textarea name="meta_keyword" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label>Estado (activo/privado)</label><br/>
                        <input type="checkbox" name="status" style="width: 30px; height: 30px;">
                    </div>


                    <div class="mb-3 text-end">
                        <button type="submit" name="saveService" class="btn btn-primary">Guardar Servicio</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>



<?php include('includes/footer.php'); ?>