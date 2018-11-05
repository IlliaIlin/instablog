<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\PublicAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<nav class="navbar main-menu navbar-default">
    <div class="container">
        <div class="menu-content">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-left" href="/"><img src="/public/images/logo.gif" width="250" height="50" alt=""></a>
                <a class="navbar-left" href="/"><img src="/public/images/home-icon.gif" width="50" height="50" alt="">Главная </></a>
                <a class="navbar-left" href="/admin/"><img src="/public/images/admin.png" width="50" height="50" alt="">  Панель администратора </></a>
            </div>

            <div class="i_con">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav text-left">
                        <?php if(Yii::$app->user->isGuest):?>
                            <li><a class="navbar-right" href="/auth/login"><img src="/public/images/autoriz_ico.gif" width="40" height="40" alt=""> Авторизация</a></li>
                            <li><a class="navbar-right" href="/auth/signup"><img src="/public/images/regist_ico.gif" width="40" height="40" alt=""> Регистрация</a></li>
                        <?php else: ?>
                            <?= Html::beginForm(['/auth/logout'], 'post')
                            . Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->name . ')',
                                ['class' => 'btn btn-link logout', 'style'=>"padding-top:10px;"]
                            )
                            . Html::endForm() ?>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>


<?= $content ?>

<footer class="footer-widget-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4" align="center">
                <aside class="footer-widget">
                    <div class="about-img"><img src="/public/images/logo2.gif" alt=""></div>
                    <div class="about-content" align="center">
                        Данный сайт создан для блога о жизни Ильиных!
                    </div>
                    <div class="address">
                        <h4 class="text-uppercase" align="center">Контактная информация</h4>

                        <p align="center">Индекс:127521, Россия, Москва, ул.Октябрьская, дом.105, корп.1
                        </p>

                        <p align="center">Контактный телефон: +7(964)-630-69-82</p>

                        <p align="center">Instablog.com</p>
                    </div>
                </aside>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
    <div class="footer-copy">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">&copy; 2018 <a href="#">Instablog, </a> Built with <i
                                class="fa fa-heart"></i> by <a href="#">ILYAHYPERPC</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
