<?php
$name = $writer['name'];
$surname = $writer['surname'];
$patronymic = $writer['patronymic'];
$date_birth = $writer['date-birth'];
$date_died = $writer['date-died'];
$biography = $writer['biography'];
$works = $writer['works'];
$file_name = $writer['file'];

if (isset($_POST['update'])) {
  if ($val->is_valid()) {
    $form->update();
  }
}

?>
<!DOCTYPE html>
<html lang="ru">
<?php require_once "elems/head.php" ?>

<body>
  <?php require_once "elems/header.php" ?>
  <main>
    <div class="container">
      <p class="form-title">Редактирование информации о писателе</p>
      <?php
      require_once "forms/create-form.php";
      ?>
    </div>
  </main>
  <?php require_once "elems/footer.php" ?>
</body>

</html>