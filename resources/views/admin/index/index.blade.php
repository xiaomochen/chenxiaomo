<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <title>
        H+后台主题UI框架-主页
    </title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <link rel="shortcut icon" href="favicon.ico">
    <link href="{{asset('css/bootstrap.min.css?v=3.3.6')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css?v=4.4.0')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css?v=4.1.0')}}" rel="stylesheet">
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
        
    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"> <i class="fa fa-times-circle"> </i> </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span>
                                <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                    <span class="block m-t-xs"> <strong class="font-bold"> Beaut-zihan </strong> </span>
                                    <span class="text-muted text-xs block"> 超级管理员 <b class="caret"> </b> </span>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li> <a class="J_menuItem" href="form_avatar.html"> 修改头像 </a> </li>
                                <li> <a class="J_menuItem" href="profile.html"> 个人资料 </a> </li>
                                <li> <a class="J_menuItem" href="contacts.html"> 联系我们 </a> </li>
                                <li> <a class="J_menuItem" href="mailbox.html"> 信箱 </a> </li>
                                <li class="divider"> </li> 
                                <li> <a href="login.html"> 安全退出 </a> </li>
                            </ul>
                        </div>
                        <div class="logo-element"> H+ </div>
                    </li>

                    <li>
                        <a class="J_menuItem" href="{{url('admin/welcome')}}" data-index="0">
                            <i class="fa fa-home"></i> 
                            <span class="nav-label">主页</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#">
                            <i class="fa fa-bars">
                            </i>
                        </a>
                        <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                            <div class="form-group">
                                <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                                 
                </nav>
            </div>
            <div class="row content-tabs">
                <button class="roll-nav roll-left J_tabLeft">
                    <i class="fa fa-backward">
                    </i>
                </button>
                <nav class="page-tabs J_menuTabs">
                    <div class="page-tabs-content">
                        <a href="javascript:;" class="active J_menuTab" data-id="{{url('admin/welcome')}}">
                            首页
                        </a>
                    </div>
                </nav>
                <button class="roll-nav roll-right J_tabRight">
                    <i class="fa fa-forward">
                    </i>
                </button>
                <div class="btn-group roll-nav roll-right">
                    <button class="dropdown J_tabClose" data-toggle="dropdown">
                        关闭操作
                        <span class="caret">
                                </span>
                    </button>
                    <ul role="menu" class="dropdown-menu dropdown-menu-right">
                        <li class="J_tabShowActive">
                            <a>
                                定位当前选项卡
                            </a>
                        </li>
                        <li class="divider">
                        </li>
                        <li class="J_tabCloseAll">
                            <a>
                                关闭全部选项卡
                            </a>
                        </li>
                        <li class="J_tabCloseOther">
                            <a>
                                关闭其他选项卡
                            </a>
                        </li>
                    </ul>
                </div>
                <a href="login.html" class="roll-nav roll-right J_tabExit">
                    <i class="fa fa fa-sign-out">
                    </i>
                    退出
                </a>
            </div>
            <div class="row J_mainContent" id="content-main">
                <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="{{url('admin/welcome')}}" frameborder="0" data-id="{{url('admin/welcome')}}" seamless></iframe>
            </div>
            <div class="footer">
                <div class="pull-right">
                    &copy;2014-2015
                    <a href="http://www.zi-han.net/" target="_blank">
                        zihan's blog
                    </a>
                </div>
            </div>
        </div>
        <!--右侧部分结束-->
    </div>
    
    <!--全局js-->
    <script src="{{asset('js/jquery.min.js?v=2.1.4')}}"> </script>
    <script src="{{asset('js/bootstrap.min.js?v=3.3.6')}}"> </script>
    <script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"> </script>
    <script src="{{asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"> </script>
    <script src="{{asset('js/plugins/layer/layer.min.js')}}"> </script>
    <!--自定义js-->
    <script src="{{asset('js/hplus.js?v=4.1.0')}}"> </script>
    <script type="text/javascript" src="{{asset('js/contabs.js')}}"> </script>
    <!--第三方插件-->
    <script src="{{asset('js/plugins/pace/pace.min.js')}}"> </script>
</body>

</html>