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
<h1>Editar Paciente</h1>
            <br>
<?php include 'includes/edit_client.php' ; ?>
            <br>

<form action="" method="post" enctype="multipart/form-data">
<div class="form-row">
<label for="cfname">Nombres</label>
    <div class="form-group col-md-6">
          <input type="cfname" class="form-control" name="cfname" placeholder="First Name" value="<?php echo $client_firstname; ?>">
      </div>
</div>
<div class="form-row">
<label for="clname">Apellidos</label>    
    <div class="form-group col-md-6">
      <input type="clname" class="form-control" name="clname" placeholder="Last Name" value="<?php echo $client_lastname; ?>">
    </div>
</div>
<div class="form-row">
<label for="user">Fecha de Nacimiento</label>
    <div class="form-group col-md-4">
      <input type="date" class="form-control" name="dob" value="<?php echo $dateofbirth; ?>">
    </div>
</div>
<div class="form-row">
<label for="email">Teléfono</label>
    <div class="form-group col-md-4">
      <input type="text" class="form-control" name="phone" placeholder="Correo Electronico" value="<?php echo $client_phone; ?>">
    </div>
</div>
<div class="form-row">
<label for="email">Correo Electrónico</label>
    <div class="form-group col-md-4">
      <input type="text" class="form-control" name="email" placeholder="Correo Electronico" value="<?php echo $client_email; ?>">
    </div>
</div>
<br>
    <button type="submit" name="edit_client" class="btn btn-primary">Editar Paciente</button>
</form>
        </main><!-- /.container -->

<?php include 'includes/bootstrapjava.php'; ?>
</body>
</html>