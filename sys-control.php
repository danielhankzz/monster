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

                    
                    <div class="btnarea" >
                        <a href="http://150.117.122.192/monster/api/reset.do" class="btn btn-yellow bnt-save" id="savebtn"><i class="icok-save3-b" aria-hidden="true" > 
                        </i>還原初始化</a>
                    </div>

                    <div class="btnarea" >
                        <a href="http://150.117.122.192/monster/api/exchange.do" class="btn btn-yellow bnt-save" id="savebtn"><i class="icok-save3-b" aria-hidden="true" > 
                        </i>技能交換</a>
                    </div>

                    <div class="btnarea" >
                        <a href="http://150.117.122.192/monster/api/singing.do" class="btn btn-yellow bnt-save" id="savebtn"><i class="icok-save3-b" aria-hidden="true" > 
                        </i>三支合唱</a>
                    </div>


                    
                </div>
            </div>
        </section>
        
        
    </section>
    <!-- section -->

 

    <!-- jQuery -->
    <script>
    
    </script>
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
