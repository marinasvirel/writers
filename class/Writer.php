<?php

class Writer extends DB
{
  public function selectAll()
  {
    $link = $this->link();
    $query = "SELECT * FROM `writers`";
    $res = mysqli_query($link, $query);
    for ($writers = []; $row = mysqli_fetch_assoc($res); $writers[] = $row);
    return $writers;
  }

  public function selectById()
  {
    if (array_key_exists('id', $_GET)) {
      $link = $this->link();
      $id = $_GET['id'];
      $query = "SELECT * FROM `writers` WHERE `id`= '$id'";
      $res = mysqli_query($link, $query);
      return mysqli_fetch_assoc($res);
    }
  }

  public function ids()
  {
    $writers = $this->selectAll();
    $ids = [];
    foreach ($writers as $key => $value) {
      $ids[] = $value['id'];
    }
    return $ids;
  }
}

$wr = new Writer();
$writers = $wr->selectAll();
$writer = $wr->selectById();
$ids = $wr->ids();