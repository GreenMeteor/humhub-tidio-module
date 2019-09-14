<?php

namespace humhub\modules\tidio;

return [
    'id' => 'tidio',
    'class' => 'humhub\modules\tidio\Module',
    'namespace' => 'humhub\modules\tidio',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::class,
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\tidio\Events',
                'addTidioFrame'
            ]
        ],
        [
            'class' => \humhub\modules\space\widgets\Sidebar::class,
            'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\tidio\Events',
                'addTidioFrame'
            ]
        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::class,
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\tidio\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>
