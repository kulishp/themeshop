<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main frontend application asset bundle.
 */
class AssetShop extends AssetBundle
{

    public $sourcePath = '@vendor/kulishp/themeshop/web';
    public $baseUrl = '@web';
    public $css = [
        'css/design.css',
        'css/member.css',
        'css/font-awesome.min.css',
    ];
    public $js = [
        'js/jquery-2.1.1.min.js',
        'js/bootstrap.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public $jsOptions = array(
        'position' => View::POS_HEAD
    );
}