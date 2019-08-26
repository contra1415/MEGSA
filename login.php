<?php
include 'includes/db.php' ;
include 'includes/functions.php';


		if(ifItIsMethod('post')){
			if(isset($_POST['username']) && isset($_POST['password'])){
				login_user($_POST['username'], $_POST['password']);
				$_SESSION['username'] = $_POST['username'];
			}else {
				redirect('index.php');
			}
		}
redirect('index.php');
?>