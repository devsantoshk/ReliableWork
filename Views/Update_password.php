<?php

print_r($_REQUEST);

if (isset($_REQUEST['Update_password'])) {

    $conn = DbConfig();
    $sql = "UPDATE users SET password = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    //$stmt->bindParam("", $_REQUEST[""], PDO::
}