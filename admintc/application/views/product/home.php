<div class="msg" style="display:none;">
    <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
    <div class="box-header">
        <div class="col-md-3 pull-right">
            <button class="form-control btn btn-success" data-toggle="modal" data-target="#product">
                <i class="glyphicon glyphicon-plus-sign"></i> &nbsp; Agregar Producto
            </button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="list-data" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Descripción</th>
                    <th>Imagen 1</th>
                    <th>Detalle Producto</th>
                    <th style="text-align: center;">Acción</th>
                </tr>
            </thead>
            <tbody id="data-product">
            </tbody>
        </table>
    </div>
</div>

<?php echo $modal_product_create; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('product-delete', 'hapus-dataPegawai', 'Estás seguro de eliminar?', 'SI, Estoy seguro'); ?>

<?php
$data['judul'] = 'Pegawai';
$data['url'] = 'Pegawai/import';
echo show_my_modal('modals/modal_import', 'import-pegawai', $data);
?>