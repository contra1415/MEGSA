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
<div class="row justify-content-between">
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
    <h4>Historial Medico</h4>
    <br>
    <div class="row">
        <div class=" text-justify col-sm-11">
            <h6>Medicamentos</h6>
        
        <p>Lorem ipsum dolor sit amet, clita laboramus et cum, populo imperdiet eloquentiam id eum. 
        No argumentum quaerendum neglegentur cum. His ne diam molestie mandamus, cum no regione alterum molestie. 
        Dolor vocibus an eos, at quot cetero persius pro. Eam recusabo liberavisse in. 
        Sea corpora perpetua ea, veri gubergren mea ad.</p>
        </div>
    </div>
        <br>
    <div class="row">
        <div class=" text-justify col-sm-11">
            <h6>Obstetrico Ginecologico</h6>
        
        <p>Lorem ipsum dolor sit amet, clita laboramus et cum, populo imperdiet eloquentiam id eum. 
        No argumentum quaerendum neglegentur cum. His ne diam molestie mandamus, cum no regione alterum molestie. 
        Dolor vocibus an eos, at quot cetero persius pro. Eam recusabo liberavisse in. 
        Sea corpora perpetua ea, veri gubergren mea ad.</p>
        </div>
    </div>
        <br>
    <div class="row">
        <div class=" text-justify col-sm-11">
            <h6>Quirurgicos</h6>
        
        <p>Lorem ipsum dolor sit amet, clita laboramus et cum, populo imperdiet eloquentiam id eum. 
        No argumentum quaerendum neglegentur cum. His ne diam molestie mandamus, cum no regione alterum molestie. 
        Dolor vocibus an eos, at quot cetero persius pro. Eam recusabo liberavisse in. 
        Sea corpora perpetua ea, veri gubergren mea ad.</p>
        </div>
    </div>
        <br>
    <div class="row">
        <div class=" text-justify col-sm-11">
            <h6>Campo 4</h6>
        
        <p>Lorem ipsum dolor sit amet, clita laboramus et cum, populo imperdiet eloquentiam id eum. 
        No argumentum quaerendum neglegentur cum. His ne diam molestie mandamus, cum no regione alterum molestie. 
        Dolor vocibus an eos, at quot cetero persius pro. Eam recusabo liberavisse in. 
        Sea corpora perpetua ea, veri gubergren mea ad.</p>
        </div>
    </div>
    </div>
</div>
        <div class="col-8 mt-2 pt-4">
        <h4>Historial de Citas</h4>
        <table class="table table-sm">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Fecha</th>
        <th scope="col">Comentarios</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
        </div>
</div>
    </main><!-- /.container -->


<?php include 'includes/bootstrapjava.php'; ?>
</body>
</html>