<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalagregarcita">
Agregar Notas
</button>

<!-- Modal -->
<div class="modal fade bd-example-modal-xl" id="modalagregarcita" tabindex="-1" role="dialog" aria-labelledby="modalagregarcitaTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
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
      <input type="date" class="form-control" name="date" value="<?php echo date("Y-m-d");?>">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="user" value="<?php echo $navbaruser; ?>" disabled>
    </div>
</div>
        <div class="form-group">
            <textarea class="form-control" name="add_notes" rows="12"></textarea>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
</form>
      </div>
    </div>
  </div>
</div>  