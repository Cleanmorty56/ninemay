<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Article $model */

$this->title = $model->title;

\yii\web\YiiAsset::register($this);
$this->registerCssFile('@web/css/nine.css');
?>

<div class="article-view victory-theme">

    <h1 class="victory-heading"><?= Html::encode($this->title) ?></h1>

    <?php if (!Yii::$app->user->isGuest): ?>
        <p>
            <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-victory']) ?>
            <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger btn-victory',
                'data' => [
                    'confirm' => 'Вы уверены в своих действиях?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>
    <?php endif; ?>

    <div class="article">
        <div class="img-article">
          <img src="img/<?php echo $model->img?>" alt="" style="width: 500px">
        </div>
        <div class="article-bodies">
            <?= $model->getEncodeBody(); ?>
            <p class="text-muted">
                <small>Написано: <b><?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?></b>
                    Автор статьи: <b><?php echo $model->createdBy->username ?></b></small>
            </p>
        </div>
    </div>

</div>

<style>
    .article-view.victory-theme {
        background: linear-gradient(to bottom, #f8f1e5 0%, #fff5e6 100%);
        padding: 30px;
        border: 3px solid #d4a017;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(210, 105, 30, 0.2);
        position: relative;
        overflow: hidden;
    }

    .article-view.victory-theme::before {
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
        margin: 0 10px 20px 0;
    }

    .btn-danger.btn-victory {
        background: linear-gradient(to bottom, #8B0000 0%, #5a0000 100%);
    }

    .btn-victory:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(210, 105, 30, 0.6);
        border-color: #ffd700 !important;
    }

    .article {
        display: flex;
        flex-direction: column;
        border: 1px solid #d4a017;
        padding: 20px;
        border-radius: 8px;
        background: rgba(255, 255, 255, 0.9);
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
        position: relative;
    }

    .article::before {
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

    .img-article {
        text-align: center;
        margin-bottom: 20px;
        border: 1px solid #d4a017;
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
    }

    .img-article img {
        max-width: 100%;
        height: auto;
        display: block;
        transition: transform 0.3s ease;
    }

    .img-article img:hover {
        transform: scale(1.02);
    }

    .article-bodies {
        text-align: justify;
        line-height: 1.6;
        color: #333;
        font-size: 1.1rem;
    }

    .article-bodies p {
        margin-bottom: 15px;
    }

    .text-muted {
        color: #5a5a5a !important;
        font-size: 0.9rem;
        margin-top: 20px;
        padding-top: 10px;
        border-top: 1px dashed #d4a017;
    }

    .text-muted small {
        display: block;
    }

    .text-muted b {
        color: #d62828;
        font-weight: bold;
    }

    @media (min-width: 768px) {
        .article {
            flex-direction: row;
            align-items: flex-start;
        }

        .img-article {
            flex: 0 0 40%;
            margin-right: 20px;
            margin-bottom: 0;
        }

        .article-bodies {
            flex: 1;
        }
    }

    @media (max-width: 768px) {
        .victory-heading {
            font-size: 2rem;
        }

        .btn-victory {
            padding: 8px 20px;
            font-size: 1rem;
            margin-bottom: 10px;
        }

        .article-bodies {
            font-size: 1rem;
        }
    }
</style>
