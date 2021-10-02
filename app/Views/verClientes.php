<?= $this->extend('templates/admin_templates') ?>

<?= $this->section('content') ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Clientes</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Clientes Registrados</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                            style="width: 100%" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending">Nombres</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending">Apellidos
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Platform(s): activate to sort column ascending">Correo</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Engine version: activate to sort column ascending"> Email</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($clientes as $cliente): ?>

                                <tr>
                                    <td><?= $cliente['Nombres']; ?></td>
                                    <td><?= $cliente['Apellidos']; ?></td>
                                    <td><?= $cliente['Email']; ?></td>
                                    <td><?= $cliente['Identificacion']; ?></td>
                                    <td>
                                        <a href="#"
                                            onclick="select_data('<?= $cliente['Id'] ?>','<?= $cliente['Nombres'] ?>','<?= $cliente['Apellidos'] ?>','<?= $cliente['Email'] ?>','<?= $cliente['Identificacion'] ?>')"
                                            class="bi bi-pencil-square btn btn-success abrirmodal"
                                            id="<?php echo $cliente['Id'];?>" data-toggle="modal"
                                            data-target="#exampleModal" title=Editar></a>
                                        <a href="<?= base_url('borrar/'.$cliente['Id']);?>"
                                            class="bi bi-trash-fill btn btn-danger" title=Borrar></a>
                                    </td>
                                </tr>

                                <?php endforeach; ?>
                            </tbody>
                        </table>



                    </div>

                    <!-- Modal -->
                    <form method="post" action="<?= site_url('/actualizar') ?>" id="frmActualizar">
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary">
                                        <h5 class="modal-title" id="exampleModalLabel">Editar Cliente</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="idC" id="idC">
                                        <div class="form-group">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre"
                                                placeholder="Nombres completos" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="apellido">Apellidos</label>
                                            <input type="text" class="form-control" id="apellido" name="apellido"
                                                placeholder="Apellidos completos" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="bi bi-envelope-fill"></i></span>
                                                </div>
                                                <input type="Email" class="form-control" id="email" name="email"
                                                    placeholder="example@dominio.com">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="identificacion">Identificación</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="bi bi-person-badge"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="identificacion"
                                                    name="identificacion" placeholder="Número de documento">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" id="actualizar"
                                                class="btn btn-primary btn-block">Actualizar</button>
                                            <button type="button" class="btn btn-secondary btn-block"
                                                data-dismiss="modal">Cancelar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
<?= $this->endSection() ?>