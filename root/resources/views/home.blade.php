<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/common.css')}}">
    <title>Document</title>
</head>

<body>
    <section class="header">
        @include('common')
    </section>

    <section class="main">
        <p>スタートメニュー</p>
        <ul>
            <li>商品管理</li>
            <li>分類管理</li>
            <li>数量管理</li>
            <li>棚番管理</li>
            <li>ラベル印刷</li>
        </ul>
    </section>
</body>

</html>