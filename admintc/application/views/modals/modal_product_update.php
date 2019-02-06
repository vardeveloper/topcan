<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
    <div class="form-msg"></div>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 style="display:block; text-align:center;">Actualizar Datos Producto</h3>
    <form method="POST" id="form-update-product" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $producto->cod_producto; ?>">
        
        <div class="input-group form-group">
            <span class="input-group-addon">
                <i class="glyphicon glyphicon-list"></i>
            </span>
            <input type="text" class="form-control" placeholder="descripcion" name="description" value="<?php echo $producto->des_producto; ?>">
        </div>
        
        <div class="input-group form-group">
            <span class="input-group-addon">
                <i class="glyphicon glyphicon-list"></i>
            </span>
            <textarea name="detail" rows="5" placeholder="detalle" class="form-control"><?php echo $producto->det_producto; ?></textarea>
        </div>
        
        <div class="input-group form-group">
            <span class="input-group-addon">
                <i class="glyphicon glyphicon-picture"></i>
            </span>
            <input type="file" id="file" name="file" />
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Actualizar </button>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(function () {
        $(".select2").select2();

        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_flat-blue',
            radioClass: 'iradio_flat-blue'
        });
    });
</script>