<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: text/html; charset=utf-8');
$mysql_host = "localhost";
$mysql_database = "kolya73_bd";
$mysql_user = "kolya73_bd";
$mysql_Name_Surname = "71uBO2OC";

$link = mysql_connect($mysql_host, $mysql_user, $mysql_Name_Surname) or die("AN ERROR HAS OCCURRED UPON ATTEMPT CONNECTIONS TO DATAS BASE" );
mysql_select_db($mysql_database, $link) or die ('AN ERROR HAS OCCURRED UPON ATTEMPT CONNECTIONS TO DATAS BASE');

if (isset($_POST['Coins'])) { $Coins = $_POST['Coins']; if ($Coins =='') { unset($Coins);} }
if (isset($_POST['Score'])) { $Score = $_POST['Score']; if ($Score =='') { unset($Score);} }
if (isset($_POST['Backs'])) { $Backs = $_POST['Backs']; if ($Backs =='') { unset($Backs);} }
if(isset($ID)){

$q1 = mysql_query("SELECT ID FROM `Clicko Mania` WHERE `Coins`='".$Coins."' AND `Score`='".$Score."' AND `Backs`='".$Backs."'");
$IDb = mysql_fetch_array($q1);
$IDbd=$IDb['ID'];
$q2 = mysql_query("SELECT ID FROM `Clicko Mania` WHERE `Coins`='".$Coins."' AND `Score`='".$Score."' AND `Backs`='".$Backs."'");
$Name_Surnameb = mysql_fetch_array($q2);
$Name_Surnamebd=$Name_Surnameb['ID'];
	
if($IDbd == $ID){
$r1 = mysql_query("SELECT ID FROM `Clicko Mania` WHERE `Coins`='".$Coins."' AND `Score`='".$Score."' AND `Backs`='".$Backs."'");
$result = mysql_fetch_array($r1);
$r1=$result['data'];
echo $r1;
}
else{
echo "1qqqq";
}
}
?>