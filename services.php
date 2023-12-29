<?php 

$pageTitle = "Servicios";
include('includes/header.php'); 

?>

<div class="py-5 bg-secondary">
    <div class="container">
        <h4 class="text-white text-center">Nuestros Servicios</h4>
    </div>
</div>

<div class="py-5 bg-light">
    <div class="container">
        <div class="row">

            <?php
            $serviceQuery = "SELECT * FROM services WHERE status='0'";
            $result = mysqli_query($conn, $serviceQuery);

            if($result) {

                if(mysqli_num_rows($result) > 0) {

                    foreach($result as $row) {
                        ?>
                        <div class="col-md-3 mb-3">
                            <div class="card shadow-sm">

                                <?php if($row['image'] != "") : ?>
                                    <img src="<?= $row['image']; ?>" class="w-100 rounded" alt="Image" style="min-height: 200px; max-height: 200px;" />
                                <?php else: ?>
                                    <img src="assets/images/tim.png" class="w-100 rounded" alt="Image" style="min-height: 200px; max-height: 200px;" />
                                <?php endif; ?>

                                <div class="card-body">
                                    <h5><?= $row['name']; ?></h5>
                                    <p>
                                        <?= $row['small_description']; ?>
                                    </p>
                                    <div class="">
                                        <a href="service.php?slug=<?= $row['slug']; ?>" target="_blank" class="text-primary">Leer mas...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }

                } else {
                    ?>
                    <div class="col-md-12">
                        <h5>Ningun registro encontrado.</h5>
                    </div>
                    <?php
                }

            } else {
                ?>
                <div class="col-md-12">
                    <h5>Algo Salió Mal!</h5>
                </div>
                <?php
            }
            ?>

        </div>
    </div>
</div>





<?php include('includes/footer.php'); ?>


