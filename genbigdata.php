<?php
require_once('connection.php');
function float_rand($min,$max){
    $temp = (rand()/(getrandmax()))*$max;
    while($temp<$min){
    $temp = (rand()/(getrandmax()))*$max;
    }
    return number_format($temp,4,'.','');
}
$dayuse=1000;
$startDate =(new DateTime())->getTimestamp();

$min[100];
$max[100];
$avg[100];
$slope[100];
$data[3];

echo "\n";
echo $date = $startDate;
echo "\n";
echo $date= date("Y-d-m");
$tomorrow = date('Y-d-m',strtotime($date . "+1 days"));
echo "\n";
echo strtotime($tomorrow);
echo "\n";
echo $tomorrow;
echo "\n";


for($k=0;$k<96;$k++){   ///       int random $min $max $avg for strain 96 ea
    $min[$k]=float_rand(0,100);
    $max[$k]=float_rand(101,400);
    $avg[$k]=float_rand($min[$k],$max[$k]);
    $slope[$k]=float_rand(0.1,4);
}
// print_r($min);
// print_r($max);
// print_r($avg);
// return;

// for($k=1;$k<96;$k++){
// echo "\nmax is : " .$max[$k]. "\nmin is : " .$min[$k]. "\navg is : " .$avg[$k]. "\nslope is : " .$slope[$k]. "\n";
// }

// for($j=0;$j<10;$j++){
//     for($i=0;$i<5;$i++) {
//     $data[0]=$min[$j]+$i*$slope[$j];
//     $data[2]=$max[$j]+$i*$slope[$j];
//     $data[1]=$avg[$j]+$i*$slope[$j];
//       echo "\n" . $data[0] . "  :  " . $data[1] . "  :  " . $data[2] . "\n";
//     }
//     echo "\n\n\n";
// }

for($d=0;$d<$dayuse;$d++){          // day
    $today = date('d-m-Y',strtotime($today . "+1 days"));
    $dateArray = explode("-",$today);
    $today2 = $dateArray[2]. "-" . $dateArray[0] . "-" . $dateArray[1];
  
    // echo "\n";
    // echo $today;
    // echo " : ";
    // echo strtotime($today);
    for($k=1;$k>=0;$k--){
            if($k==1) {
                $dayNight=0;
            }

            else {
                $dayNight=float_rand(1,10);
            }
            // n=0 day , n=1 night
            $db->insert('daynightdata',["timestamp"=> strtotime($today)*1000,
            "date"=>$today2,
            "duration"=>$k,
            "sync24"=>0,
            "SG01Avg"=> $avg[1]+$d*$slope[1]+$dayNight,
            "SG01Max"=> $max[1]+$d*$slope[1]+$dayNight,
            "SG01Min"=> $min[1]+$d*$slope[1]+$dayNight,
            "SG02Avg"=> $avg[2]+$d*$slope[2]+$dayNight,
            "SG02Max"=> $max[2]+$d*$slope[2]+$dayNight,
            "SG02Min"=> $min[2]+$d*$slope[2]+$dayNight,
            "SG03Avg"=> $avg[3]+$d*$slope[3]+$dayNight,
            "SG03Max"=> $max[3]+$d*$slope[3]+$dayNight,
            "SG03Min"=> $min[3]+$d*$slope[3]+$dayNight,
            "SG04Avg"=> $avg[4]+$d*$slope[4]+$dayNight,
            "SG04Max"=> $max[4]+$d*$slope[4]+$dayNight,
            "SG04Min"=> $min[4]+$d*$slope[4]+$dayNight,
            "SG05Avg"=> $avg[5]+$d*$slope[5]+$dayNight,
            "SG05Max"=> $max[5]+$d*$slope[5]+$dayNight,
            "SG05Min"=> $min[5]+$d*$slope[5]+$dayNight,
            "SG06Avg"=> $avg[6]+$d*$slope[6]+$dayNight,
            "SG06Max"=> $max[6]+$d*$slope[6]+$dayNight,
            "SG06Min"=> $min[6]+$d*$slope[6]+$dayNight,
            "SG07Avg"=> $avg[7]+$d*$slope[7]+$dayNight,
            "SG07Max"=> $max[7]+$d*$slope[7]+$dayNight,
            "SG07Min"=> $min[7]+$d*$slope[7]+$dayNight,
            "SG08Avg"=> $avg[8]+$d*$slope[8]+$dayNight,
            "SG08Max"=> $max[8]+$d*$slope[8]+$dayNight,
            "SG08Min"=> $min[8]+$d*$slope[8]+$dayNight,
            "SG09Avg"=> $avg[9]+$d*$slope[9]+$dayNight,
            "SG09Max"=> $max[9]+$d*$slope[9]+$dayNight,
            "SG09Min"=> $min[9]+$d*$slope[9]+$dayNight,
            "SG10Avg"=> $avg[10]+$d*$slope[10]+$dayNight,
            "SG10Max"=> $max[10]+$d*$slope[10]+$dayNight,
            "SG10Min"=> $min[10]+$d*$slope[10]+$dayNight,
            "SG11Avg"=> $avg[11]+$d*$slope[11]+$dayNight,
            "SG11Max"=> $max[11]+$d*$slope[11]+$dayNight,
            "SG11Min"=> $min[11]+$d*$slope[11]+$dayNight,
            "SG12Avg"=> $avg[12]+$d*$slope[12]+$dayNight,
            "SG12Max"=> $max[12]+$d*$slope[12]+$dayNight,
            "SG12Min"=> $min[12]+$d*$slope[12]+$dayNight,
            "SG13Avg"=> $avg[13]+$d*$slope[13]+$dayNight,
            "SG13Max"=> $max[13]+$d*$slope[13]+$dayNight,
            "SG13Min"=> $min[13]+$d*$slope[13]+$dayNight,
            "SG14Avg"=> $avg[14]+$d*$slope[14]+$dayNight,
            "SG14Max"=> $max[14]+$d*$slope[14]+$dayNight,
            "SG14Min"=> $min[14]+$d*$slope[14]+$dayNight,
            "SG15Avg"=> $avg[15]+$d*$slope[15]+$dayNight,
            "SG15Max"=> $max[15]+$d*$slope[15]+$dayNight,
            "SG15Min"=> $min[15]+$d*$slope[15]+$dayNight,
            "SG16Avg"=> $avg[16]+$d*$slope[16]+$dayNight,
            "SG16Max"=> $max[16]+$d*$slope[16]+$dayNight,
            "SG16Min"=> $min[16]+$d*$slope[16]+$dayNight,
            "SG17Avg"=> $avg[17]+$d*$slope[17]+$dayNight,
            "SG17Max"=> $max[17]+$d*$slope[17]+$dayNight,
            "SG17Min"=> $min[17]+$d*$slope[17]+$dayNight,
            "SG18Avg"=> $avg[18]+$d*$slope[18]+$dayNight,
            "SG18Max"=> $max[18]+$d*$slope[18]+$dayNight,
            "SG18Min"=> $min[18]+$d*$slope[18]+$dayNight,
            "SG19Avg"=> $avg[19]+$d*$slope[19]+$dayNight,
            "SG19Max"=> $max[19]+$d*$slope[19]+$dayNight,
            "SG19Min"=> $min[19]+$d*$slope[19]+$dayNight,
            
            "SG20Avg"=> $avg[20]+$d*$slope[20]+$dayNight,
            "SG20Max"=> $max[20]+$d*$slope[20]+$dayNight,
            "SG20Min"=> $min[20]+$d*$slope[20]+$dayNight,
            "SG21Avg"=> $avg[21]+$d*$slope[21]+$dayNight,
            "SG21Max"=> $max[21]+$d*$slope[21]+$dayNight,
            "SG21Min"=> $min[21]+$d*$slope[21]+$dayNight,
            "SG22Avg"=> $avg[22]+$d*$slope[22]+$dayNight,
            "SG22Max"=> $max[22]+$d*$slope[22]+$dayNight,
            "SG22Min"=> $min[22]+$d*$slope[22]+$dayNight,
            "SG23Avg"=> $avg[23]+$d*$slope[23]+$dayNight,
            "SG23Max"=> $max[23]+$d*$slope[23]+$dayNight,
            "SG23Min"=> $min[23]+$d*$slope[23]+$dayNight,
            "SG24Avg"=> $avg[24]+$d*$slope[24]+$dayNight,
            "SG24Max"=> $max[24]+$d*$slope[24]+$dayNight,
            "SG24Min"=> $min[24]+$d*$slope[24]+$dayNight,
            "SG25Avg"=> $avg[25]+$d*$slope[25]+$dayNight,
            "SG25Max"=> $max[25]+$d*$slope[25]+$dayNight,
            "SG25Min"=> $min[25]+$d*$slope[25]+$dayNight,
            "SG26Avg"=> $avg[26]+$d*$slope[26]+$dayNight,
            "SG26Max"=> $max[26]+$d*$slope[26]+$dayNight,
            "SG26Min"=> $min[26]+$d*$slope[26]+$dayNight,
            "SG27Avg"=> $avg[27]+$d*$slope[27]+$dayNight,
            "SG27Max"=> $max[27]+$d*$slope[27]+$dayNight,
            "SG27Min"=> $min[27]+$d*$slope[27]+$dayNight,
            "SG28Avg"=> $avg[28]+$d*$slope[28]+$dayNight,
            "SG28Max"=> $max[28]+$d*$slope[28]+$dayNight,
            "SG28Min"=> $min[28]+$d*$slope[28]+$dayNight,
            "SG29Avg"=> $avg[29]+$d*$slope[29]+$dayNight,
            "SG29Max"=> $max[29]+$d*$slope[29]+$dayNight,
            "SG29Min"=> $min[29]+$d*$slope[29]+$dayNight,
            
            "SG30Avg"=> $avg[30]+$d*$slope[30]+$dayNight,
            "SG30Max"=> $max[30]+$d*$slope[30]+$dayNight,
            "SG30Min"=> $min[30]+$d*$slope[30]+$dayNight,
            "SG31Avg"=> $avg[31]+$d*$slope[31]+$dayNight,
            "SG31Max"=> $max[31]+$d*$slope[31]+$dayNight,
            "SG31Min"=> $min[31]+$d*$slope[31]+$dayNight,
            "SG32Avg"=> $avg[32]+$d*$slope[32]+$dayNight,
            "SG32Max"=> $max[32]+$d*$slope[32]+$dayNight,
            "SG32Min"=> $min[32]+$d*$slope[32]+$dayNight,
            "SG33Avg"=> $avg[33]+$d*$slope[33]+$dayNight,
            "SG33Max"=> $max[33]+$d*$slope[33]+$dayNight,
            "SG33Min"=> $min[33]+$d*$slope[33]+$dayNight,
            "SG34Avg"=> $avg[34]+$d*$slope[34]+$dayNight,
            "SG34Max"=> $max[34]+$d*$slope[34]+$dayNight,
            "SG34Min"=> $min[34]+$d*$slope[34]+$dayNight,
            "SG35Avg"=> $avg[35]+$d*$slope[35]+$dayNight,
            "SG35Max"=> $max[35]+$d*$slope[35]+$dayNight,
            "SG35Min"=> $min[35]+$d*$slope[35]+$dayNight,
            "SG36Avg"=> $avg[36]+$d*$slope[36]+$dayNight,
            "SG36Max"=> $max[36]+$d*$slope[36]+$dayNight,
            "SG36Min"=> $min[36]+$d*$slope[36]+$dayNight,
            "SG37Avg"=> $avg[37]+$d*$slope[37]+$dayNight,
            "SG37Max"=> $max[37]+$d*$slope[37]+$dayNight,
            "SG37Min"=> $min[37]+$d*$slope[37]+$dayNight,
            "SG38Avg"=> $avg[38]+$d*$slope[38]+$dayNight,
            "SG38Max"=> $max[38]+$d*$slope[38]+$dayNight,
            "SG38Min"=> $min[38]+$d*$slope[38]+$dayNight,
            "SG39Avg"=> $avg[39]+$d*$slope[39]+$dayNight,
            "SG39Max"=> $max[39]+$d*$slope[39]+$dayNight,
            "SG39Min"=> $min[39]+$d*$slope[39]+$dayNight,
        
            "SG40Avg"=> $avg[40]+$d*$slope[40]+$dayNight,
            "SG40Max"=> $max[40]+$d*$slope[40]+$dayNight,
            "SG40Min"=> $min[40]+$d*$slope[40]+$dayNight,
            "SG41Avg"=> $avg[41]+$d*$slope[41]+$dayNight,
            "SG41Max"=> $max[41]+$d*$slope[41]+$dayNight,
            "SG41Min"=> $min[41]+$d*$slope[41]+$dayNight,
            "SG42Avg"=> $avg[42]+$d*$slope[42]+$dayNight,
            "SG42Max"=> $max[42]+$d*$slope[42]+$dayNight,
            "SG42Min"=> $min[42]+$d*$slope[42]+$dayNight,
            "SG43Avg"=> $avg[43]+$d*$slope[43]+$dayNight,
            "SG43Max"=> $max[43]+$d*$slope[43]+$dayNight,
            "SG43Min"=> $min[43]+$d*$slope[43]+$dayNight,
            "SG44Avg"=> $avg[44]+$d*$slope[44]+$dayNight,
            "SG44Max"=> $max[44]+$d*$slope[44]+$dayNight,
            "SG44Min"=> $min[44]+$d*$slope[44]+$dayNight,
            "SG45Avg"=> $avg[45]+$d*$slope[45]+$dayNight,
            "SG45Max"=> $max[45]+$d*$slope[45]+$dayNight,
            "SG45Min"=> $min[45]+$d*$slope[45]+$dayNight,
            "SG46Avg"=> $avg[46]+$d*$slope[46]+$dayNight,
            "SG46Max"=> $max[46]+$d*$slope[46]+$dayNight,
            "SG46Min"=> $min[46]+$d*$slope[46]+$dayNight,
            "SG47Avg"=> $avg[47]+$d*$slope[47]+$dayNight,
            "SG47Max"=> $max[47]+$d*$slope[47]+$dayNight,
            "SG47Min"=> $min[47]+$d*$slope[47]+$dayNight,
            "SG48Avg"=> $avg[48]+$d*$slope[48]+$dayNight,
            "SG48Max"=> $max[48]+$d*$slope[48]+$dayNight,
            "SG48Min"=> $min[48]+$d*$slope[48]+$dayNight,
            "SG49Avg"=> $avg[49]+$d*$slope[49]+$dayNight,
            "SG49Max"=> $max[49]+$d*$slope[49]+$dayNight,
            "SG49Min"=> $min[49]+$d*$slope[49]+$dayNight,

            "SG50Avg"=> $avg[50]+$d*$slope[50]+$dayNight,
            "SG50Max"=> $max[50]+$d*$slope[50]+$dayNight,
            "SG50Min"=> $min[50]+$d*$slope[50]+$dayNight,
            "SG51Avg"=> $avg[51]+$d*$slope[51]+$dayNight,
            "SG51Max"=> $max[51]+$d*$slope[51]+$dayNight,
            "SG51Min"=> $min[51]+$d*$slope[51]+$dayNight,
            "SG52Avg"=> $avg[52]+$d*$slope[52]+$dayNight,
            "SG52Max"=> $max[52]+$d*$slope[52]+$dayNight,
            "SG52Min"=> $min[52]+$d*$slope[52]+$dayNight,
            "SG53Avg"=> $avg[53]+$d*$slope[53]+$dayNight,
            "SG53Max"=> $max[53]+$d*$slope[53]+$dayNight,
            "SG53Min"=> $min[53]+$d*$slope[53]+$dayNight,
            "SG54Avg"=> $avg[54]+$d*$slope[54]+$dayNight,
            "SG54Max"=> $max[54]+$d*$slope[54]+$dayNight,
            "SG54Min"=> $min[54]+$d*$slope[54]+$dayNight,
            "SG55Avg"=> $avg[55]+$d*$slope[55]+$dayNight,
            "SG55Max"=> $max[55]+$d*$slope[55]+$dayNight,
            "SG55Min"=> $min[55]+$d*$slope[55]+$dayNight,
            "SG56Avg"=> $avg[56]+$d*$slope[56]+$dayNight,
            "SG56Max"=> $max[56]+$d*$slope[56]+$dayNight,
            "SG56Min"=> $min[56]+$d*$slope[56]+$dayNight,
            "SG57Avg"=> $avg[57]+$d*$slope[57]+$dayNight,
            "SG57Max"=> $max[57]+$d*$slope[57]+$dayNight,
            "SG57Min"=> $min[57]+$d*$slope[57]+$dayNight,
            "SG58Avg"=> $avg[58]+$d*$slope[58]+$dayNight,
            "SG58Max"=> $max[58]+$d*$slope[58]+$dayNight,
            "SG58Min"=> $min[58]+$d*$slope[58]+$dayNight,
            "SG59Avg"=> $avg[59]+$d*$slope[59]+$dayNight,
            "SG59Max"=> $max[59]+$d*$slope[59]+$dayNight,
            "SG59Min"=> $min[59]+$d*$slope[59]+$dayNight,

            "SG60Avg"=> $avg[60]+$d*$slope[60]+$dayNight,
            "SG60Max"=> $max[60]+$d*$slope[60]+$dayNight,
            "SG60Min"=> $min[60]+$d*$slope[60]+$dayNight,
            "SG61Avg"=> $avg[61]+$d*$slope[61]+$dayNight,
            "SG61Max"=> $max[61]+$d*$slope[61]+$dayNight,
            "SG61Min"=> $min[61]+$d*$slope[61]+$dayNight,
            "SG62Avg"=> $avg[62]+$d*$slope[62]+$dayNight,
            "SG62Max"=> $max[62]+$d*$slope[62]+$dayNight,
            "SG62Min"=> $min[62]+$d*$slope[62]+$dayNight,
            "SG63Avg"=> $avg[63]+$d*$slope[63]+$dayNight,
            "SG63Max"=> $max[63]+$d*$slope[63]+$dayNight,
            "SG63Min"=> $min[63]+$d*$slope[63]+$dayNight,
            "SG64Avg"=> $avg[64]+$d*$slope[64]+$dayNight,
            "SG64Max"=> $max[64]+$d*$slope[64]+$dayNight,
            "SG64Min"=> $min[64]+$d*$slope[64]+$dayNight,
            "SG65Avg"=> $avg[65]+$d*$slope[65]+$dayNight,
            "SG65Max"=> $max[65]+$d*$slope[65]+$dayNight,
            "SG65Min"=> $min[65]+$d*$slope[65]+$dayNight,
            "SG66Avg"=> $avg[66]+$d*$slope[66]+$dayNight,
            "SG66Max"=> $max[66]+$d*$slope[66]+$dayNight,
            "SG66Min"=> $min[66]+$d*$slope[66]+$dayNight,
            "SG67Avg"=> $avg[67]+$d*$slope[67]+$dayNight,
            "SG67Max"=> $max[67]+$d*$slope[67]+$dayNight,
            "SG67Min"=> $min[67]+$d*$slope[67]+$dayNight,
            "SG68Avg"=> $avg[68]+$d*$slope[68]+$dayNight,
            "SG68Max"=> $max[68]+$d*$slope[68]+$dayNight,
            "SG68Min"=> $min[68]+$d*$slope[68]+$dayNight,
            "SG69Avg"=> $avg[69]+$d*$slope[69]+$dayNight,
            "SG69Max"=> $max[69]+$d*$slope[69]+$dayNight,
            "SG69Min"=> $min[69]+$d*$slope[69]+$dayNight,

            "SG70Avg"=> $avg[70]+$d*$slope[70]+$dayNight,
            "SG70Max"=> $max[70]+$d*$slope[70]+$dayNight,
            "SG70Min"=> $min[70]+$d*$slope[70]+$dayNight,
            "SG71Avg"=> $avg[71]+$d*$slope[71]+$dayNight,
            "SG71Max"=> $max[71]+$d*$slope[71]+$dayNight,
            "SG71Min"=> $min[71]+$d*$slope[71]+$dayNight,
            "SG72Avg"=> $avg[72]+$d*$slope[72]+$dayNight,
            "SG72Max"=> $max[72]+$d*$slope[72]+$dayNight,
            "SG72Min"=> $min[72]+$d*$slope[72]+$dayNight,
            "SG73Avg"=> $avg[73]+$d*$slope[73]+$dayNight,
            "SG73Max"=> $max[73]+$d*$slope[73]+$dayNight,
            "SG73Min"=> $min[73]+$d*$slope[73]+$dayNight,
            "SG74Avg"=> $avg[74]+$d*$slope[74]+$dayNight,
            "SG74Max"=> $max[74]+$d*$slope[74]+$dayNight,
            "SG74Min"=> $min[74]+$d*$slope[74]+$dayNight,
            "SG75Avg"=> $avg[75]+$d*$slope[75]+$dayNight,
            "SG75Max"=> $max[75]+$d*$slope[75]+$dayNight,
            "SG75Min"=> $min[75]+$d*$slope[75]+$dayNight,
            "SG76Avg"=> $avg[76]+$d*$slope[76]+$dayNight,
            "SG76Max"=> $max[76]+$d*$slope[76]+$dayNight,
            "SG76Min"=> $min[76]+$d*$slope[76]+$dayNight,
            "SG77Avg"=> $avg[77]+$d*$slope[77]+$dayNight,
            "SG77Max"=> $max[77]+$d*$slope[77]+$dayNight,
            "SG77Min"=> $min[77]+$d*$slope[77]+$dayNight,
            "SG78Avg"=> $avg[78]+$d*$slope[78]+$dayNight,
            "SG78Max"=> $max[78]+$d*$slope[78]+$dayNight,
            "SG78Min"=> $min[78]+$d*$slope[78]+$dayNight,
            "SG79Avg"=> $avg[79]+$d*$slope[79]+$dayNight,
            "SG79Max"=> $max[79]+$d*$slope[79]+$dayNight,
            "SG79Min"=> $min[79]+$d*$slope[79]+$dayNight,

            "SG80Avg"=> $avg[80]+$d*$slope[80]+$dayNight,
            "SG80Max"=> $max[80]+$d*$slope[80]+$dayNight,
            "SG80Min"=> $min[80]+$d*$slope[80]+$dayNight,
            "SG81Avg"=> $avg[81]+$d*$slope[81]+$dayNight,
            "SG81Max"=> $max[81]+$d*$slope[81]+$dayNight,
            "SG81Min"=> $min[81]+$d*$slope[81]+$dayNight,
            "SG82Avg"=> $avg[82]+$d*$slope[82]+$dayNight,
            "SG82Max"=> $max[82]+$d*$slope[82]+$dayNight,
            "SG82Min"=> $min[82]+$d*$slope[82]+$dayNight,
            "SG83Avg"=> $avg[83]+$d*$slope[83]+$dayNight,
            "SG83Max"=> $max[83]+$d*$slope[83]+$dayNight,
            "SG83Min"=> $min[83]+$d*$slope[83]+$dayNight,
            "SG84Avg"=> $avg[84]+$d*$slope[84]+$dayNight,
            "SG84Max"=> $max[84]+$d*$slope[84]+$dayNight,
            "SG84Min"=> $min[84]+$d*$slope[84]+$dayNight,
            "SG85Avg"=> $avg[85]+$d*$slope[85]+$dayNight,
            "SG85Max"=> $max[85]+$d*$slope[85]+$dayNight,
            "SG85Min"=> $min[85]+$d*$slope[85]+$dayNight,
            "SG86Avg"=> $avg[86]+$d*$slope[86]+$dayNight,
            "SG86Max"=> $max[86]+$d*$slope[86]+$dayNight,
            "SG86Min"=> $min[86]+$d*$slope[86]+$dayNight,
            "SG87Avg"=> $avg[87]+$d*$slope[87]+$dayNight,
            "SG87Max"=> $max[87]+$d*$slope[87]+$dayNight,
            "SG87Min"=> $min[87]+$d*$slope[87]+$dayNight,
            "SG88Avg"=> $avg[88]+$d*$slope[88]+$dayNight,
            "SG88Max"=> $max[88]+$d*$slope[88]+$dayNight,
            "SG88Min"=> $min[88]+$d*$slope[88]+$dayNight,
            "SG89Avg"=> $avg[89]+$d*$slope[89]+$dayNight,
            "SG89Max"=> $max[89]+$d*$slope[89]+$dayNight,
            "SG89Min"=> $min[89]+$d*$slope[89]+$dayNight,

            "SG90Avg"=> $avg[90]+$d*$slope[90]+$dayNight,
            "SG90Max"=> $max[90]+$d*$slope[90]+$dayNight,
            "SG90Min"=> $min[90]+$d*$slope[90]+$dayNight,
            "SG91Avg"=> $avg[91]+$d*$slope[91]+$dayNight,
            "SG91Max"=> $max[91]+$d*$slope[91]+$dayNight,
            "SG91Min"=> $min[91]+$d*$slope[91]+$dayNight,
            "SG92Avg"=> $avg[92]+$d*$slope[92]+$dayNight,
            "SG92Max"=> $max[92]+$d*$slope[92]+$dayNight,
            "SG92Min"=> $min[92]+$d*$slope[92]+$dayNight,
            "SG93Avg"=> $avg[93]+$d*$slope[93]+$dayNight,
            "SG93Max"=> $max[93]+$d*$slope[93]+$dayNight,
            "SG93Min"=> $min[93]+$d*$slope[93]+$dayNight,
            "SG94Avg"=> $avg[94]+$d*$slope[94]+$dayNight,
            "SG94Max"=> $max[94]+$d*$slope[94]+$dayNight,
            "SG94Min"=> $min[94]+$d*$slope[94]+$dayNight,
            "SG95Avg"=> $avg[95]+$d*$slope[95]+$dayNight,
            "SG95Max"=> $max[95]+$d*$slope[95]+$dayNight,
            "SG95Min"=> $min[95]+$d*$slope[95]+$dayNight,
        ]);
    }
    
}
?>