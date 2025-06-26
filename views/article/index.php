<?php

use app\models\Article;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\ListView;  // Add this use statement

/** @var yii\web\View $this */
/** @var app\models\ArticleSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Статьи';
?>

<div class="article-index victory-theme">

    <h1 class="victory-heading"><?= Html::encode($this->title) ?></h1>

    <?php if (!Yii::$app->user->isGuest): ?>
        <p>
            <?= Html::a('Добавить статью', ['create'], ['class' => 'btn btn-victory'], [
                'style' => 'background-color: #be7c24; color: white; border-color: #751010;'
            ]) ?>
        </p>
    <?php endif; ?>

    <?= ListView::widget([  
        'dataProvider' => $dataProvider,
        'itemView' => 'article',
        'options' => [
            'class' => 'victory-listview'
        ]
    ]); ?>
</div>

<style>
    .article-index.victory-theme {
        background: linear-gradient(to bottom, #f8f1e5 0%, #fff5e6 100%);
        padding: 30px;
        border: 3px solid #d4a017;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(210, 105, 30, 0.2);
        position: relative;
        overflow: hidden;
    }

    .article-index.victory-theme::before {
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

    .victory-heading {
        color: #d62828;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        font-family: 'Times New Roman', serif;
        font-weight: bold;
        font-size: 2.5rem;
        margin: 25px 0;
        letter-spacing: 1px;
        position: relative;
        padding-bottom: 15px;
        text-align: center;
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

    .btn-victory {
        background: linear-gradient(to bottom, #d62828 0%, #a51c1c 100%);
        color: #ffd700 !important;
        border: 2px solid #d4a017 !important;
        padding: 10px 25px;
        font-size: 1.1rem;
        font-weight: bold;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.6);
        border-radius: 50px;
        box-shadow: 0 5px 15px rgba(210, 105, 30, 0.4),
        inset 0 1px 1px rgba(255, 215, 0, 0.3);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        display: inline-block;
        margin-bottom: 20px;
    }

    .btn-victory:hover {
        background: linear-gradient(to bottom, #a51c1c 0%, #7a1414 100%);
        color: #ffd700 !important;
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(210, 105, 30, 0.6);
        border-color: #ffd700 !important;
    }

    .victory-listview {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .victory-listview li {
        margin-bottom: 20px;
        padding: 20px;
        background: rgba(255, 255, 255, 0.9);
        border: 1px solid #d4a017;
        border-radius: 8px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        position: relative;
    }

    .victory-listview li:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(210, 105, 30, 0.3);
        border-color: #d62828;
    }

    .victory-listview li::before {
        content: "";
        position: absolute;
        top: 10px;
        left: 10px;
        right: 10px;
        bottom: 10px;
        border: 1px dashed rgba(210, 105, 30, 0.2);
        border-radius: 5px;
        pointer-events: none;
    }

    .victory-listview h3 a {
        color: #d62828;
        text-decoration: none;
        font-family: 'Times New Roman', serif;
        font-size: 1.5rem;
        font-weight: bold;
        transition: color 0.3s ease;
        display: block;
        margin-bottom: 10px;
    }

    .victory-listview h3 a:hover {
        color: #a51c1c;
        text-decoration: underline;
    }

    .victory-article-meta {
        color: #5a5a5a;
        font-size: 0.9rem;
        margin-bottom: 10px;
        font-style: italic;
    }

    .victory-listview .article-content {
        color: #333;
        line-height: 1.6;
        margin-bottom: 15px;
    }

    .victory-listview .read-more {
        color: #d4a017;
        font-weight: bold;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .victory-listview .read-more:hover {
        color: #d62828;
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .victory-heading {
            font-size: 2rem;
        }

        .victory-listview li {
            padding: 15px;
        }

        .btn-victory {
            padding: 8px 20px;
            font-size: 1rem;
        }
    }
</style>