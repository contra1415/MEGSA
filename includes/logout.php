<?php ob_start(); ?>
<?php session_start(); ?>

<?php 

$_SESSION['username'] = null;
$_SESSION['firstname'] = null;
$_SESSION['lastname'] = null;

    
header("Location: ../index.php");

?>

