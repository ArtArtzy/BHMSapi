<?php
for($i=2020;$i<=2031;$i++){
    mkdir("backup/".$i,0777);
    for($j=1;$j<10;$j++){
        mkdir("backup/". $i ."/0" .$j,0777);
    }
    for($j=10;$j<=12;$j++){
        mkdir("backup/". $i ."/" .$j,0777);
    }
}

echo "finish";
?>