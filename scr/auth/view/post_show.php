<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../../css/pages/all.css">
    <link rel="stylesheet" href="../../../css/pages/auth/post_show.css">
    <script type="text/javascript" src="../../../javascript/pages/auth/post_show.js"></script>
    <title>記事詳細(ログイン後)</title>
</head>
<body>
<?php require ("../../component/auth/header_bar.php");?>
<div class="profile">
    <a href="user_information.php"><img src="../../../images/common/user.png" width="100px" height="100px" alt="user-image">
        <p>ユーザーネームさん</p>
    </a>
</div>
<article>
    <div class="back-namber">
        <div class="value">
            <p>HTMLとは？</p><br>
            <a href="#">前の記事を読む</a>
            <a href="#">次の記事を読む</a><br>
            <select name="example">
                <option>編集</option>
                <option>消去</option>
            </select>
            <input type="submit" value="確定">
        </div>
    </div>
</article>
<?php require ("../../component/auth/footer_bar.php");?>
</body>
</html>