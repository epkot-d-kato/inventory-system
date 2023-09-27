<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/common.css')}}">
    <link rel="stylesheet" href="{{asset('/css/home.css')}}">
    <title>Document</title>
</head>

<body>
    <section class="header">
        @include('common')
    </section>

    <section class="main">
        <p>スタートメニュー</p>
        <ul>
            <li><a href="/merchandise">商品管理</a></li>
            <li><a href="/classification">分類管理</a></li>
            <li><a href="/quantity">数量管理</a></li>
            <li><a href="/number">棚番管理</a></li>
            <li><a href="/label">ラベル印刷</a></li>
        </ul>
    </section>
</body>

</html>