
          <?php
          error_reporting(0);
          $connect = mysql_connect("localhost","root","root");			
          mysql_select_db("test",$connect);
          $connect1 = mysql_connect("localhost","root","root");      
          mysql_select_db("test",$connect1);
		      mysql_query("SET NAMES 'utf8'");
		      mysql_query("SET CHARACTER SET utf8"); 
		      mysql_query("SET collation_connection = 'utf8_general_ci'");
          //$q = $_GET[id];
          //echo $_GET[id];
          $query = '';
          $query1 = '';
          $table_data = '';
          $table_data1 = '';
          $str = $_GET[value];
          //$data = file_get_contents($str); //Read the JSON file in PHP
          $array = json_decode($str, true); //Convert JSON String into PHP Array
          $array2 = json_decode($str, true); //Convert JSON String into PHP Array
          //print_r($array);
          foreach($array as $row) //Extract the Array Values by using Foreach Loop
          {
           $x=1;
           $query = "UPDATE talk SET 
           			 tts= '$row[tts]' ,
                 cid= '$row[emotion]'  
           			 WHERE id = '$row[id]' ";
           
           $table_data .= '
            <tr>
       		<td>'.$row["id"].'</td
          <td>'.$row["emotion"].'</td>>
       		<td>'.$row["tts"].'</td>
      		</tr>
           '; //Data for display on Web page
           	//$q = mysql_query($connect,$query) or die (mysqli_error($connect));
           	if (!mysql_query($query,$connect))
  					{
 						 die('Error: ' . mysql_error());
  					}

				      $x++;
           }

          foreach($array2 as $row1) //Extract the Array Values by using Foreach Loop
          {
           $y=1;
           echo $row1[mantra1];
           $query1 = "UPDATE name SET 
                 mantra1= '$row1[mantra1]' ,
                 mantra2= '$row1[mantra2]' ,
                 mantra3= '$row1[mantra3]' ,
                 introduction= '$row1[introduction]'  
                 WHERE id = 1 ";
           $table_data1 .= '
          <tr>
          <td>'.$row1["mantra1"].'</td
          <td>'.$row1["mantra2"].'</td
          <td>'.$row1["mantra3"].'</td
          <td>'.$row1["introduction"].'</td
          </tr>
           '; //Data for display on Web page
            //$q = mysql_query($connect,$query) or die (mysqli_error($connect));
            if (!mysql_query($query1,$connect1))
            {
             die('Error: ' . mysql_error());
            }
              $y++;
           }



          //echo $table_data;

          //echo $_GET[value];
          

          //print_r($array1); 
          //echo $str;


          if(!mysql_query($connect, $query)) //Run Mutliple Insert Query
    		   {
     			//echo $table_data;  
          	}

          if(!mysql_query($connect1, $query1)) //Run Mutliple Insert Query
           {
          echo $table_data1;  
            }


          $array1  = [
            "project_id" => "$_GET[id]",
            "role_id" => "1",
            "role_name" => "巧比",
            "character" => "活潑外向",
            "contents" => "$_GET[value]"
            ];
          $myJSON = json_encode($array1, JSON_UNESCAPED_UNICODE);
          $myJSON = str_replace('\"','' , $myJSON);
          //$myJSON = json_encode($array1, JSON_UNESCAPED_UNICODE);
          //echo $myJSON;
          //header("Location:http://150.117.122.192/monster/api/rolesetting.do?jdatas=$myJSON"); 
          //Brian
          echo "<script type='text/javascript'>";
            //echo "var obj = '$myJSON';";
            //echo 'var myJSO = JSON.stringify(obj);';
          //echo "location.href ='http://150.117.122.192/monster/api/rolesetting.do?jdatas='+$myJSON";
          echo "</script>"; 
          ?>