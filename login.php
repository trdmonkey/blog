<?php

$pageTitle = "Inicia Sesión";
include('includes/header.php');

?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded">
                <div class="card-body p-5">
                    <h3 class="text-center mb-4">Iniciar Sesión</h3>

                    <?= alertMessage(); ?>
                    
                    <form action="login-code.php" method="POST">
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Correo Electrónico" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required>
                        </div>

                        <div class="d-grid gap-2 mb-3">
                            <button type="submit" name="loginBtn" class="btn btn-primary">Ingresar</button>
                        </div>
                        <div class="text-center">
                            <a href="#" class="text-decoration-none text-muted">¿Olvidaste tu contraseña?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>








<?php include('includes/footer.php'); ?>