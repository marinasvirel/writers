<form action="" method="post" class="create" enctype="multipart/form-data">
  <input class="<?= $messages['name']['class'] ?? 'neutral' ?>" name="name" type="text" placeholder="Имя" value="<?= $name ?? '' ?>">
  <small><?= $messages['name']['text'] ?? "" ?></small>
  <input class="<?= $messages['surname']['class'] ?? 'neutral' ?>" name="surname" type="text" placeholder="Фамилия" value="<?= $surname ?? '' ?>">
  <small><?= $messages['surname']['text'] ?? "" ?></small>
  <input class="<?= $messages['patronymic']['class'] ?? 'neutral' ?>" name="patronymic" type="text" placeholder="Отчество" value="<?= $patronymic ?? '' ?>">
  <small><?= $messages['patronymic']['text'] ?? "" ?></small>
  <div class="date-wrapper <?= $messages['date-birth']['class'] ?? 'neutral' ?>">
    <p>Дата&nbsp;рождения:</p>
    <input class="<?= $messages['date-birth']['class'] ?? 'neutral' ?>" type="date" name="date-birth" id="date-birth" value="<?= $date_birth ?? '' ?>">
  </div>
  <small><?= $messages['date-birth']['text'] ?? "" ?></small>
  <div class="date-wrapper <?= $messages['date-died']['class'] ?? 'neutral' ?>">
    <p>Дата&nbsp;рождения:</p>
    <input class="<?= $messages['date-died']['class'] ?? 'neutral' ?>" type="date" name="date-died" id="date-died" value="<?= $date_died ?? '' ?>">
  </div>
  <small><?= $messages['date-died']['text'] ?? "" ?></small>
  <div class="file-container <?= $messages['file']['class'] ?? 'neutral' ?>">
    <input type="file" id="file" name="file" accept="image/*">
    <label for="file" id="for-file"><?= $file_name ?></label>
  </div>
  <small><?= $messages['file']['text'] ?? "" ?></small>
  <textarea name="biography" id="" placeholder="Биография" class="<?= $messages['biography']['class'] ?? 'neutral' ?>"><?= $biography ?? '' ?></textarea>
  <small><?= $messages['biography']['text'] ?? "" ?></small>
  <textarea class="<?= $messages['works']['class'] ?? 'neutral' ?>" name="works" id="" placeholder="Произведения. Писать через ;"><?= $works ?? '' ?></textarea> 
  <small><?= $messages['works']['text'] ?? "" ?></small>
  <button type="submit" name="update">Опубликовать</button>
</form>

<script>

  // Добавление изображения
  const input = document.getElementById('file');
  const labelFile = document.getElementById('for-file');

  function updateImage() {
    labelFile.innerText = this.files[0]['name'];
    labelFile.style.color = "#513013";
  }

  input.addEventListener('change', updateImage);
</script>