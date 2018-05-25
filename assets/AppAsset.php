<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
	    'css/montserrat.css',
        'css/animate.css',
        'css/icomoon.css',
        'css/bootstrap.css',
        'css/magnific-popup.css',
        'css/flexslider.css',
        'css/owl.carousel.css',
        'css/owl.theme.css',
        'css/style.css',
        
    ];
    public $js = [
	    'js/modernizr-2.6.2.min.js',
	    'js/jquery.easing.1.3.js',
	    'js/bootstrap.min.js',
	    'js/jquery.waypoints.min.js',
	    //'js/jquery.stellar.min.js',
	    'js/jquery.flexslider-min.js',
	    'js/owl.carousel.js',
	    //'js/jquery.magnific-popup.min.js',
	    //'js/magnific-popup-options.js',
	    'js/main.js',
	    'js/jsscripts.js',
	    'js/scroll.js',
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
