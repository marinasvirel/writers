<?php

$name = $_POST['name'] ?? "";
$surname = $_POST['surname'] ?? "";
$patronymic = $_POST['patronymic'] ?? "";
$date_birth = $_POST['date-birth'] ?? "";
$date_died = $_POST['date-died'] ?? "";
$biography = $_POST['biography'] ?? "";
$works = $_POST['works'] ?? "";

if ($val->is_valid()) {
  $form->create();
}

?>

<!DOCTYPE html>
<html lang="ru">
<?php require_once "elems/head.php" ?>

<body>
  <?php require_once "elems/header.php" ?>
  <main>
    <div class="container">
    <p class="form-title">Добавление информации о писателе</p>
      <?php
      require_once "forms/create-form.php";
      ?>
    </div>
  </main>
  <?php require_once "elems/footer.php" ?>
</body>

</html>