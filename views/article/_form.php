<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Article $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success', 'style' => 'background-color: #be7c24;
    color: white;
    border-color: #751010;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<style>
    .article-form {
        background: rgba(255, 255, 255, 0.9);
        padding: 25px;
        border-radius: 8px;
        border: 1px solid #d4a017;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    }

    .form-group label {
        color: #2E7D32;
        font-weight: 500;
    }

    .form-control {
        border: 1px solid #d4a017;
        border-radius: 5px;
        padding: 10px 15px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #d62828;
        box-shadow: 0 0 0 3px rgba(214, 40, 40, 0.2);
    }

    .btn-success {
        background: linear-gradient(to bottom, #d62828 0%, #a51c1c 100%);
        color: #ffd700 !important;
        border: 2px solid #d4a017;
        padding: 10px 30px;
        font-weight: bold;
        border-radius: 50px;
        box-shadow: 0 5px 15px rgba(210, 105, 30, 0.4);
        transition: all 0.3s ease;
    }

    .btn-success:hover {
        background: linear-gradient(to bottom, #a51c1c 0%, #7a1414 100%);
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(210, 105, 30, 0.6);
    }
</style>
