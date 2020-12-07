<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>本の追加</title>
    
  </head>
  <body>
    <h1>本の追加</h1>
    <form>
      作品名:<input type="text" name="作品名"><br>
      作者名:<input type="text" name="作者名"><br>
      出版社:<input type="text" name="出版社" list="company"placeholder="テキスト入力もしくはダブルクリック" autocomplete="off"><br>
      <datalist id="company">
        <option value="週刊少年ジャンプ">
        <option value="週刊少年マガジン">
        <option value="週刊少年サンデー">
        <option value="週刊ヤングマガジン">

      </datalist>
      巻数:<input type="text" name="巻数"><br>
      おすすめ度:<input type="text" name="おすすめ度"><br>
      <input type="submit" value="追加">

    </form>
  </body>
</html>