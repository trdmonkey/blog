<?php 

$pageTitle = "Servicios";
include('includes/header.php'); 

if(isset($_GET['slug'])) {

    if($_GET['slug'] == null) {
        redirect('services.php','');
    }

} else {
    redirect('services.php','');
}

$slug = validate($_GET['slug']);
$service = "SELECT * FROM services WHERE status='0' AND slug='$slug' LIMIT 1";
$result = mysqli_query($conn, $service);
if(!$result) {
    redirect('services.php','');
}

if(mysqli_num_rows($result) == 0) {
    redirect('services.php','');
}
$rowData = mysqli_fetch_assoc($result);

?>

<div class="py-5 bg-secondary">
    <div class="container">
        <h4 class="text-white text-center"><?= $rowData['name']; ?></h4>
    </div>
</div>

<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card card-body shadow-sm">
                    <h4><?= $rowData['name']; ?></h4>
                    <div class="underline"></div>
                    <p>
                        <?= $rowData['small_description'] ?>
                    </p>

                    <div class="mb-3">
                        <?php if($rowData['image'] != "") : ?>
                            <img src="<?= $rowData['image']; ?>" class="w-100 rounded" alt="Image" />
                        <?php else: ?>
                            <img src="assets/images/tim.png" class="w-100 rounded" alt="Image" />
                        <?php endif; ?>
                    </div>

                    <p>
                        <?= $rowData['long_description']; ?>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card sticky-top" style="top: 120px;">
                    <div class="card-header bg-bg-body-tertiary">
                        <h5 class="text-muted mb-0">Preguntar ahora</h5>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Nombre</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Telefono</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Servicio</label>
                                <input type="text" name="service" readonly value="<?= $rowData['name']; ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Mensaje / Comentario</label>
                                <textarea name="message" class="form-control" rows="3"></textarea>
                            </div>

                            <button type="submit" name="enquireBtn" class="btn w-100 btn-primary">Enviar</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include('includes/footer.php'); ?>