<!DOCTYPE html>
<html lang="en">
<?php 
include 'includes/functions.php';
include 'includes/db.php'; 
include 'includes/header.php'; 
include 'includes/psecure.php'; 
include 'includes/navbar.php'; ?>
<body>

    <main role="main" class="container">

        <div class="text-center mt-5 pt-5">
<h1>Agregar Paciente</h1>
            <br>
<?php include 'includes/add_client.php' ; ?>
            <br>
<form action="" method="post" enctype="multipart/form-data">
<div class="form-row">
    <div class="form-group col-md-6">
      <input type="fname" class="form-control" name="cfname" placeholder="Nombres">
    </div>
    <div class="form-group col-md-6">
      <input type="lname" class="form-control" name="clname" placeholder="Apellidos">
    </div>
</div>
<br>
<div class="form-row">
    <div class="form-group col-md-4">
      <input type="date" class="form-control" name="dateofbirth" placeholder="Fecha de Nacimiento">
    </div>
    <div class="form-group col-md-4">
      <input type="text" class="form-control" name="phone" placeholder="Telefono">
    </div>
    <div class="form-group col-md-4">
      <input type="email" class="form-control" name="email" placeholder="Correo Electronico">
    </div>
</div>
<br>
   <button type="submit" name="create_client" class="btn btn-primary">Agregar Paciente</button>
</form>
        </main><!-- /.container -->

<?php include 'includes/bootstrapjava.php'; ?>
</body>
</html>