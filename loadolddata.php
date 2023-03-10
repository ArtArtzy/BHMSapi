<?php
require_once('connection.php');
//ทำการ load ข้อมูลจากตาราง Adjust
$sql = "select * from initValue order by id";
$initValue = $db->query($sql)->fetchAll();


//ทำการ load ข้อมูลเก่าที่ตกค้าง
//ทำการค้นไฟล์เก่าเหลือไว้ 1 ไฟล์ล่าสุดเท่านั้น
$filesYear = array_diff(scandir("data",SCANDIR_SORT_DESCENDING), array('..', '.')); // folder ทั้งหมด
// print_r($filesYear);
$files = array_reverse($filesYear);

//ได้ Folder ที่มีอยู่หาข้อมูลเดือนปัจจุบัน
$month = date('m'); //เดือนปัจจุบัน
$year = date('Y'); //ปีปัจจุบัน

for($i=0;$i<count($files);$i++){

   // กรณีปีน้อยกว่าปีปัจจุบันทำการ เอาเข้า Database แล้ว move ทั้งหมด
   if($files[$i] < $year){      
    $dirx ="data/".$files[$i];
    $files2 = array_diff(scandir($dirx,SCANDIR_SORT_DESCENDING), array('..', '.')); 

    for($j=0;$j<count($files2);$j++){
      $dir2 = "data/".$files[$i] ."/" . $files2[$j];
      $files3 = array_diff(scandir($dir2), array('.', '..')); 
      for($k=0;$k<count($files3);$k++){
        $fileName =  $dir2. "/". $files3[$k+2];
        readText($fileName,$db,$initValue);
        // readText($dir2 . " /" .$files3[$k+2], $db);
      }
    }
   }  else if($files[$i] == $year){
     
    $dirx ="data/".$files[$i];
    $filesm2 = array_diff(scandir($dirx,SCANDIR_SORT_DESCENDING), array('..', '.')); 
    $files2 = array_reverse($filesm2);
    for($j=0;$j<count($files2);$j++){
        $dir2 = "data/".$files[$i] ."/" . $files2[$j];
        $files3 = array_diff(scandir($dir2), array('.', '..')); 

     
         if($month !=$files2[$j]){
    
            for($k=0;$k<count($files3);$k++){
           
               $fileName =  $dir2. "/". $files3[$k+2];
              
               readText($fileName,$db,$initValue);
                // readText($dir2 . " /" .$files3[$k+2], $db);
              }
         } else {
            
            for($k=0;$k<count($files3)-2;$k++){
           
                $fileName =  $dir2. "/". $files3[$k+2];
        
                readText($fileName,$db,$initValue);
                // readText($dir2 . " /" .$files3[$k+2], $db);
              }
         }
       
      }
   }
}

function readText($fileName,$db,$initValue){
   //parameter
   $setLimitNan = 800;
   //ทำการถอดข้อมูลจากชื่อไฟล์
   $fileTime = explode(".",$fileName)[1];
   $yearx = substr($fileTime,0,4);
   $datex = substr($fileTime,4,2);
   $monthx = substr($fileTime,6,2);
   $hourx = substr($fileTime,8,2);
   $minx = substr($fileTime,10,2);
   $secondx = substr($fileTime,12,2);
   $d = mktime($hourx, $minx, $secondx, $datex, $monthx , $yearx);
   $dateFinal = date("Y-m-d H:i:s", $d);
   $datemap = $yearx . "-" . $monthx . "-" . $datex;
   $timestmap =  strtotime($dateFinal);
   if($hourx>=6 && $hourx<=18){
      $duration = 0;
    } else {
      $duration = 1;
    }
    for($i=1;$i<=96;$i++){
      $countG[$i] = 0;
   }
    //ทำการ Check ว่าไฟล์ครบ 15 นาทีหรือเปล่าว ถ้าไม่ครบไม่เอาเลย ต้องมีค่า count เท่ากับ 896
    echo $fileName;
    if( $file = fopen($fileName, "r") ){
        $count=0;
         while(!feof($file)) {
            $line = fgets($file);
             $count++;
         }
         fclose($file);
        }
        if($count == 896){
            //ดึงค่าจากไฟล์
            //Check Nan
            if( $file = fopen($fileName, "r") ){
           
            $count=0;
            while(!feof($file)) {
                $line = fgets($file);
                if($count > 0 && strlen($line) >0){
                $data = explode("	",$line);
                if($count ==1){
                   for($l=1;$l<=95;$l++){
                     $countG[$l] = 1;
                     // echo $countG[$i];
                     // echo "-";
                     // echo $data[$l] . "-";
                      if($data[$l] != "NaN" or $data[$l] != "#NUM!"){
                        $SGmax[$l] = (float)$data[$l];
                        $SGmin[$l] = (float)$data[$l];
                        $SGSum[$l] = (float)$data[$l];       
                      } else {
                        $SGmax[$l] = -100;
                        $SGmin[$l] = 100;
                        $SGSum[$l] = 0;  
                      }
                      
                   }
                } else{
                  for($l=1;$l<=95;$l++){
                     if($data[$l]!="NaN" or $data[$l] != "#NUM!"){
                        $countG[$l]++;
                        // echo $countG[$l];
                        // echo "-";
                        if((float)$SGmax[$l]< (float)$data[$l]){
                           $SGmax[$l] = (float)$data[$l];    
                        }
                  
                        if((float)$SGmin[$l] > (float)$data[$l]){
                           $SGmin[$l] = (float)$data[$l];
                        }
                        $SGSum[$l] += $data[$l];
                     }                     
                  }
                }
                }
                $count++;
              
                
      
            }
            fclose($file);
<<<<<<< Updated upstream
            // for($i=1;$i<=95;$i++){
            // $SGavg[$i] =0;
            // }
=======
            // echo "xxx";
            for($i=1;$i<=95;$i++){
               if($countG[$i] < 894-$setLimitNan){
                 $SGmin[$i] = "NaN";
               }
                  // echo $countG[$i] . "-";
            }
>>>>>>> Stashed changes
              //ทำการหาค่าเฉลี่ยข้อมูล
            for($i=1;$i<=95;$i++){
               if($SGSum[$i] != "NaN"){
                  // echo $countG[$i];
                  // echo "-";
                  $SGavg[$i] = number_format($SGSum[$i]/($countG[$i]),2,".","");
               } else {
                  $SGavg[$i] = "NaN";
               }
               
            }
         }
         //ทำการปรับค่า NaN เป็น -9999999
         for($i=1;$i<=95;$i++){
            // if($SGmin[$i]=="NaN" && $SGmin[$i]!=0){
            //    $SGmin[$i] = -9999999;
            //    $SGmax[$i] = -9999999;
            //    $SGavg[$i] = -9999999;
            // }
               if($SGmin[$i] == 0 && $SGmax[$i]== 0 ){
                  $SGmin[$i] = -9999999;
                  $SGmax[$i] = -9999999;
                  $SGavg[$i] = -9999999;
               }
         }
         
         //Adjust จาก initValue
         for($i=1;$i<=95;$i++){
            $SGmin[$i] +=$initValue[$i-1]['initvalue'];
            $SGmax[$i] +=$initValue[$i-1]['initvalue'];
            $SGavg[$i] +=$initValue[$i-1]['initvalue'];
         }


         //update database
         $db->insert("rawdata",[
            "SG01Avg"=> $SGavg[1],
            "SG01Max"=> $SGmax[1],
            "SG01Min"=>$SGmin[1],
            "SG02Avg"=> $SGavg[2],
            "SG02Max"=> $SGmax[2],
            "SG02Min"=>$SGmin[2],
            "SG03Avg"=> $SGavg[3],
            "SG03Max"=> $SGmax[3],
            "SG03Min"=>$SGmin[3],
            "SG04Avg"=> $SGavg[4],
            "SG04Max"=> $SGmax[4],
            "SG04Min"=>$SGmin[4],
            "SG05Avg"=> $SGavg[5],
            "SG05Max"=> $SGmax[5],
            "SG05Min"=>$SGmin[5],
            "SG06Avg"=> $SGavg[6],
            "SG06Max"=> $SGmax[6],
            "SG06Min"=>$SGmin[6],
            "SG07Avg"=> $SGavg[7],
            "SG07Max"=> $SGmax[7],
            "SG07Min"=>$SGmin[7],
            "SG08Avg"=> $SGavg[8],
            "SG08Max"=> $SGmax[8],
            "SG08Min"=>$SGmin[8],
            "SG09Avg"=> $SGavg[9],
            "SG09Max"=> $SGmax[9],
            "SG09Min"=>$SGmin[9],
            "SG10Avg"=> $SGavg[10],
            "SG10Max"=> $SGmax[10],
            "SG10Min"=>$SGmin[10],
            "SG11Avg"=> $SGavg[11],
            "SG11Max"=> $SGmax[11],
            "SG11Min"=>$SGmin[11],
            "SG12Avg"=> $SGavg[12],
            "SG12Max"=> $SGmax[12],
            "SG12Min"=>$SGmin[12],
            "SG13Avg"=> $SGavg[13],
            "SG13Max"=> $SGmax[13],
            "SG13Min"=>$SGmin[13],
            "SG14Avg"=> $SGavg[14],
            "SG14Max"=> $SGmax[14],
            "SG14Min"=>$SGmin[14],
            "SG15Avg"=> $SGavg[15],
            "SG15Max"=> $SGmax[15],
            "SG15Min"=>$SGmin[15],
            "SG16Avg"=> $SGavg[16],
            "SG16Max"=> $SGmax[16],
            "SG16Min"=>$SGmin[16],
            "SG17Avg"=> $SGavg[17],
            "SG17Max"=> $SGmax[17],
            "SG17Min"=>$SGmin[17],
            "SG18Avg"=> $SGavg[18],
            "SG18Max"=> $SGmax[18],
            "SG18Min"=>$SGmin[18],
            "SG19Avg"=> $SGavg[19],
            "SG19Max"=> $SGmax[19],
            "SG19Min"=>$SGmin[19],
            "SG20Avg"=> $SGavg[20],
            "SG20Max"=> $SGmax[20],
            "SG20Min"=>$SGmin[20],
            "SG21Avg"=> $SGavg[21],
            "SG21Max"=> $SGmax[21],
            "SG21Min"=>$SGmin[21],
            "SG22Avg"=> $SGavg[22],
            "SG22Max"=> $SGmax[22],
            "SG22Min"=>$SGmin[22],
            "SG23Avg"=> $SGavg[23],
            "SG23Max"=> $SGmax[23],
            "SG23Min"=>$SGmin[23],
            "SG24Avg"=> $SGavg[24],
            "SG24Max"=> $SGmax[24],
            "SG24Min"=>$SGmin[24],
            "SG25Avg"=> $SGavg[25],
            "SG25Max"=> $SGmax[25],
            "SG25Min"=>$SGmin[25],
            "SG26Avg"=> $SGavg[26],
            "SG26Max"=> $SGmax[26],
            "SG26Min"=>$SGmin[26],
            "SG27Avg"=> $SGavg[27],
            "SG27Max"=> $SGmax[27],
            "SG27Min"=>$SGmin[27],
            "SG28Avg"=> $SGavg[28],
            "SG28Max"=> $SGmax[28],
            "SG28Min"=>$SGmin[28],
            "SG29Avg"=> $SGavg[29],
            "SG29Max"=> $SGmax[29],
            "SG29Min"=>$SGmin[29],
            "SG30Avg"=> $SGavg[30],
            "SG30Max"=> $SGmax[30],
            "SG30Min"=>$SGmin[30],
            "SG31Avg"=> $SGavg[31],
            "SG31Max"=> $SGmax[31],
            "SG31Min"=>$SGmin[31],
            "SG32Avg"=> $SGavg[32],
            "SG32Max"=> $SGmax[32],
            "SG32Min"=>$SGmin[32],
            "SG33Avg"=> $SGavg[33],
            "SG33Max"=> $SGmax[33],
            "SG33Min"=>$SGmin[33],
            "SG34Avg"=> $SGavg[34],
            "SG34Max"=> $SGmax[34],
            "SG34Min"=>$SGmin[34],
            "SG35Avg"=> $SGavg[35],
            "SG35Max"=> $SGmax[35],
            "SG35Min"=>$SGmin[35],
            "SG36Avg"=> $SGavg[36],
            "SG36Max"=> $SGmax[36],
            "SG36Min"=>$SGmin[36],
            "SG37Avg"=> $SGavg[37],
            "SG37Max"=> $SGmax[37],
            "SG37Min"=>$SGmin[37],
            "SG38Avg"=> $SGavg[38],
            "SG38Max"=> $SGmax[38],
            "SG38Min"=>$SGmin[38],
            "SG39Avg"=> $SGavg[39],
            "SG39Max"=> $SGmax[39],
            "SG39Min"=>$SGmin[39],
            "SG40Avg"=> $SGavg[40],
            "SG40Max"=> $SGmax[40],
            "SG40Min"=>$SGmin[40],
            "SG41Avg"=> $SGavg[41],
            "SG41Max"=> $SGmax[41],
            "SG41Min"=>$SGmin[41],
            "SG42Avg"=> $SGavg[42],
            "SG42Max"=> $SGmax[42],
            "SG42Min"=>$SGmin[42],
            "SG43Avg"=> $SGavg[43],
            "SG43Max"=> $SGmax[43],
            "SG43Min"=>$SGmin[43],
            "SG44Avg"=> $SGavg[44],
            "SG44Max"=> $SGmax[44],
            "SG44Min"=>$SGmin[44],
            "SG45Avg"=> $SGavg[45],
            "SG45Max"=> $SGmax[45],
            "SG45Min"=>$SGmin[45],
            "SG46Avg"=> $SGavg[46],
            "SG46Max"=> $SGmax[46],
            "SG46Min"=>$SGmin[46],
            "SG47Avg"=> $SGavg[47],
            "SG47Max"=> $SGmax[47],
            "SG47Min"=>$SGmin[47],
            "SG48Avg"=> $SGavg[48],
            "SG48Max"=> $SGmax[48],
            "SG48Min"=>$SGmin[48],
            "SG49Avg"=> $SGavg[49],
            "SG49Max"=> $SGmax[49],
            "SG49Min"=>$SGmin[49],
            "SG50Avg"=> $SGavg[50],
            "SG50Max"=> $SGmax[50],
            "SG50Min"=>$SGmin[50],
            "SG51Avg"=> $SGavg[51],
            "SG51Max"=> $SGmax[51],
            "SG51Min"=>$SGmin[51],
            "SG52Avg"=> $SGavg[52],
            "SG52Max"=> $SGmax[52],
            "SG52Min"=>$SGmin[52],
            "SG53Avg"=> $SGavg[53],
            "SG53Max"=> $SGmax[53],
            "SG53Min"=>$SGmin[53],
            "SG54Avg"=> $SGavg[54],
            "SG54Max"=> $SGmax[54],
            "SG54Min"=>$SGmin[54],
            "SG55Avg"=> $SGavg[55],
            "SG55Max"=> $SGmax[55],
            "SG55Min"=>$SGmin[55],
            "SG56Avg"=> $SGavg[56],
            "SG56Max"=> $SGmax[56],
            "SG56Min"=>$SGmin[56],
            "SG57Avg"=> $SGavg[57],
            "SG57Max"=> $SGmax[57],
            "SG57Min"=>$SGmin[57],
            "SG58Avg"=> $SGavg[58],
            "SG58Max"=> $SGmax[58],
            "SG58Min"=>$SGmin[58],
            "SG59Avg"=> $SGavg[59],
            "SG59Max"=> $SGmax[59],
            "SG59Min"=>$SGmin[59],
            "SG60Avg"=> $SGavg[60],
            "SG60Max"=> $SGmax[60],
            "SG60Min"=>$SGmin[60],
            "SG61Avg"=> $SGavg[61],
            "SG61Max"=> $SGmax[61],
            "SG61Min"=>$SGmin[61],
            "SG62Avg"=> $SGavg[62],
            "SG62Max"=> $SGmax[62],
            "SG62Min"=>$SGmin[62],
            "SG63Avg"=> $SGavg[63],
            "SG63Max"=> $SGmax[63],
            "SG63Min"=>$SGmin[63],
            "SG64Avg"=> $SGavg[64],
            "SG64Max"=> $SGmax[64],
            "SG64Min"=>$SGmin[64],
            "SG65Avg"=> $SGavg[65],
            "SG65Max"=> $SGmax[65],
            "SG65Min"=>$SGmin[65],
            "SG66Avg"=> $SGavg[66],
            "SG66Max"=> $SGmax[66],
            "SG66Min"=>$SGmin[66],
            "SG67Avg"=> $SGavg[67],
            "SG67Max"=> $SGmax[67],
            "SG67Min"=>$SGmin[67],
            "SG68Avg"=> $SGavg[68],
            "SG68Max"=> $SGmax[68],
            "SG68Min"=>$SGmin[68],
            "SG69Avg"=> $SGavg[69],
            "SG69Max"=> $SGmax[69],
            "SG69Min"=>$SGmin[69],
            "SG70Avg"=> $SGavg[70],
            "SG70Max"=> $SGmax[70],
            "SG70Min"=>$SGmin[70],
            "SG71Avg"=> $SGavg[71],
            "SG71Max"=> $SGmax[71],
            "SG71Min"=>$SGmin[71],
            "SG72Avg"=> $SGavg[72],
            "SG72Max"=> $SGmax[72],
            "SG72Min"=>$SGmin[72],
            "SG73Avg"=> $SGavg[73],
            "SG73Max"=> $SGmax[73],
            "SG73Min"=>$SGmin[73],
            "SG74Avg"=> $SGavg[74],
            "SG74Max"=> $SGmax[74],
            "SG74Min"=>$SGmin[74],
            "SG75Avg"=> $SGavg[75],
            "SG75Max"=> $SGmax[75],
            "SG75Min"=>$SGmin[75],
            "SG76Avg"=> $SGavg[76],
            "SG76Max"=> $SGmax[76],
            "SG76Min"=>$SGmin[76],
            "SG77Avg"=> $SGavg[77],
            "SG77Max"=> $SGmax[77],
            "SG77Min"=>$SGmin[77],
            "SG78Avg"=> $SGavg[78],
            "SG78Max"=> $SGmax[78],
            "SG78Min"=>$SGmin[78],
            "SG79Avg"=> $SGavg[79],
            "SG79Max"=> $SGmax[79],
            "SG79Min"=>$SGmin[79],
            "SG80Avg"=> $SGavg[80],
            "SG80Max"=> $SGmax[80],
            "SG80Min"=>$SGmin[80],
            "SG81Avg"=> $SGavg[81],
            "SG81Max"=> $SGmax[81],
            "SG81Min"=>$SGmin[81],
            "SG82Avg"=> $SGavg[82],
            "SG82Max"=> $SGmax[82],
            "SG82Min"=>$SGmin[82],
            "SG83Avg"=> $SGavg[83],
            "SG83Max"=> $SGmax[83],
            "SG83Min"=>$SGmin[83],
            "SG84Avg"=> $SGavg[84],
            "SG84Max"=> $SGmax[84],
            "SG84Min"=>$SGmin[84],
            "SG85Avg"=> $SGavg[85],
            "SG85Max"=> $SGmax[85],
            "SG85Min"=>$SGmin[85],
            "SG86Avg"=> $SGavg[86],
            "SG86Max"=> $SGmax[86],
            "SG86Min"=>$SGmin[86],
            "SG87Avg"=> $SGavg[87],
            "SG87Max"=> $SGmax[87],
            "SG87Min"=>$SGmin[87],
            "SG88Avg"=> $SGavg[88],
            "SG88Max"=> $SGmax[88],
            "SG88Min"=>$SGmin[88],
            "SG89Avg"=> $SGavg[89],
            "SG89Max"=> $SGmax[89],
            "SG89Min"=>$SGmin[89],
            "SG90Avg"=> $SGavg[90],
            "SG90Max"=> $SGmax[90],
            "SG90Min"=>$SGmin[90],
            "SG91Avg"=> $SGavg[91],
            "SG91Max"=> $SGmax[91],
            "SG91Min"=>$SGmin[91],
            "SG92Avg"=> $SGavg[92],
            "SG92Max"=> $SGmax[92],
            "SG92Min"=>$SGmin[92],
            "SG93Avg"=> $SGavg[93],
            "SG93Max"=> $SGmax[93],
            "SG93Min"=>$SGmin[93],
            "SG94Avg"=> $SGavg[94],
            "SG94Max"=> $SGmax[94],
            "SG94Min"=>$SGmin[94],
            "SG95Avg"=> $SGavg[95],
            "SG95Max"=> $SGmax[95],
            "SG95Min"=>$SGmin[95],
            "timestamp"=>$timestmap,
            "date"=>$datemap,
            "duration"=>$duration,
            "syncDayNight"=>0,
         ]);
            
            //ย้ายไฟล์
            $backupName = str_replace("data","backup",$fileName);
            rename($fileName,$backupName);
        } else {
            //ย้ายไฟล์
            $backupName = str_replace("data","backup",$fileName);
            rename($fileName,$backupName);
        }
      
}
echo "finish";

?>