<?php

use humhub\commands\CronController;

return [
    'id' => 'deleteposts',
    'class' => 'humhub\modules\deleteposts\Module',
    'namespace' => 'humhub\modules\deleteposts',
    'urlManagerRules' => [
        '/page' => '/deleteposts/page/view',
    ],
    'events' => [
        [
            'class' => CronController::className(),
            'event' => CronController::EVENT_ON_DAILY_RUN,
            'callback' => [
                'humhub\modules\deleteposts\Events',
                'onCronRun'
            ]
        ],
    ],
];
?>