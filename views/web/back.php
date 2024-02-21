<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

/** @var yii\web\View $this
 * @var ActiveForm $form
 * @var app\models\ContactForm $model
 * */

$this->title = 'Контакты';
?>
<article class="col-xs-12 col-lg-6">

    <div class="row margin-null">
        <h1><?= Html::encode($this->title) ?></h1>
    
        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
    
        <div class="alert alert-success">
        </div>
        <?php else: ?>
    
            <?php $form = ActiveForm::begin([
                'id' => 'contact-form', /* Идентификатор формы */
                'options' => ['class' => 'form-horizontal'], /* класс формы */
                'fieldConfig' => [ /* классы полей формы */
                    'template' => "<div class=\"col-lg-3\">{label}</div>\n<div class=\"col-lg-9\">{input}</div>\n<div class=\"col-lg-12 col-lg-offset-3 \">{error}</div>"
               
                ],
            ]); ?>
            <?= $form->field($model, 'name') ?>
            <?= $form->field($model, 'email') ?>
            <?= $form->field($model, 'subject') ?>
       
            <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
            <div class="form-group">
                <?= Html::submitButton('Отправить сообщение', ['class' => 'btn btn-default waves-effect btn-color-orange btn-color-orange-long', 'name' => 'contact-button']) ?>
            </div>
            
            <?php ActiveForm::end(); ?>
    
        <?php endif; ?>
    
    </div>
</article>