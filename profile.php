<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELLYES</title>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    

</head>
<body>
<section class="promo">
        <div class="container-fluid">
            <header class="header d-flex">
                    <div class="header_navigation">
                        <nav class="nav">
                            <ul class="menu d-flex">
                                <li class="menu__list">
                                    <a href="#mobile" class="menu__link lang" key="Sell">Продать</a>
                                </li>
                                <li class="menu__list">
                                    <a href="#" class="menu__link lang" key="Reviews">Отзывы</a>
                                </li>
                                <li class="menu__list">
                                    <a href="#" class="menu__link lang" key="Guarantees">Гарантии</a>
                                </li>
                                <li class="menu__list">
                                    <a href="help.php" class="menu__link lang" key="freebie">Помощь</a>
                                </li>
                                <li class="menu__list">
                                    <a href="ticket.php" class="menu__link lang" key="help">Оставить тикет</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header__logo">
                        <img src="/img/cs_money-loog 1.pn" alt="logo" class="logo">
                    </div>

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
         
            <section class="page__section">
                    <div class="wrap container">
                        <div class="row profile">
                            <div class="col-lg-3 col-md-3">
                                <input type="hidden" id="state" value="normal" />
                                <div class="widget account-details">
                                    <div class="information-title">
                                        Мой профиль
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>