<?php foreach ($products as $product) { ?>
    <tr>
        <td style="min-width:230px;"><?php echo $product->des_producto; ?></td>
        <td><img src="http://<?php echo $_SERVER['SERVER_NAME'] ?>/<?php echo $product->img1_producto; ?>" width="100" height="100"></td>
        <td><?php echo $product->det_producto; ?></td>
        <td class="text-center" style="min-width:230px;">
            <button class="btn btn-warning update-dataProduct" data-id="<?php echo $product->cod_producto; ?>">
                <i class="glyphicon glyphicon-repeat"></i> Actualizar
            </button>
            <button class="btn btn-info update-dataCategories" data-id="<?php echo $product->cod_producto; ?>">
                <i class="glyphicon glyphicon-check"></i> Categorias
            </button>
            <button class="btn btn-danger product-delete-pegawai" data-id="<?php echo $product->cod_producto; ?>" data-toggle="modal" data-target="#product-delete">
                <i class="glyphicon glyphicon-remove-sign"></i> Eliminar
            </button>
        </td>
    </tr>
<?php } ?>