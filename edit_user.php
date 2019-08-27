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
<h1>Editar Usuario</h1>
            <br>
<?php include 'includes/edit_user.php' ; ?>
            <br>

<form action="" method="post" enctype="multipart/form-data">
<div class="form-row">
<label for="fname">Nombres</label>
    <div class="form-group col-md-6">
          <input id="fname" type="fname" class="form-control" name="fname" placeholder="First Name" value="<?php echo $user_firstname; ?>">
    </div>
</div>
<div class="form-row">
<label for="lname">Apellidos</label>    
    <div class="form-group col-md-6">
      <input type="lname" class="form-control" name="lname" placeholder="Last Name" value="<?php echo $user_lastname; ?>">
    </div>
</div>
<div class="form-row">
<label for="user">Usuario</label>
    <div class="form-group col-md-4">
      <input type="text" class="form-control" name="user" placeholder="Usuario" value="<?php echo $username; ?>">
    </div>
</div>
<div class="form-row">
<label for="email">Correo Electronico</label>
    <div class="form-group col-md-4">
      <input type="text" class="form-control" name="email" placeholder="Correo Electronico" value="<?php echo $user_email; ?>">
    </div>
</div>
<br>
   <button type="submit" name="edit_user" class="btn btn-primary">Editar Usuario</button>
</form>
        </main><!-- /.container -->

<?php include 'includes/bootstrapjava.php'; ?>
</body>
</html>