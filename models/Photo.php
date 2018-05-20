<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "photo".
 *
 * @property int $id
 * @property int $id_category
 * @property string $ptitle
 * @property string $img_path
 */
class Photo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'photo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_category'], 'integer'],
            [['ptitle', 'img_path'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_category' => 'Id Category',
            'ptitle' => 'Ptitle',
            'img_path' => 'Img Path',
        ];
    }
}
