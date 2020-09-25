<?php
session_start();

function auth($username, $password) {
  error_log("here: ".$password);
  // go to the database or wherever
  if ($password == 'password') { 
    error_log("here2: ".$password);
    return true;
  }
  error_log("here3: ".$password);
  return false;

}
