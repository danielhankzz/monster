<?php
$link=mysql_connect("localhost","root","root");

mysql_select_db("monster",$link);

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET utf8"); 
mysql_query("SET collation_connection = 'utf8_general_ci'");
echo $_GET[type];

$sql="INSERT INTO project (name, label)
VALUES
('$_POST[name]',  '$_POST[label]')";

if (!mysql_query($sql,$link))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

$dev="SELECT id,name,label FROM project ORDER BY id DESC LIMIT 1";
$result = mysql_query($dev,$link);
$row1 = mysql_fetch_array($result);


$na = $row1['id'];
$ty = $row1['name'];
$la = $row1['label'];
$myObj->id = $na;
$myObj->name = $ty;
$myObj->note = $la;
$myJSON = urldecode(json_encode($myObj));


//echo $myJSON;

//Brian
//echo "<script type='text/javascript'>";
//echo "location.href ='http://150.117.122.192/monster/api/modifyproject.do?jdatas=$myJSON'";
//echo "</script>"; 




//$url = "http://127.0.0.1/monster/sys-proj.php";
//echo "<script type='text/javascript'>";
//echo "window.location.href='$url'";
//echo "</script>"; 

mysql_close($link)

?>