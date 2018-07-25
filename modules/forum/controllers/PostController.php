<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/7/23
 * Time: 16:15
 */

namespace app\modules\forum\controllers;

use yii\web\Controller;

class PostController extends Controller
{
    public function actionIndex()
    {
        echo "ok";
    }
    public function actionTest()
    {
        $request = \Yii::$app->request;
        switch (true){
            case $request->isAjax:
                echo "it is ajax<br>";
                break;
            case $request->isGet:
                echo "it is get<br>";
                break;
            case $request->isPost:
                echo "it is post<br>";
                break;
            case true :
                break;
        }
        echo '<hr>';
        echo 'this url is '.$request->url; echo '<br>';
        echo 'this absoluteUrl is '.$request->absoluteUrl;echo '<br>';
        echo 'this hostInfo is '.$request->hostInfo;echo '<br>';
        echo 'this pathInfo is '.$request->pathInfo;echo '<br>';
        echo 'this queryString is '.$request->queryString;echo '<br>';
        echo 'this baseUrl is '.$request->baseUrl;echo '<br>';
        echo 'this scriptUrl is '.$request->scriptUrl;echo '<br>';
        echo 'this serverName is '.$request->serverName;echo '<br>';
        echo 'this serverPort is '.$request->serverPort;echo '<br>';
        echo '<hr>';
        $headers = $request->headers;
        //var_export($headers);
        $userHost = $request->userHost;
        $userIP = $request->userIP;
        echo $userHost.'<br>';
        echo $userIP.'<br>';
        echo '<hr>';
        $cookies = $request->cookies;
        //print_r($cookies);
        //print_r($cookies->getValue('_csrf'));
//        if (($cookie = $cookies->get('_csrf')) !== null) {
//            $_csrf = $cookie->value;
//        }
//        print($_csrf);
        $cookies = \Yii::$app->response->cookies;
        $cookies->add(new \yii\web\Cookie([
            'name'=>'add',
            'value'=>'addValue'
        ]));
        \Yii::$app->response->format = \Yii\web\Response::FORMAT_JSON;
        return [
            'message'=>'哎呦 不错哟',
            'code'=>'100'
        ];
    }
}