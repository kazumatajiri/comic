<!DOCTYPE HTML>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>漫巻検索</title>
    <!-- Styles -->
    {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するCSSを読み込みます --}}
        <link href="{{ asset('css/top.css') }}" rel="stylesheet">
  </head>
  <body>
    <h1>漫巻検索</h1>
    <table border="1">
    <a href="https://comic">新規登録</a>
      <caption>登録漫画一覧</caption>
      <thead>
        <tr>
          <th>作品名</th>
          <th>作者名</th>
          <th>掲載雑誌名</th>
          <th>巻数</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>ワンピース</td>
          <td>尾田栄一郎</td>
          <td>週刊少年ジャンプ</td>
          <td>52巻</td>
          <td><a href="https://comic">編集</a></td>
          <td><a href="https://comic">削除</a></td>
        </tr>
        <tr>
          <td>メジャー</td>
          <td>満田拓也</td>
          <td>週刊少年サンデー</td>
          <td>78巻</td>
          <td><a href="https://comic">編集</a></td>
          <td><a href="https://comic">削除</a></td>
        </tr>
      </tbody>
      
    </table>
    <a href="https://comic">追加</a>
  </body>
</html>