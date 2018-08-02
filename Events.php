<?php

namespace humhub\modules\deleteposts;

use Yii;
use humhub\models\Setting;

class Events
{

    public static function onCronRun()
    {
        if (Yii::$app->controller->action->id == 'daily') {

            $days = '-' . Setting::Get('daysOfStore', 'deleteposts') . ' days';

            $kako = date('Y-m-d', strtotime($days, time()));

            $posts = \humhub\modules\post\models\Post::find()
                    ->where(['<', 'created_at', $kako])
                    ->all();

            foreach ($posts as $post) {
                $post->delete();
            }
        }
    }

}
