<?php 
$link = mysql_connect("localhost", "root", "root");
mysql_select_db("monster"); //MySQL資料庫名稱
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET utf8"); 
mysql_query("SET collation_connection = 'utf8_general_ci'");

?>
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/img/ico/favicon.ico" />   
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/jquery_ui/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/jquery_ui/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="assets/plugins/magnificpopup/magnific-popup.css" />
    <link rel="stylesheet" href="assets/plugins/owl/assets/owl.carousel.css">
    <link rel="stylesheet" href="assets/plugins/owl/assets/owl.theme.default.min.css"> 
    <link rel="stylesheet" href="assets/css/kyart-ui.css">
    <link rel="stylesheet" href="assets/css/kyart.css">
    <!-- END STYLESHEETS -->

        <div id="inline1" class="inlineframe">
            <div class="paddingframe">
                
                <h3>章魚絲</h3>
                <form class="form-horizontal" name = "modify" action="mod.php" method="post">
                    <div class="form-group">
                        <label for="inputEmail3" class="control-label">裝置名稱</label>
                        <input type="text" name="name" class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="control-label">專案名稱</label>
                        <select name="type" class="form-control">
							<?php
							$str="SELECT name FROM name ";
							$list =mysql_query($str,$link);
							while(list($name) = mysql_fetch_row($list))
								{
									echo "<option value=".$name.">".$name."</option>\n";
								}
								//$type = $name ;
							?>
						</select>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="control-label">描述</label>
                        <textarea name="label" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="poupbtnarea" name="type1">
                        <ul>
                            <!--<li><a href="javascript:deldevice();" class="btn-danger"><i class="icok-trashcan2-b"></i></a></li>-->
                            <?php

                            echo '<li> <a href="delete.php?device_id='.$_GET['id'].'" class="btn-danger"><i class="icok-trashcan2-b"></i></a></li>';

                            echo '<li> <a href="javascript:moddevice();" class="btn btn-default">送出</a> </li>';

                            echo '<input type = "hidden" name = "id" value = "'.$_GET['id'].'"> ';
                            ?>

                        </ul>
                    </div>
                </form>
            </div>
        </div>       
    </div></div></div></div>

    <script>
	function moddevice(){
		//alert("fdsfsfdsfsdf");
		//document.forms[1].submit();
		var form =  document.forms["modify"];
		form.submit();

	}


	</script>
    <!--/ app script -->  

  