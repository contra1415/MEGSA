<?php
    $the_client_id = escape($_GET['id']);
    $query = "SELECT * FROM clients WHERE id = {$the_client_id}";
    $select_client = mysqli_query($connection,$query);  
    while($row = mysqli_fetch_assoc($select_client)) {
        $client_id             = $row['id'];
        $client_firstname      = $row['cfname'];
        $client_lastname       = $row['clname'];
        $dateofbirth           = $row['dateofbirth'];
        $client_phone          = $row['phone'];
        $client_email          = $row['email'];
    }

    if(isset($_POST['edit_client'])) {

            $cfirstname    = escape($_POST['cfname']);
            $clastname     = escape($_POST['clname']);
            $dob           = escape($_POST['dob']);
            $phone         = escape($_POST['phone']);
            $email         = escape($_POST['email']);

        
        $query = "UPDATE clients SET ";
        $query .="cfname  = '{$cfirstname}', ";
        $query .="clname = '{$clastname}', ";
        $query .="dateofbirth = '{$dob}', ";
        $query .="phone = '{$phone}', ";
        $query .="email = '{$email}' ";
        $query .= "WHERE id = {$the_client_id} ";
     
    

          $edit_client_query = mysqli_query($connection,$query);


          header("Location: clients.php"); 
    
    
    }
?>
