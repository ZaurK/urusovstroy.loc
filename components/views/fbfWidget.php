<?php
 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
 
?>
 
<?php if (Yii::$app->session->hasFlash('contactFormSubmitted')) { ?>
 
    <?php
    $this->registerJs(
        "$('#myModalSendOk').modal('show');",
        yii\web\View::POS_READY
    );
    ?>
 
    <!-- Modal -->
    <div class="modal fade" id="myModalSendOk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Письмо</h4>
                </div>
                <div class="modal-body">
                    <p>Спасибо за письмо! Мы свяжемся с Вами в ближайшее время.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
 
<?php } ?>
 
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
 
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
 
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Оставьте заявку и наш специалист свяжется с Вами в ближайшее время</h4>
            </div>
            <div class="modal-body">
 
                    <?= $form->field($model, 'name') ?>
					
                    <?= $form->field($model, 'phone') ?> 

					<?php $items = [
                        'Технический дизайн-проект' => 'Технический дизайн-проект',
                        'Полный дизайн-проект'=>'Полный дизайн-проект',
                        'VIP дизайн-проект'=>'VIP дизайн-проект',
                        ];
                        
	                ?>
                    <?= $form->field($model, 'service')->dropDownList($items) ?>					
 
                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
 
                  
 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
            </div>
 
            <?php ActiveForm::end(); ?>
 
        </div>
    </div>
</div>