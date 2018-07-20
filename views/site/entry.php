<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/7/20
 * Time: 10:16
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin();
echo $form->field($model,'name');
echo $form->field($model,'email');
echo Html::submitButton('submit',['class'=>'btn btn-primary']);
ActiveForm::end();
