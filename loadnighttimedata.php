<?php
require_once('connection.php');
$sql = "SELECT 
AVG(SG01Avg) as SG01Avg,
AVG(SG01Max) as SG01Max,
AVG(SG01Min) as SG01Min,
AVG(SG02Avg) as SG02Avg,
AVG(SG02Max) as SG02Max,
AVG(SG02Min) as SG02Min,
AVG(SG03Avg) as SG03Avg,
AVG(SG03Max) as SG03Max,
AVG(SG03Min) as SG03Min,
AVG(SG04Avg) as SG04Avg,
AVG(SG04Max) as SG04Max,
AVG(SG04Min) as SG04Min,
AVG(SG05Avg) as SG05Avg,
AVG(SG05Max) as SG05Max,
AVG(SG05Min) as SG05Min,
AVG(SG06Avg) as SG06Avg,
AVG(SG06Max) as SG06Max,
AVG(SG06Min) as SG06Min,
AVG(SG07Avg) as SG07Avg,
AVG(SG07Max) as SG07Max,
AVG(SG07Min) as SG07Min,
AVG(SG08Avg) as SG08Avg,
AVG(SG08Max) as SG08Max,
AVG(SG08Min) as SG08Min,
AVG(SG09Avg) as SG09Avg,
AVG(SG09Max) as SG09Max,
AVG(SG09Min) as SG09Min,
AVG(SG10Avg) as SG10Avg,
AVG(SG10Max) as SG10Max,
AVG(SG10Min) as SG10Min,
AVG(SG11Avg) as SG11Avg,
AVG(SG11Max) as SG11Max,
AVG(SG11Min) as SG11Min,
AVG(SG12Avg) as SG12Avg,
AVG(SG12Max) as SG12Max,
AVG(SG12Min) as SG12Min,
AVG(SG13Avg) as SG13Avg,
AVG(SG13Max) as SG13Max,
AVG(SG13Min) as SG13Min,
AVG(SG14Avg) as SG14Avg,
AVG(SG14Max) as SG14Max,
AVG(SG14Min) as SG14Min,
AVG(SG15Avg) as SG15Avg,
AVG(SG15Max) as SG15Max,
AVG(SG15Min) as SG15Min,
AVG(SG16Avg) as SG16Avg,
AVG(SG16Max) as SG16Max,
AVG(SG16Min) as SG16Min,
AVG(SG17Avg) as SG17Avg,
AVG(SG17Max) as SG17Max,
AVG(SG17Min) as SG17Min,
AVG(SG18Avg) as SG18Avg,
AVG(SG18Max) as SG18Max,
AVG(SG18Min) as SG18Min,
AVG(SG19Avg) as SG19Avg,
AVG(SG19Max) as SG19Max,
AVG(SG19Min) as SG19Min,
AVG(SG20Avg) as SG20Avg,
AVG(SG20Max) as SG20Max,
AVG(SG20Min) as SG20Min,
AVG(SG21Avg) as SG21Avg,
AVG(SG21Max) as SG21Max,
AVG(SG21Min) as SG21Min,
AVG(SG22Avg) as SG22Avg,
AVG(SG22Max) as SG22Max,
AVG(SG22Min) as SG22Min,
AVG(SG23Avg) as SG23Avg,
AVG(SG23Max) as SG23Max,
AVG(SG23Min) as SG23Min,
AVG(SG24Avg) as SG24Avg,
AVG(SG24Max) as SG24Max,
AVG(SG24Min) as SG24Min,
AVG(SG25Avg) as SG25Avg,
AVG(SG25Max) as SG25Max,
AVG(SG25Min) as SG25Min,
AVG(SG26Avg) as SG26Avg,
AVG(SG26Max) as SG26Max,
AVG(SG26Min) as SG26Min,
AVG(SG27Avg) as SG27Avg,
AVG(SG27Max) as SG27Max,
AVG(SG27Min) as SG27Min,
AVG(SG28Avg) as SG28Avg,
AVG(SG28Max) as SG28Max,
AVG(SG28Min) as SG28Min,
AVG(SG29Avg) as SG29Avg,
AVG(SG29Max) as SG29Max,
AVG(SG29Min) as SG29Min,
AVG(SG30Avg) as SG30Avg,
AVG(SG30Max) as SG30Max,
AVG(SG30Min) as SG30Min,
AVG(SG31Avg) as SG31Avg,
AVG(SG31Max) as SG31Max,
AVG(SG31Min) as SG31Min,
AVG(SG32Avg) as SG32Avg,
AVG(SG32Max) as SG32Max,
AVG(SG32Min) as SG32Min,
AVG(SG33Avg) as SG33Avg,
AVG(SG33Max) as SG33Max,
AVG(SG33Min) as SG33Min,
AVG(SG34Avg) as SG34Avg,
AVG(SG34Max) as SG34Max,
AVG(SG34Min) as SG34Min,
AVG(SG35Avg) as SG35Avg,
AVG(SG35Max) as SG35Max,
AVG(SG35Min) as SG35Min,
AVG(SG36Avg) as SG36Avg,
AVG(SG36Max) as SG36Max,
AVG(SG36Min) as SG36Min,
AVG(SG37Avg) as SG37Avg,
AVG(SG37Max) as SG37Max,
AVG(SG37Min) as SG37Min,
AVG(SG38Avg) as SG38Avg,
AVG(SG38Max) as SG38Max,
AVG(SG38Min) as SG38Min,
AVG(SG39Avg) as SG39Avg,
AVG(SG39Max) as SG39Max,
AVG(SG39Min) as SG39Min,
AVG(SG40Avg) as SG40Avg,
AVG(SG40Max) as SG40Max,
AVG(SG40Min) as SG40Min,
AVG(SG41Avg) as SG41Avg,
AVG(SG41Max) as SG41Max,
AVG(SG41Min) as SG41Min,
AVG(SG42Avg) as SG42Avg,
AVG(SG42Max) as SG42Max,
AVG(SG42Min) as SG42Min,
AVG(SG43Avg) as SG43Avg,
AVG(SG43Max) as SG43Max,
AVG(SG43Min) as SG43Min,
AVG(SG44Avg) as SG44Avg,
AVG(SG44Max) as SG44Max,
AVG(SG44Min) as SG44Min,
AVG(SG45Avg) as SG45Avg,
AVG(SG45Max) as SG45Max,
AVG(SG45Min) as SG45Min,
AVG(SG46Avg) as SG46Avg,
AVG(SG46Max) as SG46Max,
AVG(SG46Min) as SG46Min,
AVG(SG47Avg) as SG47Avg,
AVG(SG47Max) as SG47Max,
AVG(SG47Min) as SG47Min,
AVG(SG48Avg) as SG48Avg,
AVG(SG48Max) as SG48Max,
AVG(SG48Min) as SG48Min,
AVG(SG49Avg) as SG49Avg,
AVG(SG49Max) as SG49Max,
AVG(SG49Min) as SG49Min,
AVG(SG50Avg) as SG50Avg,
AVG(SG50Max) as SG50Max,
AVG(SG50Min) as SG50Min,
AVG(SG51Avg) as SG51Avg,
AVG(SG51Max) as SG51Max,
AVG(SG51Min) as SG51Min,
AVG(SG52Avg) as SG52Avg,
AVG(SG52Max) as SG52Max,
AVG(SG52Min) as SG52Min,
AVG(SG53Avg) as SG53Avg,
AVG(SG53Max) as SG53Max,
AVG(SG53Min) as SG53Min,
AVG(SG54Avg) as SG54Avg,
AVG(SG54Max) as SG54Max,
AVG(SG54Min) as SG54Min,
AVG(SG55Avg) as SG55Avg,
AVG(SG55Max) as SG55Max,
AVG(SG55Min) as SG55Min,
AVG(SG56Avg) as SG56Avg,
AVG(SG56Max) as SG56Max,
AVG(SG56Min) as SG56Min,
AVG(SG57Avg) as SG57Avg,
AVG(SG57Max) as SG57Max,
AVG(SG57Min) as SG57Min,
AVG(SG58Avg) as SG58Avg,
AVG(SG58Max) as SG58Max,
AVG(SG58Min) as SG58Min,
AVG(SG59Avg) as SG59Avg,
AVG(SG59Max) as SG59Max,
AVG(SG59Min) as SG59Min,
AVG(SG60Avg) as SG60Avg,
AVG(SG60Max) as SG60Max,
AVG(SG60Min) as SG60Min,
AVG(SG61Avg) as SG61Avg,
AVG(SG61Max) as SG61Max,
AVG(SG61Min) as SG61Min,
AVG(SG62Avg) as SG62Avg,
AVG(SG62Max) as SG62Max,
AVG(SG62Min) as SG62Min,
AVG(SG63Avg) as SG63Avg,
AVG(SG63Max) as SG63Max,
AVG(SG63Min) as SG63Min,
AVG(SG64Avg) as SG64Avg,
AVG(SG64Max) as SG64Max,
AVG(SG64Min) as SG64Min,
AVG(SG65Avg) as SG65Avg,
AVG(SG65Max) as SG65Max,
AVG(SG65Min) as SG65Min,
AVG(SG66Avg) as SG66Avg,
AVG(SG66Max) as SG66Max,
AVG(SG66Min) as SG66Min,
AVG(SG67Avg) as SG67Avg,
AVG(SG67Max) as SG67Max,
AVG(SG67Min) as SG67Min,
AVG(SG68Avg) as SG68Avg,
AVG(SG68Max) as SG68Max,
AVG(SG68Min) as SG68Min,
AVG(SG69Avg) as SG69Avg,
AVG(SG69Max) as SG69Max,
AVG(SG69Min) as SG69Min,
AVG(SG70Avg) as SG70Avg,
AVG(SG70Max) as SG70Max,
AVG(SG70Min) as SG70Min,
AVG(SG71Avg) as SG71Avg,
AVG(SG71Max) as SG71Max,
AVG(SG71Min) as SG71Min,
AVG(SG72Avg) as SG72Avg,
AVG(SG72Max) as SG72Max,
AVG(SG72Min) as SG72Min,
AVG(SG73Avg) as SG73Avg,
AVG(SG73Max) as SG73Max,
AVG(SG73Min) as SG73Min,
AVG(SG74Avg) as SG74Avg,
AVG(SG74Max) as SG74Max,
AVG(SG74Min) as SG74Min,
AVG(SG75Avg) as SG75Avg,
AVG(SG75Max) as SG75Max,
AVG(SG75Min) as SG75Min,
AVG(SG76Avg) as SG76Avg,
AVG(SG76Max) as SG76Max,
AVG(SG76Min) as SG76Min,
AVG(SG77Avg) as SG77Avg,
AVG(SG77Max) as SG77Max,
AVG(SG77Min) as SG77Min,
AVG(SG78Avg) as SG78Avg,
AVG(SG78Max) as SG78Max,
AVG(SG78Min) as SG78Min,
AVG(SG79Avg) as SG79Avg,
AVG(SG79Max) as SG79Max,
AVG(SG79Min) as SG79Min,
AVG(SG80Avg) as SG80Avg,
AVG(SG80Max) as SG80Max,
AVG(SG80Min) as SG80Min,
AVG(SG81Avg) as SG81Avg,
AVG(SG81Max) as SG81Max,
AVG(SG81Min) as SG81Min,
AVG(SG82Avg) as SG82Avg,
AVG(SG82Max) as SG82Max,
AVG(SG82Min) as SG82Min,
AVG(SG83Avg) as SG83Avg,
AVG(SG83Max) as SG83Max,
AVG(SG83Min) as SG83Min,
AVG(SG84Avg) as SG84Avg,
AVG(SG84Max) as SG84Max,
AVG(SG84Min) as SG84Min,
AVG(SG85Avg) as SG85Avg,
AVG(SG85Max) as SG85Max,
AVG(SG85Min) as SG85Min,
AVG(SG86Avg) as SG86Avg,
AVG(SG86Max) as SG86Max,
AVG(SG86Min) as SG86Min,
AVG(SG87Avg) as SG87Avg,
AVG(SG87Max) as SG87Max,
AVG(SG87Min) as SG87Min,
AVG(SG88Avg) as SG88Avg,
AVG(SG88Max) as SG88Max,
AVG(SG88Min) as SG88Min,
AVG(SG89Avg) as SG89Avg,
AVG(SG89Max) as SG89Max,
AVG(SG89Min) as SG89Min,
AVG(SG90Avg) as SG90Avg,
AVG(SG90Max) as SG90Max,
AVG(SG90Min) as SG90Min,
AVG(SG91Avg) as SG91Avg,
AVG(SG91Max) as SG91Max,
AVG(SG91Min) as SG91Min,
AVG(SG92Avg) as SG92Avg,
AVG(SG92Max) as SG92Max,
AVG(SG92Min) as SG92Min,
AVG(SG93Avg) as SG93Avg,
AVG(SG93Max) as SG93Max,
AVG(SG93Min) as SG93Min,
AVG(SG94Avg) as SG94Avg,
AVG(SG94Max) as SG94Max,
AVG(SG94Min) as SG94Min,
AVG(SG95Avg) as SG95Avg,
AVG(SG95Max) as SG95Max,
AVG(SG95Min) as SG95Min,
date FROM rawdata WHERE syncDayNight = 0 and duration =1 group by date";
$result = $db->query($sql)->fetchAll();
$update = 0;
$currentDate =  date("Y-d-m");
if(sizeof($result) >0){
    // ทำการวนค่า
    //Current date YYYY-DD-MM

    for($i=0;$i<sizeof($result);$i++){
        //ทำการ check ว่าเป็นวันนี้หรือเปล่าว ถ้าเป็น ข้ามไป
        //ถ้าไม่ใช่ใส่ในตาราง daynightdata
        if($result[$i]['date'] != $currentDate){
            $datex = $result[$i]['date'];
            $dateArray = explode("-",$datex);
            $date2 = $dateArray[0]. "-" . $dateArray[2] . "-" . $dateArray[1];
            $update = 1;
            $db->insert("daynightdata",[
                "SG01Avg"=>$result[$i]['SG01Avg'],
                "SG01Max"=>$result[$i]['SG01Max'],
                "SG01Min"=>$result[$i]['SG01Min'],
                "SG02Avg"=>$result[$i]['SG02Avg'],
                "SG02Max"=>$result[$i]['SG02Max'],
                "SG02Min"=>$result[$i]['SG02Min'],
                "SG03Avg"=>$result[$i]['SG03Avg'],
                "SG03Max"=>$result[$i]['SG03Max'],
                "SG03Min"=>$result[$i]['SG03Min'],
                "SG04Avg"=>$result[$i]['SG04Avg'],
                "SG04Max"=>$result[$i]['SG04Max'],
                "SG04Min"=>$result[$i]['SG04Min'],
                "SG05Avg"=>$result[$i]['SG05Avg'],
                "SG05Max"=>$result[$i]['SG05Max'],
                "SG05Min"=>$result[$i]['SG05Min'],
                "SG06Avg"=>$result[$i]['SG06Avg'],
                "SG06Max"=>$result[$i]['SG06Max'],
                "SG06Min"=>$result[$i]['SG06Min'],
                "SG07Avg"=>$result[$i]['SG07Avg'],
                "SG07Max"=>$result[$i]['SG07Max'],
                "SG07Min"=>$result[$i]['SG07Min'],
                "SG08Avg"=>$result[$i]['SG08Avg'],
                "SG08Max"=>$result[$i]['SG08Max'],
                "SG08Min"=>$result[$i]['SG08Min'],
                "SG09Avg"=>$result[$i]['SG09Avg'],
                "SG09Max"=>$result[$i]['SG09Max'],
                "SG09Min"=>$result[$i]['SG09Min'],
                "SG10Avg"=>$result[$i]['SG10Avg'],
                "SG10Max"=>$result[$i]['SG10Max'],
                "SG10Min"=>$result[$i]['SG10Min'],
                "SG11Avg"=>$result[$i]['SG11Avg'],
                "SG11Max"=>$result[$i]['SG11Max'],
                "SG11Min"=>$result[$i]['SG11Min'],
                "SG12Avg"=>$result[$i]['SG12Avg'],
                "SG12Max"=>$result[$i]['SG12Max'],
                "SG12Min"=>$result[$i]['SG12Min'],
                "SG13Avg"=>$result[$i]['SG13Avg'],
                "SG13Max"=>$result[$i]['SG13Max'],
                "SG13Min"=>$result[$i]['SG13Min'],
                "SG14Avg"=>$result[$i]['SG14Avg'],
                "SG14Max"=>$result[$i]['SG14Max'],
                "SG14Min"=>$result[$i]['SG14Min'],
                "SG15Avg"=>$result[$i]['SG15Avg'],
                "SG15Max"=>$result[$i]['SG15Max'],
                "SG15Min"=>$result[$i]['SG15Min'],
                "SG16Avg"=>$result[$i]['SG16Avg'],
                "SG16Max"=>$result[$i]['SG16Max'],
                "SG16Min"=>$result[$i]['SG16Min'],
                "SG17Avg"=>$result[$i]['SG17Avg'],
                "SG17Max"=>$result[$i]['SG17Max'],
                "SG17Min"=>$result[$i]['SG17Min'],
                "SG18Avg"=>$result[$i]['SG18Avg'],
                "SG18Max"=>$result[$i]['SG18Max'],
                "SG18Min"=>$result[$i]['SG18Min'],
                "SG19Avg"=>$result[$i]['SG19Avg'],
                "SG19Max"=>$result[$i]['SG19Max'],
                "SG19Min"=>$result[$i]['SG19Min'],
                "SG20Avg"=>$result[$i]['SG20Avg'],
                "SG20Max"=>$result[$i]['SG20Max'],
                "SG20Min"=>$result[$i]['SG20Min'],
                "SG21Avg"=>$result[$i]['SG21Avg'],
                "SG21Max"=>$result[$i]['SG21Max'],
                "SG21Min"=>$result[$i]['SG21Min'],
                "SG22Avg"=>$result[$i]['SG22Avg'],
                "SG22Max"=>$result[$i]['SG22Max'],
                "SG22Min"=>$result[$i]['SG22Min'],
                "SG23Avg"=>$result[$i]['SG23Avg'],
                "SG23Max"=>$result[$i]['SG23Max'],
                "SG23Min"=>$result[$i]['SG23Min'],
                "SG24Avg"=>$result[$i]['SG24Avg'],
                "SG24Max"=>$result[$i]['SG24Max'],
                "SG24Min"=>$result[$i]['SG24Min'],
                "SG25Avg"=>$result[$i]['SG25Avg'],
                "SG25Max"=>$result[$i]['SG25Max'],
                "SG25Min"=>$result[$i]['SG25Min'],
                "SG26Avg"=>$result[$i]['SG26Avg'],
                "SG26Max"=>$result[$i]['SG26Max'],
                "SG26Min"=>$result[$i]['SG26Min'],
                "SG27Avg"=>$result[$i]['SG27Avg'],
                "SG27Max"=>$result[$i]['SG27Max'],
                "SG27Min"=>$result[$i]['SG27Min'],
                "SG28Avg"=>$result[$i]['SG28Avg'],
                "SG28Max"=>$result[$i]['SG28Max'],
                "SG28Min"=>$result[$i]['SG28Min'],
                "SG29Avg"=>$result[$i]['SG29Avg'],
                "SG29Max"=>$result[$i]['SG29Max'],
                "SG29Min"=>$result[$i]['SG29Min'],
                "SG30Avg"=>$result[$i]['SG30Avg'],
                "SG30Max"=>$result[$i]['SG30Max'],
                "SG30Min"=>$result[$i]['SG30Min'],
                "SG31Avg"=>$result[$i]['SG31Avg'],
                "SG31Max"=>$result[$i]['SG31Max'],
                "SG31Min"=>$result[$i]['SG31Min'],
                "SG32Avg"=>$result[$i]['SG32Avg'],
                "SG32Max"=>$result[$i]['SG32Max'],
                "SG32Min"=>$result[$i]['SG32Min'],
                "SG33Avg"=>$result[$i]['SG33Avg'],
                "SG33Max"=>$result[$i]['SG33Max'],
                "SG33Min"=>$result[$i]['SG33Min'],
                "SG34Avg"=>$result[$i]['SG34Avg'],
                "SG34Max"=>$result[$i]['SG34Max'],
                "SG34Min"=>$result[$i]['SG34Min'],
                "SG35Avg"=>$result[$i]['SG35Avg'],
                "SG35Max"=>$result[$i]['SG35Max'],
                "SG35Min"=>$result[$i]['SG35Min'],
                "SG36Avg"=>$result[$i]['SG36Avg'],
                "SG36Max"=>$result[$i]['SG36Max'],
                "SG36Min"=>$result[$i]['SG36Min'],
                "SG37Avg"=>$result[$i]['SG37Avg'],
                "SG37Max"=>$result[$i]['SG37Max'],
                "SG37Min"=>$result[$i]['SG37Min'],
                "SG38Avg"=>$result[$i]['SG38Avg'],
                "SG38Max"=>$result[$i]['SG38Max'],
                "SG38Min"=>$result[$i]['SG38Min'],
                "SG39Avg"=>$result[$i]['SG39Avg'],
                "SG39Max"=>$result[$i]['SG39Max'],
                "SG39Min"=>$result[$i]['SG39Min'],
                "SG40Avg"=>$result[$i]['SG40Avg'],
                "SG40Max"=>$result[$i]['SG40Max'],
                "SG40Min"=>$result[$i]['SG40Min'],
                "SG41Avg"=>$result[$i]['SG41Avg'],
                "SG41Max"=>$result[$i]['SG41Max'],
                "SG41Min"=>$result[$i]['SG41Min'],
                "SG42Avg"=>$result[$i]['SG42Avg'],
                "SG42Max"=>$result[$i]['SG42Max'],
                "SG42Min"=>$result[$i]['SG42Min'],
                "SG43Avg"=>$result[$i]['SG43Avg'],
                "SG43Max"=>$result[$i]['SG43Max'],
                "SG43Min"=>$result[$i]['SG43Min'],
                "SG44Avg"=>$result[$i]['SG44Avg'],
                "SG44Max"=>$result[$i]['SG44Max'],
                "SG44Min"=>$result[$i]['SG44Min'],
                "SG45Avg"=>$result[$i]['SG45Avg'],
                "SG45Max"=>$result[$i]['SG45Max'],
                "SG45Min"=>$result[$i]['SG45Min'],
                "SG46Avg"=>$result[$i]['SG46Avg'],
                "SG46Max"=>$result[$i]['SG46Max'],
                "SG46Min"=>$result[$i]['SG46Min'],
                "SG47Avg"=>$result[$i]['SG47Avg'],
                "SG47Max"=>$result[$i]['SG47Max'],
                "SG47Min"=>$result[$i]['SG47Min'],
                "SG48Avg"=>$result[$i]['SG48Avg'],
                "SG48Max"=>$result[$i]['SG48Max'],
                "SG48Min"=>$result[$i]['SG48Min'],
                "SG49Avg"=>$result[$i]['SG49Avg'],
                "SG49Max"=>$result[$i]['SG49Max'],
                "SG49Min"=>$result[$i]['SG49Min'],
                "SG50Avg"=>$result[$i]['SG50Avg'],
                "SG50Max"=>$result[$i]['SG50Max'],
                "SG50Min"=>$result[$i]['SG50Min'],
                "SG51Avg"=>$result[$i]['SG51Avg'],
                "SG51Max"=>$result[$i]['SG51Max'],
                "SG51Min"=>$result[$i]['SG51Min'],
                "SG52Avg"=>$result[$i]['SG52Avg'],
                "SG52Max"=>$result[$i]['SG52Max'],
                "SG52Min"=>$result[$i]['SG52Min'],
                "SG53Avg"=>$result[$i]['SG53Avg'],
                "SG53Max"=>$result[$i]['SG53Max'],
                "SG53Min"=>$result[$i]['SG53Min'],
                "SG54Avg"=>$result[$i]['SG54Avg'],
                "SG54Max"=>$result[$i]['SG54Max'],
                "SG54Min"=>$result[$i]['SG54Min'],
                "SG55Avg"=>$result[$i]['SG55Avg'],
                "SG55Max"=>$result[$i]['SG55Max'],
                "SG55Min"=>$result[$i]['SG55Min'],
                "SG56Avg"=>$result[$i]['SG56Avg'],
                "SG56Max"=>$result[$i]['SG56Max'],
                "SG56Min"=>$result[$i]['SG56Min'],
                "SG57Avg"=>$result[$i]['SG57Avg'],
                "SG57Max"=>$result[$i]['SG57Max'],
                "SG57Min"=>$result[$i]['SG57Min'],
                "SG58Avg"=>$result[$i]['SG58Avg'],
                "SG58Max"=>$result[$i]['SG58Max'],
                "SG58Min"=>$result[$i]['SG58Min'],
                "SG59Avg"=>$result[$i]['SG59Avg'],
                "SG59Max"=>$result[$i]['SG59Max'],
                "SG59Min"=>$result[$i]['SG59Min'],
                "SG60Avg"=>$result[$i]['SG60Avg'],
                "SG60Max"=>$result[$i]['SG60Max'],
                "SG60Min"=>$result[$i]['SG60Min'],
                "SG61Avg"=>$result[$i]['SG61Avg'],
                "SG61Max"=>$result[$i]['SG61Max'],
                "SG61Min"=>$result[$i]['SG61Min'],
                "SG62Avg"=>$result[$i]['SG62Avg'],
                "SG62Max"=>$result[$i]['SG62Max'],
                "SG62Min"=>$result[$i]['SG62Min'],
                "SG63Avg"=>$result[$i]['SG63Avg'],
                "SG63Max"=>$result[$i]['SG63Max'],
                "SG63Min"=>$result[$i]['SG63Min'],
                "SG64Avg"=>$result[$i]['SG64Avg'],
                "SG64Max"=>$result[$i]['SG64Max'],
                "SG64Min"=>$result[$i]['SG64Min'],
                "SG65Avg"=>$result[$i]['SG65Avg'],
                "SG65Max"=>$result[$i]['SG65Max'],
                "SG65Min"=>$result[$i]['SG65Min'],
                "SG66Avg"=>$result[$i]['SG66Avg'],
                "SG66Max"=>$result[$i]['SG66Max'],
                "SG66Min"=>$result[$i]['SG66Min'],
                "SG67Avg"=>$result[$i]['SG67Avg'],
                "SG67Max"=>$result[$i]['SG67Max'],
                "SG67Min"=>$result[$i]['SG67Min'],
                "SG68Avg"=>$result[$i]['SG68Avg'],
                "SG68Max"=>$result[$i]['SG68Max'],
                "SG68Min"=>$result[$i]['SG68Min'],
                "SG69Avg"=>$result[$i]['SG69Avg'],
                "SG69Max"=>$result[$i]['SG69Max'],
                "SG69Min"=>$result[$i]['SG69Min'],
                "SG70Avg"=>$result[$i]['SG70Avg'],
                "SG70Max"=>$result[$i]['SG70Max'],
                "SG70Min"=>$result[$i]['SG70Min'],
                "SG71Avg"=>$result[$i]['SG71Avg'],
                "SG71Max"=>$result[$i]['SG71Max'],
                "SG71Min"=>$result[$i]['SG71Min'],
                "SG72Avg"=>$result[$i]['SG72Avg'],
                "SG72Max"=>$result[$i]['SG72Max'],
                "SG72Min"=>$result[$i]['SG72Min'],
                "SG73Avg"=>$result[$i]['SG73Avg'],
                "SG73Max"=>$result[$i]['SG73Max'],
                "SG73Min"=>$result[$i]['SG73Min'],
                "SG74Avg"=>$result[$i]['SG74Avg'],
                "SG74Max"=>$result[$i]['SG74Max'],
                "SG74Min"=>$result[$i]['SG74Min'],
                "SG75Avg"=>$result[$i]['SG75Avg'],
                "SG75Max"=>$result[$i]['SG75Max'],
                "SG75Min"=>$result[$i]['SG75Min'],
                "SG76Avg"=>$result[$i]['SG76Avg'],
                "SG76Max"=>$result[$i]['SG76Max'],
                "SG76Min"=>$result[$i]['SG76Min'],
                "SG77Avg"=>$result[$i]['SG77Avg'],
                "SG77Max"=>$result[$i]['SG77Max'],
                "SG77Min"=>$result[$i]['SG77Min'],
                "SG78Avg"=>$result[$i]['SG78Avg'],
                "SG78Max"=>$result[$i]['SG78Max'],
                "SG78Min"=>$result[$i]['SG78Min'],
                "SG79Avg"=>$result[$i]['SG79Avg'],
                "SG79Max"=>$result[$i]['SG79Max'],
                "SG79Min"=>$result[$i]['SG79Min'],
                "SG80Avg"=>$result[$i]['SG80Avg'],
                "SG80Max"=>$result[$i]['SG80Max'],
                "SG80Min"=>$result[$i]['SG80Min'],
                "SG81Avg"=>$result[$i]['SG81Avg'],
                "SG81Max"=>$result[$i]['SG81Max'],
                "SG81Min"=>$result[$i]['SG81Min'],
                "SG82Avg"=>$result[$i]['SG82Avg'],
                "SG82Max"=>$result[$i]['SG82Max'],
                "SG82Min"=>$result[$i]['SG82Min'],
                "SG83Avg"=>$result[$i]['SG83Avg'],
                "SG83Max"=>$result[$i]['SG83Max'],
                "SG83Min"=>$result[$i]['SG83Min'],
                "SG84Avg"=>$result[$i]['SG84Avg'],
                "SG84Max"=>$result[$i]['SG84Max'],
                "SG84Min"=>$result[$i]['SG84Min'],
                "SG85Avg"=>$result[$i]['SG85Avg'],
                "SG85Max"=>$result[$i]['SG85Max'],
                "SG85Min"=>$result[$i]['SG85Min'],
                "SG86Avg"=>$result[$i]['SG86Avg'],
                "SG86Max"=>$result[$i]['SG86Max'],
                "SG86Min"=>$result[$i]['SG86Min'],
                "SG87Avg"=>$result[$i]['SG87Avg'],
                "SG87Max"=>$result[$i]['SG87Max'],
                "SG87Min"=>$result[$i]['SG87Min'],
                "SG88Avg"=>$result[$i]['SG88Avg'],
                "SG88Max"=>$result[$i]['SG88Max'],
                "SG88Min"=>$result[$i]['SG88Min'],
                "SG89Avg"=>$result[$i]['SG89Avg'],
                "SG89Max"=>$result[$i]['SG89Max'],
                "SG89Min"=>$result[$i]['SG89Min'],
                "SG90Avg"=>$result[$i]['SG90Avg'],
                "SG90Max"=>$result[$i]['SG90Max'],
                "SG90Min"=>$result[$i]['SG90Min'],
                "SG91Avg"=>$result[$i]['SG91Avg'],
                "SG91Max"=>$result[$i]['SG91Max'],
                "SG91Min"=>$result[$i]['SG91Min'],
                "SG92Avg"=>$result[$i]['SG92Avg'],
                "SG92Max"=>$result[$i]['SG92Max'],
                "SG92Min"=>$result[$i]['SG92Min'],
                "SG93Avg"=>$result[$i]['SG93Avg'],
                "SG93Max"=>$result[$i]['SG93Max'],
                "SG93Min"=>$result[$i]['SG93Min'],
                "SG94Avg"=>$result[$i]['SG94Avg'],
                "SG94Max"=>$result[$i]['SG94Max'],
                "SG94Min"=>$result[$i]['SG94Min'],
                "SG95Avg"=>$result[$i]['SG95Avg'],
                "SG95Max"=>$result[$i]['SG95Max'],
                "SG95Min"=>$result[$i]['SG95Min'],
                "date"=>$result[$i]['date'],
                "timestamp"=>strtotime($date2)*1000,
                "duration"=>1
            ]);
            //update syncDayNight เป็น 1
            $db->update("rawdata",["syncDayNight"=>1],[
                "date"=>$result[$i]['date'],
                "duration"=>1
            ]);
        }
    }
 
        
        //ส่งค่า updated
    if($update ==1){
        echo "updated";
    } else {
        echo "NR";
    }
    
} else {
    echo "NR";  
}

?>