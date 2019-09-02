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
<h1>Agregar Usuario</h1>
            <br>
<?php include 'includes/add_user.php' ; ?>
            <br>
<form action="" class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
<div class="form-row">
    <div class="form-group col-md-6">
    <label for="fname">Nombres</label>
      <input id="fname" type="fname" class="form-control" name="fname" placeholder="Nombres" required>
    </div>
    <div class="form-group col-md-6">
    <label for="lname">Apellidos</label>
      <input id="lname" type="lname" class="form-control" name="lname" placeholder="Apellidos" required>
    </div>
</div>
<br>
<div class="form-row">
    <div class="form-group col-md-4">
    
      <input type="text" class="form-control" name="user" placeholder="Usuario" required>
    </div>
    <div class="form-group col-md-4">
      <input type="password" class="form-control" name="pass" placeholder="Contraseña" required>
    </div>
    <div class="form-group col-md-4">
      <input type="text" class="form-control" name="email" placeholder="Correo Electronico" required>
    </div>
</div>
<br>
    <button type="submit" name="create_user" class="btn btn-primary">Agregar Usuario</button>
</form>
<?php include 'includes/form_valid_script.php'; ?>
        </main><!-- /.container -->

<?php include 'includes/bootstrapjava.php'; ?>
</body>
</html>