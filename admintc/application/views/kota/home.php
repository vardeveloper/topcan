<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-3 pull-right">
        <button class="form-control btn btn-success" data-toggle="modal" data-target="#tambah-kota"><i class="glyphicon glyphicon-plus-sign"></i>  &nbsp; Agregar Categoría</button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>Descripción</th>
          <th style="text-align: center;">Acción</th>
        </tr>
      </thead>
      <tbody id="data-kota">
      
      </tbody>
    </table>
  </div>
</div>

<?php echo $modal_tambah_kota; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataKota', 'Estás seguro de eliminar?', 'SI, Estoy seguro'); ?>
<?php
  $data['judul'] = 'Kota';
  $data['url'] = 'Kota/import';
  echo show_my_modal('modals/modal_import', 'import-kota', $data);
?>