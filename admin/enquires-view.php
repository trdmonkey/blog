<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Ver Consulta
                    <a href="enquiries.php" class="btn btn-danger btn-sm mb-0 float-end">Regresar</a>
                </h4>
            </div>
            <div class="card-body">

                <?= alertMessage(); ?>

                <?php
                $paramResult = checkParamId('id');
                if(!is_numeric($paramResult)) {
                    echo "<h5>".$paramResult."</h5>";
                    return false;
                }

                $enquiry = getById('enquires',$paramResult);
                if($enquiry) {

                    if($enquiry['status'] == 200) {
                    ?>

                    <table class="table table-bordered table-striped-columns table-hover">
                        <tbody>
                            <tr>
                                <td width="15%">Consulta No.</td>
                                <td><?= $enquiry['data']['id']; ?></td>
                            </tr>
                            <tr>
                                <td>Fecha</td>
                                <td><?= $enquiry['data']['created_at']; ?></td>
                            </tr>
                            <tr>
                                <td>Nombre</td>
                                <td><?= $enquiry['data']['name']; ?></td>
                            </tr>
                            <tr>
                                <td>Telefono</td>
                                <td><?= $enquiry['data']['phone']; ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><?= $enquiry['data']['email']; ?></td>
                            </tr>
                            <tr>
                                <td>Servicio</td>
                                <td><?= $enquiry['data']['service']; ?></td>
                            </tr>
                            <tr>
                                <td>Estado</td>
                                <td><?= $enquiry['data']['status']; ?></td>
                            </tr>
                            <tr>
                                <td>Mensaje</td>
                                <td><?= $enquiry['data']['message']; ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="mt-3">
                        <div class="card border card-body">
                            <form action="code.php" method="POST"> <!-- FORM para Actualizar el estado -->
                                <input type="hidden" name="enquiryId" value="<?= $enquiry['data']['id']; ?>" />
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Actualizar Estado</label>
                                        <select name="status" id="" class="form-select">
                                            <option disabled selected>Seleccione una opción</option>
                                            <option value="Pendiente" <?= $enquiry['data']['status'] == 'Pendiente' ? 'selected' : '' ; ?> >Pendiente</option>
                                            <option value="Completado" <?= $enquiry['data']['status'] == 'Completado' ? 'selected' : '' ; ?> >Completado</option>
                                            <option value="Cancelado" <?= $enquiry['data']['status'] == 'Cancelado' ? 'selected' : '' ; ?> >Cancelado</option>
                                        </select>
                                    </div>
                                    <div class="col-md-8"><br/>
                                        <button type="submit" name="updateEnquiryStatus" class="btn btn-primary">Actualizar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <?php
                    } else {
                        echo "<h5>Registro no encontrado.</h5>";
                    }
                }
                ?>


            </div>
        </div>
    </div>
</div>



<?php include('includes/footer.php'); ?>