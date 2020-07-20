<?php

use yii\bootstrap\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

NavBar::begin([
    'brandImage' => 'images/brand-logo.png',
    // 'headerContent' => '<div class="brand-logo"><p>SPEAKER</p><p>PORTAL</p></div>',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'position-relative navbar navbar-fixed-top',
    ],
]); ?>
<div class="row">
    <?= Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            [
                'label' => 'English',
                'items' => [
                    ['label' => 'English', 'options' => ['class' => 'text-center']],
                    ['label' => 'Hungarian', 'options' => ['class' => 'text-center']],
                ],
                'options' => ['class' => 'nav-item']
            ],
            ['label' => 'Contact', 'options' => ['class' => 'nav-item']],
            ['label' => 'Sitemap', 'options' => ['class' => 'nav-item']],
        ],
    ]); ?>
</div>
<div class="row">
    <?= Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'My Collection', 'options' => ['class' => 'nav-item nav-item-bold']],
            Yii::$app->user->isGuest ?
                (['label' => 'Login', 'url' => ['/site/login']]) : ('<li>'
                    . Html::beginForm(['/site/logout'], 'post')
                    . Html::submitButton(
                        '<span class="glyphicon glyphicon-remove-sign"></span> Logout',
                        ['class' => 'btn btn-link logout purple-text-color']
                    )
                    . Html::endForm()
                    . '</li>'),
        ],
    ]); ?>
</div>
<?php NavBar::end(); ?>
<div class="row position-relative sub-nav">
    <div class="container">
        <?php
        echo Nav::widget([
            'encodeLabels' => false,
            'options' => ['class' => 'navbar-nav sub-nav-item'],
            'items' => [
                ['label' => '<span class="glyphicon glyphicon-home"></span>', 'url' => ['/site/index']],
                ['label' => 'mpaf', 'url' => ['/site/mpaf']],
                ['label' => 'venous'],
                ['label' => 'acs'],
                ['label' => 'kivamoxoban studies'],
                ['label' => 'background information', 'options' => ['class' => 'last-nav-item']],
            ],
        ]);
        ?>
    </div>
</div>