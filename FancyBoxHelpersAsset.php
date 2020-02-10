<?php
/**
 * Created by mulat.
 * User: mulat
 * Date: 07.05.2015
 * Time: 13:17
 */
namespace saritasa\fancybox;

use yii\web\AssetBundle;

class FancyBoxHelpersAsset extends AssetBundle
{
    public $sourcePath = '@bower/fancybox';

    public $js = [
        'source/helpers/jquery.fancybox-buttons.js',
        'source/helpers/jquery.fancybox-media.js',
        'source/helpers/jquery.fancybox-thumbs.js'
    ];

    public $css = [
        ['source/helpers/jquery.fancybox-buttons.css','media'=>'screen'],
        ['source/helpers/jquery.fancybox-thumbs.css','media'=>'screen']
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'saritasa\fancybox\FancyBoxAsset',
    ];

}
