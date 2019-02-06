<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
    <div class="form-msg"></div>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 style="display:block; text-align:center;">Relacionar Categorias</h3>
    <form method="POST" id="form-update-productCategory" class="form-horizontal">
        <input type="hidden" name="id" value="<?php echo $producto->cod_producto; ?>">
        
        <?php foreach ($categories as $key => $value): ?>
        <div class="form-group">
            <label class="col-sm-2 control-label"><?= $value['name'] ?></label>
            <div class="col-sm-10">
                <?php foreach ($value['subcategories'] as $index => $item): ?>
                <div class="checkbox">
                    <label> 
                        <input 
                            class="minimal" 
                            type="checkbox" 
                            name="category[]" 
                            id="category_<?= $index ?>"
                            value="<?= $index ?>"
                            <?= (empty($item['product_id'])) ? '' : 'checked="true"' ?>
                            > 
                        <?= $item['name'] ?> 
                    </label>
                </div>
                <?php endforeach ?>
            </div>
        </div>
        <?php endforeach ?>

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