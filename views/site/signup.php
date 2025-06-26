<style>
    .registration-form {
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

    .registration-form::before {
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

    .registration-form h2 {
        color: #d62828;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        font-family: 'Times New Roman', serif;
        font-weight: bold;
        font-size: 2rem;
        margin: 0 0 25px 0;
        text-align: center;
        position: relative;
        padding-bottom: 15px;
    }

    .registration-form h2::after {
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

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        color: #2E7D32;
        font-weight: 500;
    }

    .form-group input {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #d4a017;
        border-radius: 8px;
        background-color: rgba(255, 255, 255, 0.9);
        font-size: 1rem;
        transition: all 0.3s ease;
        box-shadow: inset 0 1px 3px rgba(0,0,0,0.1);
    }

    .form-group input:focus {
        outline: none;
        border-color: #d62828;
        box-shadow: 0 0 0 3px rgba(214, 40, 40, 0.2);
    }

    .btn-register {
        background: linear-gradient(to bottom, #d62828 0%, #a51c1c 100%);
        color: #ffd700 !important;
        border: 2px solid #d4a017;
        padding: 12px 30px;
        font-size: 1.1rem;
        font-weight: bold;
        border-radius: 50px;
        box-shadow: 0 5px 15px rgba(210, 105, 30, 0.4);
        transition: all 0.3s ease;
        display: block;
        margin: 30px auto 0;
        width: 100%;
        max-width: 250px;
        cursor: pointer;
    }

    .btn-register:hover {
        background: linear-gradient(to bottom, #a51c1c 0%, #7a1414 100%);
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(210, 105, 30, 0.6);
    }

    @media (max-width: 576px) {
        .registration-form {
            padding: 20px 15px;
            margin: 20px 10px;
        }

        .registration-form h2 {
            font-size: 1.6rem;
        }

        .btn-register {
            padding: 10px 20px;
            font-size: 1rem;
        }
    }
</style>

<div class="registration-form">
    <h2>Регистрация</h2>

    <?php use yii\bootstrap5\ActiveForm;
    use yii\bootstrap5\Html;

    $form = ActiveForm::begin(['class' => 'form-horizontal']); ?>

    <?= $form->field($model, 'username')->textInput() ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <?= $form->field($model, 'password_repeat')->passwordInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-register']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>