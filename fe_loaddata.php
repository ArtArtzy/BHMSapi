<?php
require_once('connection.php');
$result= $db->select("showdata","*");
echo json_encode($result);
?>