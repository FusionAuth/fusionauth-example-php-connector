<?php
require __DIR__. '/config.php';
require __DIR__. '/common.php';
require __DIR__ . '/vendor/autoload.php';
?>

Welcome to the application.

<?php if (!$_SESSION['user']) { ?>
<?php if ($_SESSION['error']) { ?>
  <br/><span style="color: red;"><?php echo $_SESSION['error']; ?></span><br/>
<?php } ?>
<form action="/authenticate.php">
  Username: <input type="text" name="email"/> <br/>
  Password: <input type="password" name="password"/> <br/>
  <input type="submit" value="Log in"/>
</form>
<?php } ?>

<?php if ($_SESSION['user']) { ?>
  You are logged in.<br/>

<form action="/logout.php">
  <input type="submit" value="Log out"/>
</form>
<?php } ?>
