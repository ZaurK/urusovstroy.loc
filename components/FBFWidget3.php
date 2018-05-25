<?php
 
namespace app\components;
 
use Yii;
use yii\base\Widget;
use app\models\ContactForm3;
 
class FBFWidget3 extends Widget
{
 
    public function run()
    {
        $model = new ContactForm3();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
        }
        return $this->render('fbfWidget3', [
            'model' => $model,
        ]);
    }
 
}