<form method="$_GET" action="index">
    <input type="text" name="username" value="login" />
    <input type="password" name="password" value="passwd" />
    <input type="submit" name="OK" value="OK" />
</form>


<?php
session_start();
$login = $_GET["username"];
$pass = $_GET["password"];

if ($_GET["username"] && $_GET["password"])
{
  if ($login === "admin" && $pass === "admin") {
    $_SESSION["log"] = $login;
    $_SESSION["groupe"] = "admin";
    echo "Bonjour\n";
  }
  else {
    $_SESSION = array();
    echo "faux\n";
  }
}