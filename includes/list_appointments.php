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
<<<<<<< HEAD
        echo "<td>$notes</td>"; 
        echo "<td>Editar</td>";
=======
        echo "<td>$notes</td>";
        echo "<td><a href='edit_client_notes.php?source=edit_client&id={$client_id}'>Editar</a></td>";
>>>>>>> 2c8eeb808f49a674e4e3339111d45e59c7206053
        echo "</tr>";
    }
?>
    </tbody>
</table>