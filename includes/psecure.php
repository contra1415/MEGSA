<?php if (!isset($_SESSION['username']))
    header("Location: includes/logout.php");
    ?>