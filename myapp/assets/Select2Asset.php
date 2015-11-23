<?php

namespace app\assets;

use yii\web\AssetBundle;


class Select2Asset extends AssetBundle
{
    public $sourcePath = '@bower/select2-dist';
    public $css = [
        'select2.css',
        'select2-bootstrap.css'
    ];
    public $js = [
        'select2.min.js',
    ];
}
