<table class="table table-hover">
    <thead class="thead-dark">
    <tr>
        <th scope="col" width="10%">Fecha</th>
        <th scope="col" width="90%">Notas de la Cita</th>
        <th scope="col" ></th>
        </tr>
    </thead>
    <tbody>
<?php
    $query = "SELECT * FROM appointments WHERE client_id = {$client_id} ";
    $select_appointments = mysqli_query($connection,$query);  
    while($row = mysqli_fetch_assoc($select_appointments)) {
        $appointment_id              = $row['id'];
        $appointment_date            = $row['date'];
        $notes                       = $row['notes'];
            
        echo "<tr>";
        echo "<td>$appointment_date</td>";
        echo "<td>$notes</td>"; 
        ?><td> <?php include 'includes/edit_notes.php';  ?> </td> <?php
        echo "</tr>";
    }
?>
    </tbody>
</table>