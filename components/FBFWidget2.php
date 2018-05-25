<?php
 
namespace app\components;
 
use Yii;
use yii\base\Widget;
use app\models\ContactForm2;
 
class FBFWidget2 extends Widget
{
 
    public function run()
    {
        $model = new ContactForm2();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
        }
        return $this->render('fbfWidget2', [
            'model' => $model,
        ]);
    }
 
}