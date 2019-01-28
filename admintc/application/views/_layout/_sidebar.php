<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="https://via.placeholder.com/100" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $userdata->usr_usuario; ?></p>
        <!-- Status -->
        <a href="<?php echo base_url(); ?>assets/#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">MODULOS</li>
      <!-- Optionally, you can add icons to the links -->

      <li <?php if ($page == 'home') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Home'); ?>">
          <i class="fa fa-home"></i>
          <span>Principal</span>
        </a>
      </li>
      
      <!-- <li <?php if ($page == 'pegawai') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Pegawai'); ?>">
          <i class="fa fa-user"></i>
          <span>Datos Empleado</span>
        </a>
      </li>

      <li <?php if ($page == 'posisi') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Posisi'); ?>">
          <i class="fa fa-briefcase"></i>
          <span>Datos Profesión</span>
        </a>
      </li>
      
      <li <?php if ($page == 'kota') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Kota'); ?>">
          <i class="fa fa-location-arrow"></i>
          <span>Datos Ciudad</span>
        </a>
      </li> -->


      <li <?php if ($page == 'tipocategoria') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Tipocategoria'); ?>">
          <i class="glyphicon glyphicon-tags"></i>
          <span>Tipo Categoría</span>
        </a>
      </li>

      <li <?php if ($page == 'categorias') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Categorias'); ?>">
          <i class="glyphicon glyphicon-book"></i>
          <span>Categorias</span>
        </a>
      </li>

      <li <?php if ($page == 'productos') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Productos'); ?>">
          <i class="glyphicon glyphicon-shopping-cart"></i>
          <span>Productos</span>
        </a>
      </li>

    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>