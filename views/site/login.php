<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\bootstrap\ActiveForm;
use yii\bootstrap\Button;
use yii\helpers\Html;

$this->title = 'Login';
?>
<div class="site-login">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2 login-form">
            <p>Please Sign in</p>
            <p>If you don't have account you can sign up <?= Html::a('here', ['/site/signup'], ["class" => "pink-text-color"]) ?></p>
            <?php $form = ActiveForm::begin([
                'layout' => 'horizontal',
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"col-lg-12\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                    'labelOptions' => ['class' => 'col-lg-1 control-label'],
                ],
            ]); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <div class="form-group">
                <div class="col-md-offset-3 col-lg-6">
                    <?= Button::widget(['label' => 'Enter', 'options' => ['class' => 'btn btn-custom']]) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <?php if ($invalidLogin) { ?>
        <div class="row">
            <div class="col-md-12">
                <div class="text-center margin-top-sm invalid-login">
                    <p>Your username or password was incorrect.</p>
                    <p>Please try it again.</p>
                </div>
            </div>
        </div>
    <?php } ?>
</div>