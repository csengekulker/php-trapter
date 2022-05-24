<?php
    include_once('../src/includes/mariadb.php');
    include_once('../src/includes/data.php');

    $conn = connectDB();

    insertData($conn, 30, 35, 40, 45, 525);

?>