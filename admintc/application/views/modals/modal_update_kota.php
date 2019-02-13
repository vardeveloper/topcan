<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
    <div class="form-msg"></div>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 style="display:block; text-align:center;">Actualizar Datos Categoría</h3>

    <form id="form-update-kota" method="POST">
        <input type="hidden" name="id" value="<?php echo $dataKota->cod_categoria; ?>">

        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-tags"></i>
            </span>
            <select name="typeCategory" class="form-control select2"  aria-describedby="sizing-addon2" style="width: 100%">
                <option value=""> -- Seleccione Tipo Categoría -- </option>
                <?php foreach ($dataTypeCategory as $item) { ?>
                    <option value="<?= $item->cod_tip_categoria ?>" <?= ($dataKota->cod_tip_categoria == $item->cod_tip_categoria) ? "selected='selected'" : "" ?>>
                        <?= $item->des_tip_categoria ?>
                    </option>
                <?php } ?>
            </select>
        </div>

        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-book"></i>
            </span>
            <input type="text" class="form-control" placeholder="Ingresar Nombre Categoría" name="name" aria-describedby="sizing-addon2" value="<?php echo $dataKota->des_categoria; ?>">
        </div>

        <div class="input-group form-group">
            <span class="input-group-addon">
                <i class="glyphicon glyphicon-align-center"></i>
            </span>
            <input type="text" class="form-control" placeholder="Ingresar Descripción Categoría" name="description" aria-describedby="sizing-addon2" value="<?php echo $dataKota->obs_categoria; ?>">
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <button type="submit" class="form-control btn btn-success"> <i class="glyphicon glyphicon-ok"></i> Actualizar Datos</button>
            </div>
        </div>
    </form>
</div>