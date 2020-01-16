<?php

session_start();

$dbh = new PDO ('mysql:dbname=blog; host=127.0.0.1;port=8889; charset=utf8', 'root', 'root');

$sql = "SELECT * FROM article where id = ? ORDER BY id DESC";
$stmt = $dbh->prepare($sql);
$stmt->bindValue(1, $_GET['article_id']);
$stmt->execute();
$articles = $stmt->fetch();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../../../css/pages/all.css">
  <link rel="stylesheet" href="../../../css/pages/auth/post_edit.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="../../../javascript/pages/auth/post_edit.js"></script>
  <title>ブログを書く</title>
</head>
<body>
<?php require("../../component/auth/header_bar.php"); ?>
<div class="profile">
  <a href="user_information.php"><img src="../../../images/common/user.png" width="100px" height="100px"
                                      alt="user-image">
    <p>ユーザーネームさん</p>
  </a>
</div>
<article>
  <div class="back-namber">
    <form method="post" action="../back/post_create.php">

      <div class="text-area">
        <input type="text" name="title" class="title1" maxlength="20" placeholder="タイトルをここに書く" value="<?= $articles['title'] ?>"><br>
        <textarea name="content" class="kiji1" rows="4" cols="40" placeholder="本文をここに書く"><?= $articles['content'] ?></textarea><br>
      </div>

      <span id="reservation_date"></span>

      <select id="status" name="status">
        <option value="1">投稿する</option>
        <option value="2" selected>予約投稿する</option>
        <option value="3">下書き保存する</option>
      </select>
      <input type="submit" value="確定">

    </form>
  </div>
</article>
<?php require("../../component/auth/footer_bar.php"); ?>
</body>
</html>