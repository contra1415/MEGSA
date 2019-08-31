<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalagregarcita">
Agregar Notas
</button>

<!-- Modal -->
<div class="modal fade" id="modalagregarcita" tabindex="-1" role="dialog" aria-labelledby="modalagregarcitaTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalagregarcitaTitle">Agregar Notas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="" method="post" enctype="multipart/form-data">
      <div class="form-row">
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="date" value="<?php echo date("Y/m/d");?>">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="clname" value="<?php echo $navbaruser; ?>" disabled>
    </div>
</div>
        <div class="form-group">
            <textarea class="form-control" name="notes" rows="12"></textarea>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
      </form>
      </div>
    </div>
  </div>
</div>  