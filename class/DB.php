<?php

class DB
{
  private $host = 'localhost';
  private $user = 'root';
  private $pass = 'root';
  private $name = 'personaly-writers';

  public function link()
  {
    return mysqli_connect($this->host, $this->user, $this->pass, $this->name);
  }
}
