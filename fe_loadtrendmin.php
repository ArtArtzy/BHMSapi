<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$startTime=$_POST['startTime'];
$endTime=$_POST['endTime'];
$sql = "select * from alldaydata where timestamp between ". $startTime. " and " .$endTime . " order by timestamp";
$sql = "select 
(SG01Min + SG02Min + SG03Min + SG04Min + SG05Min)/5 as S01Min, 

(SG06Min + SG07Min + SG08Min + SG09Min + SG10Min)/5 as S02Min,

(SG11Min + SG12Min + SG13Min + SG14Min + SG15Min)/5 as S03Min,

(SG16Min + SG17Min + SG18Min + SG19Min + SG20Min)/5 as S04Min,

(SG21Min + SG22Min + SG23Min + SG24Min + SG25Min)/5 as S05Min,

(SG26Min + SG27Min + SG28Min + SG29Min + SG30Min)/5 as S06Min,

(SG31Min + SG32Min + SG33Min + SG34Min + SG35Min)/5 as S07Min,

(SG36Min + SG37Min + SG38Min + SG39Min + SG40Min)/5 as S08Min,

(SG41Min + SG42Min + SG43Min + SG44Min + SG45Min)/5 as S09Min,

(SG46Min + SG47Min + SG48Min + SG49Min + SG50Min)/5 as S10Min,

(SG51Min + SG52Min + SG53Min + SG54Min + SG55Min)/5 as S11Min,

(SG56Min + SG57Min + SG58Min + SG59Min + SG60Min)/5 as S12Min,

(SG61Min + SG62Min + SG63Min + SG64Min + SG65Min)/5 as S13Min,

(SG66Min + SG67Min + SG68Min + SG69Min + SG70Min)/5 as S14Min,

(SG71Min + SG72Min + SG73Min + SG74Min + SG75Min)/5 as S15Min,

(SG76Min + SG77Min + SG78Min + SG79Min + SG80Min)/5 as S16Min,

(SG81Min + SG82Min + SG83Min + SG84Min + SG85Min)/5 as S17Min,

(SG86Min + SG87Min + SG88Min + SG89Min + SG90Min)/5 as S18Min,

(SG91Min + SG92Min + SG93Min + SG94Min + SG95Min)/5 as S19Min 
from alldaydata where timestamp between ". $startTime. " and " .$endTime . " order by timestamp";

$result = $db->query($sql)->fetchAll();
echo json_encode($result);
?>