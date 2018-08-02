<?php

namespace humhub\modules\deleteposts\controllers;

use Yii;
use humhub\models\Setting;

class ConfigController extends \humhub\modules\admin\components\Controller
{

    public function actionIndex()
    {
        $model = new \humhub\modules\deleteposts\models\deletepostsConfigureForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Setting::Set('daysOfStore', $model->days, 'deleteposts');
        }
        
        $model->days = Setting::Get('daysOfStore', 'deleteposts');

        return $this->render('index', ['model' => $model]);
    }

}
