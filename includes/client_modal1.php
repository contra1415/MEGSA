<!-- Button trigger modal -->
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modalmedicamentos">
Medicamentos
</button>

<!-- Modal -->
<div class="modal fade" id="modalmedicamentos" tabindex="-1" role="dialog" aria-labelledby="modalmedicamentosTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalmedicamentosTitle">Medicamentos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<p> <?php echo "$client_hist1";?> </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>