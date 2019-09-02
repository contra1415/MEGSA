<?php if(isset($_POST['edit_clienthistory_notes'])) {
$the_client_id = escape($_GET['client_id']);

        $edit_id    = escape($_POST['appid']);
        $edit_notes    = escape($_POST['edit_notes']);
        
        $query = "UPDATE appointment SET ";
        $query .="notes='{$edit_notes}'";
        $query .="WHERE id='{$edit_id }'";

        $edit_clientnotes_query = mysqli_query($connection,$query);

        header("Location: client_history.php?client_id=$the_client_id");
    }
    ?>