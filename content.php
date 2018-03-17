
<html>  
      <head>  
           <title>Webslesson Tutorial</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     <style>
   
   .box
   {
    width:750px;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:100px;
   }
  </style>
      </head>  
      <body>  
        <div class="container box">
          <h3 align="center">Import JSON File Data into Mysql Database in PHP</h3><br />
          <?php
          error_reporting(0);
          $connect = mysql_connect("localhost","root","root");			
          mysql_select_db("test",$connect);
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
           $x=1;
          
           $query1 = "UPDATE name SET 
                 mantra= 1414141141,
                 introduction= 4141414  
                 WHERE id = 1 ";
           $table_data1 .= '
            <tr>
          
          <td>'.$row1["mantra"].'</td
          <td>'.$row1["introduction"].'</td
          </tr>
           '; //Data for display on Web page
            //$q = mysql_query($connect,$query) or die (mysqli_error($connect));
            if (!mysql_query($query1,$connect))
            {
             die('Error: ' . mysql_error());
            }

              $x++;
           }



          //echo $table_data;

          //echo $_GET[value];
          

          //print_r($array1); 
          //echo $str;


          if(!mysql_query($connect, $query)) //Run Mutliple Insert Query
    		   {
     			//echo $table_data;  
          	}

          if(!mysql_query($connect, $query1)) //Run Mutliple Insert Query
           {
          //echo $table_data1;  
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
          echo $myJSON;
          //header("Location:http://150.117.122.192/monster/api/rolesetting.do?jdatas=$myJSON"); 
          //Brian
          echo "<script type='text/javascript'>";
            //echo "var obj = '$myJSON';";
            //echo 'var myJSO = JSON.stringify(obj);';
          //echo "location.href ='http://150.117.122.192/monster/api/rolesetting.do?jdatas='+$myJSON";
          echo "</script>"; 
          ?>
     <br />
         </div>  
      </body>  
 </html>