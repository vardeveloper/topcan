<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Actualizar Tipo Categoria</h3>

  <form id="form-update-posisi" method="POST">
    <input type="hidden" name="id" value="<?php echo $dataPosisi->cod_tip_categoria; ?>">
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-tags"></i>
      </span>
      <input type="text" class="form-control" placeholder="Ingresa Nombre Tipo Categoria" name="des_tip_categoria" aria-describedby="sizing-addon2" value="<?php echo $dataPosisi->des_tip_categoria; ?>">
    </div>
    <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-success"> <i class="glyphicon glyphicon-ok"></i> Actualizar Datos</button>
      </div>
    </div>
  </form>
</div>