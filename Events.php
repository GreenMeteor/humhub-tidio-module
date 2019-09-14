<?php
namespace humhub\modules\tidio;

use Yii;
use yii\helpers\Url;
use humhub\modules\tidio\widgets\TidioFrame;
use humhub\models\Setting;

class Events extends \yii\base\BaseObject
{

    public static function onAdminMenuInit(\yii\base\Event $event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }

        $event->sender->addItem([
            'label' => Yii::t('TidioModule.base', 'Tidio Settings'),
            'url' => Url::toRoute('/tidio/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fa fa-commenting"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'tidio' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

    public static function addTidioFrame($event)
    {

        $event->sender->view->registerAssetBundle(Assets::class);
        $event->sender->addWidget(TidioFrame::class, [], [
            'sortOrder' => Setting::Get('timeout', 'tidio')
        ]);
    }
}
