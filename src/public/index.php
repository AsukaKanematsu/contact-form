<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>sample</title>
  </head>
  <body>
    <h2>お問い合わせフォーム</h2>
    <p>以下のフォームからお問い合わせください</p>
    <form action="complete.php" method="post">
      タイトル(必須)<br />
      <input type="text" name="title" size="50" value="" /><br />

      Email(必須)<br />
      <input type="text" name="email" size="50" value="" /><br />

      お問い合わせ内容(必須)<br />
      <textarea name="content" cols="50" rows="5"></textarea><br />

      <br />

      <input type="submit" value="送信" />
    </form>
  </body>
</html>

