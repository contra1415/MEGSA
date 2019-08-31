<!-- Button trigger modal -->
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modalginecologico">
Obstetrico Ginecologico
</button>

<!-- Modal -->
<div class="modal fade" id="modalginecologico" tabindex="-1" role="dialog" aria-labelledby="modalginecologicoTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalginecologicoTitle">Obstetrico Ginecologico
</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">

    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <textarea class="form-control" name="hist2" rows="12"><?php echo "$client_hist2";?></textarea>
        </div>

      
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" name="edit_modal2" class="btn btn-primary">Guardar Cambios</button>
    </form>
          </div>
    </div>
  </div>
</div>