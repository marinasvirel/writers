<?php

class Auth
{
  public function is_auth()
  {
    return array_key_exists('login', $_SESSION);
  }

  public function log()
  {
    if (isset($_POST['login']) and isset($_POST['password'])) {
      $login = $_POST['login'];
      $password = $_POST['password'];

      if (!empty($login) and !empty($password)) {
        if ($login == "admin" and $password == "root") {
          $_SESSION['login'] = $login;
          header("Location: " . $_SERVER['PHP_SELF']);
        } else {
          return "ошибка";
        }
      } else {
        return "ошибка";
      }
    }
    return $this;
  }

  public function ex()
  {
    if (isset($_POST['exit'])) {
      unset($_SESSION['login']);
      header("Location: " . $_SERVER['PHP_SELF']);
    }
    return $this;
  }

  public function error_text()
  {
    if ($this->log() == "ошибка") {
      return "ошибка";
    } else {
      return "";
    }
  }
}

$auth = new Auth();
$is_auth = $auth->is_auth();
$auth->log();
$auth->ex();
$error_auth = $auth->error_text();
