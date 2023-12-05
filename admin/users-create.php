<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Agregar Usuarios
                    <a href="users.php" class="btn btn-danger float-end">Regresar</a>
                </h4>
            </div>
            <div class="card-body">

                <form action="">
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>    
                    <div class="mb-3">
                        <label>Telefono</label>
                        <input type="text" name="phone" class="form-control">
                    </div>    
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>    
                    <div class="mb-3">
                        <label>Contraseña</label>
                        <input type="password" name="password" class="form-control">
                    </div>    
                    <div class="mb-3">
                        <label>Rol</label>
                        <select name="role" class="form-select">
                            <option value="">Seleccione un rol</option>
                            <option value="admin">Admin</option>
                            <option value="user">Usuario</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Rol</label>
                        <input type="checkbox" name="is_ban" style="width: 30px; height: 30px;" />
                    </div>    
                </form>
            </div>
        </div>
    </div>
</div>



<?php include('includes/footer.php'); ?>