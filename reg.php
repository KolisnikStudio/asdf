<?php header('Access-Control-Allow-Origin: *');
header('Content-Type: text/html; charset=utf-8');
$mysql_host = "localhost";
$mysql_database = "kolya73_bd";
$mysql_user = "kolya73_bd";
$mysql_password = "71uBO2OC";

$link = mysql_connect($mysql_host, $mysql_user, $mysql_password) or die("Error connecting MySQL" );
mysql_select_db($mysql_database, $link) or die ('Ошибка при подключении к БД');

$link = mysql_connect($mysql_host, $mysql_user, $mysql_password) or die("Ошибка при подключении MySQL" );
mysql_select_db($mysql_database, $link) or die ('Ошибка при подключении к БД');

    if (isset($_POST['ID'])) { $ID = $_POST['ID']; if ($ID == '') { unset($ID);} }
    if (isset($_POST['Name_Surname'])) { $Name_Surname=$_POST['Name_Surname']; if ($Name_Surname =='') { unset($Name_Surname);} }
    if (isset($_POST['Score'])) { $Score=$_POST['Score']; if ($Score =='') { unset($Score);} }
    if (isset($_POST['Coins'])) { $Coins=$_POST['Coins']; if ($Coins =='') { unset($Coins);} }
   if (isset($_POST['Backs'])) { $Backs=$_POST['Backs']; if ($Backs =='') { unset($Backs);} }
 if (empty($ID))
    {
    echo ("Вы ввели не всю информацию, заполните все поля!");
   exit();
    }
    $ID = stripslashes($ID);
    $ID = htmlspecialchars($ID);
    $Name_Surname = stripslashes($Name_Surname);
    $Name_Surname = htmlspecialchars($Name_Surname);
    $Score = stripslashes($Score);
    $Score = htmlspecialchars($Score);
    $Coins = stripslashes($Coins);
    $Coins = htmlspecialchars($Coins);
    $Backs = stripslashes($Backs);
  $Backs = htmlspecialchars($Backs);
    $ID = trim($ID);
    $Name_Surname = trim($Name_Surname);
    $Score = trim($Score);
    $Coins = trim($Coins);
   $Backs = trim($Backs);
    $q1 = mysql_query("SELECT ID FROM `Clicko Mania` WHERE `ID`='".$ID."'");
   $loginb = mysql_fetch_array($q1);
   $loginbd=$loginb['ID'];
    if($loginbd == $ID){
    echo("Извините, введённый вами логин уже зарегистрирован.");
   exit();
    }
    else
    $result2 = mysql_query ("INSERT INTO Clicko Mania (ID,Name_Surname,Score,Coins,Backs) VALUES('$ID','$Name_Surname','$Score','$Coins','$Backs')");
    if ($result2=='TRUE')
    {
    echo "Вы успешно зарегистрированы!";
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
                                ?>