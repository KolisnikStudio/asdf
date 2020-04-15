<?php header('Access-Control-Allow-Origin: *');
header('Content-Type: text/html; charset=utf-8');
$mysqli = new mysqli("localhost", "kolya73_bd", "71uBO2OC", "kolya73_bd");
if ($mysqli ->connect_errno) {
die('Could not connect: ' . mysqli_connect_errno());;
}

if (isset($_POST['ID'])) { $ID = $_POST['ID']; if ($ID == '') { unset($ID);} }
if (empty($ID))
$q1 = mysql_query("SELECT ID FROM `Clicko Mania` WHERE `ID`='".$ID."'");
   $loginb = mysql_fetch_array($q1);
   $loginbd=$loginb['ID'];
    if($loginbd == $ID){
    echo("User is registered");
   exit();
    }
 else {
    echo "User not registered";
}
                                ?>