<?php

/**
 * @var yii\web\View $this
 */

use app\assets\AppAsset;
use yii\helpers\html;

AppAsset::register($this);

$urlManager = Yii::$app->urlManager;


?>
<!DOCTYPE html>
<?php $this->beginPage() ?>
    <html lang = 'en'>
<head>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <title>Document</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <div class="wrap">
         <nav class="navbar navbar-dark bg-dark">
            <div class="container">
                <ul class="nav justify-content-end w-100">
                <a class="navbar-brand">navbar</a>        
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= $urlManager->createUrl(['site/index']) ?>">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $urlManager->createUrl(['web/regg']) ?>">Регистрация</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $urlManager->createUrl(['web/log']) ?>">Вход</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $urlManager->createUrl(['web/question']) ?>">Обращение</a>
                    </li>
                </ul>
            </div>
        </nav>
            <!-- <ul class = "nav nav-pills">
                <li role = "presentation" class="active"><?=  Html:: a('Главная', ['site/index']) ?></li><br>
                <li role = "presentation"><?=  Html:: a('первая', ['country/index']) ?></li>
                <li role = "presentation"><?=  Html:: a('Вторая', ['country/index&page=2']) ?></li>
            </ul> -->
            
        <div class="container">
            <?= $content ?> 
        </div>
           


    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>