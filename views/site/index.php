<?php

/* @var $this yii\web\View */

use yii\bootstrap\Html;
use yii\helpers\Url;

$this->title = 'Index';
?>

<div class="site-mpaf">
    <div class="row text-center">
        <div class="col-md-6 col-md-offset-3">
            <h1 class="purple-text-color">Welcome on the page!</h1>
            <?php if (Yii::$app->user->isGuest) { ?>
                <p class="pink-text-color">Please log in to use this website at this <?= Html::a('link', Url::to(['/site/login'])) ?>.<p>
            <?php } ?>
        </div>
    </div>
</div>