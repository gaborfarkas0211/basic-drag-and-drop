<?php

/* @var $this yii\web\View */

use kartik\sortinput\SortableInput;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Button;

$this->title = 'MPAF';

?>
<div class="site-mpaf">
    <div class="row">
        <div class="col-md-3 col-md-offset-3 no-padding text-center">
            <?php
            $form = ActiveForm::begin();
            echo $form->field($model, 'sortListLeft')->widget(SortableInput::classname(), [
                'items' => $leftItems,
                'hideInput' => true,
                'options' => ['class' => 'form-control', 'readonly' => true],
            ])->label(false);
            ?>
        </div>
        <div class="col-md-3 no-padding text-center">
            <?php
            echo $form->field($model, 'sortListRight')->widget(SortableInput::classname(), [
                'items' => $rightItems,
                'hideInput' => true,
                'options' => ['class' => 'form-control', 'readonly' => true],
            ])->label(false);
            ?>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-md-offset-5 col-md-2">
                <?= Button::widget(['label' => 'Save', 'options' => ['class' => 'btn btn-custom']]) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>

    <div class="row text-center margin-top-sm" <?php if (!$isSaved) { ?> style="display:none" <?php } ?>>
        <p class="pink-text-color"> Your list has been successful saved.</p>
    </div>
</div>