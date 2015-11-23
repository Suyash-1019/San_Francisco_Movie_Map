<?php


namespace app\assets;

use yii\web\AssetBundle;


class BackboneAsset extends AssetBundle
{
    public $sourcePath = '@bower/backbone';
    public $js = [
        'backbone.js',
    ];
    public $depends = [
        'app\assets\UnderscoreAsset',
    ];
}
