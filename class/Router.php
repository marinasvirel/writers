<?php

class Router
{
  public function pages_for_reader($ids)
  {
    $page = "main.php";
    $url = $_SERVER['REQUEST_URI'];
    if (array_key_exists('id', $_GET)) {
      if (in_array($_GET['id'], $ids)) {
        if ($url == "/read.php?id={$_GET['id']}") {
          $page = "read.php";
        }
      }
    }
    return $page;
  }

  public function pages_for_admin($ids)
  {
    $page = "admin.php";
    $url = $_SERVER['REQUEST_URI'];
    if ($url == "/admin") {
      $page = "admin.php";
    } elseif ($url == "/create") {
      $page = "create.php";
    }
    if (array_key_exists('id', $_GET)) {
      if (in_array($_GET['id'], $ids)) {
        if ($url == "/update.php?id={$_GET['id']}") {
          $page = "update.php";
        }
        if ($url == "/delete.php?id={$_GET['id']}") {
          $page = "delete.php";
        }
        if ($url == "/read.php?id={$_GET['id']}") {
          $page = "read.php";
        }
      }
    }
    return $page;
  }
}

$router = new Router();
$pages_for_reader = $router->pages_for_reader($ids);
$pages_for_admin = $router->pages_for_admin($ids);
