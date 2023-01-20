<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="POST" action="/thanks">
    @csrf
    <label for="name">氏名</label><br>
    <input type="text" name="name" value=""><br>
    <label for="email">メールアドレス</label><br>
    <input type="text" name="email" value=""><br>
    <button class="btn" onclick="location.href='http://127.0.0.1:8000/thanks'">送信する</button>
  </form>

</body>

</html>