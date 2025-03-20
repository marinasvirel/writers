<!DOCTYPE html>
<html lang="ru">
<?php require_once "elems/head.php" ?>

<body>
  <?php require_once "elems/header.php" ?>
  <main>
    <div class="container">
      <h1 hidden>Биографии писателей</h1>
      <a title="добавить" class="nav add" href="create">&#10010;</a>
      <ul class="writers-for-admin">
        <?php foreach ($writers as $key => $value): ?>
          <li class="writer-item">
            <div class="imgp">
              <div class="img-for-admin-box">
                <img class="img-for-admin" src="uploads/<?= $value['file'] ?>" alt="file">
              </div>
              <p><?= "{$value['name']}&nbsp;{$value['surname']}" ?></p>
            </div>
            <div>
              <a title="смотреть" class="nav" href='read.php?id=<?= "{$value['id']}" ?>'>
                &#128065;
              </a>
              <a title="редактировать" class="nav" href='update.php?id=<?= "{$value['id']}" ?>'>
                &#9998;
              </a>
              <a title="удалить" class="nav" href='delete.php?id=<?= "{$value['id']}" ?>'>
              &#10008;
              </a>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </main>
  <?php require_once "elems/footer.php" ?>
</body>

</html>