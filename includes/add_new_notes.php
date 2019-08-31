<?php

   if(isset($_POST['add_notes'])) {
       
            
            $notes_date               = $_POST['date'];
            $notes_notes              = $_POST['add_notes'];
            $notes_client_id          = $the_client_id;
            $notes_creator            = $_POST['user'];



              
            $query = "INSERT INTO appointments(date, notes, client_id,creator) ";
                 
            $query .= "VALUES('{$notes_date}','{$notes_notes}','{$notes_client_id}','{$notes_creator}') "; 
                 
            $create_notes_query = mysqli_query($connection, $query);  
              
  
       
            header("Location: client_history.php?client_id=$the_client_id");
   }

?>