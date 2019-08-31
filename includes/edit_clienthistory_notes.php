<?php if(isset($_POST['edit_clienthistory_notes'])) {
$the_client_id = escape($_GET['client_id']);

        $edit_date    = escape($_POST['date']);
        $edit_user    = escape($_POST['user']);
        $edit_notes    = escape($_POST['edit_notes']);
        
        $query = "UPDATE appointment SET ";
        $query .="med_hist_3  = '{$histfield3}'";
        $query .= "WHERE id = {$the_client_id} ";

        $edit_client_query = mysqli_query($connection,$query);

        header("Location: client_history.php?client_id=$the_client_id"); 
    }
    ?>