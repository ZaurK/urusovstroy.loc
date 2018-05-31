<?php
namespace app\components;
use yii\helpers\Html;

use app\models\Photo;

class getPhotos 
{
/**
	public static function getLinks()
	{
		$rows = Photo::find()->all();
		
		echo '<div class="owl-carousel owl-theme">';
		foreach($rows as $row){
			echo '<div class="item">';
			echo $img = Html::img('@web/uploads/images/' . $row['img_path'], ['class'=>'']);
			echo '</div>';
		}
		echo '</div>';
	}
	*/
	public static function getLinks()
	{
		$rows = Photo::find()
		         ->orderBy(['priority'=>SORT_DESC])
				 ->all();
		
		echo '<div class="owl-carousel owl-theme">';
		foreach($rows as $row){
			echo '<div class="item">';
			echo Html::a(Html::img("@web/uploads/images/".$row['img_path']), 
			 "@web/uploads/images/".$row['img_path'], 
			 ['rel'=>'fancybox', 'title'=>$row['ptitle']]);
			echo '</div>';
		}
		echo '</div>';
	}
	
	
								
	
}