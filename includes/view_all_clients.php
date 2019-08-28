<table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Correo Electronico</th>
                        <th></th>
                        <th></th>
                        <th></th>
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
        echo "<td><a href='edit_client.php?source=edit_client&id={$client_id}'>Editar</a></td>";
        echo "<td><a href='client_history.php?client_id={$client_id}'>Historial</a></td>";
        echo "<td><a href='add_appointment.php?source=add_appointment&id={$client_id}'>Crear Cita</a></td>";
        echo "</tr>";
    }
?>
            </tbody>
</table>