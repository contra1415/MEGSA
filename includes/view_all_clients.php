<table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Telefono</th>
                        <th>Correo Electronico</th>
                    </tr>
                </thead>
                
            <tbody>
<?php 
    
    $query = "SELECT * FROM clients";
    $select_clients = mysqli_query($connection,$query);  
    while($row = mysqli_fetch_assoc($select_clients)) {
        $client_id             = $row['id'];
        $client_firstname      = $row['cfname'];
        $client_lastname       = $row['clname'];
        $client_email          = $row['email'];
        $client_phone       = $row['phone'];
        $client_dateofbirth = $row['dateofbirth'];
            
        echo "<tr>";
        
        echo "<td>$client_id </td>";
        echo "<td>$client_firstname</td>";
        echo "<td>$client_lastname</td>";
        echo "<td>$client_dateofbirth</td>";
        echo "<td>$client_phone</td>";
        echo "<td>$client_email</td>";
        echo "<td>$client_email</td>";
        echo "<td><a href='edit_client.php?source=edit_client&id={$client_id}'>Editar</a></td>";
        echo "<td><a href='client_history.php?client_id={$client_id}'>Historial</a></td>";
        echo "<td><a href='add_appointment.php?source=add_appointment&id={$client_id}'>Crear Cita</a></td>";
        echo "</tr>";
    }
?>
            </tbody>
</table>