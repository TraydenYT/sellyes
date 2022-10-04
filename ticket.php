<!DOCTYPE html>
<html lang="en">
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
    <script src="https://kit.fontawesome.com/9314941886.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.min.css">
</head>
<body>
      <section class="promo">
        <div class="container-fluid">
            <header class="header d-flex">
                    <div class="header_navigation">
                        <nav class="nav">
                            <ul class="menu d-flex">
                                <li class="menu__list">
                                    <a href="index.html" class="menu__link lang" key="Sell">Главная</a>
                                </li>
                                <li class="menu__list">
                                    <a href="#" class="menu__link lang" key="Reviews">Отзывы</a>
                                </li>
                                <li class="menu__list">
                                    <a href="#" class="menu__link lang" key="Guarantees">Гарантии</a>
                                </li>
                                <li class="menu__list">
                                    <a href="#" class="menu__link lang" key="freebie">Помощь</a>
                                </li>
                                <li class="menu__list">
                                    <a href="#" class="menu__link lang" key="help">Оставить тикет</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- <div class="header__logo">
                        <img src="/img/cs_money-loog 1.pn" alt="logo" class="logo">
                    </div> -->

                    <div class="header__contacts">
                        <ul class="d-flex">
                            <div class="header__lan d-flex">
                                <li class="header-item-lang-en"><button id="en" class="translate"><img src="img/icons/en.png" alt="#"></button></li>
                                <li class="header-item-lang-ru"><button id="ru" class="translate"><img src="img/icons/197408 1.png" alt="#"></button></li>
                            </div>
                            <button class="button lang" key="Authorization" onclick="window.location.href='./registration.php'">Авторизация</button>
                        </ul>
                    </div>
                   
            </header>

            <dov class="wrapper">
                <div class="form">
                    <form action="#" id="form" class="forn__body">
                        <h1 class="form__title">Написать в службу поддержки</h1>
                        <div class="form__item">
                            <label for="formName" class="form__label _error">Имя*:</label>
                            <input id="formName" type="text" name="name" class="form__input _req">
                        </div>

                        <div class="form__item">
                            <label for="formEmail" class="form__label">E-mail*:</label>
                            <input id="formEmail" type="text" name="email" class="form__input _req _email">
                        </div>

                        <!-- <div class="form__item">
                            <div class="form__label">Левша или правша</div>
                            <div class="options">
                                <div class="options__items">
                                    <input id="formRightHanded" checked type="radio" value="right" name="hand" class="options__input">
                                    <label for="formRightHanded" class="form__label">Правша*:</label>
                                </div>
                                <div class="options__items">
                                    <input id="formLeftHanded" type="radio" value="left" name="hand" class="options__input">
                                    <label for="formLeftHanded" class="form__label">Левша*:</label>
                                </div>
                            </div>
                        </div> -->

                        <div class="options__items">
                            <label for="formMessage" class="form__label">Сообщение*:</label>
                            <textarea name="message" id="formMessage" class="form__input"></textarea>
                        </div>

                        <div class="form__items">
                            <div class="form__label">Возраст</div>
                            <select name="age" id="" class="select">
                                <option value="1" selected="selected">Выберите тему</option>
                                <option value="2">Я оплатил заказа но продавец не отвечает мне</option>
                                <option value="3">Я недоволен выполнением заказа</option>
                                <option value="4">Платёж с моей стороны не прошел</option>
                                <option value="5">Мой аккаунт взломали</option>
                            </select>
                        </div>

                        <div class="form__item">
                            <div class="form__label">Прикрепить фото</div>
                            <div class="file">
                                <div class="file__item">
                                    <input id="formImage" accept=".jpg, .png, .git" type="file" name="image" class="file__input">
                                    <div class="file__button">Выбрать</div>
                                </div>
                                <div class="file__preview"></div>
                            </div>
                        </div>

                        <div class="form__items">
                            <div class="checkbox">
                                <input id="formAgreement" type="checkbox" name="agreement" class="checkbox__input">
                                <label for="formAgreement" class="checkbox__label"><span>Я даю своё согласие на обработку данных <a href="#">Условие</a>*</span></label>
                            </div>
                        </div>

                        <button type="submit" class="form__button">Отправить</button>
                    </form>
                </div>
            </d>
        </div>
    </section>

   <!-- <footer class="footer">
        <div class="container-fluid">
            <nav class="nav d-flex">
                <ul class="menu d-flex">
                                <li class="menu__list">
                                    <a href="#mobile" class="menu__link lang footer__list" key="Sell">Условия использования</a>
                                </li>
                                <li class="menu__list">
                                    <a href="#" class="menu__link lang footer__list" key="Reviews">Политика приватности</a>
                                </li>
                                <li class="menu__list">
                                    <a href="#" class="menu__link lang footer__list" key="Guarantees">Помощь</a>
                                </li>
                                <li class="menu__list">
                                    <a href="#" class="menu__link lang footer__list" key="freebie">Вакансии</a>
                                </li>
                                <li class="menu__list">
                                    <a href="#" class="menu__link lang footer__list" key="help">Оставить тикет</a>
                                </li>
                </ul>

                <div class="footer__social">
                    <a href="#" target="_blank" class="footer__item">
                        <i class="fa-brands fa-steam"></i>
                    </a>
                    <a href="#" class="footer__item">
                        <i class="fa-brands fa-youtube"></i>
                    </a>

                    <a href="#" class="footer__item">
                        <i class="fa-brands fa-vk"></i>
                    </a>

                    <a href="#" class="footer__item">
                        <i class="fa-brands fa-telegram"></i>
                    </a>
                </div>
            </nav>
        </div>
   </footer> -->

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>