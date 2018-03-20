<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php if (isset($systemData['systemname'])) {echo $systemData['systemname'];}?></title>
    <meta name="Keywords" content=""/>
    <meta name="Description" content=""/>
    <link href="<?=$this->request->base?>/favicon.ico" rel="Shortcut Icon">
    <!-- bootstrap - css -->
    <link href="<?=$this->request->base?>/assets/BJUI/themes/css/bootstrap.min.css" rel="stylesheet">
    <!-- core - css -->
    <link href="<?=$this->request->base?>/assets/BJUI/themes/css/style.css" rel="stylesheet">
    <link href="<?=$this->request->base?>/assets/BJUI/themes/blue/core.css" id="bjui-link-theme" rel="stylesheet">
    <!-- plug - css -->
    <link href="<?=$this->request->base?>/assets/BJUI/plugins/kindeditor/themes/default/default.css" rel="stylesheet">
    <link href="<?=$this->request->base?>/assets/BJUI/plugins/colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="<?=$this->request->base?>/assets/BJUI/plugins/niceValidator/jquery.validator.css" rel="stylesheet">
    <link href="<?=$this->request->base?>/assets/BJUI/plugins/bootstrapSelect/bootstrap-select.css" rel="stylesheet">
    <link href="<?=$this->request->base?>/assets/BJUI/themes/css/FA/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=$this->request->base?>/assets/css/bjui-x.css?v=0.13" rel="stylesheet">
    <!--[if lte IE 9]>
    <script src="<?=$this->request->base?>/assets/js/html5shiv.min.js"></script>
    <script src="<?=$this->request->base?>/assets/js/respond.min.js"></script>
    <![endif]-->
    <!-- jquery -->

    <script src="<?=$this->request->base?>/assets/js/jquery-1.12.4.min.js"></script>
    <script src="<?=$this->request->base?>/assets/BJUI/js/jquery.cookie.js"></script>
    <!--[if lte IE 9]>
    <script src="<?=$this->request->base?>/assets/BJUI/other/jquery.iframe-transport.js"></script>
    <![endif]-->
    <!-- BJUI.all 分模块压缩版 -->
    <script src="<?=$this->request->base?>/assets/BJUI/js/bjui-all.min.js"></script>
    <!-- plugins -->
    <!-- swfupload for uploadify && kindeditor -->
    <script src="<?=$this->request->base?>/assets/BJUI/plugins/swfupload/swfupload.js"></script>
    <!-- kindeditor -->
    <script src="<?=$this->request->base?>/assets/BJUI/plugins/kindeditor/kindeditor-all-min.js"></script>
    <!-- colorpicker -->
    <script src="<?=$this->request->base?>/assets/BJUI/plugins/colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- ztree -->
    <script src="<?=$this->request->base?>/assets/BJUI/plugins/ztree/jquery.ztree.all-3.5.js"></script>
    <!-- nice validate -->
    <script src="<?=$this->request->base?>/assets/BJUI/plugins/niceValidator/jquery.validator.min.js?local=zh-CN"></script>
    <script src="<?=$this->request->base?>/assets/BJUI/plugins/niceValidator/jquery.validator.themes.js"></script>
    <!-- bootstrap plugins -->
    <script src="<?=$this->request->base?>/assets/BJUI/plugins/bootstrap.min.js"></script>
    <script src="<?=$this->request->base?>/assets/BJUI/plugins/bootstrapSelect/bootstrap-select.min.js"></script>
    <script src="<?=$this->request->base?>/assets/BJUI/plugins/bootstrapSelect/defaults-zh_CN.min.js"></script>
    <!-- icheck -->
    <script src="<?=$this->request->base?>/assets/BJUI/plugins/icheck/icheck.min.js"></script>
    <!-- dragsort -->
    <script src="<?=$this->request->base?>/assets/BJUI/plugins/dragsort/jquery.dragsort-0.5.1.min.js"></script>
    <!-- other plugins -->
    <script src="<?=$this->request->base?>/assets/BJUI/plugins/other/jquery.autosize.js"></script>
    <link href="<?=$this->request->base?>/assets/BJUI/plugins/uploadify/css/uploadify.css" rel="stylesheet">
    <script src="<?=$this->request->base?>/assets/BJUI/plugins/uploadify/scripts/jquery.uploadify.min.js"></script>
    <script src="<?=$this->request->base?>/assets/BJUI/plugins/download/jquery.fileDownload.js"></script>


    <script type="text/javascript" src="<?=$this->request->base?>/assets/js/bjui-x.js"></script>


    <link href="<?=$this->request->base?>/assets/js/city-picker/css/city-picker.css" rel="stylesheet">

    <script type="text/javascript" src="<?=$this->request->base?>/assets/js/city-picker/js/city-picker.data.min.js"></script>
    <script type="text/javascript" src="<?=$this->request->base?>/assets/js/city-picker/js/city-picker.min.js"></script>

    <!-- init -->
    <script type="text/javascript">
        $(function() {
            BJUI.init({
                JSPATH       : '<?=$this->request->base?>/assets/BJUI/',         //[可选]框架路径
                PLUGINPATH   : '<?=$this->request->base?>/assets/BJUI/plugins/', //[可选]插件路径
                loginInfo    : {url:"<?php echo $this->Url->build(['plugin' => $this->request->params['plugin'], 'controller' => 'Users', 'action' => 'relogin']);?>", title:'登录', width:530, height:266}, // 会话超时后弹出登录对话框
                statusCode   : {ok:200, error:300, timeout:301 ,warn : 302, redirect : 307}, //[可选]
                ajaxTimeout  : 50000, //[可选]全局Ajax请求超时时间(毫秒)
                pageInfo     : {total:'total', pageCurrent:'pageCurrent', pageSize:'pageSize', orderField:'orderField', orderDirection:'orderDirection'}, //[可选]分页参数
                alertMsg     : {displayPosition:'topcenter', displayMode:'slide', alertTimeout:3000}, //[可选]信息提示的显示位置，显隐方式，及[info/correct]方式时自动关闭延时(毫秒)
                keys         : {statusCode:'statusCode', message:'message'}, //[可选]
                ui           : {
                    windowWidth      : 0,    //框架可视宽度，0=100%宽，> 600为则居中显示
                    showSlidebar     : true, //[可选]左侧导航栏锁定/隐藏
                    clientPaging     : true, //[可选]是否在客户端响应分页及排序参数
                    overwriteHomeTab : false, //[可选]当打开一个未定义id的navtab时，是否可以覆盖主navtab(我的主页)
                    hideWidth : 600 //拓展项，小屏适配宽度，默认600，影响左侧菜单等
                },
                debug        : false,    // [可选]调试模式 [true|false，默认false]
                theme        : 'sky' // 若有Cookie['bjui_theme'],优先选择Cookie['bjui_theme']。皮肤[五种皮肤:default, orange, purple, blue, red, green]
            })

            // main - menu
            $(document).on('click', '#bjui-accordionmenu a', function(e) {
                e.preventDefault();
                var $a = $(this), $li = $a.parent(),$a_href = $a.attr('href');
                if($li.hasClass('menu-items-tree')){
                    $li.toggleClass('open').find('ul.menu-items').slideToggle();
                    var $open = $li.siblings('.menu-items-tree');
                    if($open.hasClass('open')){
                        $open.removeClass('open').find('ul.menu-items').slideUp();
                    }
                    return
                }
                if($a_href == '' || $a_href == '#' || $a_href == 'javascript:;') return
                var options = $a.data('options').toObj()
                //自定义page页面标签名
                if($li.parent().hasClass('menu-items')){
                    var $p_title = $li.parent().prevAll('a').first().html()
                }
                var onClose = function() {
                    $li.removeClass('active')
                }
                var onSwitch = function() {
                    $('#bjui-accordionmenu').find('ul > li').removeClass('switch')
                    $li.addClass('switch')
                }
                $li.addClass('active')

                if (options) {
                    options.p_title = $p_title
                    options.url      = $a.attr('href')
                    options.onClose  = onClose
                    options.onSwitch = onSwitch
                    if (!options.title) options.title = $a.text()

                    if (!options.target)
                        $a.navtab(options)
                    else
                        $a.dialog(options)
                    if($('#menu_lock').hasClass('sm-collapse')){
                        $(this).slidebar('unlock')
                    }
                }

                e.preventDefault()
            })

        })
        //注：此处对点击主页tab进行了修改，修改内容为bjui-navtab.js 第54行，增加了点击刷新
        //切换并刷新主面板
        function refresh_mainTab(obj){
            $(obj).navtab('switchTab', 'main').navtab('refresh','main');
            if($('#menu_lock').hasClass('sm-collapse')){
                $(this).slidebar('unlock')
            }
        }

        //时钟
        var today = new Date(), time = today.getTime()
        setInterval(function() {
            today = new Date(today.setSeconds(today.getSeconds() + 1))
            $('#bjui-clock').html(today.formatDate('HH:mm:ss'))
        }, 1000)

    </script>
</head>
<body>
<div id="bjui-window">
    <div id="bjui-container">
        <div id="bjui-leftside">
            <div id="bjui-sidebar-s">
                <div class="collapse"></div>
            </div>
            <div id="bjui-sidebar">
                <div class="toggleCollapse h4">
                    <span class="logo-lg">
                        <div style="font-size: 28px;text-align: center;line-height: 1.8">CakeCMS-x</div>
                        <!-- <img src="./assets/img/logo-big.png" class="img-responsive center-block"> -->
                    </span>
                    <span class="logo-min">
                        <div style="font-size: 28px;text-align: center;line-height: 1.8">C</div>
                        <!-- <img src="./assets/img/logo-min.png" class="img-responsive center-block"> -->
                    </span>
                </div>
                <div class="panel-group panel-main" data-toggle="accordion" id="bjui-accordionmenu" data-heightbox="#bjui-sidebar" data-offsety="26">
                    <ul class="sidebar-menu">
                        <li onclick="refresh_mainTab(this)"><a href="#"> <i class="fa fa-home"></i> <span>我的主页</span></a></li>

                        <?if(!empty($menus)):foreach ($menus as $menu):if(empty($menu->children)):?>
                            <li><a href="<?if(empty($menu->target))echo '#';else echo $this->request->base,'/',$menu->target?>" data-reload="true" data-autorefresh="true" data-options="{id:'<?=$menu->id?>', faicon:'<?=$menu->icon?>', fresh:true}"><i class="fa <?=$menu->icon?>"></i> <span><?=$menu->name?></span></a></li>
                        <?else:?>
                            <li class="menu-items-tree">
                                <a href="#">
                                    <i class="fa <?=$menu->icon?>"></i> <span><?=$menu->name?></span>
                                </a><span class="b"><i class="fa fa-angle-down"></i></span>
                                <ul class="menu-items">
                                    <?foreach ($menu->children as $item):?>
                                        <li><a href="<?=($item->target?($this->request->base.'/'.$item->target):'javascript:;')?>" data-reload="true" data-autorefresh="true" data-options="{id:'<?=$item->id?>', faicon:'<?=$item->icon?>', fresh:true}"><i class="fa fa-circle-o"></i> <span><?=$item->name?></span></a></li>
                                    <?endforeach;?>
                                </ul>
                            </li>
                        <?endif;endforeach;endif;?>


                    </ul>
                </div>
            </div>
        </div>
        <div id="window-shadow">
            <div class="catalog-tip" id="catalog-tip">
                <p class="catalog-tip-txt">轻触这里</p>
                <p class="catalog-tip-txt">关闭目录</p>
                <i class="fa fa-hand-pointer-o layout-icons_hand" aria-hidden="true"></i>
            </div>
        </div>
        <div id="bjui-navtab" class="tabsPage">
            <header id="bjui-header">
                <a href="#" class="sidebar-toggle" role="button" id="menu_lock">
                    <span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
                </a>
                <nav id="bjui-navbar-collapse">
                    <ul class="bjui-navbar-right">
                        <li class="datetime"><div><span id="bjui-date"><?php echo date('Y-m-d')?></span> <span id="bjui-clock"></span></div></li>
                        <li><a href="javascript:;">用户：<?php if (isset($userData)) {echo empty($userData['nickname']) ? $userData['username'] : $userData['nickname'];}?></a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">我的账户 <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#" data-url="<?php echo $this->Url->build(['plugin' => $this->request->params['plugin'], 'controller' => 'Users', 'action' => 'resetpasswd']);?>" data-toggle="dialog" data-id="changepwd_page" data-mask="true" data-width="600" data-height="300">&nbsp;<span class="glyphicon glyphicon-lock"></span> 修改密码&nbsp;</a></li>
                                <li><a href="<?php echo $this->Url->build(['plugin' => $this->request->params['plugin'], 'controller' => 'Users', 'action' => 'myinfo']);?>" data-toggle="dialog" data-mask="true" data-width="600" data-height="300">&nbsp;<span class="glyphicon glyphicon-user"></span> 我的资料</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo $this->Url->build(['plugin' => $this->request->params['plugin'], 'controller' => 'Users', 'action' => 'logout']);?>" class="red">&nbsp;<span class="glyphicon glyphicon-off"></span> 注销登录</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <i id="navbar-collapse-cogs" class="fa fa-cogs" aria-hidden="true"></i>
            </header>
            <div class="tabsPageHeader">
                <div class="tabsPageHeaderContent">
                    <ul class="navtab-tab nav nav-tabs">
                        <li data-url="<?php echo $this->Url->build(['plugin' => $this->request->params['plugin'], 'controller' => 'Welcome', 'action' => 'main']);?>"><a href="javascript:;"><span><i class="fa fa-home"></i> #maintab#</span></a></li>
                    </ul>
                </div>
                <div class="tabsLeft"><i class="fa fa-angle-double-left"></i></div>
                <div class="tabsRight"><i class="fa fa-angle-double-right"></i></div>
                <div class="tabsMore"><i class="fa fa-angle-double-down"></i></div>
            </div>
            <ul class="tabsMoreList">
                <li><a href="javascript:;">#maintab#</a></li>
            </ul>
            <div class="navtab-panel tabsPageContent" style="width:100%">
                <div class="navtabPage unitBox">
                    <div class="bjui-pageContent" style="background:#FFF;padding:0 10px;">
                        Loading...
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="bjui-footer"><?php
        if (isset($systemData['systemfoot'])) {
            echo $systemData['systemfoot'];
        }
        ?></footer>
</div>
</body>
</html>