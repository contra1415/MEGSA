<?php
    $the_client_id = escape($_GET['client_id']);
    $query = "SELECT * FROM clients WHERE id = {$the_client_id}";
    $select_client = mysqli_query($connection,$query);  
    while($row = mysqli_fetch_assoc($select_client)) {
        $client_id             = $row['id'];
        $client_firstname      = $row['cfname'];
        $client_lastname       = $row['clname'];
        $client_email          = $row['email'];
        $client_phone          = $row['phone'];
        $client_dateofbirth    = $row['dateofbirth'];
        $client_hist1          = $row['med_hist_1'];
        $client_hist2          = $row['med_hist_2'];
        $client_hist3          = $row['med_hist_3'];
    }

    ?>