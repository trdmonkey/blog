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
            <div class="col-md-12">

                <?= alertMessage(); ?>

                <div class="card card-body">
                    <form action="sendmail.php" method="POST">

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nombre</label>
                                <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Nombre">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Telefono</label>
                                <input type="number" name="phone" class="form-control" id="inputPassword4" placeholder="Telefono">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Email</label>
                                <input type="email" name="email" class="form-control" id="inputAddress" placeholder="Correo Electronico">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress2">Servicio</label>
                                <input type="text" name="service" class="form-control" id="inputAddress2" placeholder="Servicio requerido">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputCity">Mensaje</label>
                                <textarea name="message" class="form-control" rows="3"></textarea>
                                <!-- <input type="text" class="form-control" id="inputCity"> -->
                            </div>
                        </div>
                        <button type="submit" name="contactSubmit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>


