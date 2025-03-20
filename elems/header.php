<header>
  <div class="container">
    <a href="index.php">
      <img src="img/logo.png" alt="logo">
    </a>
    <div class="auth-box">
      <?php
      if ($is_auth) {
        echo "<a class='nav' href='admin'>Админка</a>";
        require_once "forms/exit-form.php";
      } else {
        require_once "forms/log-form.php";
      }
      ?>
    </div>
  </div>
</header>