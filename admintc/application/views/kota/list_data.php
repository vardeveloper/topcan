<?php
$no = 1;
foreach ($dataKota as $kota) {
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $kota->des_categoria; ?></td>
        <td><?php echo $kota->obs_categoria; ?></td>
        <td class="text-center" style="min-width:230px;">
            <button class="btn btn-warning update-dataKota" data-id="<?php echo $kota->cod_categoria; ?>"><i class="glyphicon glyphicon-repeat"></i> Actualizar</button>
            <button class="btn btn-danger konfirmasiHapus-kota" data-id="<?php echo $kota->cod_categoria; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Eliminar</button>
            <!-- <button class="btn btn-info detail-dataKota" data-id="<?php echo $kota->cod_categoria; ?>"><i class="glyphicon glyphicon-info-sign"></i> Detalle</button> -->
        </td>
    </tr>
    <?php
    $no++;
}
?>