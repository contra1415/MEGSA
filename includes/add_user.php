<?php

   if(isset($_POST['create_user'])) {
       
            
            $user_firstname    = $_POST['fname'];
            $user_lastname     = $_POST['lname'];
            $username          = $_POST['user'];
            $user_email        = $_POST['email'];
            $user_password     = $_POST['pass'];



            $user_password = password_hash($user_password, PASSWORD_BCRYPT, array('cost' => 10));    
              
            $query = "INSERT INTO users(fname, lname, username,email,pass) ";
                 
            $query .= "VALUES('{$user_firstname}','{$user_lastname}','{$username}','{$user_email}', '{$user_password}') "; 
                 
            $create_user_query = mysqli_query($connection, $query);  
              
  
       
            header("Location: users.php"); 
   }

?>