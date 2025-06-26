<?php

use yii\bootstrap5\Html;

?>
<style>
    .article-create {
        background: linear-gradient(to bottom, #f8f1e5 0%, #fff5e6 100%);
        padding: 30px;
        border: 3px solid #d4a017;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(210, 105, 30, 0.2);
        max-width: 800px;
        margin: 30px auto;
        position: relative;
        overflow: hidden;
    }

    .article-create::before {
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

    .article-create h1 {
        color: #d62828;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        font-family: 'Times New Roman', serif;
        font-weight: bold;
        font-size: 2.2rem;
        margin: 0 0 25px 0;
        text-align: center;
        position: relative;
        padding-bottom: 15px;
    }

    .article-create h1::after {
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

    .breadcrumb {
        background-color: rgba(255, 255, 255, 0.8);
        padding: 10px 15px;
        border-radius: 5px;
        margin-bottom: 25px;
        border: 1px solid #d4a017;
    }

    .breadcrumb-item a {
        color: #d62828;
        text-decoration: none;
    }

    .breadcrumb-item.active {
        color: #5a5a5a;
    }

    .breadcrumb-item+.breadcrumb-item::before {
        content: ">";
        color: #d4a017;
        padding: 0 8px;
    }

    @media (max-width: 768px) {
        .article-create {
            padding: 20px 15px;
            margin: 20px 10px;
        }

        .article-create h1 {
            font-size: 1.8rem;
        }

        .breadcrumb {
            font-size: 0.9rem;
        }
    }
</style>

<div class="article-create">
    <h1>Добавление статьи</h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>