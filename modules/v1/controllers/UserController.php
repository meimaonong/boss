<?php

namespace app\modules\v1\controllers;

use yii\filters\VerbFilter;

use app\controllers\BaseController;
use app\models\User;


class UserController extends BaseController
{

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    '*' => ['post'],
                ],
            ],
        ];
    }
    
    // 微信注册
    public function actionWxRegister()
    {
        // $user = new User();
        // $user->tel = '13388998888';
        // $user->email = '13388998888@qq.com';
        // $user->salt = 'sd';
        // $user->password = 'dfgd';
        // $flag = $user->save();
        // print_r($flag);
    }


    public function actionGetUsers()
    {
        $user_list = User::find()
            ->select(['user_id', 'tel'])
            ->asArray()
            ->all();
        
        $res = [
        	'code' => 0,
        	'msg'=> '',
        	'data' => $user_list
        ];

        return $res;
    }

    public function actionGetUser()
    {
        $user = User::find()
            ->where(['user_id'=>2])
            ->asArray()
            ->one();
        // $user->password = '2222222';
        // $user->save();
        $res = [
        	'code' => 0,
        	'msg'=> '',
        	'data' => $user
        ];

        return $res;
    }

}
