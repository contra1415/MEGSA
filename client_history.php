<!DOCTYPE html>
<html lang="en">
<?php 
include 'includes/functions.php';
include 'includes/header.php'; 
include 'includes/psecure.php'; 
include 'includes/navbar.php';
include 'includes/db.php'; 
include 'includes/client_info.php';
?>


<body>
    <main role="main" class="container-fluid">
        <div class="text-left  mt-5 pt-4">
            <h1 class="display-4"><?php echo"$client_firstname"; ?><?php echo" "; ?><?php echo"$client_lastname"; ?></h1>
        </div>
<div class="row justify-content-between rounded">
<div class="col-4 mt-2 pt-4">
        <h4>Informacion del Paciente</h4>
    <div class="row">
        <div class=" text-right col-sm-4">
            <br>
            <strong>Id</strong><br>
            <strong>Nombres</strong><br>
            <strong>Apellidos</strong><br>
            <strong>Fecha de Nacimiento</strong><br>
            <strong>Telefono</strong><br>
            <strong>Correo Electronico</strong><br>
        </div>
        <div class=" text-left col-sm-4">
            <br>
            <?php echo "$client_id"; ?><br>
            <?php echo "$client_firstname";?><br>
            <?php echo "$client_lastname";?><br>
            <?php echo "$client_dateofbirth";?><br>
            <?php echo "$client_phone";?><br>
            <?php echo "$client_email";?><br>
            <br>
            <br>
        </div>
    </div>
    <div class=" text-left">
    <h4>Historial</h4>
    <br>
    <div class="row">
        <div class=" text-justify col-sm-11">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalmedicamentos">
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

        </div>
    </div>
        <br>
    <div class="row">
        <div class=" text-justify col-sm-11">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalobstetrico">
Obstetrico Ginecologico
</button>

<!-- Modal -->
<div class="modal fade" id="modalobstetrico" tabindex="-1" role="dialog" aria-labelledby="modalobstetricoTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalobstetricoTitle">Obstetrico Ginecologico</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<p> <?php echo "$client_hist2";?> </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>        

        </div>
    </div>
        <br>
    <div class="row">
        <div class=" text-justify col-sm-11">

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalquirurgicos">
Quirurgicos
</button>

<!-- Modal -->
<div class="modal fade" id="modalquirurgicos" tabindex="-1" role="dialog" aria-labelledby="modalquirurgicosTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalquirurgicosTitle">Quirurgicos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<p> <?php echo "$client_hist3";?> </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>           

        </div>
    </div>
    </div>
</div>
        <div class="col-8 mt-2 pt-4">
        <h4>Historial de Citas</h4>
        + Agregar Cita
            <?php include 'includes/list_appointments.php'; ?>
        </div>
</div>
    </main><!-- /.container -->


<?php include 'includes/bootstrapjava.php'; ?>
</body>
</html>