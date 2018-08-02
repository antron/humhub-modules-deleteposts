<?php

use yii\helpers\Html;
use yii\helpers\Url;
use humhub\compat\CActiveForm;
?>

<div class="panel panel-default">
    <div class="panel-heading">設定画面</div>
    <div class="panel-body">

        <?php $form = CActiveForm::begin(); ?>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'days'); ?>
            <?php echo $form->textField($model, 'days', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'days'); ?>
        </div>

        <hr>

        <?php echo Html::submitButton('更新する', array('class' => 'btn btn-primary')); ?>
        <a class="btn btn-default" href="<?php echo Url::to(['/admin/module']); ?>"><?php echo '戻る'; ?></a>

        <?php CActiveForm::end(); ?>

    </div>
</div>
