<?php 
error_reporting(0);
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
                    <div class="content">
                        <div class="breadcsec">
                            <ol class="breadcrumb">
                                <li><a href="index.htm"><i class="fa fa-home" aria-hidden="true"></i> Task Composer</a></li>
                                <li><a href="#">專案管理</a></li>
                               
                            </ol>
                        </div>
                        <div class="title">
                            <h3 class="inline">所有專案</h3>
                            <div class="btnarea">
                                <a href="#new-modal" class="btn btn-yellow popup-modal"><i class="fa fa-plus" aria-hidden="true"></i> 新增專案</a>
                            </div>
                            <div class="function">
                                <!-- right -->
                            </div>
                        </div>

                        <div class="applist">
                            

                        	<ul>


                            <?php

                                $dev="SELECT id,name,label FROM project";
                                $result = mysql_query($dev,$link);
                                $result1 = mysql_query($dev,$link);
                                $num=mysql_num_rows($result);
                                $x=0;
                                $y=0;
                                while($x < $num) {
                                $row1 = mysql_fetch_array($result1);
                                echo '<li class="col-md-3 col-xs-6">';
                                    echo '<div class="statusbox">';
                                        echo '<a href="sys-role1.php?id='.$row1['id'].'">';
                                            echo '<div class="img"><img src="assets/img/sdk/sdk-01.png" class="img-responsive"></div>';
                                            echo '<div  class="date">ID:<i class="date"></i> '.$row1['id'].'</div>';
                                            echo '<div class="text">';
                                                echo '<h4>'.$row1['name'].'</h4>';
                                                echo '<p>'.$row1['label'].'</p>';
                                            echo '</div>';
                                            echo '<div class="device">';
                                                echo '<!-- icon -->';
                                            echo '</div>';
                                        echo '</a>';
                                    echo '</div>';
                                echo '</li>';
                                $x++;
                                $row2[x] = $row1['id'];
                                } 
                            ?>

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
                                <li><a href="#" class="active">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        -->
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
                <h3>新增專案</h3>
                <form class="form-horizontal" action="insert_pro.php" method="post">
                    <div class="form-group">
                        <label for="inputEmail3" class="control-label">專案名稱</label>
                        <input type="text" name="name" class="form-control" placeholder="輸入名稱">
                    </div>
                    
                    <div class="form-group">
                        <label for="inputPassword3" class="control-label">描述</label>
                        <textarea name="label" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="poupbtnarea">
                        <ul>
                            <li><a  href="javascript:adddevice();" class="btn btn-default">確定</a></li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>       
    </div>
 

    <!-- jQuery -->
    <script>
    function adddevice(){
        document.forms[0].submit();
    }

    function deldevice(){
        document.forms[0].submit();
    }

    function openModifyWindow(data){
    
    $("#edit-modal1").empty().append(data);
    $("#edit-modal1").dialog({
      title: "",
      bgiframe: true,
      width: 800,
      height: 500,
      modal: true,
      draggable: true,
      resizable: false,
      overlay:{opacity: 0.7, background: "#FF8899" }

      
    });
    }
    function doedit(id) {
    var actionUrl = "edit_pro.php?id="+id;
    $.ajax({
    async:false,
    type: "POST",
    url: actionUrl,
    data:{},
    dataType: "html",  
    cache:false,   
    success:function(data) {
     var errStr = null;
     if(data != null){
      openModifyWindow(data);
     }else{
      errStr = '系統發生錯誤!';
     }
     if(errStr != null){
      alert(errStr);
     }
    }
    });
    }

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
