<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$startTime=$_POST['startTime'];
$endTime=$_POST['endTime'];
$sql = "select * from alldaydata where timestamp between ". $startTime. " and " .$endTime . " order by timestamp";
$sql = "select  
(SG01Avg + SG02Avg + SG03Avg + SG04Avg + SG05Avg)/5 as S01Avg, 

(SG06Avg + SG07Avg + SG08Avg + SG09Avg + SG10Avg)/5 as S02Avg,

(SG11Avg + SG12Avg + SG13Avg + SG14Avg + SG15Avg)/5 as S03Avg,

(SG16Avg + SG17Avg + SG18Avg + SG19Avg + SG20Avg)/5 as S04Avg,

(SG21Avg + SG22Avg + SG23Avg + SG24Avg + SG25Avg)/5 as S05Avg,


(SG26Avg + SG27Avg + SG28Avg + SG29Avg + SG30Avg)/5 as S06Avg,
(SG31Avg + SG32Avg + SG33Avg + SG34Avg + SG35Avg)/5 as S07Avg,
(SG36Avg + SG37Avg + SG38Avg + SG39Avg + SG40Avg)/5 as S08Avg,
(SG41Avg + SG42Avg + SG43Avg + SG44Avg + SG45Avg)/5 as S09Avg,
(SG46Avg + SG47Avg + SG48Avg + SG49Avg + SG50Avg)/5 as S10Avg,
(SG51Avg + SG52Avg + SG53Avg + SG54Avg + SG55Avg)/5 as S11Avg,
(SG56Avg + SG57Avg + SG58Avg + SG59Avg + SG60Avg)/5 as S12Avg,
(SG61Avg + SG62Avg + SG63Avg + SG64Avg + SG65Avg)/5 as S13Avg,
(SG66Avg + SG67Avg + SG68Avg + SG69Avg + SG70Avg)/5 as S14Avg,
(SG71Avg + SG72Avg + SG73Avg + SG74Avg + SG75Avg)/5 as S15Avg,
(SG76Avg + SG77Avg + SG78Avg + SG79Avg + SG80Avg)/5 as S16Avg,
(SG81Avg + SG82Avg + SG83Avg + SG84Avg + SG85Avg)/5 as S17Avg,
(SG86Avg + SG87Avg + SG88Avg + SG89Avg + SG90Avg)/5 as S18Avg,
(SG91Avg + SG92Avg + SG93Avg + SG94Avg + SG95Avg)/5 as S19Avg , timestamp 
from alldaydata where timestamp between ". $startTime. " and " .$endTime . " order by timestamp";

$result = $db->query($sql)->fetchAll();
echo json_encode($result);
?>