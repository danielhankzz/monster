<?php
$link=mysql_connect("localhost","root","root");

mysql_select_db("monster",$link);

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET utf8"); 
mysql_query("SET collation_connection = 'utf8_general_ci'");


$sql="INSERT INTO device (name, type, label)
VALUES
('$_POST[name]', '$_POST[type]' , '$_POST[label]')";

if (!mysql_query($sql,$link))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

$na = $_POST[name];
$ty = $_POST[type];
$la = $_POST[label];
$myObj->name = $na;
$myObj->type = $ty;
$myObj->label = $la;
$myJSON = urldecode(json_encode($myObj));


echo $myJSON;
//Brian
//echo "<script type='text/javascript'>";
//echo "location.href ='http://150.117.122.192/task/api/modbotdata.do?jdatas='+$myJSON";
//echo "</script>"; 




//$url = "http://127.0.0.1/monster/sys-device.php";
//echo "<script type='text/javascript'>";
//echo "window.location.href='$url'";
//echo "</script>"; 

mysql_close($link)

?>