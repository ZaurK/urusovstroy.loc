<?php

namespace app\modules\admin\models;

use Yii;
use app\modules\admin\models\Category;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "photo".
 *
 * @property int $id
 * @property int $id_category
 * @property string $ptitle
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
			[['ptitle', 'img_path'], 'string', 'max' => 256],
			[['id_category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['id_category' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_category' => 'Категория',
            'ptitle' => 'Название',
			'img_path' => 'Фото',
        ];
    }
	
	/**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'id_category']);
    }
	
    public function getCatName()
    {
        // Выбираем 
    $cattitle = Category::find()
        ->select(['id', 'ctitle'])
		->where(['id' => $this->id_category])
        ->one();
    return $cattitle ? $cattitle->ctitle : 'Категория не указана';
    }
	
	public static function getCatsList()
{
    // Выбираем 
    $parents = Category::find()
        ->select(['id', 'ctitle'])
        ->all();
 
    return ArrayHelper::map($parents, 'id', 'ctitle');
}
	
}
