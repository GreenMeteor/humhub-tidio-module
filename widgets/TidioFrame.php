<?php

namespace humhub\modules\tidio\widgets;

use Yii;
use yii\helpers\Url;
use humhub\libs\Html;
use humhub\components\Widget;

/**
 *
 * @author Felli
 */
class TidioFrame extends Widget
{
    public $contentContainer;
    /**
     * @inheritdoc
     */
    public function run()
    {
        $url = Yii::$app->getModule('tidio')->getServerUrl() . '';
        return $this->render('tidioframe', ['tidioUrl' => $url]);
    }
}
