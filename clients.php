<!DOCTYPE html>
<html lang="en">
<?php 
include 'includes/functions.php';
include 'includes/header.php';
include 'includes/psecure.php';  
include 'includes/navbar.php'; 
include 'includes/db.php';?>


<body>
    <main role="main" class="container-fluid">
        <div class="text-center mt-5 pt-5">
            <h1>Listado de Pacientes</h1>
<br>
<div class="text-left">
<a href='add_client.php'>+ agregar paciente </a>   
</div>
<br>
<?php include 'includes/view_all_clients.php'; ?>

    </main><!-- /.container -->


<?php include 'includes/bootstrapjava.php'; ?>
</body>
</html>