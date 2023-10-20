<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/common.css')}}">
    <link rel="stylesheet" href="{{asset('/css/merchandise/create.css')}}">
    <link rel="stylesheet" href="{{asset('/css/breadcrumb.css')}}">
    <link rel="stylesheet" href="{{asset('/css/merchandise/create.css')}}">
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

            <ul>
                <li>商品番号:<input type="text" name="merchandise_number"></li>
                <li>分類:<input type="text" name="merchandise_classification"></li>
                <li>商品名：<input type="text" name="merchandise_name"></li>
                <li>価格：<input type="text" name="merchandise_price"></li>
                <li>色：<input type="text" name="merchandise_color"></li>
                <li>サイズ：<input type="text" name="merchandise_size"></li>
                <li>梱包</li>
                <li><input type="checkbox" name="merchandise_plastic" value="1">プラ</li>
                <li>備考:<input type="text" name="merchandise_plastic_notes"></li>
                <li><input type="checkbox" name="merchandise_paper" value="1">紙</li>
                <li>備考:<input type="text" name="merchandise_paper_notes"></li>
            </ul>

            <div class="submit">
                <input type="submit">
            </div>


            <button>登録確認</button>

        </form>


    </section>

</body>

</html>