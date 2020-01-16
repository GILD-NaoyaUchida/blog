<?php
session_start();
if (isset($_SESSION['is_login'])) {
    if ($_SESSION['is_login'] === true) {
        header('Location: ../../auth/view/post_index.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../../../css/pages/all.css">
  <link rel="stylesheet" href="../../../css/pages/auth/post_show.css">
  <script type="text/javascript" src="../../../javascript/pages/guest/post_show.js"></script>
  <title>記事詳細(ログイン前)</title>
</head>
<body>
<?php require("../../component/guest/header_bar.php"); ?>
<article>
  <div class="back-namber">
    <div class="value">
      <p>HTMLとは？</p><br>
      <a href="#">前の記事を読む</a>
      <a href="#">次の記事を読む</a><br>
    </div>
  </div>
</article>
<?php require("../../component/guest/footer_bar.php"); ?>
</body>
</html>