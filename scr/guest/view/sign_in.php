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
  <link rel="stylesheet" href="../../../css/pages/guest/sign_in.css">
  <script type="text/javascript" src="../../../javascript/pages/guest/sign_in.js"></script>
  <title>ログイン画面</title>
</head>
<body>
<?php require("../../component/guest/header_bar.php"); ?>
<section>
  <div class="container">
    <?php if (isset($_SESSION['error'])) { ?>
      <p><?= $_SESSION['error'] ?></p>
    <?php  } ?>
    <div class="login-form">
      <h3>ユーザーログイン</h3>
      <form method="post" action="../back/sign_in.php">
        <input type="text" name="email" placeholder="abcdef@example.com">
        <input type="password" name="password" placeholder="パスワード(半角英数)">
        <p><input type="submit" value="ログイン"></p>
      </form>
    </div>
    <a class="signin" href="sign_up.php">新規会員登録</a>
  </div>
</section>
<?php require("../../component/guest/footer_bar.php"); ?>
</body>
</html>