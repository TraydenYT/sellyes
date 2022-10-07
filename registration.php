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
                                    <a href="index.php" class="menu__link lang" key="Sell">Главная</a>
                                </li>
                                <li class="menu__list">
                                    <a href="" class="menu__link lang" key="Reviews">Отзывы</a>
                                </li>
                                <li class="menu__list">
                                    <a href="#" class="menu__link lang" key="Guarantees">Гарантии</a>
                                </li>
                                <li class="menu__list">
                                    <a href="#" class="menu__link lang" key="freebie">Помощь</a>
                                </li>
                                <li class="menu__list">
                                    <a href="ticket.php" class="menu__link lang" key="help">Оставить тикет</a>
                                </li>
                            </ul>
                        </nav>
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

    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">

                <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab""<?php echo BEZ_HOST; ?>registration/?mode=auth">Вход</a></li>
                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab" "<?php echo BEZ_HOST; ?>registration/?mode=reg">Регистрация</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabs ">
                <div role="tabpanel" class="tab-pane fade in active" id="Section1">
            <form class="form-horizontal">
                <div class="form-group">
                    <input type="email" placeholder="Email или никнейм" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Пароль" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                <div class="main-checkbox">
                    <input value="None" id="checkbox1" name="check" type="checkbox">
                    <label for="checkbox1"></label>
                </div>
                    <span class="text">Запомнить</span>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Вход</button>
                </div>
                <div class="form-group forgot-pass">
                    <button type="submit" class="btn btn-default">Забыли пароль</button>
                </div>
                </form>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="Section2">
                    <form class="form-horizontal">
                <div class="form-group">
                    <input type="email" placeholder="Email"  class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Никнейм"  class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Пароль"  class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Регистрация</button>
                </div>
            </form>
            </div>
        </div>
        <div id="content">
            <?php
                $content
            ?>
        </div>
    </div>

</div><!-- /.col-md-offset-3 col-md-6 -->
</div><!-- /.row -->
</div><!-- /.container -->
        

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
</body>
</html>