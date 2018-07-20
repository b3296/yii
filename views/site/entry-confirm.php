<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/7/20
 * Time: 10:13
 */

use yii\helpers\Html;
?>
<p>you hane entered the following information :</p>
<ul>
    <li><label>Name</label>:<?=Html::encode($model->name)?></li>
    <li><label>Email</label>:<?=Html::encode($model->email)?></li>
</ul>
