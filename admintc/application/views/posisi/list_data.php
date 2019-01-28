<?php
  $no = 1;
  foreach ($dataPosisi as $posisi) {
    ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $posisi->des_tip_categoria; ?></td>
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning update-dataPosisi" data-id="<?php echo $posisi->cod_tip_categoria; ?>"><i class="glyphicon glyphicon-repeat"></i> Actualizar</button>
        <button class="btn btn-danger konfirmasiHapus-posisi" data-id="<?php echo $posisi->cod_tip_categoria; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Eliminar</button>
        <!-- <button class="btn btn-info detail-dataPosisi" data-id="<?php echo $posisi->cod_tip_categoria; ?>"><i class="glyphicon glyphicon-info-sign"></i> Detalle</button> -->
      </td>
    </tr>
    <?php
    $no++;
  }
?>