<?php
ob_start();
session_start();

function redirect($location){
    header("Location:" . $location);
    exit;

}

function escape($string) {
global $connection;
return mysqli_real_escape_string($connection, trim($string));
}

function ifItIsMethod($method=null){
    if($_SERVER['REQUEST_METHOD'] == strtoupper($method)){
        return true;
    }
    return false;
}


 function login_user($username, $password)
 {
     global $connection;


     $username = trim($username);
     $password = trim($password);

     $username = mysqli_real_escape_string($connection, $username);
     $password = mysqli_real_escape_string($connection, $password);


     $query = "SELECT * FROM users WHERE username = '{$username}' ";
     $select_user_query = mysqli_query($connection, $query);
     if (!$select_user_query) {
         die("QUERY FAILED" . mysqli_error($connection));
     }
     while ($row = mysqli_fetch_array($select_user_query)) {

         $db_user_id = $row['id'];
         $db_username = $row['username'];
         $db_user_password = $row['pass'];
         $db_user_firstname = $row['fname'];
         $db_user_lastname = $row['lname'];

         if (password_verify($password,$db_user_password)) {
             $_SESSION['username'] = $db_username;
             $_SESSION['fname'] = $db_user_firstname;
             $_SESSION['lname'] = $db_user_lastname;

             redirect("main.php");
         } else {
             return false;
         }
     }
     return true;
 }
?>