<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use app\modules\admin\models\Photo;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\PhotoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Фото';
$this->params['breadcrumbs'][] = $this->title;
?>
<ul class="nav nav-tabs">
  <li><a href="<?=Url::toRoute(['category/index']) ?>">Категории</a></li>
  <li class="active"><a href="<?=Url::toRoute(['photo/index']) ?>">Фото</a></li>
</ul>
<div class="photo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',

            'ptitle',
			[
              'attribute'=>'id_category',
              'label'=>'Категория',
              'format'=>'text', // Возможные варианты: raw, html
              'content'=>function($data){
                  return $data->getCatName();
              },
              'filter' => Photo::getCatsList()
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'white-space: nowrap; text-align: center; letter-spacing: 0.1em; max-width: 3em;'],
            ],
        ],
    ]); ?>
</div>
