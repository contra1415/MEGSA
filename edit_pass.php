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
<h1>Cambiar Contraseña</h1>
            <br>
<?php include 'includes/edit_pass.php' ; ?>
            <br>

<form action="" method="post" enctype="multipart/form-data">
<div class="form-row">
<label for="fname">Nombre</label>
    <div class="form-group col-md-6">
          <input id="fname" type="fname" class="form-control" name="fname" placeholder="First Name" value="<?php echo $user_firstname; ?> " disabled>
    </div>
</div>
<div class="form-row">
<label for="lname">Apellido</label>    
    <div class="form-group col-md-6">
      <input type="lname" class="form-control" name="lname" placeholder="Last Name" value="<?php echo $user_lastname; ?>" disabled>
    </div>
</div>
<div class="form-row">
<label for="user">Usuario</label>
    <div class="form-group col-md-4">
      <input type="text" class="form-control" name="user" placeholder="Usuario" value="<?php echo $username; ?>" disabled>
    </div>
</div>
<div class="form-row">
<label for="email">Correo Electronico</label>
    <div class="form-group col-md-4">
      <input type="email" class="form-control" name="email" placeholder="Correo Electronico" value="<?php echo $user_email; ?>" disabled>
    </div>
</div>

<div class="form-row">
<label for="pass1">Contraseña</label><br>
    <div class="form-group col-md-4">
      <input type="password" class="form-control" name="pass1" placeholder="Ingrese la nueva contraseña">
    </div>
    <div class="form-group col-md-4">
      <input type="password" class="form-control" name="pass2" placeholder="Vuelva a ingresar la contraseña">
    </div>
    </div>
<br>
   <button type="submit" name="edit_pass" class="btn btn-primary">Cambiar Contraseña</button>
</form>
        </main><!-- /.container -->

<?php include 'includes/bootstrapjava.php'; ?>
</body>
</html>