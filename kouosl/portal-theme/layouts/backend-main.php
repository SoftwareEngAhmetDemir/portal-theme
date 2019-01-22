
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
*{
    perspective: 600px;
}
        .fa {
            padding: 20px;
            font-size: 30px;
            width: 30px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
            border-radius: 50%;
        }

        .fa:hover {
            opacity: 0.7;
        }

        .fa-facebook {
            background: #3B5998;
            color: white;
        }

        .fa-twitter {
            background: #55ACEE;
            color: white;
        }

        .fa-google {
            background: #dd4b39;
            color: white;
        }

        .fa-linkedin {
            background: #007bb5;
            color: white;
        }

        .fa-youtube {
            background: #bb0000;
            color: white;
        }

        .fa-instagram {
            background: #125688;
            color: white;
        }

.C{
    opacity: 0.2;
}
.C:hover
{
    opacity: 1;
    transform: translateZ(-25px);
}
    </style>
</head>




<?php

/* @var $this \yii\web\View */
/* @var $content string */

use kouosl\theme\helpers\Html;
use kouosl\theme\widgets\Nav;
use kouosl\theme\widgets\NavBar;
use kouosl\theme\widgets\Breadcrumbs;
use kouosl\theme\widgets\Alert;
use kouosl\theme\bundles\CustomAsset;

CustomAsset::register($this);

$languages = ['tr-TR' => 'Türkçe','en-US' => 'English'];

$lang = yii::$app->session->get('lang');
if(!$lang)
    $lang = 'en-US';

$activeLangLabel = $languages[$lang];
unset($languages[$lang]);

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




    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>




<div style="background-color: black;height: 130px;display: flex;align-items: center;bottom: 0px;">

        <!-- Add font awesome icons -->
        <a  href="https://www.facebook.com/" class="fa fa-facebook C" style="width: 75px;
        position: relative;margin-right: 20px" target="_blank"></a>
        <a href="https://twitter.com/" class="fa fa-twitter C" style="width: 75px;position:
         relative;margin-right: 20px" target="_blank"></a>
        <a href="https://mail.google.com" class="fa fa-google C" style="width: 75px;position:
         relative;margin-right: 20px" target="_blank"></a>

        <a href="https://www.youtube.com/?hl=ar" class="fa fa-youtube C" style="width: 75px;
        position: relative;margin-right: 20px" target="_blank"></a>

       >  <i class="fa fa-phone" aria-hidden="true" style="color: whitesmoke;display: inline;position: relative;bottom: -20px">
        <div style="color: whitesmoke;margin-left: 40px;height: 50px;width: 50px;
        display: inline-block;position: relative;bottom: 35px;right:-20px" >+905362714612</div>
    </i>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
