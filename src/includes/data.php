<?php
include_once("mariadb.php");

$conn = connectDB();

function insertData($conn, $a, $b, $c, $d, $area) {
    $sql = <<<EOT

    insert into calc (
        a_side, b_side, c_side, d_side, area
    ) values ($a, $b, $c, $d, $area)

EOT;
    $conn->query($sql);
}
?>