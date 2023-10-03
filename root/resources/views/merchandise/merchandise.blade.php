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
                <tr>
                    <th>商品番号</th>
                    <th>商品名</th>
                    <th>>分類</th>
                    <th>価格</th>
                    <th>プラ</th>
                    <th>付記</th>
                    <th>紙</th>
                    <th>付記</th>
                    <th>登録日</th>
                    <th>更新日</th>
                    <th>色</th>
                    <th>サイズ</th>
                    <th>変更</th>
                    <th>追加</th>
                </tr>

                @foreach($merchandises as $merchandise)
                <tr>
                    <td>{{$merchandise -> merchandise_number}}</td>
                    <td>{{$merchandise -> merchandise_name}}</td>
                    <td>{{$merchandise -> merchandise_classification}}</td>
                    <td>{{$merchandise -> merchandise_price}}</td>
                    <td>{{$merchandise -> merchandise_plastic}}</td>
                    <td>{{$merchandise -> merchandise_plastic_notes}}</td>
                    <td>{{$merchandise -> merchandise_paper}}</td>
                    <td>{{$merchandise -> merchandise_paper_notes}}</td>
                    <td>{{$merchandise -> created_at}}</td>
                    <td>{{$merchandise -> updated_at}}</td>
                    <td>{{$merchandise -> merchandise_color}}</td>
                    <td>{{$merchandise -> merchandise_size}}</td>
                    <td><a href="">分類</a><br><a href="">価格</a><br><a href="">サイズ</a></td>
                    <td><a href="">画像</a><br><a href="">色</a><br><a href="">サイズ</a></td>
                </tr>
                @endforeach
            </table>

        </div>

    </section>

</body>

</html>