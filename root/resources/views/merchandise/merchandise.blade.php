<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/common.css')}}">
    <link rel="stylesheet" href="{{asset('/css/merchandise/merchandise.css')}}">
    <title>Document</title>
</head>

<body>
    <section class="header">
        @include('common')
    </section>

    <section class="main">
        <div class="menu">
            <p>商品管理</p>
            <ul>
                <li>スタートメニュー</li>
                <li>商品管理</li>
            </ul>
            <p>商品登録</p>
            <p>アーカイブ管理</p>
            <input type="text">
            <button>検索</button>
            <p>検索削除</p>
        </div>

        <div class="DB">
            <table border="1">
                <th>
                <td>商品番号</td>
                <td>商品名</td>
                <td>分類</td>
                <td>価格</td>
                <td>プラ</td>
                <td>付記</td>
                <td>紙</td>
                <td>付記</td>
                <td>登録日</td>
                <td>更新日</td>
                <td>色</td>
                <td>サイズ</td>
                <td>変更</td>
                <td>追加</td>
                </th>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="">分類</a><br><a href="">価格</a><br><a href="">サイズ</a></td>
                    <td><a href="">画像</a><br><a href="">色</a><br><a href="">サイズ</a></td>
                </tr>
            </table>

        </div>



    </section>

</body>

</html>