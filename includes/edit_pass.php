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

    if(isset($_POST['edit_pass'])) {

            $password1   = escape($_POST['pass1']);
            $password2   = escape($_POST['pass2']);

        if($password1 = $password2) {

            $hashed_password = password_hash($password1, PASSWORD_BCRYPT, array('cost' => 12));
        
        $query = "UPDATE users SET ";
        $query .="pass = '{$hashed_password}' ";
        $query .= "WHERE id = {$the_user_id} ";
     
    

          $edit_user_query = mysqli_query($connection,$query);


          header("Location: users.php"); 
    
        }
    }
?>
