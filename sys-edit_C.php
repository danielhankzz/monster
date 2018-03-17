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
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- END STYLESHEETS -->
    <!--modernizr script -->
    <script src="assets/js/vendor/modernizr.min.js"></script>
    <script type="text/javascript">
    function CanModify()
    {
        document.getElementById('input').style.display='block';
        document.getElementById('input').focus();
    }
    function DisModify()
    {
        if (event.keyCode == 13)
        {
            document.getElementById('input').style.display='none';
        
            var contents=document.getElementById('input').value;
            document.getElementById('content').innerHTML = contents;
            
        }
    }
</script>
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
                                <a style="background-color:yellow" href="sys-proj.php">
                                    <i class="icok-inbox4-b"></i>
                                    <span >專案管理</span></a>
                            </li>
                            <li>
                                <a href="sys-role1.php">
                                    <i class="icok-grid-alt-b"></i>
                                    <span>性格角色選擇</span></a>
                            </li>
                            <li>
                                <a >
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
                                <li><a href="#">情緒編輯</a></li>
                            </ol>
                        </div>
                        <div class="api-main-flex">
                            <div class="api-sidebar">
                                <div class="menu-function" id="menu-function">
                                    <div class="collapse-item">
                                        <a class="cate-header" role="button" data-toggle="collapse" href="#collapseExample01" aria-expanded="false" aria-controls="collapseExample01">技能</a>
                                        <div class="collapse" id="collapseExample01">
                                            <div class="item-list">
                                                <div class="task-item " data-item-id="1-1"><span class="color01">技能一</span></div>
                                                <div class="task-item " data-item-id="1-2"><span class="color01">技能二</span></div>
                                                <div class="task-item " data-item-id="1-3"><span class="color01">技能三</span></div>
                                                <!--<div class="task-item " data-item-id="1-4"><span class="color01">暫停</span></div>-->
                                                <!--<div class="task-item " data-item-id="1-5"><span class="color01">技能一</span></div>-->
                                                <!--<div class="task-item " data-item-id="1-6"><span class="color01">觸發值</span></div>-->
                                                <!--<div class="task-item " data-item-id="1-7"><span class="color01">優先權</span></div>-->
                                                <!--<div class="task-item " data-item-id="1-8"><span class="color01">接收成功</span></div>-->
                                                <!--<div class="task-item " data-item-id="1-9"><span class="color01">接收失敗</span></div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="api-content">
                                <div class="api-header">
                                    <ul class="project">
                                        <li>小怪物</li>
                                        <li>Nexus</li>
                                        <li>角色A</li>
                                    </ul>
                                    <div class="project-mode">
                                        <select name="" class="form-control">
                                            <option value="">模式</option>
                                            <option href="check.php" value="">單機模式</option>
                                            <option href="check.php" value="">互動模式</option>
                                        </select>
                                    </div>
                                    <div class="btnarea" onclick="refreshAdd()" >
                                        <a href="content.php" class="btn btn-yellow bnt-save" id="savebtn"><i class="icok-save3-b" aria-hidden="true" > 
                                        </i> 儲存</a>
                                    </div>
                                </div>

                                
                                <div class="task-panel">
                                    <div class="task-funcbtn-panel">
                                        <button class="btn btn-info radius" id="addchar"><i class="fa fa-plus" aria-hidden="true"></i> 新增</button>
                                    </div>
                                    <div class="task-list" action="content.php" method="post">

                                        <?php
                                    	//<!--第一筆-->
                                        $dev="SELECT * FROM content where id =3";
                                        $result = mysql_query($dev,$link);
                                        $result1 = mysql_query($dev,$link);
                                        $num=mysql_num_rows($result);
                                        $x=1;
                                        $row1 = mysql_fetch_array($result1);
                                        while($x <= 5) {
                                        $y=1;
                                        echo '<div class="task-master" action="mod.php" method="post">
                                            <div class="droppable-area" style=" height: 130px;">
                                            <div class="task-item ui-draggable ui-draggable-handle rootitem"  style="width: auto;"><span class="color01">如果<div class="hover-tip"><div class="action-btn"></div></div></span></div>

                                            <div class="task-item ui-draggable ui-draggable-handle rootitem"  style="width: auto;"><span class="color04">一般<div class="hover-tip"><div class="action-btn"></div></div></span>             

                                                    <div class="branchdroppable ui-droppable ui-sortable" style="top: 40px;"><div class="linkline ui-sortable-handle" style="height: 12px;"></div><span class="action-btn"></span><div class="task-item ui-draggable ui-draggable-handle branchitem"  style="width: auto;"><span class="color03">85%<div class="branchfunc"></div></span></div></div>
                                            </div>
                                            <div class="task-item ui-draggable ui-draggable-handle rootitem"  style="width: auto;"><span class="color01">執行<div class="hover-tip"><div class="action-btn"></div></div></span></div>

                                            <div class="task-item ui-draggable ui-draggable-handle rootitem"  style="width: auto;"><span class="color06">bot表情:一般<div class="hover-tip"><div class="action-btn"></div></div></span>     

                                            </div>

                                            <div class="task-item ui-draggable ui-draggable-handle rootitem"  style="width: auto;"><span class="color05">TTS<div class="hover-tip"><div class="action-btn"></div></div></span></div>

                                            <div class="task-item ui-draggable ui-draggable-handle rootitem"  style="width: auto;"><span class="color05">語調<div class="hover-tip"><div class="action-btn"></div></div></span></div>

                                            <div class="task-item ui-draggable ui-draggable-handle rootitem"  style="width: auto;"><span class="color03">1<div class="hover-tip"><div class="action-btn"></div></div></span></div>

                                            <div class="task-item ui-draggable ui-draggable-handle rootitem"  style="width: auto;"><span class="color05">速度<div class="hover-tip"><div class="action-btn"></div></div></span></div>

                                            <div class="task-item ui-draggable ui-draggable-handle rootitem"  style="width: auto;"><span class="color03">1<div class="hover-tip"><div class="action-btn"></div></div></span></div>';

                                            echo '<div id="';

                                            echo 'content'.$x;

                                            echo '" class="task task-item ui-draggable ui-draggable-handle rootitem color02" ondblclick="CanModify1()" data-item-id="3-5-';
                                            echo $x;
                                            echo '" data-item-tts="';

                                            echo $row1['content'.$x];
                                            $a = $row1['content'.$x];

                                            echo '" style="width: auto;"><span id="';

                                            echo 'content'.$x;

                                            echo '" class="color02">';
                                               
                                                echo $row1['content'.$x];
                                                //echo $x;
                                                
                                                
                                            echo '<div class="hover-tip"><div class="action-btn"></div></div></span>    
                                            <input type="text" id="input1" name="test" value="';

                                            echo $row1['content'.$x];

                                            echo '" class="color02" style="display:none; height:20px; z-index: 1; position: absolute; top: 5px;" onKeyDown="DisModify1()" onKeyPress="DisModify1()">
                                            </div>
                                                
                                            </div>
                                        </div>';
                                        $x++;
                                        
                                        }
                                        ?>
                                        <a href="content.php?m=<?php echo $a;?>">点我跳到b.php</a>
                                        

                                        <!--
                                        <div class="task-master">
                                            <div class="droppable-area">
                                                <div class="placeholder">拖拉API模組至此處來新增</div>
                                                <span class="delete-btn"><i class="icok-cross4-b"></i></span>
                                            </div>
                                        </div>
										-->


                                    </div>
                                </div>
                            </div>

                            <!--
                            <div class="api-manage">
                                <h4>參數編輯</h4>
                                <div class="paramedit-area">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="control-label">參數名稱</label>
                                            <input type="text" class="form-control" placeholder="章魚絲">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="control-label">參數名稱</label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="control-label">清單</label>
                                            <select class="form-control" multiple="multiple" size="4">
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
                                        <div class="form-group">
                                            <label for="inputPassword3" class="control-label">多選</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""> 選項1
                                                </label>
                                            </div>
                                            <div class="checkbox disabled">
                                                <label>
                                                    <input type="checkbox" value="" disabled> 選項2
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="control-label block">單行多選</label>
                                            <div class="checkbox-inline">
                                                <label>
                                                    <input type="checkbox" value=""> 選項1
                                                </label>
                                            </div>
                                            <div class="checkbox-inline disabled">
                                                <label>
                                                    <input type="checkbox" value="" disabled> 選項2
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="control-label">單選</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> 選項1
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> 選項2
                                                </label>
                                            </div>
                                            <div class="radio disabled">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled> 選項3
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="control-label block">單行單選</label>
                                            <div class="radio-inline">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> 選項1
                                                </label>
                                            </div>
                                            <div class="radio-inline">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> 選項2
                                                </label>
                                            </div>
                                            <div class="radio-inline disabled">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled> 選項3
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="control-label">檔案上傳</label>
                                            <div class="file-upload-input">
                                                <input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
                                                <label for="file-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                                        <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z" />
                                                    </svg> <span>選擇檔案&hellip;</span></label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="control-label">圖片上傳</label>
                                            <div class="file-upload-input picture">
                                                <input type="file" name="file-2[]" id="file-2" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
                                                <label for="file-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                                        <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z" />
                                                    </svg> <span>選擇圖片&hellip;</span></label>
                                                <div class="img-display">
                                                    <img src="assets/img/demo-01.png">
                                                </div>
                                            </div>
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
                            -->
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </section>
    <!-- section -->
    <!-- jQuery -->
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
    <script type="text/javascript">
    $(function() {

        $("#menu-function .task-item").draggable({
            appendTo: "body",
            helper: "clone",
            refreshPositions: true,
            opacity: 0.8
        });

        var ApiPanel = (function() {
            $(".task-master .droppable-area").droppable({
                // activeClass: "ui-state-default",
                // hoverClass: "ui-state-hover",
                accept: ":not(.ui-sortable-helper)",
                greedy: true,
                // activate: function(event, ui) {
                //     $(this).droppable( 'enable' );
                // },
                drop: function(event, ui) {

                    if ($(this).find(" > .placeholder").length > 0) //add first element when cart is empty
                    {
                        $(this).find(" > .placeholder").remove();
                        // $("<div class='task-item'></div>").text(ui.draggable.text()).appendTo(this);
                        ui.draggable.clone().appendTo(this);

                    } else {

                        var i = 0; //used as flag to find out if element added or not
                        ui.draggable.clone().appendTo(this);
                        // $(this).children('div').each(function() {
                        //     if ($(this).offset().top >= ui.offset.top) //compare
                        //     {
                        //         // $("<div class='task-item'></div>").text(ui.draggable.text()).insertBefore($(this));
                        //         // ui.draggable.clone().insertBefore($(this));
                        //
                        //         i = 1;
                        //         return false; //break loop
                        //     }

                        // })

                        // if (i != 1) //if element dropped at the end of cart
                        // {
                        //     // $("<div class='task-item'></div>").text(ui.draggable.text()).appendTo(this);
                        //     ui.draggable.clone().appendTo(this);
                        //     // alert('132')
                        // }

                    }
                    $(this).find('> .task-item').addClass('rootitem');
                    // count item's total width
                    var wTotal = 0;
                    var percentagewidth = 0;
                    $(this).find('.task-item.rootitem').each(function(i) {
                        $(this).outerWidth('auto');
                        wTotal += $(this).outerWidth();
                        // if(!$(this).find('b').hasClass('rclickmenu')){$("<b class='rclickmenu'>Hello World!</b>").appendTo(this);}
                        var _itemhtml_text = $(this).html(),
                            _thisspan = $(this).find(">span");
                        // if ($(this).find('.hover-tip').length == 0) {
                        //     $("<div class='hover-tip'>" + _itemhtml_text + "<div class='action-btn'><button class='add-branch btn'><i class='icok-plus8-b'></i></button></div></div>").appendTo(this);
                        // }
                        if ($(this).find('.hover-tip').length == 0) {
                            $("<div class='hover-tip'>" + "<div class='action-btn'><button class='add-branch btn'><i class='icok-plus8-b'></i></button></div></div>").appendTo(_thisspan);
                        }
                        var _thisrootitem = $(this),
                            _nextHasbranch = $(this).nextAll().find('.branchdroppable').length,
                            _totalbranch = $(this).parents('.droppable-area').find('.branchdroppable').length;

                        addBranch(_nextHasbranch, _thisrootitem, _totalbranch);
                        // refreshHeight(_totalbranch, _thisrootitem);


                    });

                    // 判斷物件總寬度
                    var itemtWidth = $(this).outerWidth() - wTotal;
                    var itemcount = $(this).find('.task-item.rootitem').length;
                    var dropareawidth = $(this).outerWidth(),
                        _dropareaH = $(this).outerHeight();
                    $(this).css({
                        'max-width': dropareawidth
                    });
                    // var itemtexpect = ($(this).outerWidth() - 150) / itemcount
                    if (itemtWidth <= 70 && $(this).find(".branchdroppable").length == 0) {
                        $(this).css({
                            'height': _dropareaH + 20

                        });


                    }
                    // if (itemtWidth <= 149) {
                    //     $(this).find('.task-item.rootitem').each(function(i) {
                    //         percentagewidth = (($(this).outerWidth() / wTotal) * 100);
                    //         $(this).css({
                    //             width: percentagewidth + "%"
                    //         });
                    //     });


                    // }

                    // hover
                    // $(this).find('.task-item.rootitem').hover(function() {
                    //     $(this).addClass('hover');
                    //     $(this).siblings().removeClass('hover');

                    // }, function() {
                    //     $(this).removeClass('hover');
                    // });
                }

            }).sortable({
                items: "div:not(.placeholder)",
                placeholder: "sort-ph",
                cancel: ".hover-tip, .branchdroppable",
                sort: function() {
                    // gets added unintentionally by droppable interacting with sortable
                    // using connectWithSortable fixes this, but doesn't allow you to customize active/hoverClass options
                    $(this).removeClass("ui-state-default");
                    
                },
                over: function() {
                    removeIntent = false;
                },
                out: function() {
                    removeIntent = true;

                },
                beforeStop: function(event, ui) {
                    if (removeIntent == true) {
                        ui.item.remove();
                    }
                    if ($(this).find(".task-item > span > div").hasClass("sort-ph") || $(this).find(".task-item .hover-tip > div").hasClass("sort-ph") || $(this).find(".task-item > div").hasClass("task-item")){
                        $(this).sortable("cancel");
                    } 
                },
                stop: function(event, ui) {
                    
                    if ($(this).find("div").length == 0) {
                        $('<div class="placeholder">拖拉API模組至此處來新增</div>').appendTo($(this));

                    }
                    
                    refreshAll($(this));
                    var wTotal = 0;
                    var percentagewidth = 0;

                    $(this).find('.task-item.rootitem').each(function(i) {
                        $(this).outerWidth('auto');
                        wTotal += $(this).outerWidth();
                        // var _thisrootitem = $(this),
                        //     _nextHasbranch = $(this).nextAll().find('.branchdroppable').length,
                        //     _totalbranch = $(this).parents('.droppable-area').find('.branchdroppable').length;

                        // refreshHeight(_totalbranch, _thisrootitem);
                    });
                    // 判斷物件總寬度
                    var itemtWidth = $(this).outerWidth() - wTotal;
                    var itemcount = $(this).find('.task-item.rootitem').length;
                    var dropareawidth = $(this).outerWidth(),
                        _dropareaH = $(this).outerHeight();

                    if (wTotal < dropareawidth - 1 && $(this).find(".branchdroppable").length == 0) {
                        $(this).removeAttr('style');

                    } else
                    if (itemtWidth <= 70 && $(this).find(".branchdroppable").length == 0) {
                        $(this).css({
                            'height': _dropareaH + 20,
                            'max-width': dropareawidth
                        });

                    };
                    // if (wTotal < dropareawidth - 150) {
                    //     $(this).removeAttr('style');

                    // } else
                    // if (itemtWidth <= 149) {

                    //     $(this).find('.task-item.rootitem').each(function(i) {
                    //         percentagewidth = (($(this).outerWidth() / wTotal) * 100);
                    //         $(this).css({
                    //             width: percentagewidth + "%"
                    //         });
                    //     });

                    // };




                }
            });
            $('.task-master .delete-btn').click(function(event) {
                $(this).parents('.task-master').detach();
            });
        });
        var Branchdrop = (function() {
            $(".branchdroppable").droppable({
                accept: ":not(.ui-sortable-helper)",
                greedy: true,
                over: function(event, ui) {
                    $(this).parents('.droppable-area').droppable('disable');
                },
                out: function(event, ui) {
                    $(this).parents('.droppable-area').droppable('enable');
                },
                drop: function(event, ui) {

                    if ($(this).find(">.placeholder").length > 0) //add first element when cart is empty
                    {
                        $(this).find(">.placeholder").remove();
                        ui.draggable.clone().appendTo(this);

                    } else {

                        var i = 0; //used as flag to find out if element added or not
                        ui.draggable.clone().appendTo(this);
                        // $(this).children('div').each(function() {
                        //     if ($(this).offset().top >= ui.offset.top) //compare
                        //     {
                                
                        //         ui.draggable.clone().insertBefore($(this));
                        //         i = 1;
                        //         return false; //break loop
                        //     }

                        // })

                        // if (i != 1) //if element dropped at the end of cart
                        // {
                        //     ui.draggable.clone().appendTo(this);
                        // }

                    }
                    $(this).find('> .task-item').addClass('branchitem');
                    // count item's total width
                    var wTotal = 0;
                    var percentagewidth = 0;
                    $(this).find('.task-item').each(function(i) {
                        $(this).outerWidth('auto');
                        wTotal += $(this).outerWidth();
                        var _thisspan = $(this).find(">span");
                        if ($(this).find('.branchfunc').length == 0) {
                            $("<div class='branchfunc'>" + "<button class='add-branchsub btn'><i class='icok-plus8-b'></i></button></div>").appendTo(_thisspan);
                        }
                        var _thisrootitem = $(this),
                            _nextHasbranch = $(this).nextAll().find('.branchdroppable').length,
                            _totalbranch = $(this).parents('.droppable-area').find('.branchdroppable').length;

                        addBranchInfinity(_nextHasbranch, _thisrootitem, _totalbranch);
                        // refreshHeight(_totalbranch, _thisrootitem);


                    });

                    $(this).parents('.droppable-area').droppable('enable');

                }

            }).sortable({
                items: "div:not(.placeholder)",
                placeholder: "sort-ph",
                cancel: ".hover-tip,.branchfunc",
                sort: function() {
                    // gets added unintentionally by droppable interacting with sortable
                    // using connectWithSortable fixes this, but doesn't allow you to customize active/hoverClass options
                    $(this).removeClass("ui-state-default");

                },
                over: function() {
                    removeIntent = false;
                },
                out: function() {
                    removeIntent = true;

                },
                beforeStop: function(event, ui) {
                    if (removeIntent == true) {
                        ui.item.remove();
                    }
                    if ($(this).find(".task-item > span > div").hasClass("sort-ph") || $(this).find(".task-item .hover-tip > div").hasClass("sort-ph") || $(this).find(".task-item > div").hasClass("task-item")){
                        $(this).sortable("cancel");
                    } 
                },
                stop: function(event, ui) {
                    if ($(this).find(">div.branchitem").length == 0) {
                        $('<div class="placeholder">拖拉API模組至此處來新增</div>').appendTo($(this));
                    }
                    refreshAll($(this).parents('.droppable-area'));

                }
            });
            $('.task-master .delete-btn').click(function(event) {
                $(this).parents('.task-master').detach();
            });
        });

        var tasklistSort = (function() {
            $(".task-list").sortable({
                // items: "",
                // handle: ".task-master:after",
                placeholder: "sort-ph",
                cancel: "",
                sort: function() {
                    // gets added unintentionally by droppable interacting with sortable
                    // using connectWithSortable fixes this, but doesn't allow you to customize active/hoverClass options
                    

                },
                over: function() {
                    removeIntent = false;
                },
                out: function() {
                    removeIntent = false;

                },
                beforeStop: function(event, ui) {
                    if (removeIntent == true) {
                        ui.item.remove();
                    }
                },
                stop: function(event, ui) {
                    

                }
            });
        });
        tasklistSort();
        ApiPanel();
        $("#addchar").click(function(event) {
            $('<div class="task-master"><div class="droppable-area"><div class="placeholder">拖拉API模組至此處來新增</div></div><span class="delete-btn"><i class="icok-cross4-b"></i></span></div>').appendTo('.task-list');
            ApiPanel();
        });
        $('.task-master .delete-btn').click(function(event) {
            $(this).parents('.task-master').detach();
        });


        

        function addBranch(_nextHasbranch, _thisrootitem, _totalbranch) {
            $('.add-branch').click(function(event) {

                var _thisbtn = $(this),
                    _thisBtnTaskitem = $(this).parents('.task-item'),
                    _thisBranchitem = _thisBtnTaskitem.find('.branchdroppable'),
                    _masterdareaH = _thisBtnTaskitem.parents('.droppable-area').outerHeight(),
                    _deleteBtn = 'var _thisparentdrop=$(this).parents(".droppable-area");$(this).parents(".branchdroppable").detach();refreshAll(_thisparentdrop);';
                if (_thisBtnTaskitem.find('.branchdroppable').length == 0) {
                    $("<div class='branchdroppable'><div class='linkline'></div>" + '<div class="placeholder">拖拉API模組至此處來新增</div>' + "<span class='action-btn'><button class='delete btn' onclick='" + _deleteBtn + "'><i class='icok-cross4-b'></i></button></span></div>").appendTo(_thisBtnTaskitem);
                };
                refreshAdd(_thisbtn);
                refreshAll(_thisbtn.parents('.droppable-area'));
                Branchdrop();
            });

        }

        function addBranchInfinity(_nextHasbranch, _thisrootitem, _totalbranch) {
            $(_thisrootitem).find('.add-branchsub').click(function(event) {
                var _thisbtn = $(this),
                    _thisBtnTaskitem = $(this).parent('.task-item'),
                    _thisBranchitem = _thisBtnTaskitem.find('.branchdroppable'),
                    _masterdareaH = _thisBtnTaskitem.parents('.droppable-area').outerHeight(),
                    _deleteBtn = 'var _thisparentdrop=$(this).parents(".droppable-area"),_thisparentbranchdrop=$(this).parentsUntil(".task-item");$(this).parentsUntil(".task-item").detach();refreshAll(_thisparentdrop,_thisparentbranchdrop);';
                if (_thisrootitem.find('>.branchdroppable').length == 0) {
                    $("<div class='branchdroppable'><div class='linkline'></div>" + '<div class="placeholder">拖拉API模組至此處來新增</div>' + "<span class='action-btn'><button class='delete btn' onclick='" + _deleteBtn + "'><i class='icok-cross4-b'></i></button></span></div>").appendTo(_thisrootitem);
                };
                refreshAdd(_thisbtn);
                refreshAll(_thisbtn.parents('.droppable-area'));
                Branchdrop();
            });

        }

        // function branchOffset(_nextHasbranch, _thisrootitem) {
        //     var _topdistance = _nextHasbranch * 55 + 40;
        //     _thisrootitem.find('.branchdroppable').css({
        //         'top': _topdistance + 'px'
        //     });
        //     _thisrootitem.find('.branchdroppable .linkline').css({
        //         'height': _topdistance - 28 + 'px'
        //     });

        // }

        // function refreshHeight(_totalbranch, _thisrootitem) {
        //     var _masterHeight = _totalbranch * 55 + 40;
        //     if (_totalbranch == 0) {
        //         _thisrootitem.parents('.droppable-area').css({
        //             'height': '50px'
        //         })
        //         return false;
        //     } else {
        //         _thisrootitem.parents('.droppable-area').css({
        //             'height': _masterHeight + 30 + 'px'
        //         })
        //     }

        // }


    });

    // Functions
    // function refreshDelete(_thisparentdrop) {
    //     var _totalHasBranch = _thisparentdrop.find(".branchdroppable").length,
    //         _dropareaH = _totalHasBranch * 55 + 40,
    //         _dropareaW = _thisparentdrop.outerWidth(),
    //         _TitemW = 0;
    //     _thisparentdrop.find('.task-item.rootitem').each(function(index, el) {
    //         _TitemW += $(this).outerWidth()
    //     });
    //     if(_totalHasBranch == 0 && (_dropareaW - _TitemW) <=1 ){
    //          _thisparentdrop.css({
    //             'height': '70px'
    //         });
    //     }else if (_totalHasBranch == 0) {
    //         _thisparentdrop.css({
    //             'height': '50px'
    //         });
    //     } else {
    //         _thisparentdrop.css({
    //             'height': _dropareaH + 30 + 'px'
    //         });
    //     }
    //     _thisparentdrop.find('.task-item.rootitem').each(function(index, el) {
    //         var _nextHasbranch = $(this).nextAll().find('.branchdroppable').length,
    //             _thisBranchoffset = _nextHasbranch * 55 + 40;
    //         $(this).find('.branchdroppable').css({
    //             'top': _thisBranchoffset + 'px'
    //         });
    //         $(this).find('.branchdroppable .linkline').css({
    //             'height': _thisBranchoffset - 28 + 'px'
    //         });
    //     });
    // }
    // 重新計算區域內的 Branch的位置
    function refreshAll(_thisparentdrop) {
        var _totalHasBranch = _thisparentdrop.find(".branchdroppable").length,
            _dropareaH = _totalHasBranch * 55 + 40,
            _dropareaW = _thisparentdrop.outerWidth(),
            _TitemW = 0;
        _thisparentdrop.find('.task-item.rootitem').each(function(index, el) {
            _TitemW += $(this).outerWidth()
        });
        // 算區域高度
        if (_totalHasBranch == 0 && (_dropareaW - _TitemW) <= 1) {
            _thisparentdrop.css({
                'height': '70px'
            });
        } else if (_totalHasBranch == 0) {
            _thisparentdrop.css({
                'height': '50px'
            });
        } else {
            _thisparentdrop.css({
                'height': _dropareaH + 30 + 'px'
            });
        }
        // 計算每個branch的位置
        _thisparentdrop.find('.task-item').each(function(index, el) {
            var _nextHasbranch = $(this).nextAll().find('.branchdroppable').length,
                _nextHasbranch_root = $(this).nextAll().find('.branchdroppable').length,
                _thisBranchoffset = _nextHasbranch * 55 + 40,
                _thisBranchoffset_root = _nextHasbranch_root * 55 + 40;

            if ($(this).hasClass('rootitem')) {
                $(this).find('>.branchdroppable').css({
                    'top': _thisBranchoffset_root + 'px'
                });
                $(this).find('>.branchdroppable .linkline').css({
                    'height': _thisBranchoffset_root - 28 + 'px'
                });

            } else {

                $(this).find('.branchdroppable').css({
                    'top': _thisBranchoffset + 'px'
                });
                $(this).find('.branchdroppable .linkline').css({
                    'height': _thisBranchoffset - 28 + 'px'
                });
            }
        });

    }

    function refreshAdd(_thisAddBtn) {
        var _thisparentdrop = _thisAddBtn.parents('.droppable-area');
        refreshAll(_thisparentdrop);

    }


    function refreshAdd(_thisAddBtn) {
        var _thisparentdrop = _thisAddBtn.parents('.droppable-area');
        refreshAll(_thisparentdrop);

    }
        $('.bnt-save').bind('click' , function(){
        var ret = [];
        $('.task-master').children('.droppable-area').children('.task').each(function(){
            var item = $(this);
            ret.push(toJSON(item));
        });
        //location.href="http://150.117.122.192/task/api/modbotdata.do?jdatas=" +JSON.stringify(ret);
        <?php 
            echo 'location.href="content.php?id='.$_GET[id].'&value="+JSON.stringify(ret);'
        ?>
        //alert(ret[ret.length-1]);
        alert(JSON.stringify(ret));
        return false;
    });

    function toJSON(item){
        var callee = arguments.callee;
        var ret = {};
        ret['id'] = item.data('item-id');
        var items = [];
        item.children('.branchdroppable').children('.task').each(function(){
            var _item = $(this);
            items.push(callee(_item));
        });
        ret['tts'] = item.data('item-tts');
        
        return ret;
        
    }

    function CanModify1()
    {
        document.getElementById('input1').style.display='block';
        document.getElementById('input1').focus();

    }
    function DisModify1()
    {
        if (event.keyCode == 13)
        {
            document.getElementById('input1').style.display='none';
        
            var contents1=document.getElementById('input1').value;
            document.getElementById('content1').innerHTML = contents1;
            var b = document.getElementById("content1");
            var value_big = b.getAttribute("data-item-tts");//获取值
			b.setAttribute("data-item-tts", contents1); //设置值
            
        }
    }


    function CanModify2()
    {
        document.getElementById('input2').style.display='block';
        document.getElementById('input2').focus();

    }
    function DisModify2()
    {
        if (event.keyCode == 13)
        {
            document.getElementById('input2').style.display='none';
        
            var contents2=document.getElementById('input2').value;
            document.getElementById('content2').innerHTML = contents2;
            var b = document.getElementById("content2");
            var value_big = b.getAttribute("data-item-tts");//获取值
			b.setAttribute("data-item-tts", contents2); //设置值
            
        }
    }


    function CanModify3()
    {
        document.getElementById('input3').style.display='block';
        document.getElementById('input3').focus();

    }
    function DisModify3()
    {
        if (event.keyCode == 13)
        {
            document.getElementById('input3').style.display='none';
        
            var contents3=document.getElementById('input3').value;
            document.getElementById('content3').innerHTML = contents3;
            var b = document.getElementById("content3");
            var value_big = b.getAttribute("data-item-tts");//获取值
			b.setAttribute("data-item-tts", contents3); //设置值
            
        }
    }

    function CanModify4()
    {
        document.getElementById('input4').style.display='block';
        document.getElementById('input4').focus();

    }
    function DisModify4()
    {
        if (event.keyCode == 13)
        {
            document.getElementById('input4').style.display='none';
        
            var contents4=document.getElementById('input4').value;
            document.getElementById('content4').innerHTML = contents4;
            var b = document.getElementById("content4");
            var value_big = b.getAttribute("data-item-tts");//获取值
			b.setAttribute("data-item-tts", contents4); //设置值
            
        }
    }

    function CanModify5()
    {
        document.getElementById('input5').style.display='block';
        document.getElementById('input5').focus();

    }
    function DisModify5()
    {
        if (event.keyCode == 13)
        {
            document.getElementById('input5').style.display='none';
        
            var contents5=document.getElementById('input5').value;
            document.getElementById('content5').innerHTML = contents5;
            var b = document.getElementById("content5");
            var value_big = b.getAttribute("data-item-tts");//获取值
			b.setAttribute("data-item-tts", contents5); //设置值
            
        }
    }


    </script>
</body>

</html>