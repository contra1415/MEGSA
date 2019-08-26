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
<form action="" method="post" enctype="multipart/form-data">
<div class="form-row">
    <div class="form-group col-md-6">
      <input type="fname" class="form-control" name="fname" placeholder="First Name">
    </div>
    <div class="form-group col-md-6">
      <input type="lname" class="form-control" name="lname" placeholder="Last Name">
    </div>
</div>
<br>
<div class="form-row">
    <div class="form-group col-md-4">
      <input type="text" class="form-control" name="user" placeholder="Usuario">
    </div>
    <div class="form-group col-md-4">
      <input type="password" class="form-control" name="pass" placeholder="Contraseña">
    </div>
    <div class="form-group col-md-4">
      <input type="text" class="form-control" name="email" placeholder="Correo Electronico">
    </div>
</div>
<br>
   <button type="submit" name="create_user" class="btn btn-primary">Agregar Usuario</button>
</form>
        </main><!-- /.container -->

<?php include 'includes/bootstrapjava.php'; ?>
</body>
</html>