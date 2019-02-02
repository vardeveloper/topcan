<?php
foreach ($dataPegawai as $pegawai) {
    ?>
    <tr>
        <td style="min-width:230px;"><?php echo $pegawai->des_producto; ?></td>
        <td><img src="http://<?php echo $_SERVER['SERVER_NAME'] ?>/<?php echo $pegawai->img1_producto; ?>" width="100" height="100"></td>
        <td><?php echo $pegawai->det_producto; ?></td>
        <td class="text-center" style="min-width:230px;">
            <button class="btn btn-warning update-dataPegawai" data-id="<?php echo $pegawai->cod_producto; ?>"><i class="glyphicon glyphicon-repeat"></i> Actualizar</button>
            <button class="btn btn-danger konfirmasiHapus-pegawai" data-id="<?php echo $pegawai->cod_producto; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Elimnar</button>
        </td>
    </tr>
    <?php
}
?>