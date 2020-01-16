<?php
session_start();

session_destroy();

header('Location: ../../guest/view/top.php');
exit;