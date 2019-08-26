<?php
    $the_user_id = escape($_GET['id']);
    $query = "SELECT * FROM users WHERE id = {$the_user_id}";
    $select_users = mysqli_query($connection,$query);  
    while($row = mysqli_fetch_assoc($select_users)) {
        $user_id             = $row['id'];
        $username            = $row['username'];
        $user_firstname      = $row['fname'];
        $user_lastname       = $row['lname'];
        $user_email          = $row['email'];
    }

    if(isset($_POST['edit_user'])) {

            $user_firstname   = escape($_POST['fname']);
            $user_lastname    = escape($_POST['lname']);
            $username      = escape($_POST['user']);
            $user_email    = escape($_POST['email']);

        
        $query = "UPDATE users SET ";
        $query .="fname  = '{$user_firstname}', ";
        $query .="lname = '{$user_lastname}', ";
        $query .="username = '{$username}', ";
        $query .="email = '{$user_email}' ";
        $query .= "WHERE id = {$the_user_id} ";
     
    

          $edit_user_query = mysqli_query($connection,$query);


          header("Location: users.php"); 
    
    
    }
?>
