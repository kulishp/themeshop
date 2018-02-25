<?php
namespace kulishp\themeshop\shop\assets;
use yii\web\AssetBundle;
class AssetShop extends AssetBundle
{
    public $sourcePath = '@vendor/kulishp/shop-theme-yii2/themes/shop';
    public $css = [
        'css/Shop.min.css',
    ];
    public $js = [
        'js/adminlte.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
    ];
}
