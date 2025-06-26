<?php
/** @var $model \app\models\Article */
?>

<div class="articles-card">
    <div class="article-card">
        <h3>
            <a href="<?php echo \yii\helpers\Url::to(['/article/view', 'id'=>$model->id])?>">  <?php echo \yii\helpers\Html::encode($model->title) ?></a>
        </h3
        <div class=article-body>
            <?php echo \yii\helpers\StringHelper::truncateWords(\yii\helpers\Html::encode($model->body), 40) ?>
        </div>
    </div>
</div>
