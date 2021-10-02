<?= $this->extend('templates/admin_templates') ?>

<?= $this->section('content') ?>
 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Formulario de registro</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Registrar cliente</h3>
              </div>
              <form method="post" action="<?= site_url('/guardar') ?>" id="frmRegistro">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nombre">Nombre *</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombres completos" >
                  </div>
                  <div class="form-group">
                    <label for="apellido">Apellidos *</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellidos completos" >
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                    </div>
                    <input type="Email" class="form-control" id="email" name="email" placeholder="example@dominio.com" >
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="identificacion">Identificación *</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
                    </div>
                    <input type="text" class="form-control" id="identificacion" name="identificacion" placeholder="Número de documento">
                  </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" id="registrar" class="btn btn-outline-primary btn-block">Registrar</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
<?= $this->endSection() ?>