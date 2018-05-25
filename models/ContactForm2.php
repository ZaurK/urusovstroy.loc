<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm2 extends Model
{
    public $name;
    public $email;
	public $phone;
	public $service;
    public $subject;
    public $body;
    public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'phone', 'service'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
			[['name', 'phone', 'service', 'body'], 'string'],
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
            'email' => 'Email',
            'phone' => 'Телефон для связи',
            'service' => 'Тип дизайн-проекта',
            //'subject' => 'Тема',
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
            Yii::$app->mailer->compose('emailfromguest', ['service' => $this->service, 'phonefrom' => $this->phone, 'bodyfrom'=>$this->body])
                ->setSubject('Новая заявка с сайта компании URUSOV-STROY')
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
