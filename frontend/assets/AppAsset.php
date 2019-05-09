<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/bootstrap-grid.css',
        'css/icons.css',
        'css/animate.min.css',
        'css/style.css',
        'css/responsive.css',
        'css/chosen.css',
        'css/colors/colors.css',
        //'css/bootstrap.css',
        'css/font-awesome/4.5.0/css/font-awesome.min.css',
    ];
    public $js = [
        'js/jquery.min.js',
        'js/modernizr.js',
        'js/script.js',
        //'js/bootstrap.min.js',
        'js/wow.min.js',
        'js/slick.min.js',
        'js/parallax.js',
        'js/select-chosen.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
