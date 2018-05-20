<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "video".
 *
 * @property int $id
 * @property string $vtitle
 * @property string $video_path
 */
class Video extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'video';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vtitle', 'video_path'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vtitle' => 'Название',
            'video_path' => 'Ссылка',
        ];
    }
}
