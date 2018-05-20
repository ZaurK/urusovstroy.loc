<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Photo */

$this->title = 'Редактировать: ' . $model->ptitle;
$this->params['breadcrumbs'][] = ['label' => 'Фото', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ptitle, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="photo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
		'uploadForm' => $uploadForm,
    ]) ?>

</div>
