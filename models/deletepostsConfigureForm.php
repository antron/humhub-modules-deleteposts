<?php

namespace humhub\modules\deleteposts\models;

class deletepostsConfigureForm extends \yii\base\Model
{
    
    public $days;

    /**
     * Declares the validation rules.
     */
    public function rules()
    {
        return array(
            array('days', 'required'),
            array('days', 'integer', 'min' => 0, 'max' => 1000),
        );
    }

    /**
     * Declares customized attribute labels.
     * If not declared here, an attribute would have a label that is
     * the same as its name with the first letter in upper case.
     */
    public function attributeLabels()
    {
        return array(
            'days' => '保存日数',
        );
    }

}
