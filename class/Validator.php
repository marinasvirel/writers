<?php

class Validator
{
  public $messages = [];

  public $rules = [
    'name' => [
      'pattern' => '#^[А-ЯЁ][а-яё][а-яёА-ЯЁ\- ]*$#u',
      'error-text' => "Только буквы кириллические. Строка начинается с прописной буквы. Не менее двух символов. Допускаются пробелы и дефисы",
    ],
    'surname' => [
      'pattern' => '#^[А-ЯЁ][а-яё][а-яёА-ЯЁ\- ]*$#u',
      'error-text' => "Только буквы кириллические. Строка начинается с прописной буквы. Не менее двух символов. Допускаются пробелы и дефисы",
    ],
    'patronymic' => [
      'pattern' => '#^[А-ЯЁ][а-яё][а-яёА-ЯЁ\- ]*$#u',
      'error-text' => "Только буквы кириллические. Строка начинается с прописной буквы. Не менее двух символов. Допускаются пробелы и дефисы",
    ],
    'date-birth' => [
      'pattern' => '#.+#',
      'error-text' => "Заполните поле",
    ],
    'date-died' => [
      'pattern' => '#.+#',
      'error-text' => "Заполните поле",
    ],
    'biography' => [
      'pattern' => '#^[А-ЯЁ][а-яёА-ЯЁ0-9\-\?\!\.\,\"\:\; ]*$#u',
      'error-text' => "Только буквы кириллические. Строка начинается с прописной буквы. Не менее двух символов. Допускаются пробелы, дефисы, кавычки, точки, запятые, двоеточия, точки с запятой, восклицательный и вопросительный знак",
    ],
    'works' => [
      'pattern' => '#^[А-ЯЁ][а-яёА-ЯЁ0-9\-\?\!\.\,\"\:\; ]*$#u',
      'error-text' => "Только буквы кириллические. Строка начинается с прописной буквы. Не менее двух символов. Допускаются пробелы, дефисы, кавычки, точки, запятые, двоеточия, точки с запятой, восклицательный и вопросительный знак",
    ],
  ];

  public function valText()
  {
    foreach ($this->rules as $key => $value) {
      if (isset($_POST[$key])) {
        if (preg_match($value['pattern'], $_POST[$key])) {
          $this->messages[$key]['text'] = "";
          $this->messages[$key]['class'] = "valid";
        } else {
          $this->messages[$key]['text'] = $value['error-text'];
          $this->messages[$key]['class'] = "invalid";
        }
      }
    }
  }

  public function setFileName()
  {
    if (isset($_FILES['file'])) {
      if ($_FILES['file']['error'] === 0) {
        $file = $_FILES['file']['name'];
        $_SESSION['file'] = $file;
      }
    }
    if (isset($_SESSION['file'])) {
      return $_SESSION['file'];
    } else {
      return "Изображение писателя";
    }
  }

  public function valFile()
  {
    if(!empty($_POST)){
      if ($this->setFileName() == "Изображение писателя") {
        $this->messages['file']['text'] = "Загрузите изображение";
        $this->messages['file']['class'] = "invalid";
      } else {
        $this->messages['file']['text'] = "";
        $this->messages['file']['class'] = "valid";
      }
    }
  }

  public function is_valid()
  {
    $arr = [];
    if (!empty($this->messages)) {
      foreach ($this->messages as $key => $value) {
        $arr[] = $value['class'];
      }
    }
    return count(array_unique($arr)) == 1 && array_unique($arr)[0] == "valid";
  }
}

$val = new Validator();
$val->valText();
$val->valFile();
$messages = $val->messages;
$file_name = $val->setFileName();
