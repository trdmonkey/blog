<?php 
$pageTitle = "Configuracion";
include('includes/header.php'); 
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Configuración del sitio web</h4>
            </div>
            <div class="card-body">

                <?= alertMessage(); ?>

                <form action="code.php" method="post">

                    <?php
                    $setting = getById('settings',1);
                    ?>

                    <input type="hidden" name="settingId" value="<?= $setting['data']['id'] ?? 'insert'?>" />

                    <div class="mb-3">
                        <label>Titulo</label>
                        <input type="text" name="title" value="<?= $setting['data']['title'] ?? ""?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>URL | Dominio</label>
                        <input type="text" name="slug" value="<?= $setting['data']['slug'] ?? ""?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Descripción</label>
                        <input type="text" name="small_description" value="<?= $setting['data']['small_description'] ?? ""?>" class="form-control">
                    </div>
                    
                    <h4 class="my-3">Configuración SEO</h4>
                    <div class="mb-3">
                        <label>Descripción Meta</label>
                        <textarea name="meta_description" class="form-control" rows="3"><?= $setting['data']['meta_description'] ?? ""?></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Palabra clave Meta</label>
                        <textarea name="meta_keyword" class="form-control" rows="3"><?= $setting['data']['meta_keyword'] ?? ""?></textarea>
                    </div>

                    <h4 class="my-3">Información de contacto</h4>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Email 1</label>
                            <input type="email" name="email1" value="<?= $setting['data']['email1'] ?? ""?>" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Email 2</label>
                            <input type="email" name="email2" value="<?= $setting['data']['email2'] ?? ""?>" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Telefono 1</label>
                            <input type="text" name="phone1" value="<?= $setting['data']['phone1'] ?? ""?>" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Telefono 2</label>
                            <input type="text" name="phone2" value="<?= $setting['data']['phone2'] ?? ""?>" class="form-control">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Dirección</label>
                            <textarea name="address" class="form-control" rows="3"><?= $setting['data']['address'] ?? ""?></textarea>
                        </div>
                    </div>

                    <div class="mb-3 text-end">
                        <button type="submit" name="saveSetting" class="btn btn-primary">Guardar</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>