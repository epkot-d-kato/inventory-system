<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/common.css')}}">
    <link rel="stylesheet" href="{{asset('/css/merchandise/create.css')}}">
    <link rel="stylesheet" href="{{asset('/css/breadcrumb.css')}}">
    <link rel="stylesheet" href="{{asset('/css/create.css')}}">
    <title>Document</title>
</head>

<body>

    <section class="header">
        @include('common')
    </section>

    <h1>商品登録</h1>
    <section class="menu">
        
        <ul>
            <li><a href="/home">スタートメニュー</a></li>
            <li>商品管理</li>
            <li>商品登録</li>
        </ul>

    </section>

    <section class="main">
        <form method="POST" action="/merchandise/store">
            @csrf
            <div class="submit">
                <input type="submit">
            </div>

            <ul>
                <li>分類:</li>
                <li>・<button><a href="">分類登録</a></button></li>
                <li>商品名：<input type="text"></li>
                <li>価格：<input type="text"></li>
                <li>色：<input type="text"></li>
                <li>サイズ：<input type="text"></li>
                <li>梱包</li>
                <li><input type="checkbox">プラ</li>
                <li><input type="checkbox">紙</li>
            </ul>

            <button>登録確認</button>

        </form>


    </section>

</body>

</html>