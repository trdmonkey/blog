<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Editar Usuarios
                    <a href="users.php" class="btn btn-danger float-end">Regresar</a>
                </h4>
            </div>
            <div class="card-body">

                <form action="code.php" method="POST">

                    <?php

                    $paramResult = checkParamId('id');                    
                    if(!is_numeric($paramResult)) {
                        echo '<h5>'.$paramResult.'</h5>';
                        return false;
                    }

                    $user = getById('users',checkParamId('id'));
                    if($user['status']) {



                    } else {
                        echo '<h5>'.$user['message'].'</h5>';
                    }


                    ?>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Telefono</label>
                                <input type="text" name="phone" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Contraseña</label>
                                <input type="password" name="password" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label>Rol</label>
                                <select name="role" required class="form-select">
                                    <option value="">Seleccione un rol</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">Usuario</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label>Rol</label>
                                <br/>
                                <input type="checkbox" name="is_ban" style="width:30px;height:30px" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 text-end">
                                <br/>
                                <button type="submit" name="updateUser" class="btn btn-primary">Actualizar</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>



<?php include('includes/footer.php'); ?>