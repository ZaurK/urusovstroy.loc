<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm3 extends Model
{
    public $name;
	public $email;
	public $phone;
    public $body;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'phone'], 'required'],
			[['name', 'phone', 'body'], 'string'],
            // verifyCode needs to be entered correctly
            //['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            //'verifyCode' => 'Verification Code',
			'name' => 'Ваше имя',
            'phone' => 'Телефон для связи',
			'body' => 'Комментарий (если нужно)',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose('emailfromguest3', ['phonefrom' => $this->phone, 'bodyfrom'=>$this->body])
                ->setSubject('Новый заказ звонка с сайта компании URUSOV-STROY')
				->setTo($email)
                ->setFrom(['oc.mcdir@yandex.ru' => $this->name])
				->setReplyTo($this->email)
                //->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();
            return true;
        }
        return false;
    }
	
}
