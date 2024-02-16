<?php
require __DIR__. '/config.php';
require __DIR__. '/common.php';
require __DIR__ . '/vendor/autoload.php';

$provider = new \League\OAuth2\Client\Provider\GenericProvider([
    'clientId'                => $client_id, 
    'clientSecret'            => $client_secret,
    'redirectUri'             => $redirect_uri,
    'urlAuthorize'            => $fa_url.'/oauth2/authorize',
    'urlAccessToken'          => $fa_url.'/oauth2/token',
    'urlResourceOwnerDetails' => $fa_url.'/oauth2/userinfo' 
]);

// Get the state generated for you and store it to the session.
$_SESSION['oauth2state'] = $provider->getState();
?>

Welcome to the application.

<?php if (!isset($_SESSION['user'])) { ?>
<br/>
<a href='<?php echo $provider->getAuthorizationUrl(); ?>'>Login</a>
<?php } ?>

<?php if (isset($_SESSION['user']) && $_SESSION['user']) { ?>
  You are logged in.<br/>

<form action="/logout.php">
  <input type="submit" value="Log out"/>
</form>
<?php } ?>
