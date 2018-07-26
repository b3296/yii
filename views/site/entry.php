<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/7/20
 * Time: 10:16
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data','method'=>'post']]);
//echo $form->field($model,'name');
//echo $form->field($model,'email');
//// 一个密码输入框
//echo $form->field($model, 'password')->passwordInput();
//// 增加一个提示标签
//echo  $form->field($model, 'username')->textInput()->hint('Please enter your name')->label('Name');
//// 创建一个 HTML5 邮箱输入框
//echo $form->field($model, 'email')->input('email');
// 允许多个文件被上传：
echo $form->field($model, 'uploadFile[]')->fileInput(['multiple'=>true]);
echo $form->field($model, 'uploadFile[]')->fileInput(['multiple'=>true]);
echo $form->field($model, 'uploadFile[]')->fileInput(['multiple'=>true]);
echo $form->field($model, 'uploadFile[]')->fileInput(['multiple'=>true]);

// 允许进行选择多个项目：
echo $form->field($model, 'items[]')->checkboxList(['a' => 'Item A', 'b' => 'Item B', 'c' => 'Item C']);
echo Html::submitButton('submit',['class'=>'btn btn-primary']);
ActiveForm::end();
