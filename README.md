# themeshop
Shop theme for Yii2 Advanced
install:
composer require kulishp/themeshop "^1.0.1"

1 - file @vendor/kulishp/themeshop/shop/assete/AssetShop paste to @frontend/assets

2 - paste in file @frontend/config/main.php 

'components' => [
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@vendor/kulishp/themeshop/themes/shop/views'
                ],
            ],
        ],
