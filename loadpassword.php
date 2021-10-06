<?php
require_once('connection.php');
$result = $db->select("password","*");
echo json_encode($result);
?>