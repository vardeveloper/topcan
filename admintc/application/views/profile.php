<div class="row">
  <div class="col-md-3">
    <!-- Profile Image -->
    <div class="box box-primary">
      <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" src="https://via.placeholder.com/100" alt="User profile picture">

        <h3 class="profile-username text-center"><?php echo $userdata->nom_usuario; ?></h3>

        <p class="text-muted text-center">Web Developer</p>

        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b>Usuario</b> <a class="pull-right"><?php echo $userdata->usr_usuario; ?></a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="col-md-9">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#settings" data-toggle="tab">Configuraciones</a></li>
        <li><a href="#password" data-toggle="tab">Actualizar Password</a></li>
      </ul>
      <div class="tab-content">
        <div class="active tab-pane" id="settings">
          <form class="form-horizontal" action="<?php echo base_url('Profile/update') ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="usr_usuario" class="col-sm-3 control-label">Usuario</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="" placeholder="Ingresar Username" name="usr_usuario" value="<?php echo $userdata->usr_usuario; ?>">
              </div>
            </div>

            <div class="form-group">
              <label for="nom_usuario" class="col-sm-3 control-label">Nombre</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Ingresar Nombre" name="nom_usuario" value="<?php echo $userdata->nom_usuario; ?>">
              </div>
            </div>

            <div class="form-group">
              <label for="ape_pat_usuario" class="col-sm-3 control-label">Apellido Paterno</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Ingresar Apellido Paterno" name="ape_pat_usuario" value="<?php echo $userdata->ape_pat_usuario; ?>">
              </div>
            </div>

            <div class="form-group">
              <label for="ape_mat_usuario" class="col-sm-3 control-label">Apellido Materno</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Ingresar Apellido Materno" name="ape_mat_usuario" value="<?php echo $userdata->ape_mat_usuario; ?>">
              </div>
            </div>

            <div class="form-group">
              <label for="correo_usuario" class="col-sm-3 control-label">E-mail</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Ingresar Email" name="correo_usuario" value="<?php echo $userdata->correo_usuario; ?>">
              </div>
            </div>

            <!-- <div class="form-group">
              <label for="inputFoto" class="col-sm-2 control-label">Foto</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" placeholder="Foto" name="foto">
              </div>
            </div> -->
            
            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-3">
                <button type="submit" class="btn btn-success btn-block">Guardar</button>
              </div>
            </div>
          </form>
        </div>
        <div class="tab-pane" id="password">
          <form class="form-horizontal" action="<?php echo base_url('Profile/ubah_password') ?>" method="POST">
            <div class="form-group">
              <label for="passActual" class="col-sm-3 control-label">Password Actual</label>
              <div class="col-sm-6">
                <input type="password" class="form-control" placeholder="Password Actual" name="passActual">
              </div>
            </div>
            <div class="form-group">
              <label for="passNuevo" class="col-sm-3 control-label">Nuevo Password </label>
              <div class="col-sm-6">
                <input type="password" class="form-control" placeholder="Nuevo Password" name="passNuevo">
              </div>
            </div>
            <div class="form-group">
              <label for="passConfirmar" class="col-sm-3 control-label">Confirmar Password</label>
              <div class="col-sm-6">
                <input type="password" class="form-control" placeholder="Confirmar Password" name="passConfirmar">
              </div>
            </div>
            
            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-3">
                <button type="submit" class="btn btn-success btn-block">Guardar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="msg" style="display:none;">
      <?php echo $this->session->flashdata('msg'); ?>
    </div>
  </div>
</div>