<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/7/20
 * Time: 9:58
 */

namespace app\models;

#use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;
    public function rules()
    {
        return [
            [['name','email'],'required'],
            ['email','email']
        ];

    }

}