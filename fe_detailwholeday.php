<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$id=$_POST['id'];
$startTime=$_POST['startTime'];
$endTime=$_POST['endTime'];
// $id=2;
// $startTime=1635699600000;
// $endTime=1640883600000;
if($id <=2){
    $prefix = "SG0";
} else {
    $prefix = "SG";
}
$col[0]=($id-1)*5+1;
$col[0]=$prefix . $col[0] . "Max";
$col[1]=($id-1)*5+2;
$col[1]=$prefix . $col[1] . "Max";
$col[2]=($id-1)*5+3;
$col[2]=$prefix . $col[2] . "Max";
$col[3]=($id-1)*5+4;
$col[3]=$prefix . $col[3] . "Max";
$col[4]=($id-1)*5+5;
if($col[4]==10){
    $col[4]='SG' . $col[4] . "Max";
}else{
    $col[4]=$prefix . $col[4] . "Max";
}

$sql="select ".$col[0] ." , ".$col[1]. " , " .$col[2]. " , " .$col[3]. " , " .$col[4] . " , timestamp from alldaydata where timestamp between ". $startTime. " and " .$endTime. " order by timestamp";
// echo $sql;
// print_r($col);
// $sql="select"
$result = $db->query($sql)->fetchAll();
// print_r($result);
echo json_encode($result);
?>