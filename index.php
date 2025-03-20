<?php
session_start();
require_once "class/DB.php";
require_once "class/Writer.php";
require_once "class/Form.php";
require_once "class/Validator.php";
require_once "class/Router.php";
require_once "class/Auth.php";


if ($is_auth) {
  require_once $pages_for_admin;
} else {
  require_once $pages_for_reader;
}


