<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\admin\models\Category;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Photo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="photo-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
	
	<?php
    $categories = ArrayHelper::map(Category::find()->all(), 'id', 'ctitle');
    echo $form->field($model, 'id_category')->dropDownList($categories, ['prompt' => 'Не выбрано']);
    ?>

    <?= $form->field($model, 'ptitle')->textInput(['maxlength' => true]) ?>
	
    <br><br>	
	<?php
    if(isset($model->img_path) && file_exists(Yii::getAlias('@webroot/uploads/images/', $model->img_path)))
    { 
        echo Html::img('@web/uploads/images/' . $model->img_path, ['style'=>'max-width:50%']);
    } 
    ?>
    <br><br><br><br>
	
	<?= $form->field($uploadForm, 'imageFile')->fileInput()->label('Фото в формате .jpg, .jpeg, .png') ?>
	
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
