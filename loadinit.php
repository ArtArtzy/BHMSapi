<?php
require_once('connection.php');
$col = $_GET["col"]+1;
$startSensor  = ($col-1)*5+1;
$resultFinal = array();
for($i=$startSensor;$i<=$startSensor+5;$i++){
    $result = $db->select("initvalue","*",["id"=>$i]);
    array_push($resultFinal,$result[0]['initvalue']);
}
echo json_encode($resultFinal);
?>