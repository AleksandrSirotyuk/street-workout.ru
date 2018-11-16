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
        'css/bootstrap.min.css',
        'css/main.css',
        'libs/OwlCarousel2-2.2.1/dist/assets/owl.carousel.min.css',
        'libs/OwlCarousel2-2.2.1/dist/assets/owl.theme.default.css',
    ];
    public $js = [
        'js/vendor/bootstrap.min.js',
//        'js/vendor/jquery.matchHeight-min.js',
//        'js/vendor/jquery-1.11.3.min.js',
        'js/scripts.js',
        'libs/OwlCarousel2-2.2.1/dist/owl.carousel.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
