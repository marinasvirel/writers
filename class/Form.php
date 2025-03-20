<?php

class Form extends DB
{
  public function create()
  {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $patronymic = $_POST['patronymic'];
    $date_birth = $_POST['date-birth'];
    $date_died = $_POST['date-died'];
    $biography = $_POST['biography'];
    $works = $_POST['works'];

    $file = $_FILES['file']['name'];
    $tmp_file = $_FILES['file']['tmp_name'];

    move_uploaded_file($tmp_file, "uploads/$file");

    $query = "INSERT INTO `writers`(`name`, `surname`, `patronymic`, `date-birth`, `date-died`, `file`, `biography`, `works`) VALUES ('$name', '$surname', '$patronymic', '$date_birth', '$date_died', '$file', '$biography', '$works')";
    mysqli_query($this->link(), $query);
    unset($_SESSION['file']);
    header("Location: admin");
  }

  public function update()
  {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $patronymic = $_POST['patronymic'];
    $date_birth = $_POST['date-birth'];
    $date_died = $_POST['date-died'];
    $biography = $_POST['biography'];
    $works = $_POST['works'];

    $file = $_FILES['file']['name'];
    $tmp_file = $_FILES['file']['tmp_name'];

    move_uploaded_file($tmp_file, "uploads/$file");

    $query = "UPDATE writers SET `name`= '$name', `surname`= '$surname', `patronymic`= '$patronymic', `date-birth`= '$date_birth', `date-died`= '$date_died', `file` =  '$file', `biography`= '$biography', `works`= '$works' WHERE `id` = '$id'";
    mysqli_query($this->link(), $query);
    unset($_SESSION['file']);
    header('Location: admin');
  }

  public function del()
  {
    $id = $_GET['id'];

    $query = "DELETE FROM `writers` WHERE `id`= '$id'";
    mysqli_query($this->link(), $query);
    header('Location: admin');
  }

  public function auth() {}
}

$form = new Form();
