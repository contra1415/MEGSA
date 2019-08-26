<table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Usuario</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo Electronico</th>
                    </tr>
                </thead>
                
            <tbody>
<?php 
    
    $query = "SELECT * FROM users";
    $select_users = mysqli_query($connection,$query);  
    while($row = mysqli_fetch_assoc($select_users)) {
        $user_id             = $row['id'];
        $username            = $row['username'];
        $user_firstname      = $row['fname'];
        $user_lastname       = $row['lname'];
        $user_email          = $row['email'];
        $user_password       = $row['pass'];
            
        echo "<tr>";
        
        echo "<td>$user_id </td>";
        echo "<td>$username</td>";
        echo "<td>$user_firstname</td>";
        echo "<td>$user_lastname</td>";
        echo "<td>$user_email</td>";
        echo "<td><a href='edit_user.php?source=edit_user&id={$user_id}'>Editar</a></td>";
        echo "<td><a href='users.php?delete={$user_id}'>Eliminar</a></td>";
        echo "<td><a href='edit_user.php?source=edit_user&id={$user_id}'>Editar Contraseña</a></td>";
        echo "</tr>";
    }
?>
            </tbody>
</table>