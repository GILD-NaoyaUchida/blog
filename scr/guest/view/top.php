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
  <link rel="stylesheet" href="../../../css/pages/guest/top.css">
  <script type="text/javascript" src="../../../javascript/pages/guest/top.js"></script>
  <title>Naoya Uchidaのブログ</title>
</head>
<body>
<?php require("../../component/guest/header_bar.php"); ?>
<article>
  <div class="back-namber">
    <div class="value">
      <a href="post_show.php"><p>HTMLとは？</p></a>
    </div>
  </div>
</article>
<?php require("../../component/guest/footer_bar.php"); ?>
</body>
</html>