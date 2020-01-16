<?php

session_start();

$dbh = new PDO ('mysql:dbname=blog; host=127.0.0.1;port=8889; charset=utf8', 'root', 'root');

$sql = "SELECT * FROM users where email = ? ORDER BY id DESC";
$stmt = $dbh->prepare($sql);
$stmt->bindValue(1, $_SESSION['email']);
$stmt->execute();
$user = $stmt->fetch();

$sql = "SELECT * FROM article where user_id = ? ORDER BY id DESC";
$stmt = $dbh->prepare($sql);
$stmt->bindValue(1, $user['id']);
$stmt->execute();
$articles = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../../../css/pages/all.css">
  <link rel="stylesheet" href="../../../css/pages/auth/post_index.css">
  <script type="text/javascript" src="../../../javascript/pages/auth/post_index.js"></script>
  <title>TOP(ログイン後)</title>
</head>
<body>
<?php require("../../component/auth/header_bar.php"); ?>
<div class="profile">
  <a href="user_information.php"><img src="../../../images/common/user.png" width="100px" height="100px"
                                      alt="user-image">
    <p><?php echo $user['nickname'] ?></p></a>
  </a>
</div>
<article>
  <div class="back-namber">
      <?php foreach ($articles as $index => $article) { ?>

        <div class="value">
          <a href="post_show.php"><p><?= $article['title'] ?></p></a>
          <a href="post_edit.php?article_id=<?= $article['id'] ?>">編集</a>
          <a href="../back/post_delete.php?article_id=<?= $article['id'] ?>">削除</a><br>
        </div>

      <?php  } ?>
  </div>
</article>
<?php require("../../component/auth/footer_bar.php"); ?>
</body>
</html>


