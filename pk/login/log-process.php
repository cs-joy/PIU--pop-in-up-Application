<?php

require_once('../config.php');

$query = "SELECT * FROM piu_users";
$stmtselect = $con->prepare($query);
$result = $stmtselect->execute([]);

if($result) {
    echo "Success";
} else {
    echo "Error!";
}