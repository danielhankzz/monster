<?php 
$link = mysql_connect("localhost", "root", "root");
mysql_select_db("monster"); //MySQL資料庫名稱
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET utf8"); 
mysql_query("SET collation_connection = 'utf8_general_ci'");
?>

<!DOCTYPE html>
<html>

<head>
    <!-- START META SECTION -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Task Composer</title>
    <meta name="author" content="kyart.com.tw">
    <meta name="description" content="Task Composer">    
    <meta name="keywords" content="Task Composer" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">    
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/img/ico/favicon.ico" />   
    <!--/ END META SECTION -->
    <!-- START STYLESHEETS -->   
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
    <!--modernizr script -->
    <script src="assets/js/vendor/modernizr.min.js"></script>
    <script type="text/javascript" language="javascript" src="assets/js/jquery-1.4.3.min.js"></script>
    <!-- jQuery -->
    <script type="text/javascript" src="assets/js/dj_js/jquery-1.11.3.min.js"></script>
	<!-- 雷达图 -->
	<script type="text/javascript" src="assets/js/dj_js/Chart.min.js"></script>
</head>
<!--/ END Head -->

<!-- START Body -->

<body class="grey">
    <!-- START Header -->
    <header id="header" class="navbar navbar-fixed-top">
        <div class="container">
            <!-- START navbar header -->
            <div class="navbar-header">
                <!-- Brand -->
                <a class="navbar-brand" href="index.htm">
                    <span class="logo-text">Task Composer</span>
                </a>
                <!--/ Brand -->
            </div>
         
            <!-- START Toolbar -->
            <div class="navbar-toolbar clearfix">
               
                <!-- START nav collapse -->
                <div class="collapse navbar-collapse navbar-collapse-alt" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">                       
                         <li>
                            <a href="sys-proj.php">
                                <span class="meta">
                                        <span class="text">編輯</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="sys-proj.php">
                                <span class="meta">
                                        <span class="text">匯入</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="about.htm">
                                <span class="meta">
                                        <span class="text">TC簡介</span>
                                </span>
                            </a>
                        </li>
                        <!--
                        <li class="dropdown custom mega memarea">
                            <ul class="">
                                <li>
                                    <a href="member-login.htm" class="btn btn-noborder">
                                        <span class="meta">
                                        <span class="text">登入</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="member-signup.htm" class="btn btn-primary nobra">
                                        <span class="meta">
                                        <span class="text">註冊</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        -->

                    </ul>
                </div>
                <!--/ END nav collapse -->
            </div>
            <!--/ END Toolbar -->
        </div>
    </header>
    <!--/ END Header -->

    <!-- START Main -->
    <section class="main" role="main">

       <section class="apppanel" id="apppanel">
            <div class="container">
                <div class="panel-body">
                    <div class="menubar">
                        <ul>
                            <li>
                                <a href="sys-proj.php">
                                    <i class="icok-inbox4-b"></i>
                                    <span>專案管理</span></a>
                            </li>
                            <li>
                                <a href="sys-role1.php">
                                    <i class="icok-grid-alt-b"></i>
                                    <span>性格角色選擇</span></a>
                            </li>
                            <li>
                                <a href="sys-edit.htm">
                                    <i class="icok-phonelink2-b"></i>
                                    <span>情緒編輯</span></a>
                            </li>
                            <li>
                                <a href="sys-device.php">
                                    <i class="icok-users2-b"></i>
                                    <span>裝置分派</span></a>
                            </li>
                            <li>
                                <a href="sys-monitor.htm">
                                    <i class="icok-dashboard3-b"></i>
                                    <span>服務分析</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <div class="breadcsec">
                            <ol class="breadcrumb">
                                <li><a href="index.htm"><i class="fa fa-home" aria-hidden="true"></i> Task Composer</a></li>
                                <li><a href="#">性格角色管理</a></li>
                               
                            </ol>
                        </div>
                        <div class="title">
                            <h3 class="inline">小怪物</h3>
                            <!-- right 
                            <div class="btnarea">
                                <a href="#new-modal" class="btn btn-yellow popup-modal"><i class="fa fa-plus" aria-hidden="true"></i> 新增角色</a>
                            </div>
                            <div class="function">
                               
                            </div>-->
                        </div>

                        <div class="applist">
                           <ul>
                            <?php
                                $uiconnect="SELECT id,name,type,Openness,Conscientiousness,Extraversion,Agreeableness,Neuroticism,content,mantra,introduction FROM name";
                                $uitotal = mysql_query($uiconnect,$link);
                                $uiuse = mysql_query($uiconnect,$link);
                                $num0=mysql_num_rows($uitotal);
                                //$row2 = mysql_fetch_array($uiuse);
                                $y=0;
                                $i= $_GET[id];
                                while($y < $num0) {
                                $row2 = mysql_fetch_array($uiuse);
                                echo '<li class="col-xs-6">';
                                    echo '<div class="statusbox">';
                                        echo '<a href="'.$row2['content'].'?id='.$i.'" >';
                                            echo '<div class="img"><img src="assets/img/octob.jpg" class="img-responsive"></div>';
                                            echo '<div class="date">ID:<span>'.$row2['id'].'</span></div>';
                                            echo '<div class="text">';
                                                echo '<h3>'.$row2['type'].'-'.$row2['name'].'</h3>';
                                                //echo '<p class="standby">狀態:<span>啟用</span></p>';
                                                echo '<div style="width:95%; display:block; margin:0 auto">';
                                                    echo'<p>口頭禪:<span>'.$row2['mantra'].'</span><br />
                                                            自我介紹:<span>'.$row2['introduction'].'</span>
                                                            <canvas id="myChart'.$row2['id'].'"></canvas>
                                                        </p>';
                                                    
                                                    //echo '<canvas id="myChart'.$row2['id'].'"></canvas>';
                                                echo '</div>';
                                            echo '</div>';
                                        echo '</a>';
                                    echo '</div>';
                                echo '</li>';
                                $y++; 
                                }
                            ?>

                                <div id="aa"></div> 
                            </ul>
                        </div>
                        <!--
                        <nav class="Page navigation" aria-label="Page navigation">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li><a href="sys-role1.php" class="active">1</a></li>
                                <li><a href="sys-role1.php">2</a></li>
                                <li><a href="sys-role1.php">3</a></li>
                                <li><a href="sys-role1.php">4</a></li>
                                <li>
                                    <a href="sys-role1.php" aria-label="Next">
                                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>-->
                    </div>
                </div>
            </div>
        </section>
        
        
    </section>
    <!-- section -->




    <div id="new-modal" class="mfp-hide white-popup-block">
        <div id="inline1" class="inlineframe">
            <div class="paddingframe">
                <a class="btnclose popup-modal-dismiss" href="#"><i class="icok-cross4-b"></i></a>
                <h3>新增角色</h3>
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="inputEmail3" class="control-label">角色名稱</label>
                        <input type="text" class="form-control" placeholder="輸入名稱">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="control-label">裝置名稱</label>
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="control-label">描述</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="poupbtnarea">
                        <ul>
                            <li><a href="" class="btn btn-default">確定</a></li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>       
    </div>


    <!-- 編輯 -->
    <div id="edit-modal" class="mfp-hide white-popup-block">
        <div id="inline1" class="inlineframe">
            <div class="paddingframe">
                <a class="btnclose popup-modal-dismiss" href="#"><i class="icok-cross4-b"></i></a>
                <h3>章魚絲</h3>
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="inputEmail3" class="control-label">裝置名稱</label>
                        <input type="text" class="form-control" placeholder="章魚絲">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="control-label">專案名稱</label>
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="control-label">描述</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="poupbtnarea">
                        <ul>
                            <li><a href="" class="btn-danger"><i class="icok-trashcan2-b"></i></a></li>
                            <li><a href="" class="btn btn-default">確定</a></li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>       
    </div>
 	
    
 	<script>
                        <?php
                        $dev="SELECT id,name,type,Openness,Conscientiousness,Extraversion,Agreeableness,Neuroticism FROM name";
                        $result = mysql_query($dev,$link);
                        $result1 = mysql_query($dev,$link);
                        $num=mysql_num_rows($result);
                                    
                        while($x < $num){
                        $row1 = mysql_fetch_array($result1);
                        echo 'var radarChartData'.$row1['id'].'={';
                            echo 'labels: ["開放性", "嚴謹性", "外向性", "順從性", "神經質"],';
                            echo 'datasets: [';
                                echo '{';
                                    echo 'label: "",';
                                    echo 'fillColor: "rgba(0,0,0,0)",';
                                    echo 'strokeColor: "rgba(0,0,0,0)",';
                                    echo 'pointColor: "rgba(0,0,0,0)",';
                                    echo 'pointStrokeColor: "rgba(0,0,0,0)",';
                                    echo 'pointHighlightFill: "rgba(0,0,0,0)",';
                                    echo 'pointHighlightStroke: "rgba(0,0,0,0)",';
                                    echo 'data: [5,5,5,5,5]';
                                echo '},';
                                echo '{';
                                    echo 'label: "",';
                                    echo 'fillColor: "rgba(0,0,0,0)",';
                                    echo 'strokeColor: "rgba(0,0,0,0)",';
                                    echo 'pointColor: "rgba(0,0,0,0)",';
                                    echo 'pointStrokeColor: "rgba(0,0,0,0)",';
                                    echo 'pointHighlightFill: "rgba(0,0,0,0)",';
                                    echo 'pointHighlightStroke: "rgba(0,0,0,0)",';
                                    echo 'data: [null,null,null,null,true]';
                                echo '},';
                                echo '{';
                                    echo 'label: "",';
                                    echo 'fillColor: "rgba(255,239,229,0.6)",';
                                    echo 'strokeColor: "rgba(227,211,201,0.6)",';
                                    echo 'pointColor: "rgba(255,95,1,1)",';
                                    echo 'pointStrokeColor: "#ff5f01",';
                                    echo 'pointHighlightFill: "#ff5f01",';
                                    echo 'pointHighlightStroke: "rgba(200,76,4,0.8)",';
                                    echo 'data: ['.$row1['Openness'].','.$row1['Conscientiousness'].','.$row1['Extraversion'].','.$row1['Agreeableness'].','.$row1['Neuroticism'].']';  
                                echo '}';
                            echo ']';
                        echo '};';
                        $x++;
                        }
                        ?>

                        <?php
                        $functionadd="SELECT id,name,type,Openness,Conscientiousness,Extraversion,Agreeableness,Neuroticism FROM name";
                        $functionwindow = mysql_query($functionadd,$link);
                        $functionwindowuse = mysql_query($functionadd,$link);
                        $num2=mysql_num_rows($functionwindow);
                        
                        while($q < $num2){
                        $row0 = mysql_fetch_array($functionwindowuse);
                        echo 'function a'.$row0['id'].'(){';
                        echo 'window.myRadar = new Chart(document.getElementById("myChart'.$row0['id'].'").getContext("2d")).Radar(radarChartData'.$row0['id'].', {';
                                echo 'responsive: true';
                            echo '});';
                        echo '}';
                        $q++;
                        }
                        ?>


                        function addLoadEvent(func) {
                            var oldonload = window.onload;
                            if (typeof window.onload != 'function') {
                            window.onload = func;
                            } else {  
                                window.onload = function() {
                                oldonload();
                                func();
                                    }
                                }
                        }


                        <?php
                        $dev5="SELECT Openness,Conscientiousness,Extraversion,Agreeableness,Neuroticism FROM name";
                        $result4 = mysql_query($dev5,$link);
                        $result5 = mysql_query($dev5,$link);
                        $num3=mysql_num_rows($result4);
                        $w=1;
                        while($w <= $num3){
                        $row2 = mysql_fetch_array($result5);
                        echo 'addLoadEvent(a'.$w.');';
                        $w++;
                        }
                        ?>
                        
    </script>

    

    <!-- jQuery -->
    
	<!-- 雷达图 -->
	
	<!-- End -->
    <!-- Library 主要設定檔-->
    <script src="assets/plugins/jquery/jquery-3.2.1.min.js"></script>
    <script src="assets/plugins/jquery/jquery-migrate.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/jquery_ui/jquery-ui.min.js"></script>
    <script src="assets/plugins/magnificpopup/jquery.magnific-popup.min.js"></script>
    <script src="assets/plugins/owl/owl.carousel.min.js"></script>   
    <!-- app script -->
    <script src="assets/js/ui_setting.js"></script>
    <!--/ app script -->    
   

</body>
</html>
