<?php

namespace frontend\assets;

use yii\web\AssetBundle;

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
    ];
    public $js = [

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}