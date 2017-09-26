<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">ブックマークアプリ</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<h1>add github!</h1>
<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>Make your beloved book list :)</legend>
     <label>書籍名：<input type="text" name="title"></label><br>
     <label>書籍URL：<textArea name="url" rows="4" cols="40"></textArea></label><br>
     <label>書籍コメント：<textArea name="comment" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
