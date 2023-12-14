<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Lista de Usuarios
                    <a href="users-create.php" class="btn btn-primary float-end">Agregar</a>
                </h4>
            </div>
            <div class="card-body">

                <?php alertMessage(); ?>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Rol</th>
                            <th>Estado</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                        
                        $users = getAll('users');
                        if(mysqli_num_rows($users) > 0) {

                            foreach($users as $userItem) {
                                ?>
                                <tr>
                                    <td><?= $userItem['id']; ?></td>
                                    <td><?= $userItem['name']; ?></td>
                                    <td><?= $userItem['email']; ?></td>
                                    <td><?= $userItem['phone']; ?></td>
                                    <td><?= $userItem['role']; ?></td>
                                    <td><?= $userItem['is_ban'] == 1 ? 'Inactivo' : 'Activo' ; ?></td>
                                    <td>
                                        <a href="users-edit.php?id=<?= $userItem['id']; ?>" class="btn btn-success btn-sm">Editar</a>
                                        <a href="users.delete.php?id=<?= $userItem['id']; ?>" 
                                            class="btn btn-danger btn-sm mx-2" 
                                            onclick="return confirm('Esta seguro de eliminar este registro?')"
                                            >
                                            Eliminar
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            }

                        } else {

                            ?>
                            <tr>
                                <td colspan="7">Registros no encontrados.</td>
                            </tr>
                            <?php

                        }

                        ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>



<?php include('includes/footer.php'); ?>