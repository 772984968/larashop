<html lang="{{app()->getLocale()}}">
<head>
    @include('layouts._meta')
    <title>@yield('title', '商城后台') - Larashop 商城后台</title>
    <meta name="keywords" content="商城后台">
    <meta name="description" content="商城后台 larashop">
</head>
<body>
     @yield('content')
    @include('layouts._footer')
</body>
</html>