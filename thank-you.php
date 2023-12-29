<?php 

$pageTitle = "Acerca De Mi";
include('includes/header.php'); 

?>

<div class="py-5 bg-secondary">
    <div class="container">
        <h4 class="text-white text-center">Muchas gracias!!</h4>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-body shadow-sm">
                    <h4>Thank You</h4>
                    <div class="">
                        <?= alertMessage(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    

<?php include('includes/footer.php'); ?>


