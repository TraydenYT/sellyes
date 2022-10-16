<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELLYES</title>
    <link rel="shortcut icon" href="img/icons/favicon.ico" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css"> 
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.min.css">
    <script src="https://kit.fontawesome.com/9314941886.js" crossorigin="anonymous"></script>
</head>

<body class="body">

  <!-- Контейнер -->
  <article class="container">

    <!-- Внутренний блок -->
    <div class="block">
      <div class="block__close"><a href="index.php">&times;</a></div>
      <section class="block__item block-item">
        <h2 class="block-item__title">У вас уже есть аккаунт?</h2>
        <button class="block-item__btn signin-btn">Войти</button>
      </section>
      <section class="block__item block-item">
        <h2 class="block-item__title">У вас нет аккаунта?</h2>
        <button class="block-item__btn signup-btn">Зарегистрироваться</button>
      </section>

    </div>

    <!-- Блок формы -->
    <div class="form-box">

      <!-- Форма входа -->
      <form action="#" class="form form_signin">
        <h3 class="form__title">Вход</h3>

        <p>
          <input type="text" class="form__input" placeholder="Логин">
        </p>
        <p>
          <input type="password" class="form__input" placeholder="Пароль">
        </p>
        <p>
          <button class="form__btn">Войти</button>
        </p>
        <p>
          <a href="#" class="form__forgot">Восстановить пароль</a>
        </p>
      </form>

      <!-- Форма регистрации -->
      <form action="#" class="form form_signup">
        <h3 class="form__title">Регистрация</h3>

        <p>
          <input type="text" class="form__input" placeholder="Логин">
        </p>
        <p>
          <input type="email" class="form__input" placeholder="Email">
        </p>
        <p>
          <input type="password" class="form__input" placeholder="Пароль">
        </p>
        <p>
          <input type="password" class="form__input" placeholder="Подтвердите пароль">
        </p>
        <p>
          <button class="form__btn form__btn_signup">Зарегистрироваться</button>
        </p>
      </form>

    </div>

  </article>


    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>