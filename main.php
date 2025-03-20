<!DOCTYPE html>
<html lang="ru">
<?php require_once "elems/head.php" ?>

<body>
  <?php require_once "elems/header.php" ?>
  <main>
    <div class="container">
      <h1 hidden>Биографии писателей</h1>
      <ul class="writers">
        <?php foreach ($writers as $key => $value): ?>
          <li class="writer-item">
            <a href='read.php?id=<?= "{$value['id']}" ?>'>
              <p class="writers-get">
                <?= "{$value['name']}&nbsp;{$value['surname']}" ?>
              </p>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </main>
  <?php require_once "elems/footer.php" ?>
</body>

</html>