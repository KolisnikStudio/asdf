<?php
header('Access-Control-Allow-Origin: *');

$mysql_host = "localhost";
$mysql_database = "kolya73_bd";
$mysql_user = "kolya73_bd";
$mysql_password = "71uBO2OC";

$link = mysql_connect($mysql_host, $mysql_user, $mysql_password) or die("Ошибка при подключении MySQL" );
mysql_select_db($mysql_database, $link) or die ('Ошибка при подключении к БД');

if(isset($_POST['Name_Surname'])) $ID = $_POST['Name_Surname'];
if(isset($_POST['Score'])) $Score = $_POST['Score'];

if(isset($ID) && isset($Score)) {

$q1 = mysql_query("SELECT * FROM `Clicko Mania` WHERE `ID`='".$ID."'");

if(mysql_num_rows($q1) == 1) {

$array = mysql_fetch_array($q1);

if($Score > $array['Score']) $q3 = mysql_query("UPDATE `Clicko Mania` SET `Score`='".$Score."' WHERE `ID`='".$ID."'");
}
$q2 = mysql_query("INSERT INTO `Clicko Mania`(`ID`, `Score`) VALUES ('".$ID."', '".$Score."')");
}

$q4 = mysql_query("SELECT * FROM `Clicko Mania` ORDER BY `Score` DESC");

$i=0;
while($row = mysql_fetch_row($q4)){

    if($i<10) {
	echo $row[0].' - '.$row[1].'|';
	$i=$i+1;
	}
}
?>