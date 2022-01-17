<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$month=$_POST['month'];
$year=$_POST['year'];

// $month= 4;
// $year = 2022;

$startTimeTemp = $year . "-" . $month . "-1";
// $startTimeTemp = "2022-4-1";
$startTime = strtotime($startTimeTemp);
$endTime =strtotime("+1 month", $startTime);
$startTime *=1000;
$endTime *=1000;

$sql = "select 
max(SG01Max) as SG01, 
max(SG02Max) as SG02,
max(SG03Max) as SG03,
max(SG04Max) as SG04, 
max(SG05Max) as SG05,
max(SG06Max) as SG06,
max(SG07Max) as SG07, 
max(SG08Max) as SG08,
max(SG09Max) as SG09,
max(SG10Max) as SG10, 
max(SG11Max) as SG11,
max(SG12Max) as SG12,
max(SG13Max) as SG13, 
max(SG14Max) as SG14,
max(SG15Max) as SG15,
max(SG16Max) as SG16, 
max(SG17Max) as SG17,
max(SG18Max) as SG18,
max(SG19Max) as SG19, 
max(SG20Max) as SG20,
max(SG21Max) as SG21,
max(SG22Max) as SG22, 
max(SG23Max) as SG23,
max(SG24Max) as SG24,
max(SG25Max) as SG25, 
max(SG26Max) as SG26,
max(SG27Max) as SG27,
max(SG28Max) as SG28, 
max(SG29Max) as SG29,
max(SG30Max) as SG30,
max(SG31Max) as SG31, 
max(SG32Max) as SG32,
max(SG33Max) as SG33,
max(SG34Max) as SG34, 
max(SG35Max) as SG35,
max(SG36Max) as SG36,
max(SG37Max) as SG37, 
max(SG38Max) as SG38,
max(SG39Max) as SG39,
max(SG40Max) as SG40, 
max(SG41Max) as SG41,
max(SG42Max) as SG42,
max(SG43Max) as SG43, 
max(SG44Max) as SG44,
max(SG45Max) as SG45,
max(SG46Max) as SG46, 
max(SG47Max) as SG47,
max(SG48Max) as SG48,
max(SG49Max) as SG49,
max(SG50Max) as SG50,
max(SG51Max) as SG51, 
max(SG52Max) as SG52,
max(SG53Max) as SG53,
max(SG54Max) as SG54, 
max(SG55Max) as SG55,
max(SG56Max) as SG56,
max(SG57Max) as SG57, 
max(SG58Max) as SG58,
max(SG59Max) as SG59,
max(SG60Max) as SG60, 
max(SG61Max) as SG61,
max(SG62Max) as SG62,
max(SG63Max) as SG63, 
max(SG64Max) as SG64,
max(SG65Max) as SG65,
max(SG66Max) as SG66, 
max(SG67Max) as SG67,
max(SG68Max) as SG68,
max(SG69Max) as SG69, 
max(SG70Max) as SG70,
max(SG71Max) as SG71,
max(SG72Max) as SG72, 
max(SG73Max) as SG73,
max(SG74Max) as SG74,
max(SG75Max) as SG75, 
max(SG76Max) as SG76,
max(SG77Max) as SG77,
max(SG78Max) as SG78,
max(SG79Max) as SG79, 
max(SG80Max) as SG80,
max(SG81Max) as SG81,
max(SG82Max) as SG82, 
max(SG83Max) as SG83,
max(SG84Max) as SG84,
max(SG85Max) as SG85, 
max(SG86Max) as SG86,
max(SG87Max) as SG87,
max(SG88Max) as SG88,
max(SG89Max) as SG89, 
max(SG90Max) as SG90,
max(SG91Max) as SG91,
max(SG92Max) as SG92, 
max(SG93Max) as SG93,
max(SG94Max) as SG94,
max(SG95Max) as SG95
 from alldaydata where timestamp between " . $startTime . " and " . $endTime;
// echo $sql;
$result = $db->query($sql)->fetchAll();
echo json_encode($result);
?> 