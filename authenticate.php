<?php
require __DIR__. '/config.php';
require __DIR__. '/common.php';
require __DIR__ . '/vendor/autoload.php';

if ($_REQUEST['email'] && $_REQUEST['password']) {
  if (auth($_REQUEST['email'], $_REQUEST['password'])) {

    // in reality, you'd load from a database
    $user = [];
    $user['email'] = $_REQUEST['email'];
    $user['favoriteColor'] = 'blue';
    $_SESSION['user'] = $user;
    unset($_SESSION['error']);
  } else {
    $_SESSION['error'] = 'Unable to authenticate';
  }
}
header("Location: /"); 
?>
