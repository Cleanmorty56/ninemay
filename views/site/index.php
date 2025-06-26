<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index victory-theme">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4 victory-heading">C Великим Днем Победы!</h1>

        <p class="lead">Поздравляем весь братский народ с этим праздником!!!</p>

        <a href="<?= Url::to(['article/index']); ?>" class="btn btn-victory btn-lg">
            Перейти к статьям
        </a>
    </div>

    <div class="body-content">
        <img src="img/9 may (23).png" style="width: 900px;" alt="">
    </div>

    <div class="site-description">
        <h2>О Сайте</h2>
        <p>Этот сайт посвящен Великой Отечественной войне и предназначен для размещения и чтения статей, воспоминаний и материалов, связанных с этим важным периодом в истории. Мы приглашаем всех, кто интересуется историей, поделиться своими знаниями и опытом.</p>
    </div>

</div>
<style>
    .victory-theme {
        background: linear-gradient(to bottom, #f8f1e5 0%, #fff5e6 100%);
        padding: 30px;
        border: 3px solid #d4a017;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(210, 105, 30, 0.2);
        position: relative;
        overflow: hidden;
    }

    .victory-theme::before {
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

    .jumbotron {
        background: rgba(255, 255, 255, 0.85);
        padding: 30px;
        border-radius: 15px;
        margin-bottom: 30px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(210, 105, 30, 0.3);
        position: relative;
        z-index: 2;
    }

    .victory-heading {
        color: #d62828;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        font-family: 'Times New Roman', serif;
        font-weight: bold;
        font-size: 3rem;
        margin-bottom: 25px;
        letter-spacing: 1px;
        position: relative;
        padding-bottom: 15px;
    }

    .victory-heading::after {
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

    .lead {
        color: #333;
        font-size: 1.5rem;
        margin-bottom: 30px;
        font-weight: 500;
    }

    .btn-victory {
        background: linear-gradient(to bottom, #d62828 0%, #a51c1c 100%);
        color: #ffd700 !important;
        border: 2px solid #d4a017;
        padding: 15px 40px;
        font-size: 1.3rem;
        font-weight: bold;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.6);
        border-radius: 50px;
        box-shadow: 0 5px 15px rgba(210, 105, 30, 0.4),
        inset 0 1px 1px rgba(255, 215, 0, 0.3);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .btn-victory:hover {
        background: linear-gradient(to bottom, #a51c1c 0%, #7a1414 100%);
        color: #ffd700 !important;
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(210, 105, 30, 0.6);
    }

    .btn-victory::before {
        content: "";
        position: absolute;
        top: -10px;
        left: -10px;
        right: -10px;
        bottom: -10px;
        background: linear-gradient(45deg,
        rgba(255, 215, 0, 0.1) 0%,
        rgba(255, 215, 0, 0) 50%,
        rgba(255, 215, 0, 0.1) 100%);
        transform: rotate(45deg);
        z-index: 0;
    }

    .body-content {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 40px 0;
        padding: 20px;
        background: rgba(255, 255, 255, 0.8);
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(210, 105, 30, 0.2);
    }

    .site-description {
        padding: 30px;
        background: rgba(255, 255, 255, 0.9);
        border: 1px solid #d4a017;
        border-radius: 15px;
        margin-top: 40px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        text-align: center;
        position: relative;
    }

    .site-description::before {
        content: "";
        position: absolute;
        top: 10px;
        left: 10px;
        right: 10px;
        bottom: 10px;
        border: 1px dashed rgba(210, 105, 30, 0.3);
        border-radius: 10px;
        pointer-events: none;
    }

    .site-description h2 {
        color: #d62828;
        margin-bottom: 20px;
        font-family: 'Times New Roman', serif;
        font-size: 2.2rem;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        position: relative;
        display: inline-block;
        padding: 0 20px;
    }

    .site-description h2::before,
    .site-description h2::after {
        content: "✻";
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        color: #d4a017;
        font-size: 1.5rem;
    }

    .site-description h2::before {
        left: -10px;
    }

    .site-description h2::after {
        right: -10px;
    }

    .site-description p {
        color: #333;
        font-size: 1.2rem;
        line-height: 1.6;
        max-width: 800px;
        margin: 0 auto;
    }

    @media (max-width: 768px) {
        .victory-heading {
            font-size: 2rem;
        }

        .lead {
            font-size: 1.2rem;
        }

        .btn-victory {
            padding: 12px 25px;
            font-size: 1.1rem;
        }

        .body-content img {
            width: 100%;
            height: auto;
        }
    }
</style>