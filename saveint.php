<?php
require_once('connection.php');
$col = $_GET['col'];
$s1=$_GET['s1'];
$s2=$_GET['s2'];
$s3=$_GET['s3'];
$s4=$_GET['s4'];
$s5=$_GET['s5'];
$colx = $col*5+1;
$db->update("initvalue",["initvalue"=>$s1],["id"=>$colx]);
$db->update("initvalue",["initvalue"=>$s2],["id"=>$colx+1]);
$db->update("initvalue",["initvalue"=>$s3],["id"=>$colx+2]);
$db->update("initvalue",["initvalue"=>$s4],["id"=>$colx+3]);
$db->update("initvalue",["initvalue"=>$s5],["id"=>$colx+4]);

?>