<?php
$link=mysql_connect("localhost","root","root");

mysql_select_db("monster",$link);

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET utf8"); 
mysql_query("SET collation_connection = 'utf8_general_ci'");


echo $_POST[name];
echo $_POST[type];
echo $_POST[label];
echo $_POST[id];


$sql = "UPDATE device SET 
		name='$_POST[name]' ,
		type='$_POST[type]' ,
		label='$_POST[label]'
		WHERE device_id='$_POST[id]'";
mysql_query($sql);

//Brian
//echo "<script type='text/javascript'>";
//echo "location.href ='http://service.inmedia.com.tw/task/api/modbotdata.do?jdatas=' +$_POST[name]+$_POST[type]";
//echo "</script>"; 




$url = "http://127.0.0.1/monster/sys-device.php";
echo "<script type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>"; 

mysql_close($link)

?>