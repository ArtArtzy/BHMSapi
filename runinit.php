<?php
require_once('connection.php');
for($i=1;$i<=95;$i++){
    $result = $db->insert("initvalue",[
        "id"=>$i,
        "initvalue"=>0
    ]);    
}

?>