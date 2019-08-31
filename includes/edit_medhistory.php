<?php
if(isset($_POST['edit_modal1'])) {
$the_client_id = escape($_GET['client_id']);

        $histfield1    = escape($_POST['hist1']);
        
        $query = "UPDATE clients SET ";
        $query .="med_hist_1  = '{$histfield1}'";
        $query .= "WHERE id = {$the_client_id} ";

        $edit_client_query = mysqli_query($connection,$query);

        header("Location: client_history.php?client_id=$the_client_id"); 
    }
if(isset($_POST['edit_modal2'])) {
$the_client_id = escape($_GET['client_id']);

        $histfield1    = escape($_POST['hist2']);
        
        $query = "UPDATE clients SET ";
        $query .="med_hist_2  = '{$histfield2}'";
        $query .= "WHERE id = {$the_client_id} ";

        $edit_client_query = mysqli_query($connection,$query);

        header("Location: client_history.php?client_id=$the_client_id"); 
    }
if(isset($_POST['edit_modal3'])) {
$the_client_id = escape($_GET['client_id']);

        $histfield1    = escape($_POST['hist3']);
        
        $query = "UPDATE clients SET ";
        $query .="med_hist_3  = '{$histfield3}'";
        $query .= "WHERE id = {$the_client_id} ";

        $edit_client_query = mysqli_query($connection,$query);

        header("Location: client_history.php?client_id=$the_client_id"); 
    }
    ?>