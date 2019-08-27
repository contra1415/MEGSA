<!DOCTYPE html>
<html lang="en">
<?php 
include 'includes/functions.php';
include 'includes/header.php';
include 'includes/psecure.php';  
include 'includes/navbar.php'; 
include 'includes/db.php';?>


<body>

    <main role="main" class="container">

        <div class="text-center mt-5 pt-5">
            <h1>Administracion de Usuarios</h1>
<br>
<div class="text-left">
<a href='add_user.php'>+ agregar usuario </a>   
</div>
<br>
<?php include 'includes/view_all_users.php'; ?>
<?php 
if(isset($_GET['delete'])){
        $the_user_id = escape($_GET['delete']);
        $query = "DELETE FROM users WHERE id = {$the_user_id} ";
        $delete_user_query = mysqli_query($connection, $query);
        header("Location: users.php");
            }  
?>
    </main><!-- /.container -->


<?php include 'includes/bootstrapjava.php'; ?>
</body>
</html>