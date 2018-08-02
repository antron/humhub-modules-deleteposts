<?php
/**
 * Module.
 */

namespace humhub\modules\deleteposts;

use yii\helpers\Url;
use humhub\models\Setting;
/**
 * Module.
 */
class Module extends \humhub\components\Module
{

    public function getConfigUrl()
    {
        return Url::to(['/deleteposts/config/index']);
    }

    public function enable()
    {
        parent::enable();

        Setting::Set('daysOfStore', 30, 'deleteposts');
    }

}

?>