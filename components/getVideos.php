<?php
namespace app\components;
use yii\helpers\Html;

use app\modules\admin\models\Video;

class getVideos
{
	public static function getLinks()
	{
		$rows = Video::find()
		    ->orderBy(['priority'=>SORT_DESC])
		    ->all();
		
		echo '<div class="owl-carousel owl-theme">';
		foreach($rows as $row){
			echo '<div class="item-video">';
			echo '<a class="owl-video" href="'.$row['video_path'].'"></a>';
			echo '</div>';
		}
		echo '</div>';
	}
	
	
	
}