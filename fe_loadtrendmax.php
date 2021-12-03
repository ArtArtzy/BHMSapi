<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$startTime=$_POST['startTime'];
$endTime=$_POST['endTime'];
$sql = "select * from alldaydata where timestamp between ". $startTime. " and " .$endTime . " order by timestamp";
$sql = "select 
 
(SG01Max + SG02Max + SG03Max + SG04Max + SG05Max)/5 as S01Max,


(SG06Max + SG07Max + SG08Max + SG09Max + SG10Max)/5 as S02Max,


(SG11Max + SG12Max + SG13Max + SG14Max + SG15Max)/5 as S03Max,

(SG16Max + SG17Max + SG18Max + SG19Max + SG20Max)/5 as S04Max,

(SG21Max + SG22Max + SG23Max + SG24Max + SG25Max)/5 as S05Max,

(SG26Max + SG27Max + SG28Max + SG29Max + SG30Max)/5 as S06Max,

(SG31Max + SG32Max + SG33Max + SG34Max + SG35Max)/5 as S07Max,

(SG36Max + SG37Max + SG38Max + SG39Max + SG40Max)/5 as S08Max,

(SG41Max + SG42Max + SG43Max + SG44Max + SG45Max)/5 as S09Max,

(SG46Max + SG47Max + SG48Max + SG49Max + SG50Max)/5 as S10Max,

(SG51Max + SG52Max + SG53Max + SG54Max + SG55Max)/5 as S11Max,

(SG56Max + SG57Max + SG58Max + SG59Max + SG60Max)/5 as S12Max,

(SG61Max + SG62Max + SG63Max + SG64Max + SG65Max)/5 as S13Max,

(SG66Max + SG67Max + SG68Max + SG69Max + SG70Max)/5 as S14Max,

(SG71Max + SG72Max + SG73Max + SG74Max + SG75Max)/5 as S15Max,

(SG76Max + SG77Max + SG78Max + SG79Max + SG80Max)/5 as S16Max,

(SG81Max + SG82Max + SG83Max + SG84Max + SG85Max)/5 as S17Max,

(SG86Max + SG87Max + SG88Max + SG89Max + SG90Max)/5 as S18Max,

(SG91Max + SG92Max + SG93Max + SG94Max + SG95Max)/5 as S19Max
from alldaydata where timestamp between ". $startTime. " and " .$endTime . " order by timestamp";

$result = $db->query($sql)->fetchAll();
echo json_encode($result);
?>