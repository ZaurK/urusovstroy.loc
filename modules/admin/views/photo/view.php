<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Photo */

$this->title = $model->ptitle;
$this->params['breadcrumbs'][] = ['label' => 'Фото', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photo-view">

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
            [
                'attribute'=>'category.ctitle',
                'label'=>'Категория',                                
            ],
            'ptitle',
			[
			'label' => 'Фото',
            'format' => 'raw',
            'value' => function($data){
                return Html::img('@web/uploads/images/' .$data->img_path, [
                    'alt'=>'',
                    'style' => 'width:50%;'
                ]);
			},
			 'contentOptions'=>['style'=>'max-width: 200px;'] 
            ],
        ],
    ]) ?>

</div>
