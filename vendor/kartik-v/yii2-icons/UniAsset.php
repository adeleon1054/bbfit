<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014
 * @package yii2-icons
 * @version 1.3.0
 */

namespace kartik\icons;

/**
 * Asset bundle for Web Hosting Hub Glyphs
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class UniAsset extends \kartik\base\AssetBundle
{

    public function init()
    {
        $this->setSourcePath(__DIR__ . '/lib/uni');
        $this->setupAssets('css', ['css/kv-unicode-icons']);
        parent::init();
    }

}