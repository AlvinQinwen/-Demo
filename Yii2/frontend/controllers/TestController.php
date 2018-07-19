<?php
/**
 * Created by PhpStorm.
 * User: 小王同学
 * Date: 2018/7/16
 * Time: 17:07
 */
namespace frontend\controllers;

use Yii;
use common\models\Msg;
use yii\web\Controller;

class TestController extends Controller{
    public $layout = false;
    public function actionIndex(){
    $msgs = Msg::find()->ALL();
    return $this->render('index',[
        'msgs' => $msgs
    ]);
    }
    public function actionAdd(){
        if (Yii::$app->request->isPost){
            $name = Yii::$app->request->post('name');
            $content = Yii::$app->request->post('content');
            $msg = new Msg;
            $msg->name = $name;
            $msg->content = $content;
            $msg->create_at = $msg->update_at = time();
            $reuslt = $msg->save();
            if($result){
                $this->redirect(['/msg']);
            }
        }
    }
}
