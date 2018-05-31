<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Video */

$this->title = $model->vtitle;
$this->params['breadcrumbs'][] = ['label' => 'Видео', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить эту запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'vtitle',
			[
			'label' => 'Ссылка',
            'format' => 'raw',
			'attribute'=>'video_path',
            'value' => !empty($model->video_path) ? '<iframe width="560" height="315" src="https://www.youtube.com/embed/'.basename($model->video_path).'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>': '',
            ],
			[
			'attribute' =>'priority',
			'label' => 'В приоритете',
			'value' => function($data){
				return ($data->priority == 1) ? 'да' : 'нет' ;
			}
			]
            ],
    ]) ?>

</div>
