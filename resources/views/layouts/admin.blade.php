<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <meta name="keywords" content="{{$keywords or '陈小陌的系统后台'}}" />
    <meta name="description" content="{{description or '陈小陌的系统后台'}}" />

    <link rel="shortcut icon" href="favicon.ico" />
    <link href="{{asset('css/bootstrap.min.css?v=3.3.6')}}" rel="stylesheet" />
    <link href="{{asset('css/font-awesome.css?v=4.4.0')}}" rel="stylesheet" />
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css?v=4.1.0')}}" rel="stylesheet" />

    <!-- 个性化 css 开始 -->
    @yield('css')
    
    <!-- 个性化 css 结束 -->
    <title>{{$title or '陈小陌的系统后台'}}</title>
    
</head>

<body class="gray-bg">
    
    <!-- 主要内容开始 -->
    @yield('content')
    <!-- 主要内容结束 -->
        
    <!-- 全局js 开始-->
    <script src="js/jquery.min.js?v=2.1.4"></script>
    <script src="js/bootstrap.min.js?v=3.3.6"></script>
    <!-- 全局js 结束-->
    
    <!-- 个性化javascript 开始 -->
    <script src="js/content.js?v=1.0.0"></script>
    @yield('js')
    <!-- 个性化javascript 结束 -->
</body>

</html>
