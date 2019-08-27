<?php

   if(isset($_POST['create_client'])) {
       
            
            $client_firstname    = $_POST['cfname'];
            $client_lastname     = $_POST['clname'];
            $dateofbirth          = $_POST['dateofbirth'];
            $client_phone        = $_POST['phone'];
            $client_email     = $_POST['email'];


              
            $query = "INSERT INTO clients(cfname, clname, dateofbirth,phone,email) ";
                 
            $query .= "VALUES('{$client_firstname}','{$client_lastname}','{$dateofbirth}','{$client_phone}', '{$client_email}') "; 
                 
            $create_client_query = mysqli_query($connection, $query);  
              
  
       
            header("Location: clients.php"); 
   }

?>