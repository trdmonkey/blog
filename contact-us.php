<?php 

$pageTitle = "Contactanos";
include('includes/header.php'); 

?>

<div class="py-5 bg-secondary">
    <div class="container">
        <h4 class="text-white text-center">Contactame</h4>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                Contact Form
            </div>
            <div class="col-md-6">
                <h4 class="footer-heading">Información de Contacto</h4>
                <hr>
                <p>Dirección: <?= webSetting('address') ?? ''; ?></p>
                <p>Email: <?= webSetting('email1') ?? ''; ?>, <?= webSetting('email2') ?? ''; ?></p>
                <p>Telefono: <?= webSetting('phone1') ?? ''; ?>, <?= webSetting('phone2') ?? ''; ?></p>
            </div>
        </div>
    </div>
</div>







<?php include('includes/footer.php'); ?>


