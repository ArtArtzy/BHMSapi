<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$id=$_POST['id'];
$startTime=$_POST['startTime'];
$endTime=$_POST['endTime'];
// $id=5;
// $startTime=1638378000000;
// $endTime=1640365200000;
$col[0]=($id-1)*5+1;
$col[0]="SG" . $col[0] . "Max";
$col[1]=($id-1)*5+2;
$col[1]="SG" . $col[1] . "Max";
$col[2]=($id-1)*5+3;
$col[2]="SG" . $col[2] . "Max";
$col[3]=($id-1)*5+4;
$col[3]="SG" . $col[3] . "Max";
$col[4]=($id-1)*5+5;
$col[4]="SG" . $col[4] . "Max";
$sql="select ".$col[0] ." , ".$col[1]. " , " .$col[2]. " , " .$col[3]. " , " .$col[4] . " , timestamp from alldaydata where timestamp between ". $startTime. " and " .$endTime. " order by timestamp";

//print_r($col);
// $sql="select"
$result = $db->query($sql)->fetchAll();
// print_r($result);
echo json_encode($result);
?>