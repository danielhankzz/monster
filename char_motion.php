<?php 
$link = mysql_connect("localhost", "root", "root");
mysql_select_db("monster"); 
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET utf8"); 
mysql_query("SET collation_connection = 'utf8_general_ci'"); 
?>
<form id="id" name="name" method="post" action="">
<label>請選
<select name="select">
<?php
$str="SELECT id, name, type, Openness, Conscientiousness, Extraversion, Agreeableness, Neuroticism FROM name ";
$list =mysql_query($str,$link);
while(list($id,$name) = mysql_fetch_row($list))
{
echo "<option value=".$id.">".$name."</option>\n";
}
?> 
</select>