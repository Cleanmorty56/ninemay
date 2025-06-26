<?php

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

?>
<style>
    .site-login {
        background: linear-gradient(to bottom, #f8f1e5 0%, #fff5e6 100%);
        padding: 30px;
        border: 3px solid #d4a017;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(210, 105, 30, 0.2);
        max-width: 500px;
        margin: 30px auto;
        position: relative;
        overflow: hidden;
    }

    .site-login::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 8px;
        background: linear-gradient(to right,
        #d4a017 0%, #d4a017 20%,
        #000 20%, #000 40%,
        #d62828 40%, #d62828 60%,
        #000 60%, #000 80%,
        #d4a017 80%, #d4a017 100%);
        z-index: 1;
    }

    .site-login h1 {
        color: #d62828;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        font-family: 'Times New Roman', serif;
        font-weight: bold;
        font-size: 2.2rem;
        margin: 0 0 20px 0;
        text-align: center;
        position: relative;
        padding-bottom: 15px;
    }

    .site-login h1::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 25%;
        right: 25%;
        height: 3px;
        background: linear-gradient(to right,
        transparent 0%, #d4a017 20%,
        #000 40%, #d62828 60%,
        #000 80%, #d4a017 100%);
    }

    .site-login p {
        color: #333;
        text-align: center;
        margin-bottom: 25px;
        font-size: 1.1rem;
    }

    .form-control {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #d4a017;
        border-radius: 8px;
        background-color: rgba(255, 255, 255, 0.9);
        font-size: 1rem;
        transition: all 0.3s ease;
        box-shadow: inset 0 1px 3px rgba(0,0,0,0.1);
        margin-bottom: 15px;
    }

    .form-control:focus {
        outline: none;
        border-color: #d62828;
        box-shadow: 0 0 0 3px rgba(214, 40, 40, 0.2);
    }

    .custom-control-label {
        color: #333;
        cursor: pointer;
    }

    .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
        background-color: #d62828;
        border-color: #a51c1c;
    }

    .btn-primary {
        background: linear-gradient(to bottom, #d62828 0%, #a51c1c 100%);
        color: #ffd700 !important;
        border: 2px solid #d4a017;
        padding: 10px 30px;
        font-size: 1.1rem;
        font-weight: bold;
        border-radius: 50px;
        box-shadow: 0 5px 15px rgba(210, 105, 30, 0.4);
        transition: all 0.3s ease;
        display: block;
        margin: 25px auto;
        width: 100%;
        max-width: 200px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background: linear-gradient(to bottom, #a51c1c 0%, #7a1414 100%);
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(210, 105, 30, 0.6);
        color: #ffd700 !important;
    }

    .invalid-feedback {
        color: #d62828;
        font-size: 0.9rem;
        margin-top: -10px;
        margin-bottom: 15px;
    }

    .site-login div[style*="color:#999"] {
        color: #5a5a5a !important;
        font-size: 0.9rem;
        margin-top: 20px;
        padding: 15px;
        background: rgba(255, 255, 255, 0.7);
        border-radius: 8px;
        border: 1px dashed #d4a017;
    }

    .site-login div[style*="color:#999"] strong {
        color: #d62828;
    }

    .site-login code {
        background-color: rgba(214, 40, 40, 0.1);
        color: #d62828;
        padding: 2px 4px;
        border-radius: 4px;
    }

    @media (max-width: 576px) {
        .site-login {
            padding: 20px 15px;
            margin: 20px 10px;
        }

        .site-login h1 {
            font-size: 1.8rem;
        }

        .btn-primary {
            padding: 8px 20px;
            font-size: 1rem;
        }
    }
</style>

<div class="site-login">
    <h1>Авторизация</h1>

    <p>Пожалуйста, заполните следующие поля для входа:</p>

    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox() ?>

            <div class="form-group">
                <?= Html::submitButton('Войти', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>