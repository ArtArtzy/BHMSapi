<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$startTime=$_POST['startTime'];
$endTime=$_POST['endTime'];
$sql = "select * from alldaydata where timestamp between ". $startTime. " and " .$endTime . " order by timestamp";
$sql = "select 
(SG01Min + SG02Min + SG03Min + SG04Min + SG05Min)/5 as S01Min, 
(SG01Avg + SG02Avg + SG03Avg + SG04Avg + SG05Avg)/5 as S01Avg, 
(SG01Max + SG02Max + SG03Max + SG04Max + SG05Max)/5 as S01Max,

(SG06Min + SG07Min + SG08Min + SG09Min + SG10Min)/5 as S02Min,
(SG06Avg + SG07Avg + SG08Avg + SG09Avg + SG10Avg)/5 as S02Avg,
(SG06Max + SG07Max + SG08Max + SG09Max + SG10Max)/5 as S02Max,

(SG11Min + SG12Min + SG13Min + SG14Min + SG15Min)/5 as S03Min,
(SG11Avg + SG12Avg + SG13Avg + SG14Avg + SG15Avg)/5 as S03Avg,
(SG11Max + SG12Max + SG13Max + SG14Max + SG15Max)/5 as S03Max,

(SG16Min + SG17Min + SG18Min + SG19Min + SG20Min)/5 as S04Min,
(SG16Avg + SG17Avg + SG18Avg + SG19Avg + SG20Avg)/5 as S04Avg,(SG16Max + SG17Max + SG18Max + SG19Max + SG20Max)/5 as S04Max,

(SG21Min + SG22Min + SG23Min + SG24Min + SG25Min)/5 as S05Min,
(SG21Avg + SG22Avg + SG23Avg + SG24Avg + SG25Avg)/5 as S05Avg,(SG21Max + SG22Max + SG23Max + SG24Max + SG25Max)/5 as S05Max,

(SG26Min + SG27Min + SG28Min + SG29Min + SG30Min)/5 as S06Min,
(SG26Avg + SG27Avg + SG28Avg + SG29Avg + SG30Avg)/5 as S06Avg,(SG26Max + SG27Max + SG28Max + SG29Max + SG30Max)/5 as S06Max,

(SG31Min + SG32Min + SG33Min + SG34Min + SG35Min)/5 as S07Min,
(SG31Avg + SG32Avg + SG33Avg + SG34Avg + SG35Avg)/5 as S07Avg,(SG31Max + SG32Max + SG33Max + SG34Max + SG35Max)/5 as S07Max,

(SG36Min + SG37Min + SG38Min + SG39Min + SG40Min)/5 as S08Min,
(SG36Avg + SG37Avg + SG38Avg + SG39Avg + SG40Avg)/5 as S08Avg,(SG36Max + SG37Max + SG38Max + SG39Max + SG40Max)/5 as S08Max,

(SG41Min + SG42Min + SG43Min + SG44Min + SG45Min)/5 as S09Min,
(SG41Avg + SG42Avg + SG43Avg + SG44Avg + SG45Avg)/5 as S09Avg,(SG41Max + SG42Max + SG43Max + SG44Max + SG45Max)/5 as S09Max,

(SG46Min + SG47Min + SG48Min + SG49Min + SG50Min)/5 as S10Min,
(SG46Avg + SG47Avg + SG48Avg + SG49Avg + SG50Avg)/5 as S10Avg,(SG46Max + SG47Max + SG48Max + SG49Max + SG50Max)/5 as S10Max,

(SG51Min + SG52Min + SG53Min + SG54Min + SG55Min)/5 as S11Min,
(SG51Avg + SG52Avg + SG53Avg + SG54Avg + SG55Avg)/5 as S11Avg,(SG51Max + SG52Max + SG53Max + SG54Max + SG55Max)/5 as S11Max,

(SG56Min + SG57Min + SG58Min + SG59Min + SG60Min)/5 as S12Min,
(SG56Avg + SG57Avg + SG58Avg + SG59Avg + SG60Avg)/5 as S12Avg,(SG56Max + SG57Max + SG58Max + SG59Max + SG60Max)/5 as S12Max,

(SG61Min + SG62Min + SG63Min + SG64Min + SG65Min)/5 as S13Min,
(SG61Avg + SG62Avg + SG63Avg + SG64Avg + SG65Avg)/5 as S13Avg,(SG61Max + SG62Max + SG63Max + SG64Max + SG65Max)/5 as S13Max,

(SG66Min + SG67Min + SG68Min + SG69Min + SG70Min)/5 as S14Min,
(SG66Avg + SG67Avg + SG68Avg + SG69Avg + SG70Avg)/5 as S14Avg,(SG66Max + SG67Max + SG68Max + SG69Max + SG70Max)/5 as S14Max,

(SG71Min + SG72Min + SG73Min + SG74Min + SG75Min)/5 as S15Min,
(SG71Avg + SG72Avg + SG73Avg + SG74Avg + SG75Avg)/5 as S15Avg,(SG71Max + SG72Max + SG73Max + SG74Max + SG75Max)/5 as S15Max,

(SG76Min + SG77Min + SG78Min + SG79Min + SG80Min)/5 as S16Min,
(SG76Avg + SG77Avg + SG78Avg + SG79Avg + SG80Avg)/5 as S16Avg,(SG76Max + SG77Max + SG78Max + SG79Max + SG80Max)/5 as S16Max,

(SG81Min + SG82Min + SG83Min + SG84Min + SG85Min)/5 as S17Min,
(SG81Avg + SG82Avg + SG83Avg + SG84Avg + SG85Avg)/5 as S17Avg,(SG81Max + SG82Max + SG83Max + SG84Max + SG85Max)/5 as S17Max,

(SG86Min + SG87Min + SG88Min + SG89Min + SG90Min)/5 as S18Min,
(SG86Avg + SG87Avg + SG88Avg + SG89Avg + SG90Avg)/5 as S18Avg,(SG86Max + SG87Max + SG88Max + SG89Max + SG90Max)/5 as S18Max,

(SG91Min + SG92Min + SG93Min + SG94Min + SG95Min)/5 as S19Min,
(SG91Avg + SG92Avg + SG93Avg + SG94Avg + SG95Avg)/5 as S19Avg,(SG91Max + SG92Max + SG93Max + SG94Max + SG95Max)/5 as S19Max
from alldaydata where timestamp between ". $startTime. " and " .$endTime . " order by timestamp";

$result = $db->query($sql)->fetchAll();
echo json_encode($result);
?>