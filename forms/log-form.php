<p class="error"><?= $error_auth ?? '' ?></p>
<form class="auth" action="" method="post">
  <input type="text" name="login" placeholder="Логин" autofocus>
  <input type="password" name="password" placeholder="Пароль">
  <button type="submit">Войти</button>
</form>