<?php

namespace humhub\modules\tidio\models;

use Yii;

/**
 * ConfigureForm defines the configurable fields.
 */
class ConfigureForm extends \yii\base\Model
{

    public $serverUrl;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['serverUrl', 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'serverUrl' => Yii::t('TidioModule.base', 'Tidio Widget URL:'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'serverUrl' => Yii::t('TidioModule.base', 'e.g. //code.tidio.co/{id}.js'),
        ];
    }

    public function loadSettings()
    {
        $this->serverUrl = Yii::$app->getModule('tidio')->settings->get('serverUrl');

        return true;
    }

    public function save()
    {
        Yii::$app->getModule('tidio')->settings->set('serverUrl', $this->serverUrl);

        return true;
    }

}
