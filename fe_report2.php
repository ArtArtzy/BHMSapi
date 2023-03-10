<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$month=$_POST['month'];
$year=$_POST['year'];

//$month= 11;
//$year = 2022;

$startTimeTemp = $year . "-" . $month . "-1";
// $startTimeTemp = "2022-4-1";
$startTime = strtotime($startTimeTemp);
$endTime =strtotime("+1 month", $startTime);
$startTime *=1000;
$endTime *=1000;

$sql = "select 
min(SG01Max) as SG01, 
min(SG02Max) as SG02,
min(SG03Max) as SG03,
min(SG04Max) as SG04, 
min(SG05Max) as SG05,
min(SG06Max) as SG06,
min(SG07Max) as SG07, 
min(SG08Max) as SG08,
min(SG09Max) as SG09,
min(SG10Max) as SG10, 
min(SG11Max) as SG11,
min(SG12Max) as SG12,
min(SG13Max) as SG13, 
min(SG14Max) as SG14,
min(SG15Max) as SG15,
min(SG16Max) as SG16, 
min(SG17Max) as SG17,
min(SG18Max) as SG18,
min(SG19Max) as SG19, 
min(SG20Max) as SG20,
min(SG21Max) as SG21,
min(SG22Max) as SG22, 
min(SG23Max) as SG23,
min(SG24Max) as SG24,
min(SG25Max) as SG25, 
min(SG26Max) as SG26,
min(SG27Max) as SG27,
min(SG28Max) as SG28, 
min(SG29Max) as SG29,
min(SG30Max) as SG30,
min(SG31Max) as SG31, 
min(SG32Max) as SG32,
min(SG33Max) as SG33,
min(SG34Max) as SG34, 
min(SG35Max) as SG35,
min(SG36Max) as SG36,
min(SG37Max) as SG37, 
min(SG38Max) as SG38,
min(SG39Max) as SG39,
min(SG40Max) as SG40, 
min(SG41Max) as SG41,
min(SG42Max) as SG42,
min(SG43Max) as SG43, 
min(SG44Max) as SG44,
min(SG45Max) as SG45,
min(SG46Max) as SG46, 
min(SG47Max) as SG47,
min(SG48Max) as SG48,
min(SG49Max) as SG49,
min(SG50Max) as SG50,
min(SG51Max) as SG51, 
min(SG52Max) as SG52,
min(SG53Max) as SG53,
min(SG54Max) as SG54, 
min(SG55Max) as SG55,
min(SG56Max) as SG56,
min(SG57Max) as SG57, 
min(SG58Max) as SG58,
min(SG59Max) as SG59,
min(SG60Max) as SG60, 
min(SG61Max) as SG61,
min(SG62Max) as SG62,
min(SG63Max) as SG63, 
min(SG64Max) as SG64,
min(SG65Max) as SG65,
min(SG66Max) as SG66, 
min(SG67Max) as SG67,
min(SG68Max) as SG68,
min(SG69Max) as SG69, 
min(SG70Max) as SG70,
min(SG71Max) as SG71,
min(SG72Max) as SG72, 
min(SG73Max) as SG73,
min(SG74Max) as SG74,
min(SG75Max) as SG75, 
min(SG76Max) as SG76,
min(SG77Max) as SG77,
min(SG78Max) as SG78,
min(SG79Max) as SG79, 
min(SG80Max) as SG80,
min(SG81Max) as SG81,
min(SG82Max) as SG82, 
min(SG83Max) as SG83,
min(SG84Max) as SG84,
min(SG85Max) as SG85, 
min(SG86Max) as SG86,
min(SG87Max) as SG87,
min(SG88Max) as SG88,
min(SG89Max) as SG89, 
min(SG90Max) as SG90,
min(SG91Max) as SG91,
min(SG92Max) as SG92, 
min(SG93Max) as SG93,
min(SG94Max) as SG94,
min(SG95Max) as SG95
 from alldaydata where timestamp between " . $startTime . " and " . $endTime;
// echo $sql;
$result = $db->query($sql)->fetchAll();
echo json_encode($result);
?> 