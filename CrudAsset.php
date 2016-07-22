<?php 

namespace shmilyzxt\kartikcrud;

use yii\web\AssetBundle;

/**
 * 资源包
 * @author shmilyzxt <49783121@qq.com>
 * @since 1.0
 */
class CrudAsset extends AssetBundle
{
    public $sourcePath = '@shmilyzxt/kartikcrud/assets';

    public $css = [
        'ajaxcrud.css'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'kartik\grid\GridViewAsset',
        'kartik\detail\DetailViewAsset'
    ];
    
   public function init() {
       $this->js = [
           'ModalRemote.js',
           'ajaxcrud.js',
       ];

       parent::init();
   }
}
