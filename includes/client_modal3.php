<!-- Button trigger modal -->
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal3">
Quirurgicos
</button>

<!-- Modal -->
<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal3Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal3Title">Quirurgicos
</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">

    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <textarea class="form-control" name="hist3" rows="12"><?php echo "$client_hist3";?></textarea>
        </div>

      
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" name="edit_modal3" class="btn btn-primary">Guardar Cambios</button>
    </form>
          </div>
    </div>
  </div>
</div>