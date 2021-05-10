<?php
namespace common\modules\menu\components;

use frontend\components\View;
use oks\langs\models\Langs;
use Yii;
use common\modules\menu\components\MenuRender;
use yii\helpers\Html;

class FooterMenu extends MenuRender{


    public function beforeRenderMenu()
    {
        echo '';
    }

    public function afterRenderMenu()
    {
        echo '';
    }

    public function beginRenderItem()
    {
        if($this->has_child):
            echo '<li class="parent_block_list"><a href="#">'.$this->item->title.'</a>';
        else:
            echo '<li><a href="'.$this->item->url.'">'.$this->item->title.'</a>';
        endif;
    }

    public function endRenderItem()
    {
        echo "</li>";
    }

    public function beforeRenderItemChilds()
    {
        echo '';
    }

    public function beginRenderItemChild()
    {
        echo '';
    }

    public function endRenderItemChild()
    {

    }

    public function afterRenderItemChilds()
    {
        echo '';

    }

}